@props(['activePage'])

<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0 d-flex text-wrap align-items-center" href=" {{ route('dashboard') }} ">
            <img src="{{ asset('assets') }}/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-2 font-weight-bold text-white">Universidad</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">
        Perfil - -
        @role("admin")
        Administrador
        @endrole
        @role("teacher")
        Maestro
        @endrole
        @role("student")
        Estudiante
        @endrole
    </h6>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            @role('admin')
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Menu Administración
                </h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'admin-permisos' ? 'active bg-gradient-primary' : '' }} " href="{{ route('admin-permisos') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1.2rem;" class="bi bi-person-fill-gear ps-2 pe-2 text-center"></i>
                    </div>
                    <span class="nav-link-text ms-1">Permisos</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'admin-maestros' ? 'active bg-gradient-primary' : '' }} " href="{{ route('admin-maestros') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1.2rem;" class="bi bi-person-workspace ps-2 pe-2 text-center"></i>
                    </div>
                    <span class="nav-link-text ms-1">Maestros</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'admin-alumnos' ? 'active bg-gradient-primary' : '' }} " href="{{ route('admin-alumnos') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1.2rem;" class="bi bi-mortarboard-fill ps-2 pe-2 text-center"></i>
                    </div>
                    <span class="nav-link-text ms-1">Alumnos</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'admin-clases' ? 'active bg-gradient-primary' : '' }} " href="{{ route('admin-clases') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1.2rem;" class="bi bi-easel2 ps-2 pe-2 text-center"></i>
                    </div>
                    <span class="nav-link-text ms-1">Clases</span>
                </a>
            </li>
            @endrole
            @role('teacher')
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Menu Maestros
                </h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'maestro-alumno' ? 'active bg-gradient-primary' : '' }} " href="{{ route('maestro-alumno') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1.2rem;" class="bi bi-mortarboard-fill ps-2 pe-2 text-center"></i>
                    </div>
                    <span class="nav-link-text ms-1">Alumnos</span>
                </a>
            </li>
            @endrole
            @role('student')
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Menu Alumnos
                </h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'alumno-calificaciones' ? 'active bg-gradient-primary' : '' }} " href="{{ route('alumno-calificaciones') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1.2rem;" class="bi bi-file-earmark-check ps-2 pe-2 text-center"></i>
                    </div>
                    <span class="nav-link-text ms-1">Ver Calificaciones</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ $activePage == 'alumno-clases' ? 'active bg-gradient-primary' : '' }} " href="{{ route('alumno-clases') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1.2rem;" class="bi bi-easel ps-2 pe-2 text-center"></i>
                    </div>
                    <span class="nav-link-text ms-1">Administra tus Clases</span>
                </a>
            </li>
            @endrole
        </ul>
    </div>
</aside>