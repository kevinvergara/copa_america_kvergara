@extends('layouts.default')
@section('content')

    <?php
    /*
    echo "<fieldset><legend></legend><pre>";
    print_r($_SESSION);
    echo "</pre></fieldset>";*/
    ?>

    <style>
        .checa{

            border:thick;
        }
    </style>

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-primary" data-collapsed="0">

                <div class="panel-heading">
                    <div class="panel-title">
                        EDITAR PERFIL USUARIOS
                    </div>

                    <div class="panel-options">
                        <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                    </div>
                </div>
                <div class="panel-body">

                    <div class="row">

                        {{ Form::open(array('url' => 'sysuser/editperfil','id'=>'frm_edit_perfil','role'=>'form', 'class'=>"form-horizontal form-groups-bordered" )) }}

                        <div class="col-md-4">
                            <label for="USUARIO_PASSWORD">Clave</label>
                            <input type="text" name="USUARIO_PASSWORD" id="USUARIO_PASSWORD" class="form-control"/>
                        </div>

                        <div class="col-md-4">
                            <div class="alert alert-info">
                                <h4><b>Mensaje Sistema</b></h4>
                                <p>Si no desea cambiar constraseña, dejar en blanco.</p>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <br/>
                        <div class="col-md-4">
                            <label for="USUARIO_NOMBRE">Nombre</label>
                            <input name="USUARIO_NOMBRE" type="text" class="form-control" id="USUARIO_NOMBRE" value="<?php echo $_SESSION["DATA_USER"]["usuario"]->usuario_nombre; ?>"  />
                        </div>
                        <div class="col-md-4">
                            <label for="USUARIO_APELLIDO">Apellido</label>
                            <input name="USUARIO_APELLIDO" type="text"  class="form-control" id="USUARIO_APELLIDO" value="<?php echo $_SESSION["DATA_USER"]["usuario"]->usuario_apellido; ?>"/>
                        </div>
                        <div class="col-md-4">
                            <label for="USUARIO_APELLIDO">Correo Electronico</label>
                            <input name="USUARIO_MAIL" type="text" class="form-control" id="USUARIO_MAIL" value="<?php echo $_SESSION["DATA_USER"]["usuario"]->usuario_email; ?>"/>
                            <input type="hidden" name="ESTADO_REGISTRO" id="ESTADO_REGISTRO" class="form-control"/>
                            <input name="ID_USUARIO" type="hidden" class="form-control" id="ID_USUARIO" value="<?php echo $_SESSION["DATA_USER"]["usuario"]->id; ?>"/>
                            <input type="hidden" name="created_at" id="created_at" class="form-control"/>
                            <input type="hidden" name="updated_at" id="updated_at" class="form-control"/>
                        </div>
                        <div class="clear"></div>
                        <br/>
                        <div class="col-md-2">
                            {{ Form::submit('GUARDAR CAMBIOS', array('class'=>'btn btn-blue')) }}

                        </div>
                        <div class="col-md-2">
                            <a href='{{{URL::previous()}}}' class='btn btn-green'>VOLVER</a>
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

    <script>
        $("#frm_edit_perfil").submit(function(){
            var form = $("#frm_edit_perfil").serialize();
            //alert(form);
            //return false;
        });
    </script>

@stop