<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Editar Padron</title>
</head>
<body>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{url('Autorizacions',$autorizaciones->id_padron)}}" method="POST" >
        @csrf
        @method("PUT")
        <div class="container">
            <div class="row">
                <div class="card card-nav-tabs text-center">
                    <div class="card-header card-header-warning">
                    </div>
                    <div class="card">
                        <div class="container">
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                              <div class="col"><strong>id_padron</strong></div>
                              <div class="col"><strong>Nombre</strong></div>
                              <div class="col"><strong>Puesto</strong></div>
                              <div class="col"><strong></strong></div>
                            </div>
                          </div>
                          <div class="container">
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                              <div class="col"><input type="text" class="form-control" placeholder="NP" value="{{$autorizaciones->id_padron}}"></div>
                              <div class="col"><input type="text" class="form-control" placeholder="Nombre" value="{{$autorizaciones->Nombre}}"></div>
                              <div class="col"><input type="text" class="form-control" placeholder="Puesto" value="{{$autorizaciones->Puesto}}"></div>
                              <div class="col"><button type="submit" class="btn btn-warning btn-round">
                                <i class="material-icons">save_alt</i>
                            </button></div>
                            </div>
                          </div>
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
                <div class="col-sm-2">
                    <img src="../img/tecnm.jpg "  alt="Raised Image" class="img-raised rounded img-fluid" width="100px" height="100px">
                </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-2"></div>
            <div class="col-sm-2"></div>
            <div class="col-sm-2"></div>
        <div class="col-sm-2">
            <img src="../img/isc.png" alt="Raised Image" class="img-raised rounded img-fluid" width="100px" height="100px">
        </div>
    </div>
</div>
<div class="copyright" style="text-align: right;font-family: 'Times New Roman';font-style: italic">
    Copyright © <script>
    document.write(new Date().getFullYear())
    </script> All Rights Reserved.
</div>
