<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Pipeline</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Project document management">
        <link href="assets/img/favicon.ico" rel="icon" type="image/x-icon">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Gothic+A1" rel="stylesheet">
        <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet" type="text/css" media="all" />
    </head>
    <body>
        <div class="layout layout-nav-top">
            <div class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">
                <a class="navbar-brand" href="index.html">
                    <img alt="Pipeline" src="{{ asset('assets/img/logo.svg') }}" />
                </a>
                <div class="d-flex align-items-center">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="d-block d-lg-none ml-2">
                        <div class="dropdown">
                            <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img alt="Image" src="assets/img/avatar-male-4.jpg" class="avatar" />
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="nav-side-user.html" class="dropdown-item">Profile</a>
                                <a href="utility-account-settings.html" class="dropdown-item">Account Settings</a>
                                <a href="#" class="dropdown-item">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapse navbar-collapse justify-content-between" id="navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('projects') }}">Overview</a>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true" id="nav-dropdown-2">Proyecto</a>
                                <div class="dropdown-menu" aria-labelledby="nav-dropdown-2">
                                    <a class="dropdown-item" href="{{ route('projects') }}">Nuevo proyecto</a>
                                    <a class="dropdown-item" href="pages-utility.html">Utility Pages</a>
                                    <a class="dropdown-item" href="pages-layouts.html">Layouts</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="documentation/index.html">Documentación</a>
                        </li>
                    </ul>
                    <div class="d-lg-flex align-items-center">
                        <form class="form-inline my-lg-0 my-2">
                            <div class="input-group input-group-dark input-group-round">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">search</i>
                                    </span>
                                </div>
                                <input type="search" class="form-control form-control-dark" placeholder="Search" aria-label="Search app" aria-describedby="search-app">
                            </div>
                        </form>
                        <div class="dropdown mx-lg-2">
                            <button class="btn btn-primary btn-block dropdown-toggle" type="button" id="newContentButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Crear nuevo
                            </button>
                            <div class="dropdown-menu" aria-labelledby="newContentButton">
                                <a class="dropdown-item" href="#">Rol</a>
                                <a class="dropdown-item" href="#">Usuario</a>
                                <a class="dropdown-item" href="#">Proyecto</a>
                            </div>
                        </div>
                        <div class="d-none d-lg-block">
                            <div class="dropdown">
                                <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img alt="Image" src="{{ asset('assets/img/avatar-male-4.jpg') }}" class="avatar" />
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="nav-side-user.html" class="dropdown-item">Perfil {{ Auth::user()->name }}</a>
                                    <a href="utility-account-settings.html" class="dropdown-item">Account Settings</a>
                                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Cerrar sesión                                    
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-container">
                <div class="container">
                   <!-- contenido -->
                   @yield('content')
                </div>
            </div>
        </div>

        <script type="text/javascript" src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/moment.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/autosize.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/prism.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/draggable.bundle.legacy.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/swap-animation.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/dropzone.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/list.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/theme.js') }}"></script>

        <script type="text/javascript" src="{{ asset('assets/js/project/app.js') }}"></script>

        <style type="text/css">
            .layout-switcher{ position: fixed; bottom: 0; left: 50%; transform: translateX(-50%) translateY(73px); color: #fff; transition: all .35s ease; background: #343a40; border-radius: .25rem .25rem 0 0; padding: .75rem; z-index: 999; }
            .layout-switcher:not(:hover){ opacity: .95; }
            .layout-switcher:not(:focus){ cursor: pointer; }
            .layout-switcher-head{ font-size: .75rem; font-weight: 600; text-transform: uppercase; }
            .layout-switcher-head i{ font-size: 1.25rem; transition: all .35s ease; }
            .layout-switcher-body{ transition: all .55s ease; opacity: 0; padding-top: .75rem; transform: translateY(24px); text-align: center; }
            .layout-switcher:focus{ opacity: 1; outline: none; transform: translateX(-50%) translateY(0); }
            .layout-switcher:focus .layout-switcher-head i{ transform: rotateZ(180deg); opacity: 0; }
            .layout-switcher:focus .layout-switcher-body{ opacity: 1; transform: translateY(0); }
            .layout-switcher-option{ width: 72px; padding: .25rem; border: 2px solid rgba(255,255,255,0); display: inline-block; border-radius: 4px; transition: all .35s ease; }
            .layout-switcher-option.active{ border-color: #007bff; }
            .layout-switcher-icon{ width: 100%; border-radius: 4px; }
            .layout-switcher-body:hover .layout-switcher-option:not(:hover){ opacity: .5; transform: scale(0.9); }
            @media all and (max-width: 990px){ .layout-switcher{ min-width: 250px; } }
            @media all and (max-width: 767px){ .layout-switcher{ display: none; } }
        </style>
        <div class="layout-switcher" tabindex="1">
            <div class="layout-switcher-head d-flex justify-content-between">
                <span>Select Layout</span>
                <i class="material-icons">arrow_drop_up</i>
            </div>
            <div class="layout-switcher-body">
            </div>
        </div>
    </body>
</html>