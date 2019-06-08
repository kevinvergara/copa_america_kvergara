@extends('layouts.default')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h3>
				Listado de fases
			</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Descripción</th>
						<th>Fecha Inicio</th>
						<th>Fecha Término</th>
						<th>Estado</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$contador = 0;
					?>
					@foreach($fases as $fase)
					<?php 
						$contador++;
					?>
					<tr>
						<td>
							{{{$contador}}}
						</td>
						<td>
							{{{ strtoupper($fase->descripcion) }}}
						</td>
						<td>
							{{{ date("d-m-Y",strtotime($fase->fecha_inicio)) }}}
						</td>
						<td>
							{{{ date("d-m-Y",strtotime($fase->fecha_termino)) }}}
						</td>
						<td>
							{{{ (($fase->activo == 0) ? "INACTIVA" : "ACTIVA") }}}
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@stop