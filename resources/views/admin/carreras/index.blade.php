<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="admin-carreras"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="carreras"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <h1>Carreras</h1>
            @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <span class="alert-icon align-middle">
                    <span class="material-icons text-md">
                        thumb_up_off_alt
                    </span>
                </span>
                <span class="alert-text"><strong>Success!</strong> {{ session('status') }}!</span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div
                                class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 d-flex align-items-center justify-content-between">
                                <h6 class="text-white text-capitalize ps-3">Lista de Carreras</h6> <a
                                    class="btn bg-gradient-dark text-white text-capitalize me-3"
                                    href="{{route('admin-carrera-create')}}">Nueva
                                    carrera</a>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive px-2">
                                <table class=" align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">

                                                Nombre</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Descripcion</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Materias</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($carreras as $carrera)
                                        <tr>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{$carrera->name}}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{$carrera->description}}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">Sin materias adjuntas</p>
                                            </td>
                                            <td class="align-middle">
                                                <a href="./admin-carrera-edit/{{$carrera->id}}"
                                                    class="text-secondary font-weight-bold text-xs mx-2"
                                                    data-toggle="tooltip" data-original-title="Editar Estudiante">
                                                    Edit
                                                </a>
                                                <a href="./admin-carrera-delete/{{$carrera->id}}"
                                                    class="text-secondary font-weight-bold text-xs mx-2"
                                                    data-toggle="tooltip" data-original-title="Borrar Estudiante">
                                                    Borrar
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <x-plugins></x-plugins>

</x-layout>