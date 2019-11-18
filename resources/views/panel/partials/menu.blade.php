<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('panel') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Panel de Control</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('home.landing') }}">
            <i class="fas fa-fw fa-home"></i>
            <span>Página principal</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Contenido
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('panel.instructors.index') }}">
            <i class="fas fa-fw fa-user-tie"></i>
            <span>Instructores</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('panel.workshops.index') }}">
            <i class="fas fa-fw fa-tools"></i>
            <span>Talleres</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('panel.photos.index') }}">
            <i class="fas fa-fw fa-images"></i>
            <span>Galeria</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('panel.events.index') }}">
            <i class="fas fa-fw fa-calendar"></i>
            <span>Eventos</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>