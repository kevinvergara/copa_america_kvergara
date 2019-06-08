@extends('layouts.default')
@section('content')

<style type="text/css">
    .fullscreen-modal .modal-dialog {
  margin: 0;
  margin-right: auto;
  margin-left: auto;
  width: 100%;
}
@media (min-width: 768px) {
  .fullscreen-modal .modal-dialog {
    width: 750px;
  }
}
@media (min-width: 992px) {
  .fullscreen-modal .modal-dialog {
    width: 970px;
  }
}
@media (min-width: 1200px) {
  .fullscreen-modal .modal-dialog {
     width: 1170px;
  }
}

.carousel-info img {
    height: 100px;
    padding: 3px;
}
.carousel-info {
    overflow: hidden;
}

.carousel-info span {
    display: block;
}

 span.testimonials-name {
    color: #000;
    font-size: 16px;
    font-weight: bold;
    margin: 23px 0 7px;
}

span.testimonials-post {
  color: red;
  font-size: 30px;
  font-weight: bolder;
}

img#primero:hover {
  -webkit-animation: pseconds 1.0s forwards;
  -webkit-animation-iteration-count: 1;
  -webkit-animation-delay: 1s;
  animation: pseconds 1.0s forwards;
  animation-iteration-count: 1;
  animation-delay: 1s;
  position: relative;
    
}
@-webkit-keyframes pseconds {
  0% {
    
  }
  100% {
    content: url('./images/gifprimero.gif'); 
  }
}
@keyframes pseconds {
  0% {
  }
  100% {
    content: url('./images/gifprimero.gif');      
  }
}

img#segundo:hover {
  -webkit-animation: sseconds 1.0s forwards;
  -webkit-animation-iteration-count: 1;
  -webkit-animation-delay: 2s;
  animation: sseconds 1.0s forwards;
  animation-iteration-count: 1;
  animation-delay: 2s;
  position: relative;
}
@-webkit-keyframes sseconds {
  0% {
    
  }
  100% {
    content: url('./images/gifsegundo.gif'); 
  }
}
@keyframes sseconds {
  0% {
  }
  100% {
    content: url('./images/gifsegundo.gif');      
  }
}

img#tercero:hover {
  -webkit-animation: tseconds 1.0s forwards;
  -webkit-animation-iteration-count: 1;
  -webkit-animation-delay: 2s;
  animation: tseconds 1.0s forwards;
  animation-iteration-count: 1;
  animation-delay: 2s;
  position: relative;
    
}
@-webkit-keyframes tseconds {
  0% {
    
  }
  100% {
    content: url('./images/giftercero.gif'); 
  }
}
@keyframes tseconds {
  0% {
  }
  100% {
    content: url('./images/giftercero.gif');      
  }
}

#ryu { position: relative; content: url('./images/Ryu.gif'); ; width: 200px; height: 100px; float: left;}
#hadouken { position: absolute; content: url('./images/hadouken.gif'); ; width: 200px; height: 100px; float: left;}


</style>
  <script type="text/javascript" src="https://cdn.rawgit.com/mikeflynn/egg.js/master/egg.min.js"></script>
  <?php
  $perfiles = array_column($_SESSION['DATA_USER']["perfiles"],"fkid_perfil");
  $id_user = $_SESSION['DATA_USER']["usuario"]->id;
  ?>

  <link href="<?php echo asset('css/font-icons/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
  <div class="modal" role="dialog" aria-labelledby="myModal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header ">
                <button type="button" class="close" onclick="$('#myModal').toggle();">&times;</button>
                <h4 class="modal-title">BASES DEL CONCURSO</h4>
            </div>
            <div class="modal-body ">
              <div id="hidden_request" class="pre-scrollable" style="height: 1500px">
                <h1><strong>Bases</strong></h1>
                <h2>1.&nbsp;&nbsp; Tipo de apuestas:</h2>
                <ol style="list-style-type: lower-alpha;">
                <li>LEV (Local, Empate o Visita)<strong> *</strong>.</li>
                <li>Resultado final (Marcador al finalizar el partido) <strong>*</strong>.</li>
                </ol>
                <p><strong>La apuesta podr&aacute; ser ingresada con plazo m&aacute;ximo la hora del inicio del partido en cuesti&oacute;n, luego la opci&oacute;n de apostar se encontrar&aacute; cerrada (huso horario Chile Continental).</strong></p>
                <p><strong>*</strong>Se considera el marcador final del partido al termino de los 90 minutos reglamentarios o 120 minutos en caso de alargue, <strong>no</strong> se considerar&aacute; el resultado en caso de haber penales.</p>
                <h2>2.&nbsp;&nbsp; Puntaje**</h2>
                <ol style="list-style-type: lower-alpha;">
                <li>Participaci&oacute;n por partido, equivale a un punto (1 punto).</li>
                <li>Resultado LEV (Local, Empate o Visita), equivale a dos puntos (2 puntos).</li>
                <li>Resultado Final, equivale a cuatro puntos (4 puntos).</li>
                </ol>
                <p><strong>Si el participante no ingresa su apuesta para el o los partidos, esto se considerar&aacute; como que no participa y no obtendr&aacute; puntos.</strong></p>
                <p><strong>**</strong>El o los ganadores se ver&aacute;n al finalizar el campeonato, sumando todo el puntaje acumulado.</p>
                <h2>3.&nbsp;&nbsp; Apuesta Opcional Podio.</h2>
                <ol style="list-style-type: lower-alpha;">
                <li>Antes del inicio del campeonato se podr&aacute; apostar por el resultado de los 3 primeros lugares, ganador y perdedor de la final, ganador del partido entre los perdedores de la semifinal, mejor jugador del campeonato, maximo goleador del campeonato, mejor arquero del campeonato. Por cada acierto se aplicar&aacute; un porcentaje adicional al puntaje total obtenido al finalizar el campeonato.
                <ol style="list-style-type: lower-roman;">
                <li>1 acierto, 1,1% extra en el puntaje total.</li>
                <li>2 aciertos, 1,2% extra en el puntaje total.</li>
                <li>3 aciertos, 1,3% extra en el puntaje total.</li>
                <li>4 acierto, 1,4% extra en el puntaje total.</li>
                <li>5 aciertos, 1,5% extra en el puntaje total.</li>
                <li>6 aciertos, 1,6% extra en el puntaje total.</li>
                </ol>
                </li>
                </ol>
                <p><strong>El total del puntaje, aplicando la apuesta opcional, podr&iacute;a quedar con valores con decimales, se considerar&aacute;n 3 d&iacute;gitos a la derecha de la coma.</strong></p>
              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="$('#myModal').toggle();">Cerrar</button>
            </div>
        </div>
    </div>
  </div>

  <div class="modal" role="dialog" aria-labelledby="moda_premios" id="moda_premios">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header ">
                <button type="button" class="close" onclick="$('#moda_premios').toggle();">&times;</button>
                <h4 class="modal-title">Premios</h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-12">
                  <table>
                    <tbody>
                      <tr>
                        <td class="col-sm-4 text-center">
                          <div class="carousel-info">
                            <img id="primero" alt="" src="{{{url('images/tele.png')}}}" class="pull-left">
                          </div>
                        </td>
                        <td class="col-sm-8">
                          <span class="testimonials-name">{{{"1° Lugar: LED 50” Samsung Ultra HD 4K."}}}</span>
                        </td>
                      </tr>
                      <tr>
                        <td class="col-sm-4 text-center">
                          <div class="carousel-info">
                            <img id="segundo" alt="" src="{{{url('images/camiseta.png')}}}" class="pull-left">
                          </div>
                        </td>
                        <td class="col-sm-8">
                          <span class="testimonials-name">{{{"2° Lugar: Camiseta del campeón mundial."}}}</span>
                        </td>
                      </tr>
                      <tr>
                        <td class="col-sm-4 text-center">
                          <div class="carousel-info">
                            <img id="tercero" alt="" src="{{{url('images/pelota.png')}}}" class="pull-left">
                          </div>
                        </td>
                        <td class="col-sm-8">
                          <span class="testimonials-name">{{{"3° Lugar: Pelota del mundial."}}}</span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="$('#moda_premios').toggle();">Cerrar</button>
            </div>
        </div>
    </div>
  </div>

  <div class="container-fluid">
      <div>
          <div id="ryu" hidden></div>
          <div id="hadouken" hidden></div>
          <audio id="mysoundclip" preload="auto">
              <source src="{{url('hadouken.mp3')}}"></source>
          </audio>
        </div>
    <div class="row">
      <div class="col-sm-12">
          <h2>Bienvenida(o) al sistema de copa américa</h2>
          
          <h3><b>Ranking!!!!</b></h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 alert alert-success">
          <h3>BASES DEL CONCURSO</h3>
          <h4>Antes de participar favor lea las bases del concurso. BUENA SUERTE!</h4>
          <a href="#" class="btn btn-lg btn-success" onclick="$('html, body').animate({ scrollTop: 0 }, 'slow'); $('#myModal').show();">VER BASES</a>
      </div>
      <div class="col-sm-6 alert alert-success">
          <h3>Premios</h3>
          <h4>Listado de premios según las posiciones. BUENA SUERTE!</h4>
          <a href="#" class="btn btn-lg btn-success" onclick="$('html, body').animate({ scrollTop: 0 }, 'slow'); $('#moda_premios').show();">VER PREMIOS</a>
      </div>
    </div>
    @if(isset($primero["usuario"]->usuario_nombre))
    <div class="row">
        <div class="col-md-12 text-center">
          <h3 style="color: gold; font-weight: bolder">PUNTEROS</h3>
          <table style="border: 0px; width: 70%; margin-left: 15%;">
            <tbody>
              <tr>
                <td class="col-sm-4 text-center">
                  <div class="carousel-info">
                    <img id="primero" alt="" src="{{{url('images/copadelmundo.png')}}}" class="pull-left">
                  </div>
                </td>
                <td class="col-sm-5">
                  <span class="testimonials-name">{{{strtoupper($primero["usuario"]->usuario_nombre." ".$primero["usuario"]->usuario_apellido)}}}</span>
                </td>
                <td class="col-sm-3">
                  <span class="testimonials-post pull-right">{{{$primero["puntaje"]}}} Puntos</span>
                </td>
              </tr>
              <tr>
                <td class="col-sm-4 text-center">
                  <div class="carousel-info">
                    <img id="segundo" alt="" src="{{{url('images/segundo.jpeg')}}}" class="pull-left">
                  </div>
                </td>
                <td class="col-sm-5">
                  <span class="testimonials-name">{{{strtoupper($segundo["usuario"]->usuario_nombre." ".$segundo["usuario"]->usuario_apellido)}}}</span>
                </td>
                <td class="col-sm-3">
                  <span class="testimonials-post pull-right">{{{$segundo["puntaje"]}}} Puntos</span>
                </td>
              </tr>
              <tr>
                <td class="col-sm-4 text-center">
                  <div class="carousel-info">
                    <img id="tercero" alt="" src="{{{url('images/tecero.jpeg')}}}" class="pull-left">
                  </div>
                </td>
                <td class="col-sm-5">
                  <span class="testimonials-name">{{{strtoupper($tercero["usuario"]->usuario_nombre." ".$tercero["usuario"]->usuario_apellido)}}}</span>
                </td>
                <td class="col-sm-3">
                  <span class="testimonials-post pull-right">{{{$tercero["puntaje"]}}} Puntos</span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
    </div>
    @endif
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
                //calculo puntos mas bono y apuesta
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
  
    

  <script type="text/javascript">

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

    var egg = new Egg();

    var instructions = "left,down,right,a";
    var easterEggName = "Random Name";

    var action = function () {
        console.log("Triggered");
    };

    egg.addCode(instructions, action , easterEggName)
      .addHook(function () {
        $('#ryu').show();
        setTimeout(function(){
          $('#ryu').hide();
          $('#hadouken').css('left','25%');
          $("#hadouken").show();
          $("#mysoundclip")[0].play();
          width = "+=" + $(document).width();
            $("#hadouken").animate({
            left: width
          }, 2000, function() {
            $("#hadouken").hide();
          });
        }, 2000);
        
      }).listen();



  });

  </script>



@stop

