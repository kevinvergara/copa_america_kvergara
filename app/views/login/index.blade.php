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
        <div class="login-header" id ="login_c">
            <div class="login-content">
                <a href="#" class="logo">
                    <img src="{{ asset('images/logo_brasil.jpg') }}" width="300" alt="" style="border-radius: 25%;" />
                </a>
                <p class="description"><p style="font-size:25px; color: white;"><b>COPA AMÉRICA 2019</b></p></p>
            </div>
        </div>

        <div class="login-progressbar">
            <div></div>
        </div>

        <div class="login-form">
            <div class="login-content">
                <br>
                @if($web == 1)
                    <form method="post" role="form" id="form_login" action="login" >
                      <div class="form-group">
                          <div class="input-group">
                              <div class="input-group-addon">
                                  <i class="entypo-user"></i>
                              </div>
                              <input type="text" class="form-control" name="username" id="username" placeholder="Usuario" autocomplete="off" />
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="input-group">
                              <div class="input-group-addon">
                                  <i class="entypo-key"></i>
                              </div>
                              <input type="password" class="form-control" name="password" id="password" placeholder="Contrase&ntilde;a" autocomplete="off" />
                          </div>
                      </div>
                      <div class="form-group">
                          <button type="button" class="btn btn-primary btn-block" id="loginbutton">
                              <i class="entypo-login"></i>
                              Entrar
                          </button>
                      </div>
                    </form>
                    <div class="form-group">
                        <div id="loader_login">
                        </div>
                    </div>
                    @if(isset($MENSAJE))
                        <br/>
                        <div class="form-group">
                            <button id="buttonerror" type="button" class="btn btn-default btn-lg btn-block btn-icon icon-left google-button">
                                <strong>Usuario o contrase&ntilde;a inválidos</strong>
                                <i class="entypo-attention"></i>
                            </button>
                        </div>
                    @endif
                @else
                    <div class="form-group alert alert-danger">
                        <b>Estimado usuario, el navegador que esta utilizando no es compatible con el sistema.</b>
                        <p>Favor descargue alguno de los navegadores del listado que aparece a continuación.
                    </div>
                @endif
                <div class="form-group">

                    <table width="320" border="0" style="color:#000;font-size:10px">
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


        });

    </script>
@stop
