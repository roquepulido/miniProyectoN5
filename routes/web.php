<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return view('welcome');
});

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\CarrerasController;

Route::get('/', function () {
	return redirect('sign-in');
})->middleware('guest');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('sign-up', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('sign-up', [RegisterController::class, 'store'])->middleware('guest');
Route::get('sign-in', [SessionsController::class, 'create'])->middleware('guest')->name('login');
Route::post('sign-in', [SessionsController::class, 'store'])->middleware('guest');
Route::post('verify', [SessionsController::class, 'show'])->middleware('guest');
Route::post('reset-password', [SessionsController::class, 'update'])->middleware('guest')->name('password.update');
Route::get('verify', function () {
	return view('sessions.password.verify');
})->middleware('guest')->name('verify');
Route::get('/reset-password/{token}', function ($token) {
	return view('sessions.password.reset', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('sign-out', [SessionsController::class, 'destroy'])->middleware('auth')->name('logout');
Route::get('profile', [ProfileController::class, 'create'])->middleware('auth')->name('profile');
Route::post('user-profile', [ProfileController::class, 'update'])->middleware('auth');
Route::group(['middleware' => 'auth'], function () {
	Route::get('billing', function () {
		return view('pages.billing');
	})->name('billing');
	Route::get('tables', function () {
		return view('pages.tables');
	})->name('tables');
	Route::get('rtl', function () {
		return view('pages.rtl');
	})->name('rtl');
	Route::get('virtual-reality', function () {
		return view('pages.virtual-reality');
	})->name('virtual-reality');
	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');
	Route::get('static-sign-in', function () {
		return view('pages.static-sign-in');
	})->name('static-sign-in');
	Route::get('static-sign-up', function () {
		return view('pages.static-sign-up');
	})->name('static-sign-up');
	Route::get('user-management', function () {
		return view('pages.laravel-examples.user-management');
	})->name('user-management');
	Route::get('user-profile', function () {
		return view('pages.laravel-examples.user-profile');
	})->name('user-profile');
});

Route::group(['middleware' => ['auth', 'role:admin']], function () {

	// rutas para edicion de estudiantes
	Route::controller(StudentsController::class)->group(function () {
		Route::get("/admin-alumnos", 'index')->name('admin-alumnos');
		Route::get("/admin-alumno/create", 'create')->name('admin-alumno-create');
		Route::post("/admin-alumno/create", 'store')->name('admin-alumno-create');
		Route::get("/admin-alumno-edit/{id}", 'show');
		Route::put("/admin-alumno-edit", 'update')->name("admin-alumno-edit");
		Route::get("/admin-alumno-delete/{id}", 'destroy');
	});
	// rutas para edicion de Maestros
	Route::controller(TeachersController::class)->group(function () {
		Route::get("/admin-maestros", 'index')->name('admin-maestros');
		Route::get("/admin-maestro/create", 'create')->name('admin-maestro-create');
		Route::post("/admin-maestro/create", 'store')->name('admin-maestro-create');
		Route::get("/admin-maestro-edit/{id}", 'show');
		Route::put("/admin-maestro-edit", 'update')->name("admin-maestro-edit");
		Route::get("/admin-maestro-delete/{id}", 'destroy');
	});
	// rutas para edicion de Carreras
	Route::controller(CarrerasController::class)->group(function () {
		Route::get("/admin-carreras", 'index')->name('admin-carreras');
		Route::get("/admin-carrera/create", 'create')->name('admin-carrera-create');
		Route::post("/admin-carrera/create", 'store')->name('admin-carrera-create');
		Route::get("/admin-carrera-edit/{id}", 'show');
		Route::put("/admin-carrera-edit", 'update')->name("admin-carrera-edit");
		Route::get("/admin-carrera-delete/{id}", 'destroy');
	});
	Route::get('admin-permisos', function () {
		return view('admin.permisos');
	})->name('admin-permisos');
	// Route::get('admin-maestros', function () {
	// 	return view('admin.maestros');
	// })->name('admin-maestros');
	// Route::get(
	// 	'admin-alumnos',
	// 	"App\Http\Controllers\StudentsController::index"
	// )->name('admin-alumnos');
	Route::get('admin-clases', function () {
		return view('admin.clases');
	})->name('admin-clases');
});

Route::group(['middleware' => ['auth', 'role:teacher']], function () {
	Route::get('maestro-alumno', function () {
		return view('maestros.alumnos');
	})->name('maestro-alumno');
});

Route::group(['middleware' => ['auth', 'role:student']], function () {
	Route::get('alumno-calificaciones', function () {
		return view('estudiantes.calificaciones');
	})->name('alumno-calificaciones');
	Route::get('alumno-clases', function () {
		return view('estudiantes.clases');
	})->name('alumno-clases');
});
