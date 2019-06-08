@extends('layouts.default')
@section('content')
<div class="row">
  @if (isset($message) && (strlen($message)>0))
      <div class="alert alert-{{isset($color)?$color:"default"}}">
          {{ $message  }}
      </div>
  @endif

  <div class="row">
      <div class="col-md-12">
          <div class="col-md-6 col-md-offset-3 text-center">
              <span class="text">
                  <h1>Ingreso Solicitudes de Usuario</h1>
              </span>
          </div>
      </div>

      {{ Form::open(array('id'=>'form_solicitud','url' => 'solicitud_usuarios/guardar-solicitud','method'=>'post','class'=>'form-horizontal form-groups-bordered','role'=>'form')) }}

      <div class="form-group">
          <div class="alert alert-success col-md-4 col-md-offset-4">
              <label for="rut_empresa">Rut Empresa</label>
              <input class="form-control redirect" type="hidden" name="redirect" value="0" id="redirect"/>
              <input class="form-control id_empresa" type="hidden" name="id_empresa" id="id_empresa"/>
              <input class="form-control rut_empresa" autocomplete="off" type="text" name="rut_empresa" id="rut_empresa"  title="Ingrese rut de empresa solicitante"/>
              <label for="razon_social">Razón Social Empresa</label>

              <input class="form-control razon_social" type="text" name="razon_social" id="razon_social" title='Ingrese razón social de la empresa solicitante'/>
          </div>
      </div>

      <div class="row">
          <a class="btn btn-blue btn-icon icon-left col-md-2 col-md-offset-5" id="bnt_add" type="button">
              Agregar Solicitud de Usuario
              <i class="entypo-plus"></i>
          </a>
      </div>

      <br>

      <div class="col-md-12">

          <table class="table table-condensed table-bordered table-hover" id="tabla_solicitud">
              <thead>
              <tr>
                  <th class="text-center">#</th>
                  <th>Rut Solicitante</th>
                  <th>Nombres</th>
                  <th>Apellidos</th>
                  <th>E-Mail Envío Respuesta</th>
                  <th>División</th>
                  <th>Eliminar Fila</th>
              </tr>
              </thead>
              <tbody>

              </tbody>
          </table>
          {{ Form::close() }}
      </div>
  </div>

    <div class="col-md-3 col-md-offset-5 center">
        {{ link_to('logout', 'Volver', ['class' => 'btn btn-default']) }}
        <button type="button" data-sitekey="6LcVPlsUAAAAAJNy2u_c6mBq8p0TFraf-T4JlLWn" id="enviar" class="btn btn-blue g-recaptcha">ENVIAR</button>
    </div>
  </div>

</div>

<script type="text/javascript">

  $(document).ready(function(){
      $('#enviar').attr('disabled', true);
      $('.rut_solicitante').Rut();

      $("#bnt_add").click(function(){
            $('#enviar').attr('disabled', false);
              var tr = document.getElementById("tabla_solicitud").rows.length;

              if(tr < 11){

                    $("#tabla_solicitud > tbody").append("" +
                    "<tr id=tr_"+tr+">" +
                    "<td>"+tr+"</td>" +
                    "<td><input class='emp_solicitante"+tr+"' type='hidden' name='emp_solicitante[]' id='emp_solicitante'></input>" +
                    "<input class='id_sol_div"+tr+"' type='hidden' name='id_sol_div[]' id='id_sol_divtr_"+tr+"'>" +
                    "<input class='rut_edit_div"+tr+"' type='hidden' name='rut_edit_div[]' id='rut_edit_divtr_"+tr+"'>" +
                    "<input autocomplete='off' class='form-control validate-has-error rut_persona rut_solicitante"+tr+"' type='text' name='rut_solicitante[]' id='rut_solicitantetr_"+tr+"' title='Ingrese RUT de la persona solicitante'></input></td>" +
                    "<td><input class='form-control nombre"+tr+"' type='text' name='nombre[]' id='nombretr_"+tr+"' title='Ingrese NOMBRES persona solicitante'></input></td>" +
                    "<td><input class='form-control apellido"+tr+"' type='text' name='apellido[]' id='apellidotr_"+tr+"' title='Ingrese APELLIDOS persona solicitante'></td>" +
                    "<td><input class='form-control mailrl validate-has-error mail_envio"+tr+"' type='text' name='mail_envio[]'  id='mail_enviotr_"+tr+"'></td>" +
                    "<td class='Select_Division"+tr+"'>"+select_division()+"</td>" +
                    "<td><button  class='btn btn-danger btn-sm btn_delete' type='button'> <i class='entypo-cancel'></i></button></td>" +
                    "</tr>");

                }
              tr++;
          });

      function select_division(){

                var tr = document.getElementById("tabla_solicitud").rows.length;
                var getUrl = window.location;
                $.ajax({
                    type: "post",
                    url: getUrl + '/trae-division',
                    data:{tr:tr},

                    statusCode: {
                        404: function() {
                            toastr.error("Pagina no encontrada","Mensaje de Sistema");
                        }
                    },
                    error: function(jqXHR,estado,error) {
                        toastr.error("Se a generado un error en el sistema, contacte a su administrador.","Mensaje de Sistema");
                        console.log(estado);
                        console.log(error);

                    },
                    success: function(data) {

                        var tr = document.getElementById("tabla_solicitud").rows.length;
                        tr=tr-1;
                        $(".Select_Division"+tr).html(data);

                        $('.emp_solicitante'+tr).val($('#id_empresa').val());
                    }
                });

            }

      $("#rut_empresa").keyup(function(){

                var rut = "RUT=" + $(this).val();
                var getUrl = window.location;

                $.ajax({
                    type: "POST",
                    url: getUrl + "/existe-rutemp",
                    data: rut,

                    statusCode: {
                        404: function() {
                            toastr.error("Pagina no encontrada","Mensaje de Sistema");
                        }
                    },
                    error: function(jqXHR,estado,error) {
                        toastr.error("Se a generado un error en el sistema, contacte a su administrador 3","Mensaje de Sistema");
                        console.log(estado);
                        console.log(error);

                    },
                    success: function(data) {

                        if(data=='NOEXISTE'){

                        }else{

                            var nom = data.razon_social;

                            confirmar=confirm("¿Ud. ingreso el Rut de la empresa "+nom+". Desea continuar con la solicitud?");

                            if (confirmar){
                                $('#id_empresa').val(data.id);
                                $('#rut_empresa').val(data.rut_empresa+"-"+data.dv_empresa);
                                $('#razon_social').val(data.razon_social);

                            }else{

                                $('#rut_empresa').val("");
                                $('#rut_empresa').focus();
                            }
                        }
                    }
                });

            });

      $("#enviar").click(function(){

            $('#enviar').attr('disabled', true);
            $('#enviar').html('Generando, favor espere...');

            var tr = document.getElementById("tabla_solicitud").rows.length - 1;

            if (!Fn.validaRut( $("#rut_empresa").val() )){

                toastr.error("El rut de empresa ingresado no es válido <br> Favor ingrese un rut con el siguiente formato 'XXXXXXXX-X'","Mensaje de sistema");
                HabilitarEnviar();
                return false;
            }

            var validate_Rut = 0;
            $(".rut_persona").each(function(index,value) {

                if (!Fn.validaRut($(this).val())){
                    validate_Rut = 1;
                }
            });

            if(validate_Rut == 1){
                toastr.error("El rut de persona ingresado no es válido <br> Favor ingrese un rut con el siguiente formato 'XXXXXXXX-X'","Mensaje de sistema");
                HabilitarEnviar();
                return false;
            }

            var con=0;

            var conboxes = 0;

            var flag = 0;

            for(i = 1; i<=tr; i++){

                if($("#rut_empresa").val()==""){

                    toastr.error("Ingrese rut empresa","Informacion de sistema");
                    $("#rut_empresa").focus();
                    $("#rut_empresa").css({'background-color' : '#bfbfbf'});
                    // $("#rut_empresa").css("border", "2px solid red");
                    $('html, tbody').animate({ scrollTop: 0},'fast');
                    HabilitarEnviar();
                    return false;
                }

                if($("#razon_social").val()==""){

                    toastr.error("Ingrese nombre empresa","Informacion de sistema");
                    $("#razon_social").focus();
                    $("#razon_social").css({'background-color' : '#bfbfbf'});
                    //  $("#razon_social").css("border", "2px solid red");
                    $('html, tbody').animate({ scrollTop: 0},'fast');
                    HabilitarEnviar();
                    return false;
                }

                var unique_values = {};
                var list_of_values = [];

                $('input[name="rut_solicitante[]"]').each(function(){

                    //  alert($(this).val());
                    if (!unique_values[$(this).val()]){
                        unique_values[$(this).val()] = true;
                        list_of_values.push($(this).val());
                        con++;
                    }else{
                        if ($(this).val() != ""){
                            toastr.error("Rut ingresado esta repetido","Informacion de sistema");
                            $(this).val("");
                            con=0;
                            HabilitarEnviar();
                            return false;
                        }
                    }
                });

                if($(".rut_solicitante"+i).val()==""){

                    toastr.error("Ingrese rut solicitante","Informacion de sistema");
                    $(".rut_solicitante"+i).focus();
                    $(".rut_solicitante"+i).css({'background-color' : '#bfbfbf'});
                    // $(".rut_solicitante"+i).css("border", "2px solid red");
                    $('html, body').animate({ scrollTop: 0},'fast');
                    con=0;
                    HabilitarEnviar();
                    return false;
                }else{
                    con++;
                }

                if($(".nombre"+i).val()==""){

                    toastr.error("Ingrese nombre","Informacion de sistema");
                    $(".nombre"+i).focus();
                    $(".nombre"+i).css({'background-color' : '#bfbfbf'});
                    // $(".nombre"+i).css("border", "2px solid red");
                    $('html, tbody').animate({ scrollTop: 0},'fast');
                    con=0;
                    HabilitarEnviar();
                    return false;
                }else{
                    con++;
                }

                if($(".apellido"+i).val()==""){

                    toastr.error("Ingrese apellido","Informacion de sistema");
                    $(".apellido"+i).focus();
                    $(".apellido"+i).css({'background-color' : '#bfbfbf'});
                    //  $(".apellido"+i).css("border", "2px solid red");
                    $('html, tbody').animate({ scrollTop: 0},'fast');
                    con=0;
                    return false;
                    HabilitarEnviar();
                }else{
                    con++;
                }

                if($(".mail_envio"+i).val()==""){

                    toastr.error("Ingrese correo para respuesta","Informacion de sistema", {timeOut: 7000});
                    $(".mail_envio"+i).focus();
                    $(".mail_envio"+i).css({'background-color' : '#bfbfbf'});
                    //   $(".mail_envio"+i).css("border", "2px solid red");
                    $('html, body').animate({ scrollTop: 0},'fast');
                    con=0;
                    HabilitarEnviar();
                    return false;
                }else{
                    /**/
                    var emailrevision = $(".mail_envio"+i).val() ;

                    if(!ValidaEmail(emailrevision)){
                    $(".mail_envio"+i).focus();
                    $(".mail_envio"+i).css({'background-color' : '#bfbfbf'});
                    toastr.error("El correo <b>'"+emailrevision+"'</b> no es una dirección de correo válido","Informacion de sistema", {timeOut: 7000});
                    HabilitarEnviar();
                    return false;
                    }
                    /**/
                    con++;
                }

                var cboxes = document.getElementsByName('division_tr'+i+'.[]');

                for(var z = 0, j = cboxes.length; z < j; z++) {

                    if(cboxes[z].checked){
                        conboxes ++;
                    }
                }

                if(conboxes == 0){

                    flag = 1;
                }
            }

            if(tr>=1){

                if(flag == 1){

                    toastr.error("Debe seleccionar al menos una division por usuario","Informacion de sistema", {timeOut: 6000});
                    return false;
                }

                //  alert(con);

                if (con > 0){

                    confirmar = confirm("¿Desea enviar la solicitud de usuarios?");

                    if (confirmar){
                        $('#form_solicitud').submit();
                        toastr.success("Solicitud enviada correctamente.","Mensaje de Sistema", {timeOut: 8000});
                    }
                }
            }

      });

            var validate = 0;

            $("#tabla_solicitud").on('keyup','tr', function(event){
                event.preventDefault();

                var id_tr = $(this).closest("tr").attr("id");
                var rut = $(this).closest("tr").find("#rut_solicitante"+id_tr).val();
                if (rut.length > 6){

                    $.ajax({
                        type: "POST",
                        url: "solicitud_usuarios/existe-rut",
                        data: {
                            rut:rut

                        },
                        statusCode: {
                            404: function(){
                                toastr.error("Pagina no encontrada", "Mensaje de Sistema");
                            }
                        },
                        error: function(jqXHR,estado,error) {
                            toastr.error("Se a generado un error en el sistema, contacte a su administrador","Mensaje de Sistema");
                            console.log(estado);
                            console.log(error);
                        },
                        success: function(data){

                            if (rut == data.rut_solicitante){

                                confirmar=confirm("¿El rut se encuentra ingresado. Desea asignar las divisiones nuevamente?");
                                if (confirmar){

                                    $("#nombre"+id_tr).val(data.nombres);
                                    $("#apellido"+id_tr).val(data.apellidos);
                                    $("#mail_envio"+id_tr).val(data.mail_respuesta);
                                    $("#rut_edit_div"+id_tr).val(rut);
                                    $("#id_sol_div"+id_tr).val(data.id_usr_solicitudes);

                                    var tr = document.getElementById("tabla_solicitud").rows.length;
                                    for(i = 1; i<=tr; i++){
                                        var cboxes = document.getElementsByName('division_tr'+i+'.[]');
                                        for (var z = 0, j = cboxes.length; z < j; z++) {

                                            if(cboxes[z].value == data.fkid_proy_proyectos){
                                                //     $('input[name="division_tr'+i+'.[]"]').prop("checked",true);

                                                $("#division_tr"+i).prop("checked",true);
                                                return false;
                                            }
                                        }
                                    }
                                }
                            }
                            // alert(validate);
                            if (validate == 1){

                                $("#nombre"+id_tr).val("");
                                $("#apellido"+id_tr).val("");
                                $("#mail_envio"+id_tr).val("");

                            }
                        }
                    });
                }
            });

            $("#tabla_solicitud").on('click','.btn_delete', function(){
                $(this).closest("tr").remove();
                var tr = document.getElementById("tabla_solicitud").rows.length;
                if(tr>1){
                    var x = 0;
                    $('#tabla_solicitud tr').each(function () {
                        $(this).attr("id", "tr_"+x);
                        $("#tr_"+x).children("td").eq(0).text(x);
                        x++;

                    });
                }
            });

      /* $('img.captcha').on('click', function(e){
          e.preventDefault();
          nuevo_captcha();
      });

      function nuevo_captcha(){
        $.ajax({
            type: "GET",
            url: '/ajax_regen_captcha',
        }).done(function( msg ) {
            $('img.captcha').attr('src', msg);
        });

        $('input[name="captcha"]').val('');

        HabilitarEnviar();
      }; */

      function ValidaEmail(email){
        var re = /^(?:[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/;
        return re.test(email);
      };

      function HabilitarEnviar(){
        $('#enviar').html('Enviar');
        $('#enviar').attr('disabled', false);
      };

  });

  var Fn = {
            // Valida el rut con su cadena completa "XXXXXXXX-X"
            validaRut : function (rutCompleto) {
                if (!/^[0-9]+-[0-9kK]{1}$/.test( rutCompleto ))
                    return false;
                var tmp     = rutCompleto.split('-');
                var digv    = tmp[1];
                var rut     = tmp[0];
                if ( digv == 'K' ) digv = 'k' ;
                return (Fn.dv(rut) == digv );
            },
            dv : function(T){
                var M=0,S=1;
                for(;T;T=Math.floor(T/10))
                    S=(S+T%10*(9-M++%6))%11;
                return S?S-1:'k';
            }
        }

</script>

@stop
