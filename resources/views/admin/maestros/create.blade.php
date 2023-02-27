<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="admin-alumnos"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Alumnos - Crear"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <form method="POST" action="{{route('admin-alumno-create')}}">
                @csrf
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="dni" class="form-label">DNI</label>
                        <input type="text" class="form-control border ps-2" name="dni" placeholder="Ingresa la matricula" required>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="email" class="form-label">Correo Electronico</label>
                        <input type="email" class="form-control border ps-2" name="email" placeholder="Ingresa email" required>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="first_name" class="form-label">Nombre(s)</label>
                        <input type="text" class="form-control border ps-2" name="first_name" placeholder="Ingresa nombre(s)" required>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="last_name" class="form-label">Apellido(s)</label>
                        <input type="text" class="form-control border ps-2" name="last_name" placeholder="Ingresa la apellido(s)" required>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-4">
                        <label for="address" class="form-label">Dirección</label>
                        <input type="text" class="form-control border ps-2" name="address" placeholder="Ingresa la dirección" required>
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="address" class="form-label">Selecciona Carrera</label>
                        <select class="form-select px-2" aria-label="Selecciona Carrera" name="carrera_id">

                            @foreach ($carreras as $carrera)
                            @if ($carrera->id == 1)
                            <option value="1" selected>Sin Carrera</option>
                            @else
                            <option value="{{$carrera->id}}">{{$carrera->name}}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="birth_date" class="form-label">Fecha de nacimiento</label>
                        <input type="date" class="form-control border px-2" name="birth_date" placeholder="Ingresa fecha de nacimiento" required>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Crear Alumno</button>



            </form>
        </div>
    </main>

    <x-plugins></x-plugins>

</x-layout>