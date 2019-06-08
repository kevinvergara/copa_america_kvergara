@extends('layouts.default')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h3>
				Listado de Partidos
			</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
		
			<div class="panel-group joined" id="accordion-test-2">
				@foreach(Fase::all() as $contador => $fase)
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion-test-2" href="#collapseOne-{{{$contador}}}">
								{{{ $fase->descripcion }}}
							</a>
						</h4>
					</div>
					<div id="collapseOne-{{{$contador}}}" class="panel-collapse collapse {{{(($fase->activo == 1) ? "in" : "")}}}">
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>#</th>
												<th>Fase</th>
												<th>Local</th>
												<th>Visita</th>
												<th>Horario Partido</th>
												<th>Goles local</th>
												<th>Goles Visita</th>
												<th>Resultado</th>
											</tr>
										</thead>
										<tbody>
											<?php 
												$contador = 0;
											?>
											@foreach($partidos as $partido)
											@if($partido->idfase == $fase->id)
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
												<td>
													{{{$contador}}}
												</td>
												<td>
													{{{ strtoupper($partido->getfase->descripcion) }}}
												</td>
												<td>
													<img src="{{{$partido->getlocal->url_imagen}}}" alt="{{{$partido->getlocal->nombre}}}">{{{ strtoupper(" - ".$partido->getlocal->nombre) }}}
												</td>
												<td>
													{{{ strtoupper($partido->getvisita->nombre." - ") }}}<img src="{{{$partido->getvisita->url_imagen}}}" alt="{{{$partido->getvisita->nombre}}}">
												</td>
												<td>
													{{{ date("d-m-Y H:i:s",strtotime($partido->fechahora_partido)) }}}
												</td>
												<td>
													{{{ ((is_null($partido->res_local)) ? "-" : $partido->res_local) }}}
												</td>
												<td>
													{{{ ((is_null($partido->res_visita)) ? "-" : $partido->res_visita) }}}
												</td>
												<td>
													{{{ $resultado }}}
												</td>

											</tr>
											@endif
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				{{--<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion-test-2" href="#collapseTwo-2" class="collapsed">
								Collapsible Group Item #2
							</a>
						</h4>
					</div>
					<div id="collapseTwo-2" class="panel-collapse collapse">
						<div class="panel-body">
							Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						</div>
					</div>
				</div>
				
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion-test-2" href="#collapseThree-2" class="collapsed">
								Collapsible Group Item #3
							</a>
						</h4>
					</div>
					<div id="collapseThree-2" class="panel-collapse collapse">
						<div class="panel-body">
							Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						</div>
					</div>
				</div>--}}
				@endforeach
			</div>
	
		</div>
	</div>
	
</div>
@stop