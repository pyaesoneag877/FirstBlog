<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-info shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        
                        <li class="nav-item">
                        @auth
                            <a class="nav-link text-success" href="/articles/add">+ Add Article</a>
                        @endauth
                        </li>
                        <li class="nav-item">
                     
                            <a class="nav-link text-success" href="/">Home</a>
                
                        </li>
                        <li class="nav-item">
                     
                            <a class="nav-link text-success" href="/">What we do</a>
                       
                        </li>
                        <li class="nav-item">
                     
                            <a class="nav-link text-success" href="/">Who we are</a>
                       
                        </li>
                        <li class="nav-item">
                     
                            <a class="nav-link text-success" href="/">Product</a>
                       
                        </li>
                        <li class="nav-item">
                     
                            <a class="nav-link text-success" href="/">Career</a>
                       
                        </li>
                        <li class="nav-item">
                     
                            <a class="nav-link text-success" href="/">Content Us</a>
                       
                        </li>
                    <ul class="navbar-nav mr-auto">
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 bg-">
            @yield('content')
        </main>
    </div>
    <div class="bg-info">
    <div class="row">
        <div class="col align-self-start">
        <h5>Content</h5>
        <p> <u>Yangon Head Office</u> </p>
        <p>WAW Building No(28), East Race Course Road, Tamwe Township, Yangon</p>
        <p>(+95-1) 8604425 ~ 29, 8604089</p>

         <h6><u>Service Center </u></h6>
         <p>No(15), East Race Course Road, Tamwe Township, Yangon</p>
        <p>(+95-1) 8604425 ~ 29, 8604089</p>
        </div>
        <div class="col align-self-center">
        <h5 class="mb-1">Quick Links</h5>
        <p>About Us</p>
        <p>Privacy </p>
        <p>Career</p>
        <p>Projects</p>
        <p>Our Community</p>
        </div>
        <div class="col align-self-end">
        <h5>Sing up for our newsletters</h5> 
            <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Email Address" aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Submit</button>
            </div>
            <h2>I.E.M Company Limited</h2>
            <p>Total power solution for you</p>
        </div>
        
  </div>
</div>
</body>
</html>
