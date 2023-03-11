<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{url('app/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{url('app/css/tooplate-gymso-style.css')}}">
    <link rel="stylesheet" href="{{url('app/css/font-awesome.min.css')}}">
    <title>@yield('title') - Paises</title>
</head>
<body>
<!-- Form cerrar sesión-->
<form action="{{route('logout')}}" method="post" id="cerrar">
    @csrf
</form>

<!-- Navbar-->
<header class="topbar">
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">

            <a class="navbar-brand " href="{{route('dashboard')}}"><i class="fa fa-cloud"
                                                                      style="margin-right: 10px"></i>Actividad Paises
                <span class="">
                    <a class=" nav-toggler waves-effect waves-white text-white d-md-none d-lg-none"
                       href="javascript:void(0)">
                        <i style="font-size: 26px;" class="fa fa-bars"></i>
                    </a>
                </span>
            </a>


            <div>
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <div class="navbar-nav mr-auto">
                    <!-- This is  -->
                    <div class="nav-item  emailauth" style="padding-left: 70px; ">
                        <a style="font-size: 17px" href="#"
                           class="d-none d-sm-none d-lg-block d-md-block d-xl-block">{{auth()->user()->email}}
                            <i
                                class="fa fa-envelope-o "></i></a>
                    </div>
                </div>

            </div>

        </div>
    </nav>

</header>

<!-- sidebar-->
<aside class="left-sidebar">
    <div class="d-flex no-block nav-text-box align-items-center">
        <span><a class="text-white" href="{{route('dashboard')}}" style="font-size: 22px"><i class="fa fa-cloud"
                                                                                             style="margin-right: 10px"></i>Actividad Paises</a></span>
        <a style="font-size: 30px;" class="text-white waves-effect waves-dark ml-auto hidden-sm-down"
           href="javascript:void(0)"><i
                class="fa fa-bars"></i></a>
        <a style="font-size: 25px" class="text-white nav-toggler waves-effect waves-dark ml-auto hidden-sm-up"
           href=""><i
                class="fa fa-close "></i></a>
    </div>
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li>
                    <a class="waves-effect waves-dark " href="{{route('dashboard')}}">
                        <i class="fa fa-home"></i>
                        <span class="hide-menu">Inicio</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('countries.create')}}" class="waves-effect waves-dark" >
                        <i class="fa fa-folder"></i>
                        <span class="hide-menu">Crear Paises</span>
                    </a>
                </li>

                <li>
                    <a class="waves-effect waves-dark" data-toggle="modal" data-target="#add-new-folder">
                        <i class="fa fa-folder"></i>
                        <span class="hide-menu">Crear Departamentos</span>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" data-toggle="modal" data-target="#add-new-folder">
                        <i class="fa fa-folder"></i>
                        <span class="hide-menu">Crear Municipios</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('countries.index')}}" class="waves-effect waves-dark" >
                        <i class="fa fa-folder"></i>
                        <span class="hide-menu">Listar Paises</span>
                    </a>
                </li>





                <li class="spacesidebar" id="spacesidebar"></li>
                <li class="">
                    <a class="waves-effect waves-dark img-perfil" href="">
                        <!--
                        poner img user

                            <i >
                                <img  src="https://tif-picture.herokuapp.com/svg?bg=098605&name={{Auth::user()->names}} {{Auth::user()->lastnames}}" alt="user" class="img-circle" width="34px">
                            </i>

                        -->
                        <span style="margin-top: 100px"
                              class="hide-menu">{{auth()->user()->names}} {{auth()->user()->lastnames}}</span>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" onclick="document.getElementById('cerrar').submit()">
                        <i class="fa fa-sign-out"></i>
                        <span class="hide-menu">Cerrar Sesión</span>
                    </a>
                </li>

            </ul>

        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>

<!-- content-->
<div class="page-wrapper">
    <div class="container-fluid">
        <section class="bg-dashboard">
            <div class="cntdashboard shadow ">
                <div class="cntdash">
                    <div class="row">
                        @yield('content')
                    </div>
                </div>
            </div>
        </section>

    </div>
</div>



<footer class="site-footer" style="padding-bottom: 20px">
    <div class="container">
        <div class="row">

            <div class="ml-auto col-lg-8 col-md-8 col-sm-12 pt-4">
                <p class="copyright-text text-white">&copy;Copyright 2022 LCKM CLOUD. Diseñado Por: <a
                        href="https://www.tooplate.com">Cristian Parra. Esteban Escarraga, Juan Rodriguez</a></p>
            </div>

            <div class="d-flex  justify-content-center ml-auto mx-auto col-lg-4 col-md-4 col-2"
                 style="margin-left: 50px">
                <p class="mr-4  pt-4 d-none d-sm-none d-md-none d-lg-block">
                    <a href="https://github.com/JUANCAMILO2001" class="fa text-white fa-github mr-1"></a>
                </p>
                <p class="mr-4 pt-4 d-none d-sm-none d-md-none d-lg-block">
                    <a href="https://twitter.com/JuanCam18570632"><i class="text-white fa fa-twitter mr-1"></i></a>
                </p>
                <p class="mr-4 pt-4 d-none d-sm-none d-md-none d-lg-block">
                    <a href="https://www.linkedin.com/in/juan-camilo-rodriguez-ramirez-83b7a0216"
                       class="text-white fa fa-linkedin mr-1"></a>
                </p>
                <p class="mr-4 pt-4 d-none d-sm-none d-md-none d-lg-block">
                    <a href="https://www.instagram.com/camilo_stunt2001/" class="text-white fa fa-instagram mr-1"
                    ></a>
                </p>
            </div>

        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
<script src="{{url('app/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{url('app/js/bootstrap.min.js')}}"></script>
<script src="{{url('app/js/js/sidebarmenu.js')}}"></script>
<script src="{{url('app/js/js/custom.min.js')}}"></script>

<script src="{{ asset('js/app.js') }}"></script>


</body>
</html>
