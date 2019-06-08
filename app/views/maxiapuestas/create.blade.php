@extends('layouts.default')
@section('content')

<div class="row">
    <div class="col-sm-12 text-center">
        <h3>Ingresar Resultados Apuestas Adicionales</h3>
    </div>
</div>
<br>
<div class="row jumbotron">
    <div class="col-sm-12 text-center">
        @foreach(Maxiapuestum::all() as $ma)
        	<?php
                $mapuesta = $ma;
                $opciones = MaxiOpcion::where('idmaxiapuesta',$ma->id)->lists('descripcion','id');
	        ?>
            @if($ma->id == 1 || $ma->id == 4)
                <div class="col-sm-3 text-center">
            @else
                <div class="col-sm-offset-1 col-sm-3 text-center">
            @endif
	            
            <h4><b>{{{$mapuesta->descripcion}}}</b></h4>
            {{Form::open(array('url' => 'maxiapuestas/'.$mapuesta->id, 'role' => 'form', 'method' => 'put'))}}

            {{Form::hidden('descripcion',$mapuesta->descripcion)}}

            <div class="row text-center">
                {{Form::select('idelegido_resultado',["" => "Seleccione"]+$opciones,$mapuesta->idelegido_resultado,array("class" => "form-control"))}}
            </div>
            <br>
            <div class="row text-center">
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>

            {{Form::close()}}
            </div>
        @endforeach
    </div>
</div>

@stop