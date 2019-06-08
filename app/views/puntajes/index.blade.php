@extends('layouts.default')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h3>
				Puntajes
			</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-striped" id="tabla_puntajes">
				<thead>
					<tr>
						<th></th>
						<th>Nombre Uuario</th>
						<th>Correo Usuario</th>
						<th>Numero Apuestas</th>
						<th>Fecha Ultima Apuesta</th>
						<th>Puntaje</th>
						<th>Bono Goles</th>
						<th>Multiplicador MaxiApuestas</th>
						<th>Suma Puntajes</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$contador = 0;
					?>
					@foreach($apostadores as $apostador)
					<?php 
						$contador++;
						$puntaje = 0;
						$bono = 0;
						$numero_apuestas = 0;
						$fecha_ultima_apuesta = "Sin Apuestas";

						//calculo multiplicador
		                $multiplicador = 1;
		                foreach (Maxiapuestum::where("idelegido_resultado","<>","")->where("idelegido_resultado","<>","null")->get() as $maxiApuesta) {
		                  $maxiapuestas_usuario = Apuestamaxi::where("iduser",$apostador->id)->where("idmaxiapuesta",$maxiApuesta->id)->where("idelegido","<>","")->where("idelegido","<>","null")->first();
		                  if(isset($maxiapuestas_usuario->id)){
		                    if($maxiapuestas_usuario->idelegido == $maxiApuesta->idelegido_resultado){
		                      $multiplicador = $multiplicador + 0.1;
		                    }
		                  }
		                }

						//calculo de puntajes + bono
						$apuestas = Apuesta::where("iduser",$apostador->id)->orderBy("updated_at","DESC")->get();
						if(isset($apuestas->first()->id)){
							$numero_apuestas = count($apuestas);
							$fecha_ultima_apuesta =  date("d-m-Y H:i:s",strtotime($apuestas->first()->updated_at));

							foreach ($apuestas as $key => $apuesta) {
								$puntaje_obj = $apuesta->getpuntaje;

								if(isset($puntaje_obj->id)){
									$puntaje = $puntaje + $puntaje_obj->puntaje;
									$bono = $bono + $puntaje_obj->bono;
								}
							}
						}
					?>
					<tr>
						<td>
						</td>
						<td>{{{ strtoupper($apostador->usuario_nombre." ".$apostador->usuario_apellido) }}}</td>
						<td>{{{ strtoupper($apostador->usuario_user) }}}</td>
						<td>{{{ $numero_apuestas }}}</td>
						<td>{{{ $fecha_ultima_apuesta }}}</td>
						<td>{{{ $puntaje }}}</td>
						<td>{{{ $bono }}}</td>
						<td>{{{ $multiplicador }}}</td>
						<td>{{{ ($bono + $puntaje)*$multiplicador }}}</td>
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
	        "order": [[ 8, "desc" ]]
	    });

	    tabla.on( 'order.dt search.dt', function () {
	        tabla.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
	            cell.innerHTML = i+1;
	        } );
	    } ).draw();
    });

</script>
@stop