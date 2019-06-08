<h4><b>{{{$mapuesta->descripcion}}}</b></h4>
<?php
    $apuesta_existe = Apuestamaxi::where('iduser',$_SESSION["DATA_USER"]["usuario"]->id)->where('idmaxiapuesta',$mapuesta->id)->first();
?>
@if($apuesta_existe)
    {{Form::open(array('url' => 'apuestamaxis/'.$apuesta_existe->id, 'role' => 'form', 'method' => 'put'))}}
@else
    {{Form::open(array('url' => 'apuestamaxis', 'role' => 'form', 'method' => 'post'))}}
@endif
{{Form::hidden('iduser',$_SESSION["DATA_USER"]["usuario"]->id)}}
{{Form::hidden('idmaxiapuesta',$mapuesta->id)}}
<div class="row text-center">
    @if(strtotime(date('Y-m-d H:i:s')) < strtotime($primer_partido->fechahora_partido))
        @if($apuesta_existe)
            {{Form::select('idelegido',["" => "Seleccione"]+$opciones,$apuesta_existe->idelegido,array("class" => "form-control", "id" => "select2-".$mapuesta->id, "onload" => "setselect2($mapuesta->id)"))}}
        @else
            {{Form::select('idelegido',["" => "Seleccione"]+$opciones,null,array("class" => "form-control", "id" => "select2-".$mapuesta->id, "onload" => "setselect2($mapuesta->id)"))}}
        @endif
    @else
        @if($apuesta_existe)
            {{{strtoupper(MaxiOpcion::find($apuesta_existe->idelegido)->descripcion)}}}
        @else
            Sin apuesta
        @endif
        
    @endif
</div>
<br>
<div class="row text-center">
    @if(strtotime(date('Y-m-d H:i:s')) < strtotime($primer_partido->fechahora_partido))
        <button type="submit" class="btn btn-success">Guardar</button>
    @else
        Campeonato comenzado - <b>SUERTE! <icon class="fa fa-2x fa-thumbs-o-up text-danger"></icon></b>
    @endif
</div>
{{Form::close()}}
<script type="text/javascript">
    $(document).ready(function(){
        function setselect2(id){
            $("#select2-"+id).select2();
        };
    });
</script>