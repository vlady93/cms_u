<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Aria is a business focused HTML landing page template built with Bootstrap to help you create lead generation websites for companies and their services.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Web</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="image/favicon.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Aria</a> -->

        <!-- image Logo -->
        <a class="navbar-brand logo-image" href="index.html"><img src="image/logo.svg" alt="alternative"></a>
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll " href="#header">INICIO <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#services">EMPRESAS</a>
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
                    <a class="nav-link page-scroll" href="{{route('blogs.index')}}">ROLES</a>
                </li>
                @endcan
                @can('ver-blog')
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="">CATALOGO</a>
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


    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-container">
                            <h1>OFRECEMOS <span id="js-rotating"> SERVICIOS, SOLUCIONES</span></h1>
                            <p class="p-heading p-large">Registra tu empresa para mostrar al mundo lo que ofreces.</p>
                            
                        </div>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->

    <!-- Services -->
    <div id="services" class="cards-2 ">
        <div class="container  mx-auto">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">EMPRESAS</div>
                    <h3>Empresas registradas</h3>
                </div> <!-- end of col -->
            </div> <!-- end of row -->

            <div class="row justify-content-center">
                <div class="mt-5">
                    
                    <!-- Card -->
                    @foreach ($blogs as $blog)
                    <div class="card mx-auto text-center ml-3" style="box-shadow: 0 0 10px 0 rgba(100, 100, 100, 0.26);">
                       
                        <div class="card-image">
                            <img class="img-fluid" src="{{asset('image/'.$blog->logo)}}" width="205px" height="205px" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">{{$blog->titulo}}</h3>
                        </div>
                       

                        <div class="button-container">
                            <a class="btn-solid-reg page-scroll" href="{{route('blogs.show',$blog)}}">DETALLES</a>
                        </div> <!-- end of button-container -->
                       
                    </div>
                    @endforeach
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of services -->
    



    <!-- Footer -->
    


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2021 <a href="https://inovatik.com">Proyecto Web</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    
    	
    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/morphext.min.js"></script> <!-- Morphtext rotating text in the header -->
    <script src="js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>