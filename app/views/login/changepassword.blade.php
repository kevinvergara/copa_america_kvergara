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
            <!--<div class="row">
                <div class="col-md-12">
                    <div class="alert alert-danger" role="alert"><font SIZE=3><b>AQUI PONER MENSAJE :° </b></font></div>
                </div>
            </div>-->
            <div class="login-content">
                <br>
                <LEGEND>CAMBIO DE CONTRASEÑA</LEGEND>
                @if($web == 1)
                    @if(!isset($MENSAJE))
                        <div class="alert alert-info">

                            <strong>Información :</strong> 
                            <p>Como medida de seguridad, solicitamos cambie su contraseña de acceso.</p>
                            <p>Su contraseña debe tener como minimo 6 caracteres.</p>

                        </div>
                    @else
                        <div class="alert alert-success">

                            <strong>Información :</strong> 
                            <p>Cambio de contraseña exitoso, debe reiniciar sesion.</p>
                            <br>
                            <button type="button" class="btn btn-green btn-block btn-login">
                                <a href="{{ asset('/logout') }}">
                                    <label style="color: white;">Reiniciar Sesión</label>
                                </a>
                            </button>
                            
                            

                        </div>
                    @endif
					<br>
					<form method="post" role="form" id="form_change" action="changepassword/cambiar" >
						<div class="form-group">					
						    <div class="input-group">
						        <div class="input-group-addon">
						            <i class="entypo-key"></i>
						        </div>
						        <input type="password" class="form-control" name="passnu" id="passnu" placeholder="Nueva contrase&ntilde;a" autocomplete="off" required/>
						    </div>				
						</div>
						<div class="form-group">					
						    <div class="input-group">
						        <div class="input-group-addon">
						            <i class="entypo-key"></i>
						        </div>
						        <input type="password" class="form-control" name="passre" id="passre" placeholder="Re-Ingrese nueva contrase&ntilde;a" autocomplete="off" required/>
						    </div>				
						</div>

						<div class="form-group">
						        <button type="submit" class="btn btn-primary btn-block btn-login" id="changebutton">
						<i class="entypo-login"></i>
						Cambiar Password
						</button>
						</div>



						<div class="form-group">
						<div id="loader_login" >


						</div>
						</div><br />

					</form>
                @else
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
                <div class="login-bottom-links">
                    <br />
                    Teléfonos
                    <br>
                    Mesa de Ayuda (Sistema) : 228629145
                    <br>
                    Oficina zona norte : 55 - 2337935
                    <br>
                    Oficina Salvador : 569 - 44782748
                    <br />
                    &copy; Software propiedad <strong>Kvergara</strong> 2019
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