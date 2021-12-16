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
    <title>Lista de Pagos</title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-warning">
    <div class="profile-photo-small">
        <img src="img/img.jpg" alt="" width="80px" height="80px">
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
                <strong>Pagos Quincenales</strong>
            </div>
            <div class="card">
                <table class="table table-warning">
                    <thead>
                        <tr>
                            <th class="text-center">Monto</th>
                            <th class="text-center">Quincenas</th>
                            <th class="text-center">Abono Capital</th>
                        </tr>
                    </thead>
                        <tbody>
                        <tr class="table table-default">
                        <td class="text-center">5000</td>
                        <td class="text-center">12</td>
                        <td class="text-center">416.666667</td>
                        </tr>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>
<div class="container" style="padding: 1.5em">
    <div class="row">
        <div class="card card-nav-tabs text-center">
            <div class="card-header card-header-warning">
                <strong>Fechas de Pagos Quincenales</strong>
            </div>
            <div class="card">
                <table class="table table-warning">
                    <thead>
                    <tr>
                        <th class="text-center">Fecha</th>
                        <th class="text-center">No. QUINCENA</th>
                        <th class="text-center">Capital Saldo</th>
                        <th class="text-center">Tasa Interes</th>
                        <th class="text-center">Intereses Sobre Saldo</th>
                        <th class="text-center">Abono Capital</th>
                        <th class="text-center">Capital Saldo</th>
                        <th class="text-center">Total Adeudo</th>
                        <th class="text-center">Descuento Quincenal</th>
                        <th class="text-center">Saldo Quincenal</th>
                        <th class="text-right">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="table table-default">

                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


</body>
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
