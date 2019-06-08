@extends('layouts.default')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 text-center">
			<h3>
				Partidos
			</h3>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12 text-center">
			<h4 class="text-danger">
				FASE: {{{strtoupper($fase->descripcion)}}}
			</h4>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-striped table-condensed">
				<thead>
					<tr>
						<th>#</th>
						<th class="text-center">Grupo</th>
						<th class="text-center">Local</th>
						<th class="text-center">Visita</th>
						<th class="text-center">Horario Partido</th>
						<th class="text-center">Goles local</th>
						<th class="text-center">Goles Visita</th>
						<th class="text-center">Guardar Apuesta</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$contador = 0;
					?>
                    @foreach($partidos as $partido)
                        <?php 
                            $contador++;
                            $resultado = "";

                            if(!is_null($partido->res_local) && !is_null($partido->res_visita)){
                                if($partido->res_local > $partido->res_visita){
                                    $resultado = "GANA LOCAL";
                                }else if($partido->res_local < $partido->res_visita){
                                    $resultado = "GANA VISITA";
                                }else if($partido->res_local == $partido->res_visita){
                                    $resultado = "EMPATE";
                                }
                            }
                        ?>
                        <tr>
                            <?php
                                $apuesta_existe = Apuesta::where('iduser',$_SESSION["DATA_USER"]["usuario"]->id)->where('idpartido',$partido->id)->first();
                            ?>
                            @if($apuesta_existe)
                                {{Form::open(array('url' => 'apuestas/'.$apuesta_existe->id, 'role' => 'form', 'method' => 'put'))}}
                            @else
                                {{Form::open(array('url' => 'apuestas', 'role' => 'form', 'method' => 'post'))}}
                            @endif
                            
                            {{Form::hidden('iduser',$_SESSION["DATA_USER"]["usuario"]->id)}}
                            {{Form::hidden('idpartido',$partido->id)}}
                            
                            <td>
                                {{{$contador}}}
                            </td>
                            <td>
                                {{{ strtoupper($partido->getlocal->grupo) }}}
                            </td>
                            <td>
                                <img src="{{{url($partido->getlocal->url_imagen)}}}" alt="{{{$partido->getlocal->nombre}}}">{{{ strtoupper(" - ".$partido->getlocal->nombre) }}}
                            </td>
                            <td>
                                {{{ strtoupper($partido->getvisita->nombre." - ") }}}<img src="{{{url($partido->getvisita->url_imagen)}}}" alt="{{{$partido->getvisita->nombre}}}">
                            </td>
                            <td>
                                {{{ date("d-m-Y H:i:s",strtotime($partido->fechahora_partido)) }}}
                            </td>
                            <td class="text-center">
                                @if(strtotime(date('Y-m-d H:i:s')) < strtotime($partido->fechahora_partido))
                                    <?php
                                        $defecto = $apuesta_existe ? $apuesta_existe->gol_local: null;
                                    ?>
                                    {{Form::number('gol_local',$defecto,array("class" => "form-control input-sm", "min" => 0, "max" => 99))}}
                                @else
                                    <?php $gol_local = $apuesta_existe ? $apuesta_existe->gol_local: null;?>
                                    <b>{{{$gol_local}}}</b>
                                @endif
                            </td>
                            <td class="text-center">
                                @if(strtotime(date('Y-m-d H:i:s')) < strtotime($partido->fechahora_partido))
                                    <?php
                                        $defecto = $apuesta_existe ? $apuesta_existe->gol_visita: null;
                                    ?>
                                    {{Form::number('gol_visita',$defecto,array("class" => "form-control input-sm", "min" => 0, "max" => 99))}}
                                @else
                                    <?php $gol_visita = $apuesta_existe ? $apuesta_existe->gol_visita: null;?>
                                    <b>{{{$gol_visita}}}</b>
                                @endif
                            </td>
                            <td>
                                @if(strtotime(date('Y-m-d H:i:s')) < strtotime($partido->fechahora_partido))
                                    <button type="submit" class="btn btn-success">Guardar</button>
                                @else
                                    Partido cerrado - <b>SUERTE! <icon class="fa fa-2x fa-thumbs-o-up text-danger"></icon></b>
                                @endif
                            </td>
                            {{Form::close()}}
                        </tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@stop