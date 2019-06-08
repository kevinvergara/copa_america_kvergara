@extends('layouts.default')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
            {{Form::open(array('url' => 'fases', 'role' => 'form', 'method' => 'post'))}}
				<div class="form-group">
					 
					<label for="descripcion">
						Descripción
					</label>
					{{Form::text('descripcion',null,array("class" => "form-control"))}}
				</div>
				<div class="form-group">
					 
					<label for="fecha_inicio">
						Fecha de inicio
					</label>
					{{Form::text('fecha_inicio',null,array("class" => "form-control", "data-mask" => "date"))}}
				</div>
                <div class="form-group">
					 
					<label for="fecha_termino">
						Fecha de termino
					</label>
					{{Form::text('fecha_termino',null,array("class" => "form-control", "data-mask" => "date"))}}
				</div>
				<button type="submit" class="btn btn-primary">
					Guardar
				</button>
            {{Form::close()}}
		</div>
	</div>
</div>
@stop