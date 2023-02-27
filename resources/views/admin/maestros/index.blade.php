<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="admin-maestros"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Maestros"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <h1>maestros</h1>
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
                                <h6 class="text-white text-capitalize ps-3">Lista de Maestros</h6> <a
                                    class="btn bg-gradient-dark text-white text-capitalize me-3"
                                    href="{{route('admin-maestro-create')}}">Nuevo
                                    Maestro</a>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Nombre</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Clase(s)</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Direccion</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Fec. de Nacimiento</th>
                                            <th class="text-secondary opacity-7"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($maestros as $maestro)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="{{ asset('assets') }}/img/team-2.jpg"
                                                            class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{$maestro->first_name}}
                                                            {{$maestro->last_name}}
                                                        </h6>
                                                        <p class="text-xs text-secondary mb-0">{{$maestro->user->email}}
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center text-sm">

                                                <span class="badge badge-sm ">
                                                    PARA ASIGNAR
                                                </span>

                                            </td>
                                            <td class="align-middle text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{$maestro->address}}</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{$maestro->birth_date}}</span>
                                            </td>
                                            <td class="align-middle">
                                                <a href="./admin-maestro-edit/{{$maestro->id}}"
                                                    class="text-secondary font-weight-bold text-xs mx-2"
                                                    data-toggle="tooltip" data-original-title="Editar Maestro">
                                                    Edit
                                                </a>
                                                <a href="./admin-maestro-delete/{{$maestro->id}}"
                                                    class="text-secondary font-weight-bold text-xs mx-2"
                                                    data-toggle="tooltip" data-original-title="Borrar Maestro">
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