@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header card-header-warning" style="font-family: 'Times New Roman';font-style: italic; text-align: center;font-size: 25px">Bienvenido al SITAATESVB</div>

                <div class="card-body" style="font-family: 'Times New Roman';font-style: italic; text-align: center;font-size: 15px">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Estas en la pagina principal del SITAATESVB puedes acceder al boton de solicitud para hacer tu registro') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
