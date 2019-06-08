@extends('layouts.login')
@section('content')

    <?php

    function getNav(){

        $user_agent = $_SERVER['HTTP_USER_AGENT'];

        if(preg_match('/(?i)MSIE [5-9]/',$user_agent)){
            //No permitido
            return 0;
        }
        else{
            //Permitido
            return 1;
        }
    }

    $web =  getNav();

    ?>

    <div class="login-container">
        <div class="login-header login-caret" id ="login_c">
            <div class="login-content">
                <a href="#" class="logo">
                    <img src="{{ asset('images/Codelco_Logo.png') }}" width="150" alt="" />
                </a>
                <p class="description"><p style="font-size:18px;"><b>Portal de Acreditación</b></p></p>
            </div>
        </div>

        <div class="login-progressbar">
            <div></div>
        </div>


        <div class="login-form">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="alert alert-info" style="font-size:16px;">
                        <b>
                            <div class="text-center">Oficina Norte (Calama):</div>
                            <br>
                            Entrega de credenciales​ se desarrollará hasta nuevo aviso en la siguiente dirección: EDIFICIO CORPORATIVO CODELCO NORTE ubicado en 11 norte 1291, Villa Exótica, Calama.
                            <br>
                            Inspecciones de Vehículos se continuarán realizando según agenda informada a las empresas en GESTIÓN VÍAL DCH ( EX Colegio Chuquicamata).
                        </b>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>

            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="alert alert-warning" style="font-size:16px;">
                        <b>
                            Estimado Usuario, plataforma de acreditación en mantención, 09-06-2017 entre las 18:00 pm y 23:59 pm. Agradecemos su comprensión.<br /><br />Workmate.
                        </b>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
            <div class="login-content">
                <br>
                @if($web != 1)
                    <div class="form-group alert alert-danger">
                        <b>Estimado usuario, el navegador que esta utilizando no es compatible con el sistema.</b>
                        <p>Favor descargue alguno de los navegadores del listado que aparece a continuación.
                    </div>
                @endif
                <div class="form-group">

                    <table width="320" border="0" style="color:#FFFFFF;font-size:10px">
                        <tr>
                            <td colspan="3">Navegadores Recomendados</td>
                        </tr>
                        <tr>
                            <td width="106"><a href="https://www.mozilla.org/es-CL/firefox/new/"  target="_blank">
                                    <img src="{{ asset('images/mozilla_firefox.png') }}" width="30" alt="" /></a></td>
                            <td width="106"><a href="https://www.google.com/chrome/browser/desktop/index.html" target="_blank" >
                                    <img src="{{asset('images/chrome_ico.png')}}" width="30" alt="" /></a></td>
                            <td width="106"><a href="http://windows.microsoft.com/es-es/internet-explorer/download-ie"  target="_blank"><img src="{{asset('images/internet_explorer.png')}}" width="30" alt="" /></a></td>
                        </tr>
                        <tr>
                            <td>firefox</td>
                            <td>chrome</td>
                            <td>iexplorer 11 </td>
                        </tr>
                    </table>
                </div>
                <div class="login-bottom-links" style="color: white">
                    <br />
                    Teléfonos
                    <br>
                    Mesa de ayuda (Sistema) : 228629145
                    <br>
                    Oficina zona norte : 55 - 2337935
                    <br>
                    Oficina el salvador : 569 - 44782748
                    <br />
                    &copy; RM-Software propiedad <strong><a href="http://www.workmate.cl/">Workmate Ltda.</a></strong> 2016
                </div>
            </div>
        </div>
    </div>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">

        $(document).ready(function() {

            $("#show").click(function(){
                $("#recuperarpass").show();
              });

            $("#loginbutton").click(function(){

                if($("#username").val() == ""){
                    $("#username").focus();
                    return false;
                }

                if($("#password").val() == ""){
                    $("#password").focus();
                    return false;
                }

                $("#form_login").submit();
            });

            $('#solicitar_usuario').click(function(){

                $('#div_envio_externo').show();
            });

            $('#envio_externo').click(function(){

                if($('input[name="email_usuario_externo"]').val() != ""){

                    $('#envio_externo').prop('disabled', true);
                    $('#envio_externo').html('Generando usuario, favor espere...');
                    $.ajax({
                        url: _site_url+'solicitud_usuarios/enviar-usuario-externo',
                        type: 'POST',
                        data: {email: $('input[name="email_usuario_externo"]').val()},
                    }).done(function() {
                        console.log("success");
                        alert('Su solicitud fue ingresada con éxito, en los próximos minutos se enviará un correo a '+$('input[name="email_usuario_externo"]').val()+' con el usuario y contraseña temporal asignado.');
                        location.reload();
                    });

                }else{
                    alert('Debe ingresar un correo para el envío de usuario.');
                }
            });

        });
    </script>
@stop