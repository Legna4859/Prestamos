<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="../assets/css/material-kit.css?v=2.1.1" rel="stylesheet">
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet">
    <link href="../assets/demo/vertical-nav.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v4.7.0/css/all.css" integrity="sha384-50oBUHEmvpQ+1lw4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/prestamos.css')}}">
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <script src="js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
    <title>Solicitud de Aval</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-warning">
    <div class="profile-photo-small">
        <img src="img/img.jpg" alt="" width="70" height="70">
    </div>
    <div class="container">
        <h1>UNIDAD, IDENTIDAD Y RESPONSABILIDAD</h1>
    </div>
    <div class="container">
        <h2>Sindicato de Trabajadores Académicos y Administrativos del Tecnológico de Estudios Superiores de Valle de Bravo</h2>
        <a class="btn btn-success btn-round" href="{{url('home')}}" style="font-size: 15pt;text-decoration: none">
            <i class="material-icons">reply_all</i>
        </a>
    </div>
</nav>

    <div class="container" style="padding: 1.5em">
        <div class="row">
            <div class="card card-nav-tabs text-center">
                <div class="card-header card-header-warning">
                    <strong>DATOS DEL AVAL:</strong>
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                                <div class="col"><strong>Nombre</strong></div>
                                <div class="col"><strong>Apellido Paterno</strong></div>
                                <div class="col"><strong>Apellido Materno</strong></div>
                            </div>
                            <div class="container">
                                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                                  <div class="col"><input type="text" class="form-control" placeholder="Nombre(s)"></div>
                                  <div class="col"><input type="text" class="form-control" placeholder="Apellido Paterno"></div>
                                  <div class="col"><input type="text" class="form-control" placeholder="Apellido Materno"></div>
                                </div>
                            </div>
                            <div class="container" style="padding: 1.5em">
                                <div class="card card-nav-tabs text-center">
                                    <div class="card-header card-header-warning">
                                    <strong>DOMICILIO PARTICULAR</strong>
                                    </div>
                                </div>
                              </div>
                              <div class="container">
                                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5">
                                  <div class="col"><strong style="text-align: right;">Calle</strong></div>
                                  <div class="col"><strong style="text-align: right;">No.</strong></div>
                                  <div class="col"><strong style="text-align: right;">Colonia</strong></div>
                                  <div class="col"><strong style="text-align: right;">Municipio</strong></div>
                                  <div class="col"><strong style="text-align: right;">Estado</strong></div>
                                </div>
                              </div>
                              <div class="container">
                                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5" style="padding: 1.5em">
                                  <div class="col"><input type="text" class="form-control" placeholder="Calle"></div>
                                  <div class="col"><input type="text" class="form-control" placeholder="No."></div>
                                  <div class="col"><input type="text" class="form-control" placeholder="Colonia"></div>
                                  <div class="col"><input type="text" class="form-control" placeholder="Municipio"></div>
                                  <div class="col"><input type="text" class="form-control" placeholder="Estado"></div>
                                </div>
                              </div>
                              <div class="container">
                                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                                  <div class="col"><strong style="text-align: right;">Codigo Postal</strong></div>
                                  <div class="col"><strong style="text-align: right;">TEL. PART.</strong></div>
                                  <div class="col"><strong style="text-align: right;">TEL. OFICINA</strong></div>
                                  <div class="col"><strong style="text-align: right;">CELULAR</strong></div>
                                </div>
                              </div>
                              <div class="container">
                                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4" style="padding: 1.5em">
                                  <div class="col"><input type="text" class="form-control" placeholder="Codigo Postal"></div>
                                  <div class="col"><input type="text" class="form-control" placeholder="TEL. PART."></div>
                                  <div class="col"><input type="text" class="form-control" placeholder="TEL. OFICINA"></div>
                                  <div class="col"><input type="text" class="form-control" placeholder="CELULAR"></div>
                                </div>
                              </div>
                              <div class="container" >
                                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                                  <div class="col" style="text-align: center"><strong style="text-align: right;">ANTIGÜEDAD LABORAL</strong></div>
                                  <div class="col"></div>
                                  <div class="col" style="text-align: center"><strong style="text-align: right;">CORREO ELECTRÓNICO</strong></div>
                                  <div class="col"></div>
                                </div>
                              </div>
                              <div class="container">
                                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4" style="padding: 1.5em">
                                  <div class="col" style="text-align: center"><input type="text" class="form-control" placeholder="ANTIGÜEDAD LABORAL"></div>
                                  <div class="col"></div>
                                  <div class="col" style="text-align: center"><input type="text" class="form-control" placeholder="CORREO ELECTRÓNICO"></div>
                                  <div class="col"></div>
                                </div>
                              </div>
                              <div class="container">
                                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                                  <div class="col"></div>
                                  <div class="col"><strong style="text-align: right;">LUGAR DE ADSCRIPCIÓN</strong></div>
                                  <div class="col"></div>
                                  <div class="col"><strong style="text-align: right;">LUGAR DONDE COBRA</strong></div>
                                </div>
                              </div>
                              <div class="container">
                                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4" style="padding: 1.5em">
                                  <div class="col"></div>
                                  <div class="col"><input type="text" class="form-control" placeholder="LUGAR ADSCRIPCIÓN"></div>
                                  <div class="col"></div>
                                  <div class="col"><input type="text" class="form-control" placeholder="LUGAR DONDE COBRA"></div>
                                </div>
                              </div>
                              <div class="container">
                                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                                  <div class="col"><strong style="text-align: right;">PUESTO: ADMINISTRATIVO</strong></div>
                                  <div class="col"><strong>P.T.C</strong></div>
                                  <div class="col"><strong>P.A</strong></div>
                                  <div class="col"><strong>Asig.(No. Horas Semanas)</strong></div>
                                </div>
                              </div>
                              <div class="container">
                                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4" style="padding: 1.5em">
                                  <div class="col"><input type="text" class="form-control" placeholder="PUESTO"></div>
                                  <div class="col"><input type="text" class="form-control" placeholder="P.T.C"></div>
                                  <div class="col"><input type="text" class="form-control" placeholder="P.A"></div>
                                  <div class="col"><input type="text" class="form-control" placeholder="Asig.(No. Horas Semanas)"></div>
                                </div>
                              </div>
                              <div class="container">
                                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                                  <div class="col"><strong style="text-align: left">SUELDO MENSUAL NETO $$</strong></div>
                                  <div class="col"></div>
                                  <div class="col"><input type="text" class="form-control" placeholder="SUELDO MENSUAL NETO"></div>
                                  <div class="col"></div>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



        <div class="container" style="padding: 1.5em">
            <div class="card card-nav-tabs text-center">
                <div class="card-header card-header-warning">
                </div>
                <div class="card-body">
                    <p>Para todos los efectos judiciales y extrajudiciales, el solicitante señala como domicilio el indicado
                       en la solicitud. Mientras el solicitante no notifique a los representantes del SITAATESVB, por escrito el
                       cambio de su domicilio, las notificaciones, inclusive las personales y todas las diligencias judiciales y extrajudiciales,
                       se practicarán en el domicilio señalado originalmente. Todos los gastos de cobranza y legales que se originen por incumplimiento
                       del solicitante correrán a cargo del mismo.
                    </p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="card card-nav-tabs text-center">
                <div class="card-header card-header-warning">
                    <strong>Firmas de los Involucrados</strong>
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5">
                          <div class="col"><strong style="text-align: center;">SOLICITANTE</strong></div>
                          <div class="col"></div>
                          <div class="col"><strong style="text-align: center;">AVAL</strong></div>
                          <div class="col"></div>
                          <div class="col"><strong style="text-align: center;">SITAATESVB</strong></div>

                        </div>
                      </div>
                      <div class="container">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5">
                          <div class="col"><input type="text" class="form-control" placeholder="SOLICTANTE"></div>
                          <div class="col"></div>
                          <div class="col"><input type="text" class="form-control" placeholder="AVAL"></div>
                          <div class="col"></div>
                          <div class="col"><input type="text" class="form-control" placeholder="SITAATESVB"></div>

                        </div>
                      </div>
                </div>
            </div>
        </div>


                <div class="container" style="padding: 1.5em;">
                    <div class="card card-nav-tabs text-center">
                        <div class="card-header card-header-warning">
                        </div>
                        <div class="card-body">
                            <p class="card-description" style="color:#000;">Una vez conocidas las condiciones de operación
                                manifiesto estar de acuerdo y someterme cada una de ellas durante el lapso que dure.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="card card-nav-tabs text-center">
                        <div class="card-header card-header-warning">
                        </div>
                        <div class="card-body">
                            <p class="card-description" style="color:#000;">
                                Conocidas las condiciones y términos de la operación, me obligo solidaria e ilimitadamente con el solicitante.
                            </p>
                            <div class="container">
                                <p style="text-align: right">
                                    Valle de Bravo,Méx. a<input id="tiempo" type="text" name="birthday" value="" style="font-family: 'Times New Roman';text-align: center">de<input id="tiempo" type="text" name="birthday" value="" style="font-family: 'Times New Roman';text-align: center">de<input type="text" name="birthday" value="" style="font-family: 'Times New Roman';text-align: center">
                                    <script>
                                        $(function() {
                                            $('input[name="birthday"]').daterangepicker({
                                                singleDatePicker: true,
                                                showDropdowns: true,
                                                minYear: 1901,
                                                maxYear: parseInt(moment().format('YYYY'),10)
                                            }, function(start, end, label) {
                                                var years = moment().diff(start, 'years');
                                                alert("You are " + years + " years old!");
                                            });
                                        });
                                    </script>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

                <div class="container" style="padding: 1.5em;">
                    <div class="card card-nav-tabs text-center">
                        <div class="card-header card-header-warning">
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                Declara el Solicitante y Aval que la información proporcionada es correcta</p>
                            <p>y que está de acuerdo en los términos y condiciones de la Solicitud</p>
                            <p>-Contrato presente</p>
                        </div>
                    </div>
                </div>
            </div>

<ul class="pagination justify-content-center text-center pagination-warning">
    <li class="active page-item">
        <a href="#" class="page-link">«<div class="ripple-container"></div></a>
    </li>
    <li class="page-item">
        <a href="{{url('Prestamo')}}" class="page-link">1</a>
    </li>
    <li class="active page-item">
        <a href="{{url('Aval')}}" class="page-link">2<div class="ripple-container"></div></a>
    </li>
    <li class="page-item">
        <a href="{{url('Pagare')}}" class="page-link">3</a>
    </li>
    <li class="active page-item">
        <a href="#" class="page-link">»</a>
    </li>
</ul>

    <div class="container">
        <div class="row">
            <div class="col">

            </div>
            <div class="col order-5">

            </div>
            <div class="col order-0">
                <button class="btn btn-warning btn-round" type="submit" style="font-size: 1em;text-decoration: none; text-align: center; color: black;">
                    <span class="btn-inner--icon"><i class="material-icons">data_saver_on</i></span>
                    <span class="btn-inner--text">Guardar</span>
                </button>
            </div>
        </div>
    </div>

</body>
<script src="./assets/js/material-kit.js?v=2.1.1" type="text/javascript"></script>
</html>
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
