@extends('layouts.default')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h3>
				Ingresar Resultados
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
												<th>Id Partido</th>
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
					                            
					                            {{Form::open(array('url' => 'partidos/'.$partido->id, 'role' => 'form', 'method' => 'put'))}}

					                            
					                            {{Form::hidden('local',$partido->local)}}
					                            {{Form::hidden('visita',$partido->visita)}}
					                            {{Form::hidden('idfase',$partido->idfase)}}

												<tr>
													<td>
														{{{$contador}}}
													</td>
													<td>{{{ $partido->id }}}</td>
													<td>
														{{{ strtoupper($partido->getfase->descripcion) }}}
													</td>
													<td>
														<img src="{{{"../".$partido->getlocal->url_imagen}}}" alt="{{{$partido->getlocal->nombre}}}">{{{ strtoupper(" - ".$partido->getlocal->nombre) }}}
													</td>
													<td>
														{{{ strtoupper($partido->getvisita->nombre." - ") }}}<img src="{{{"../".$partido->getvisita->url_imagen}}}" alt="{{{$partido->getvisita->nombre}}}">
													</td>
													<td>
														{{{ date("d-m-Y H:i:s",strtotime($partido->fechahora_partido)) }}}
													</td>
													<td class="text-center">
						                                <div>
						                                    @if(strtotime(date('Y-m-d H:i:s')) > strtotime($partido->fechahora_partido))
						                                        <?php
						                                            $defecto = $partido ? $partido->res_local: null;
						                                        ?>
						                                        @if($defecto)
						                                        {{{$defecto}}}
						                                        @else
						                                        {{Form::number('res_local',$defecto,array("class" => "form-control input-sm", "min" => 0, "max" => 99))}}
						                                        @endif
						                                    @else
						                                        {{{"-"}}}
						                                    @endif
						                                </div>
						                            </td>
						                            <td class="text-center">
						                                <div>
						                                    @if(strtotime(date('Y-m-d H:i:s')) > strtotime($partido->fechahora_partido))
						                                        <?php
						                                            $defectov = $partido ? $partido->res_visita: null;
						                                        ?>
						                                        @if($defectov)
						                                        {{{$defectov}}}
						                                        @else
						                                        {{Form::number('res_visita',$defectov,array("class" => "form-control input-sm", "min" => 0, "max" => 99))}}
						                                        @endif
						                                    @else
						                                        {{{"-"}}}
						                                    @endif
						                                </div>
						                            </td>
													<td>
								                        @if($partido->res_visita == null)
								                            <button type="submit" class="btn btn-success">Guardar</button>
								                        @else
								                            {{{$resultado}}}
								                        @endif
								                    </td>
								                </tr>
								                {{Form::close()}}
												@endif
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
@stop