<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="admin-carreras"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Carrera - Actualizar"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">

            <h1>Actualizar Registro </h1>
            <h4>Registro # {{$carrera->id}}</h4>


            <form method="POST" action="{{route('admin-carrera-edit')}}">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{$carrera->id}}">

                <div class="row">
                    <div class="mb-3 col-md-12">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control border ps-2" name="name" placeholder="Ingresa nombre de materia" value="{{$carrera->name}}" required>
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="description" class="form-label">Descripcion</label>
                        <textarea type="email" class="form-control border ps-2" name="description" placeholder="Ingresa descripcion" required>{{$carrera->description}}</textarea>
                    </div>
                </div>

                <button class="btn btn-primary" type="submit">Actualizar carrera</button>



            </form>
        </div>
    </main>

    <x-plugins></x-plugins>

</x-layout>