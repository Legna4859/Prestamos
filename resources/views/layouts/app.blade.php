<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SITAATESVB</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="../assets/css/material-kit.css?v=2.1.1" rel="stylesheet">
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet">
    <link href="../assets/demo/vertical-nav.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v4.7.0/css/all.css" integrity="sha384-50oBUHEmvpQ+1lw4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg bg-warning">
            <div class="container">
                <div class="profile-photo-small">
                <img src="img/img.jpg" alt="" width="80px" height="80px">
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" style="font-size: 12pt; color:black; font-family: 'Times New Roman'"  href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" style="font-size: 12pt; color:black; font-family: 'Times New Roman'"  href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                            <li class="nav-item">
                                <a class="nav-link" href="{{url('Prestamo')}}" style="font-size: 12pt; color:black; font-family: 'Times New Roman'">Solicitud</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{url('Autorizaciones')}}" style="font-size: 12pt; color:black; font-family: 'Times New Roman'">Autorizar</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{url('Listas')}}" style="font-size: 12pt; color:black; font-family: 'Times New Roman'">Listas</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" style="font-size: 12pt; color:black; font-family: 'Times New Roman'"  href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Cerrar Sesion
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

        <main class="py-4">
            @yield('content')
            <div class="container" style="padding: 12em">
                <div class="row">
                  <div class="col">

                  </div>
                  <div class="col-6">

                  </div>
                  <div class="col">

                  </div>
                </div>
                <div class="row">
                  <div class="col">

                  </div>
                  <div class="col-5">

                  </div>
                  <div class="col">

                  </div>
                </div>
              </div>
                  <div class="container">
                    <div class="row">
                      <div class="col">

                      </div>
                      <div class="col-6">

                      </div>
                      <div class="col">

                      </div>
                    </div>
                    <div class="row">
                      <div class="col">

                      </div>
                      <div class="col-5">

                      </div>
                      <div class="col">

                      </div>
                    </div>
                  </div>

                  <div class="container">
                    <div class="row">
                      <div class="col">

                      </div>
                      <div class="col-6">

                      </div>
                      <div class="col">

                      </div>
                    </div>
                    <div class="row">
                      <div class="col">

                      </div>
                      <div class="col-5">

                      </div>
                      <div class="col">

                      </div>
                    </div>
                  </div>
                  <div class="container">
                    <div class="row">
                      <div class="col">

                      </div>
                      <div class="col-6">

                      </div>
                      <div class="col">

                      </div>
                    </div>
                    <div class="row">
                      <div class="col">

                      </div>
                      <div class="col-5">

                      </div>
                      <div class="col">

                      </div>
                    </div>
                  </div>
                  <div class="container">
                    <div class="row">
                      <div class="col">

                      </div>
                      <div class="col-6">

                      </div>
                      <div class="col">

                      </div>
                    </div>
                    <div class="row">
                      <div class="col">

                      </div>
                      <div class="col-5">

                      </div>
                      <div class="col">

                      </div>
                    </div>
                  </div>
              </div>
              <div class="container">
                <div class="row">
                  <div class="col">

                  </div>
                  <div class="col-6">

                  </div>
                  <div class="col">

                  </div>
                </div>
                <div class="row">
                  <div class="col">

                  </div>
                  <div class="col-5">

                  </div>
                  <div class="col">

                  </div>
                </div>
              </div>
              <div class="container">
                <div class="row">
                  <div class="col">

                  </div>
                  <div class="col-6">

                  </div>
                  <div class="col">

                  </div>
                </div>
                <div class="row">
                  <div class="col">

                  </div>
                  <div class="col-5">

                  </div>
                  <div class="col">

                  </div>
                </div>
              </div>
                <div class="card bg-warning">
                    <div class="card-body">
                        <p style="text-align: center;font-family: 'Times New Roman';font-style: italic;text-transform: capitalize !important;">TECNOLOGICO DE ESTUDIOS SUPERIORES DE VALLE DE BRAVO</p>
                        <p style="text-align: center;font-family: 'Times New Roman';font-style: italic;text-transform: capitalize !important;">KM. 30 DE LA CARRETERA FEDEREAL MONUMENTO VALLE DE BRAVO. VALLE DE BRAVO. ESTADO DE MEXICO</p>
                        <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-2"></div>
                        <div class="col-sm-2"></div>
                        <div class="col-sm-2"></div>
                        <div class="col-sm-2"></div>
                        <div class="col-sm-2"></div>
                        </div>
                    </div>
                    <div class="copyright" style="text-align: right;font-family: 'Times New Roman';font-style: italic">
                        Copyright © <script>
                          document.write(new Date().getFullYear())
                        </script> All Rights Reserved.

                      </div>
                    </div>
                </div>
        </main>

    </div>
</body>
</html>

