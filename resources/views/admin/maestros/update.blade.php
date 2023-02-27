<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="admin-maestros"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Maestros - Actualizar"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">

            <h1>Actualizar Registro </h1>
            <h4>Registro # {{$maestro->id}}</h4>


            <form method="POST" action="{{route('admin-maestro-edit')}}">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{$maestro->id}}">
                <input type="hidden" name="user_id" value="{{$maestro->user_id}}">

                <div class="row">

                    <div class="mb-3 col-md-6">
                        <label for="email" class="form-label">Correo Electronico</label>
                        <input type="email" class="form-control border ps-2" name="email"
                            value="{{$maestro->user->email}}" placeholder="Ingresa email" required>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="first_name" class="form-label">Nombre(s)</label>
                        <input type="text" class="form-control border ps-2" name="first_name"
                            placeholder="Ingresa nombre(s)" value="{{$maestro->first_name}}" required>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="last_name" class="form-label">Apellido(s)</label>
                        <input type="text" class="form-control border ps-2" name="last_name"
                            placeholder="Ingresa la apellido(s)" value="{{$maestro->last_name}}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-4">
                        <label for="address" class="form-label">Dirección</label>
                        <input type="text" class="form-control border ps-2" name="address"
                            placeholder="Ingresa la dirección" value="{{$maestro->address}}" required>
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="address" class="form-label">Selecciona Carrera</label>
                        Poner input variable carreras
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="birth_date" class="form-label">Fecha de nacimiento</label>
                        <input type="date" class="form-control border px-2" name="birth_date"
                            placeholder="Ingresa fecha de nacimiento" value="{{$maestro->birth_date}}" required>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Actualizar Maestro</button>



            </form>
        </div>
    </main>

    <x-plugins></x-plugins>

</x-layout>