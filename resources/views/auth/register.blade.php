<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="../assets/css/material-kit.css?v=2.1.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />
    <link href="../assets/demo/vertical-nav.css" rel="stylesheet"/>
    <title>Registrar Correo Electronico</title>
</head>
<body class="login-page sidebar-collapse">
    <nav class="navbar navbar-color-on-scroll navbar-transparent    fixed-top  navbar-expand-lg " color-on-scroll="100" id="sectionsNav">
        <div class="container">
            <div class="navbar-translate">
                <h1 style="font-style: italic;font-size: 2em; color:aquamarine;font-family: 'Times New Roman', Times, serif">Registrar Correo</h1>
            </div>
        </div>
    </nav>
    <div class="page-header header-filter" style="background-image: url('../img/LOGO_SINDICATO.png')">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 cold-md-6 col-sm-8 ml-auto mr-auto">
                    <form class="form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="card card-login card-hidden">
                          <div class="card-header card-header-warning text-center">
                            <h4 class="card-title" style="font-family: 'Times New Roman';font-style: italic;">Registrar Usuario</h4>
                            <div class="social-line">
                            </div>
                          </div>
                          <div class="card-body ">
                            <p class="card-description text-center" style="font-family: 'Times New Roman';font-style: italic;">Informacion Personal</p>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">
                                    <i class="material-icons">face</i>
                                  </span>
                                </div>
                                <input type="text" class="form-control" placeholder="Nombre Completo">
                              </div>
                            </span>
                            <span class="bmd-form-group">
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">
                                    <i class="material-icons">email</i>
                                  </span>
                                </div>
                                <input type="email" class="form-control" placeholder="Corre Electronico">
                              </div>
                            </span>
                            <span class="bmd-form-group">
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">
                                    <i class="material-icons">lock_outline</i>
                                  </span>
                                </div>
                                <input type="password" class="form-control" placeholder="Contraseña">
                              </div>
                            </span>
                          </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-warning btn-round">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
    