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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
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
    <title>Pagare Mercantil</title>
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

    <div class="container" style="padding: 1em">

    </div>

    <div class="container">
        <div class="card card-nav-tabs text-center">
            <div class="card-header card-header-warning">
                <strong style="text-align: center">PAGARE MERCANTIL</strong>
            </div>
            <div class="card-body">
                <p style="font-style: normal">
                    POR EL PRESENTE PAGARÉ, ME OBLIGO A PAGAR INCONDICIONALMENTE AL SINDICATO DE TRABAJADORES ACADÉMICOS
                    Y ADMINISTRATIVOS DEL TECNOLÓGICO DE ESTUDIOS SUPERIORES DE VALLE DE BRAVO.
                </p>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <p style="font-style: normal; text-align: left">LA CANTIDAD DE $</p>
                        </div>
                        <div class="col order-5">

                        </div>
                        <div class="col order-1">
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <p style="font-style: normal; text-align: left">QUE CUBRE EL TOTAL DEL PRÉSTAMO</p>
                        </div>
                        <div class="col order-5">
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="col order-1">
                            <p style="font-style: normal">NOMINAL NO.</p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col order-1">
                            <p style="font-style: normal; text-align: left">EXPEDICIÓN EL</p>
                        </div>
                        <div class="col order-4">
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="col order-2">
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="col order-3">
                            <p style="font-style: normal">FECHA DE VENCIMIENTO EL</p>
                        </div>
                        <div class="col order-5">
                            <p style="font-style: normal">INCLUYENDO LOS INTERESES</p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <p style="font-style: normal;text-align: left">CORRESPONDIENTES AL</p>
                        </div>
                        <div class="col order-5">
                            <p style="font-style:normal">ASI MISMO AUTORIZO A</p>
                        </div>
                        <div class="col order-1">
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="col order-1">
                            <p style="font-style: normal">% MENSUAL SOBRE LA CANTIDAD NETA RECIBIDA.</p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <p style="font-style: normal; text-align: left">EL SITAATESVB DESCUENTE DE MI SUELDO PAGOS QUINCENALES POR LA CANTIDAD
                    DE</p>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="$">
                        </div>
                        <div class="col order-5">
                            <input type="text" class="form-control" placeholder="(                                                                                         )">
                        </div>
                        <div class="col order-1">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <p style="font-style: normal">A PARTIR DEL</p>
                        </div>
                        <div class="col order-5">
                            <p style="font-style: normal">MISMOS, QUE SERÁN ENTREGADOS AL SITAATESVB</p>
                        </div>
                        <div class="col order-1">
                            <input id="tiempo" type="text" name="birthday" value="" style="font-family: 'Times New Roman';text-align: center">
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
                        </div>
                    </div>
                </div>
        </div>
    </div>

    <div class="container">
        <div class="card card-nav-tabs text-center" style="padding: 1.5em">
            <div class="card-header card-header-warning">
                <strong>¡¡¡Advertencia!!!</strong>
            </div>
            <div class="card-body">
                <p>
                    En caso de incumplimiento, suspensión, renuncia, permiso o rescisión ; si tuviere algún adeudo con EL SITAATESVB, acepto que se me ajuste de mi pago nominal  mi préstamo y en caso de que aun así adeude alguna cantidad a la misma, me comprometo en un plazo  no mayor a 15 días a partir de la primera quincena que no aparezca el descuento total correspondiente a presentarme ante los representantes del SITAATEVB, con la finalidad de resolver el  pago del  saldo  pendiente ;  si     no es pagado  el  saldo deudor  a  su  vencimiento, causara intereses moratorios  a razón de multiplicar por 1.5 veces  la tasa que se pactó en el pagare correspondiente.
                    Cuando su cobro se realice a través del abogado del SITAATESVB, el deudor se compromete a pagar los honorarios, así como otros gastos que se originen en el trámite del cobro respectivo.
                    El aval queda obligado a cubrir a la Secretaría de Finanzas del SITAATESVB el importe generado por incumplimiento de pago del deudor; así también, por fallecimiento si este ocurriera después de la fecha de vencimiento del préstamo y no haya quedado liquidado en su totalidad.
                    Para los efectos legales a que haya lugar, declaro que este pagaré queda dispensado del protesto en su caso. Leído el documento en cada una de sus partes, tanto el deudor, como el aval, manifestamos total conformidad.
                </p>
                <div class="container" style="padding: 1em">
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

    <div class="container">
        <div class="card card-nav-tabs text-center">
            <div class="card-header card-header-warning">
                <strong>Firmas de los Involucrados</strong>
            </div>
            <div class="card-body">
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                        <div class="col"><strong style="text-align: center">AVAL</strong></div>
                        <div class="col"></div>
                        <div class="col"><strong style="text-align: center">DEUDOR</strong></div>
                        <div class="col"></div>

                    </div>
                  </div>
                  <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                        <div class="col"><input type="text" class="form-control" placeholder="AVAL"></div>
                        <div class="col"></div>
                        <div class="col"><input type="text" class="form-control" placeholder="DEUDOR"></div>
                        <div class="col"></div>
                    </div>
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
    <li class="page-item">
        <a href="{{url('Aval')}}" class="page-link">2<div class="ripple-container"></div></a>
    </li>
    <li class="active page-item">
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
