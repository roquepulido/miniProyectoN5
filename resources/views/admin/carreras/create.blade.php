<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="admin-carreras"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Carreras - Crear"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <form method="POST" action="{{route('admin-carrera-create')}}">
                @csrf

                <div class="mb-3 col-md-12">
                    <label for="first_name" class="form-label">Nombre de Carrera</label>
                    <input type="text" class="form-control border ps-2" name="name" placeholder="Ingresa nombre" required>
                </div>
                <div class="mb-3 col-md-12">
                    <label for="last_name" class="form-label">Informacion</label>
                    <textarea class="form-control border ps-2" name="description" placeholder="Ingresa Descripcion de la carrera" required></textarea>
                </div>
        </div>

        <button class="btn btn-primary" type="submit">Crear Carrera</button>



        </form>
        </div>
    </main>

    <x-plugins></x-plugins>

</x-layout>