<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Sample Product') }}</title>

  <!-- Scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://unpkg.com/tabulator-tables@5.4.3/dist/js/tabulator.min.js"></script>
  <script type="text/javascript" src="http://localhost:9001/js/table.js"></script>
  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
  <link href="https://unpkg.com/tabulator-tables@5.4.3/dist/css/tabulator.min.css" rel="stylesheet">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
  <div class="row">
    <div class="col-md-2">

      <div class="col-md-12 d-flex flex-column flex-shrink-0 text-white bg-dark" style="height:100vh;position: fixed;width: inherit;">
        <a href="/" class="d-flex align-items-center mb-2 mb-md-0 me-md-auto text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32">
            <use xlink:href="#"></use>
          </svg>
          <span class="fs-4 mt-2">{{ config('app.name', 'Sample app') }}</span>
        </a>
        <hr>
        @yield('menu')
        <!-- <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="/home" class="nav-link text-white smx" aria-current="page">
              <svg class="bi me-2" width="16" height="16">
                <use xlink:href="#home"></use>
              </svg>
              Home
            </a>
          </li>
          <li>
            <a href="/import" class="nav-link text-white smx">
              <svg class="bi me-2" width="16" height="16">
                <use xlink:href="#speedometer2"></use>
              </svg>
              Import
            </a>
          </li>
          <li>
            <a href="/report" class="nav-link text-white smx">
              <svg class="bi me-2" width="16" height="16">
                <use xlink:href="#speedometer2"></use>
              </svg>
              Report
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white smx">
              <svg class="bi me-2" width="16" height="16">
                <use xlink:href="#table"></use>
              </svg>
              Orders
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white smx">
              <svg class="bi me-2" width="16" height="16">
                <use xlink:href="#grid"></use>
              </svg>
              Products
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white smx">
              <svg class="bi me-2" width="16" height="16">
                <use xlink:href="#people-circle"></use>
              </svg>
              Customers
            </a>
          </li>
        </ul> -->
        <hr>
        <!-- <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>mdo</strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
        <li><a class="dropdown-item" href="#">New project...</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Sign out</a></li>
      </ul>
    </div> -->
      </div>

    </div>
    <div class="col-md-10" >

      <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
          <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <!-- Left Side Of Navbar -->
              <ul class="navbar-nav me-auto">

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
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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

        <main class="pt-4">
          @yield('content')
        </main>
      </div>
    </div>
  </div>
</body>
@yield('foot')

</html>