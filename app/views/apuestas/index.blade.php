@extends('layouts.default')
@section('content')
<?php 
	$perfiles = array_column($_SESSION['DATA_USER']["perfiles"],"fkid_perfil");
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h3>
				{{$titulo}}
			</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-striped" id="tabla_puntajes">
				<thead>
					<tr>
						<th></th>
						@if(in_array(18,$perfiles))
							<th>Usuario</th>
						@endif
						<th>Fase</th>
						<th>Local</th>
						<th>Visita</th>
						<th>Horario Partido</th>
						<th>Apuesta local</th>
						<th>Apuesta Visita</th>
						<th>Apuesta Resultado</th>
						<th>Fecha/Hora de Apuesta</th>
						<th>Puntaje Obtenido</th>
						<th>Bonificación</th>
						<th>Resultado Real</th>
					</tr>
				</thead>
				<tbody>
					@foreach($apuestas as $apuesta)
					<?php 
						$resultado = "-";

						$partido = $apuesta->getpartido;

						if($apuesta->gol_local > $apuesta->gol_visita){
							$resultado = "GANA LOCAL";
						}else if($apuesta->gol_local < $apuesta->gol_visita){
							$resultado = "GANA VISITA";
						}else if($apuesta->gol_local == $apuesta->gol_visita){
							$resultado = "EMPATE";
						}

						$puntos = "-";
						$bono = "-";
						$puntaje = $apuesta->getpuntaje;

						if(isset($puntaje)){
							$puntos = $puntaje->puntaje;
							$bono = $puntaje->bono;
						}

						$resultado_partido = "";
						if(!is_null($partido->res_local) && !is_null($partido->res_visita)){
							if($partido->res_local > $partido->res_visita){
								$resultado_partido = "GANA LOCAL";
							}else if($partido->res_local < $partido->res_visita){
								$resultado_partido = "GANA VISITA";
							}else if($partido->res_local == $partido->res_visita){
								$resultado_partido = "EMPATE";
							}
						}

						if(in_array(18,$perfiles)){
							$usuario_aux = $apuesta->getusuario;
						}
					?>
					<tr>
						<td>
						</td>
						@if(in_array(18,$perfiles))
							<td>
								{{{ strtoupper($usuario_aux->usuario_nombre." ".$usuario_aux->usuario_apellido) }}}
							</td>
						@endif
						<td>
							{{{ strtoupper($partido->getfase->descripcion) }}}
						</td>
						<td>
							<img src="{{{$partido->getlocal->url_imagen}}}" alt="{{{$partido->getlocal->nombre}}}"> <br> {{{ strtoupper($partido->getlocal->nombre) }}}
						</td>
						<td>
							<img src="{{{$partido->getvisita->url_imagen}}}" alt="{{{$partido->getvisita->nombre}}}"> <br> {{{ strtoupper($partido->getvisita->nombre) }}}
						</td>
						<td>
							{{{ date("d-m-Y H:i:s",strtotime($partido->fechahora_partido)) }}}
						</td>
						<td>
							{{{ $apuesta->gol_local }}}
						</td>
						<td>
							{{{ $apuesta->gol_visita }}}
						</td>
						<td>
							{{{ $resultado }}}
						</td>
						<td>
							{{{date("d-m-Y H:i:s",strtotime($apuesta->created_at))}}}
						</td>

						<td>
							{{{ $puntos }}}
						</td>
						
						<td>
							{{{ $bono }}}
						</td>

						<td>
							@if(!is_null($partido->res_local) && !is_null($partido->res_visita))
							{{{ "L: ".$partido->res_local. " - V: ".$partido->res_visita." - R: ".$resultado_partido }}}
							@else
							{{{ "Aún No Hay Resultado" }}}
							@endif
						</td>

					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
<script>

    $(document).ready(function(){
    	var tabla = $("#tabla_puntajes").DataTable({
    		dom: 'frtipB',
    		buttons: [
			    'excel'
			],
	        "order": [[ 5, "desc" ]]
	    });

	    tabla.on( 'order.dt search.dt', function () {
	        tabla.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
	            cell.innerHTML = i+1;
	        } );
	    } ).draw();
    });

</script>
@stop