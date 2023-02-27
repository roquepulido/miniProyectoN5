<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="admin-alumnos"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Alumnos - Actualizar"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">

            <h1>Actualizar Registro </h1>
            <h4>Registro # {{$alumno->id}}</h4>


            <form action="{{route('admin-alumno-edit')}}">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{$alumno->id}}">
                <input type="hidden" name="user_id" value="{{$alumno->user_id}}">

                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="dni" class="form-label">DNI</label>
                        <input type="text" class="form-control border ps-2" name="dni"
                            placeholder="Ingresa la matricula" value="{{$alumno->DNI}}" required>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="email" class="form-label">Correo Electronico</label>
                        <input type="email" class="form-control border ps-2" name="email"
                            value="{{$alumno->user->email}}" placeholder="Ingresa email" required>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="first_name" class="form-label">Nombre(s)</label>
                        <input type="text" class="form-control border ps-2" name="first_name"
                            placeholder="Ingresa nombre(s)" value="{{$alumno->first_name}}" required>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="last_name" class="form-label">Apellido(s)</label>
                        <input type="text" class="form-control border ps-2" name="last_name"
                            placeholder="Ingresa la apellido(s)" value="{{$alumno->last_name}}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-4">
                        <label for="address" class="form-label">Dirección</label>
                        <input type="text" class="form-control border ps-2" name="address"
                            placeholder="Ingresa la dirección" value="{{$alumno->address}}" required>
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="address" class="form-label">Selecciona Carrera</label>
                        <select class="form-select px-2" aria-label="Selecciona Carrera" name="carrera_id">
                            @foreach ($carreras as $carrera)
                            <option value="{{$carrera->id}}" {{$carrera->id == $alumno->carrera_id ? "selected":""}}>
                                {{$carrera->name}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="birth_date" class="form-label">Fecha de nacimiento</label>
                        <input type="date" class="form-control border px-2" name="birth_date"
                            placeholder="Ingresa fecha de nacimiento" value="{{$alumno->birth_date}}" required>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Actualizar Alumno</button>



            </form>
        </div>
    </main>

    <x-plugins></x-plugins>

</x-layout>