@extends('layouts.default')
@section('content')

<div class="row">
    <div class="col-sm-12 text-center">
        <h3>APUESTAS ADICIONALES</h3>
    </div>
</div>
<br>
<div class="row jumbotron">
    <div class="col-sm-12 text-center">
        @foreach($maxiapuestas as $ma)
            @if($ma->id == 1 || $ma->id == 4)
                <div class="col-sm-3 text-center">
            @else
                <div class="col-sm-offset-1 col-sm-3 text-center">
            @endif
                

                <?php
                    $mapuesta = $ma;
                    $opciones = MaxiOpcion::where('idmaxiapuesta',$ma->id)->lists('descripcion','id');
                    $primer_partido = Partido::orderBy('fechahora_partido','ASC')->first();
                ?>
                @include('apuesta_maxis.create',array("mapuesta" => $mapuesta, "opciones" => $opciones, "primer_partido" => $primer_partido))
            </div>
        @endforeach
    </div>
</div>
<br>
<div class="row">
    <div class="col-sm-12">
        <h3>SELECCIONA LA FASE EN QUE DESEAS APOSTAR</h3>
    </div>
</div>
<br>
<div class="row">
    <?php
        $i = 0;
        $clases = ["tile-primary", "tile-aqua","tile-blue","tile-orange", "tile-green", "tile-red"]
    ?>
    @foreach($fases as $fase)
        @if($fase->id <= 3)
            <div class="col-sm-4">
                <a href="{{ url('apuestas/create/'.Crypt::encrypt($fase->id)) }}" class="thumbnail">
                    <div class="tile-stats {{{$clases[$i]}}}"> 
                        <div class="icon"><i class='fa fa-futbol' aria-hidden='true'></i></div>

                        <div class="num" data-start="0" data-end="{{{$fase->cantpartidos}}}" data-prefix="" data-postfix=" Partidos" data-duration="1500" data-delay="0">{{{$fase->cantpartidos}}} Partidos</div> 
                        <h3>{{{strtoupper($fase->descripcion)}}}</h3> 
                        <p>Fecha de inicio: {{{date('d-m-Y',strtotime($fase->fecha_inicio))}}}</p> 
                    </div>
                </a>
            </div>
            <?php
                $i++;
            ?> 
        @endif
    @endforeach
</div>
<br>
<div class="row">
    @foreach($fases as $fase)
        @if($fase->id > 3)
            <div class="col-sm-4">
                <a href="{{ url('apuestas/create/'.Crypt::encrypt($fase->id)) }}" class="thumbnail">
                    <div class="tile-stats {{{$clases[$i]}}}"> 
                        <div class="icon"><i class='fa fa-futbol' aria-hidden='true'></i></div>

                        <div class="num" data-start="0" data-end="{{{$fase->cantpartidos}}}" data-prefix="" data-postfix=" Partidos" data-duration="1500" data-delay="0">{{{$fase->cantpartidos}}} Partidos</div> 
                        <h3>{{{strtoupper($fase->descripcion)}}}</h3> 
                        <p>Fecha de inicio: {{{date('d-m-Y',strtotime($fase->fecha_inicio))}}}</p> 
                    </div>
                </a>
            </div>
            <?php
                $i++;
            ?> 
        @endif
    @endforeach
</div>
@stop