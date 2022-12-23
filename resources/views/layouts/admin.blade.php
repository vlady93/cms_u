<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    

    <!-- Website Title -->
    <title>@yield('title')</title>

    <!-- Styles -->
    {!! Html::style('../melody/vendors/iconfonts/font-awesome/css/all.min.css') !!}
    
    {!! Html::style('../melody/vendors/css/vendor.bundle.addons.css') !!}
    {!! Html::style('../melody/css/style.css') !!}
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
    <link href={{asset('css/bootstrap.css')}} rel="stylesheet">
    <link href={{asset('css/fontawesome-all.css')}} rel="stylesheet">
    <link href={{asset('css/swiper.css')}} rel="stylesheet">
	<link href={{asset('css/magnific-popup.css')}} rel="stylesheet">
	<link href={{asset('css/styles.css')}} rel="stylesheet">
    
    @yield('styles')
    <!-- Favicon  -->
    <link rel="icon" href={{asset('image/favicon.png')}}>
</head>

<body>
     <!-- Navbar -->
     <nav class="navbar navbar-expand-md navbar-dark navbar-custom  ">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Aria</a> -->

        <!-- image Logo -->
        <a class="navbar-brand logo-image" href="index.html"><img src="{{asset('image/logo.svg')}}" alt="alternative"></a>
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll " href="{{route('blogs.welcome')}}">INICIO <span class="sr-only">(current)</span></a>
                </li>
                @can('editar-blog')
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{route('blogs.index')}}">BLOGS</a>
                </li>
                @endcan
                @can('ver-usuarios')
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{route('usuarios.index')}}">USUARIOS</a>
                </li>
                @endcan
                @can('ver-roles')
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{route('roles.index')}}">ROLES</a>
                </li>
                @endcan
                @can('ver-blog')
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#services">CATALOGO</a>
                </li>
                @endcan
                @can('ver-comentario')
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{route('comentarios.index')}}">COMENTARIOS</a>
                </li>
                @endcan
                
                
                @if (Route::has('login'))
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll text-warning" href="#" data-toggle="dropdown" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu navbar-dropdown" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Logout"
                        onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                            <span class="item-text text-danger">Salir</span> 
                        </a> 
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @else
                    
                    <li class="nav-item mr-2">
                        <a class="nav-link page-scroll border border-success rounded-pill" href="{{ route('login') }}">LOGIN </a>
                    </li>

                @if (Route::has('register'))
                        
                        <li class="nav-item">
                            <a class="nav-link page-scroll d-md-block border border-success rounded-pill" href="{{ route('register') }}">REGISTRAR</a>
                        </li>
                @endif
                @endauth
           
                @endif
                
                
               
            </ul>
            
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navbar -->
    
    @yield('content')
     
       <!-- Copyright -->
       <div class="copyright " >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2021 <a href="https://inovatik.com">Proyecto Web</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
       <!-- end of copyright -->
    

    <!-- Scripts -->
    <script src={{asset('js/jquery.min.js')}}></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src={{asset('js/popper.min.js')}}></script> <!-- Popper tooltip library for Bootstrap -->
    <script src={{asset('js/bootstrap.min.js')}}></script> <!-- Bootstrap framework -->
    <script src={{asset('js/jquery.easing.min.js')}}></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src={{asset('js/swiper.min.js')}}></script> <!-- Swiper for image and text sliders -->
    <script src={{asset('js/jquery.magnific-popup.js')}}></script> <!-- Magnific Popup for lightboxes -->
    <script src={{asset('js/morphext.min.js')}}></script> <!-- Morphtext rotating text in the header -->
    <script src={{asset('js/isotope.pkgd.min.js')}}></script> <!-- Isotope for filter -->
    <script src={{asset('js/validator.min.js')}}></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src={{asset('js/scripts.js')}}></script>
    {!! Html::script('../melody/vendors/js/vendor.bundle.base.js') !!}
    {!! Html::script('../melody/vendors/js/vendor.bundle.addons.js') !!}
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
 
    
    
    
   
    <!-- endinject -->
    <!-- Custom js for this page-->
 
    <!-- End custom js for this page--> <!-- Custom scripts -->
    @yield('scripts')
</body>

</html>
