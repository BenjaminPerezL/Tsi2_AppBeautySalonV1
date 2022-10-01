<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    @yield('hojas-estilo')
    <title>Document</title>
</head>
<body>
    <div class="container-fluid p-0 ">

        {{-- USER --}}
        <div class="row m-0 " style="background-color: grey"  >
            <div class="col-8" >
                Bienvenido:  <b>{{Auth::user()->nombre}}</b> </div>
            <div class="col-3 text-right d-none d-lg-block"></div>
            <div class="col-1 text-right d-none d-lg-block" >
                <a href="{{route('usuarios.logout')}}" class="text-white">Cerrar Sesion</a>
            </div>
        </div>
        {{-- USER --}}
    </div>

    {{--    NAVBAR --}}
    <nav class="navbar navbar-expand-lg " style="background-color: orange">
        <a class="navbar-brand" href="#">Sandra Beauty Salon</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item @if(Route::current()->getName()=='test.index') active @endif">
                    <a class="nav-link" href="{{route('test.index')}}">Inicio</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/servicios">Servicios</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/clientes">Clientes</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/clientes">Agenda</a>
                </li>
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Agenda
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Descarga Tabla de Posiciones</a>
                    </div>
                </li> --}}
                
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Configuración
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Cambiar Contraseña</a>
                        
                        <a >Roles</a>
                        <a >Usuarios</a>
                        
                        <a >Roles</a>
                        <a >Usuarios</a>
                        
                        <a class="dropdown-item d-lg-none">Cerrar Sesión</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="https://www.usm.cl" target="_blank">UTFSM</a>
                    </div>
                </li>

            </ul>
            
        </div>
    </nav>

    <div class="container">
    @yield('contenido-principal')
    </div>
        </div>
        <div class="footer">
            <p>Sitio web creado por Juan Vilugron y Benjamin Perez.Proyeco TSI. 2022.</p>
        </div>

        @yield('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

</body>
</html>