 <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top ">
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
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#services">EMPRESAS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#services">CATALOGO</a>
                </li>
                @if (Route::has('login'))
                @auth
               
                    <li class="nav-item mr-2">
                        <a class="nav-link page-scroll border border-success rounded-pill" href="{{ url('/dashboard') }}">DASHBOARD </a>
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