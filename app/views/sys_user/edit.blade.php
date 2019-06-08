


@extends('layouts.default')
@section('content')



    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-primary" data-collapsed="0">

                <div class="panel-heading">
                    <div class="panel-title">
                        USUARIOS - Editar
                    </div>

                    <div class="panel-options">
                        <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                        <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                        <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                        <!--<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>-->
                    </div>
                </div>



                <div class="panel-body">
                    {{ HTML::ul($errors->all()) }}
                    {{ Form::open(array('url' => 'sysuser/update', 'method' =>'PUT', 'role'=>'form', 'class'=>"form-horizontal form-groups-bordered" )) }}






                    {{ Form::hidden('ID',$sys_user->ID, array('class'=>'forma-control')) }}

                    <div class="form-group">
                        {{ Form::label('USUARIO_USER', 'NOMBRE USUARIO', array('class'=>'col-sm-3 control-label')) }}

                        <div class="col-sm-5">

                            {{ Form::text('USUARIO_USER',$sys_user->USUARIO_USER, array('class'=>'form-control')) }}


                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('USUARIO_PASSWORD', 'CLAVE', array('class'=>'col-sm-3 control-label')) }}

                        <div class="col-sm-5">

                            {{ Form::text('USUARIO_PASSWORD','', array('class'=>'form-control')) }}

                            <div class="label label-info">SI NO DESEA CAMBIAR DEJAR EN BLANCO.</div>
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('USUARIO_NOMBRE', 'NOMBRE', array('class'=>'col-sm-3 control-label')) }}

                        <div class="col-sm-5">

                            {{ Form::text('USUARIO_NOMBRE',$sys_user->USUARIO_NOMBRE, array('class'=>'form-control')) }}


                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('USUARIO_APELLIDO', 'APELLIDO', array('class'=>'col-sm-3 control-label')) }}

                        <div class="col-sm-5">

                            {{ Form::text('USUARIO_APELLIDO',$sys_user->USUARIO_APELLIDO, array('class'=>'form-control')) }}


                        </div>
                    </div>


                    <div class="form-group">
                        <label for="USUARIO_APELLIDO"  class="col-sm-3 control-label">CORREO ELECTRONICO</label>

                        <div class="col-sm-5">
                            <input name="USUARIO_MAIL" type="text"   class="form-control" id="USUARIO_MAIL" value="{{{$sys_user->USUARIO_MAIL}}}"  />
                        </div>
                    </div>


                    <div class="form-group">
                        {{ Form::label('FKID_PERFILES', 'PERFIL', array('class'=>'col-sm-3 control-label')) }}

                        <div class="col-sm-5">


                            <?php echo Helper::selectadd($PERFILES,'FKID_PERFILES','ID','PERFILES_NOMBRE',$sys_user->FKID_PERFILES,"class='form-control'");?>

                        </div>
                    </div>
                    {{ Form::hidden('ESTADO_REGISTRO',$sys_user->ESTADO_REGISTRO, array('class'=>'form-control')) }}
                    <input name="SESION_SISTEMA" type="hidden"   class="form-control" id="SESION_SISTEMA" value="{{{$_SESSION["DATA_USER"]["usuario"]->id}}}"  />
                    {{ Form::hidden('updated_at',$sys_user->updated_at, array('class'=>'form-control')) }}
                    {{ Form::hidden('created_at',$sys_user->created_at, array('class'=>'form-control')) }}
                    <div class="form-group">
                        <label for="do_action"  class="col-sm-3 control-label">EDITAR</label>
                        <div class="controls">

                            {{ Form::submit('Submit', array('class'=>'btn btn-blue')) }}

                            <a href='{{{URL::previous()}}}' class='btn btn-default'>VOLVER</a>

                        </div>
                    </div>

                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
@stop
	