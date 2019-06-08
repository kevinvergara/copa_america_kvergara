<?php

if(! isset($_SESSION["DATA_USER"]) || !isset($_SESSION['DATA_USER']["usuario"])){

    if(!Request::is('solicitud_usuarios')){
        echo "<script>
            window.location.href = base_url+'/logout';
            </script>";
    }
}else{

?>
<body  class="page-body page-fade">

<div class="page-container">
    <div class="sidebar-menu">

        <header class="logo-env">
            <div class="logo">
                <a href="{{url('home')}}" class="logo">
                    <img src="{{ asset('images/logotipo_rusia_2018.jpeg') }}" width="120" alt="" style="border-radius: 25%;" />
                </a>
            </div>
            <div class="sidebar-collapse">
                <a href="#" class="sidebar-collapse-icon with-animation">
                    <i class="entypo-menu"></i>
                </a>
            </div>
            <div class="sidebar-mobile-menu visible-xs">
                <a href="#" class="with-animation">
                    <i class="entypo-menu"></i>
                </a>
            </div>
        </header>

        <ul id="main-menu" class="">
            <br/>
            <?php
            foreach($_SESSION["DATA_MENU"]  as $MEN){
                if($MEN->fkid_modulomenu == 0){
                    echo "<li class='root-level'><a href=". $MEN->menu_accion." id=".substr($MEN->menu_titulo,0,5)."><i class='".$MEN->menu_icon."''></i><span>".$MEN->menu_titulo."</span></a>";

                    if(isset($_SESSION["DATA_SUBMENU"][0])){
                        echo "<ul>";
                        foreach($_SESSION["DATA_SUBMENU"] as $SUB){
                            $identificador="";

                            if($SUB->fkid_menu==$MEN->id){
                                echo "<li><a href=".asset($SUB->submenu_accion)." id=".$identificador." class=".$identificador."><span>".$SUB->submenu_titulo."</span></a>";
                            }
                        }
                        echo "</ul>";
                    }
                }
            }
            ?>
        </ul>
    </div>

    <div class="main-content" id="notifyx_id">
        <div class="row">
            <div >
                <ul class="list-inline links-list pull-left">
                    <li class="profile-info dropdown">
                        <a href="#" class="btn btn-info btn-icon icon-left dropdown-toggle" data-toggle="dropdown" style="color:#FFFFFF;" >
                            <i class="entypo-user"></i>
                            {{ucwords(strtolower($_SESSION["DATA_USER"]["usuario"]->usuario_nombre))}}&nbsp;{{ucwords(strtolower($_SESSION["DATA_USER"]["usuario"]->usuario_apellido))}}
                        </a>
                        <ul class="dropdown-menu">
                            <li class="caret"></li>
                            <li>
                                <a href="#">
                                    <i class="entypo-mail"></i>
                                    <?php echo $_SESSION["DATA_USER"]["usuario"]->usuario_email;?>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('sysuser/editarperfil');?>">
                                    <i class="entypo-user"></i>
                                    Editar Perfil
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- Raw Links -->
            <div style="width:100%;" >
                <ul class="list-inline pull-left breadcrumb col-md-12">
                    <li>
                        <a href="#" data-toggle="chat" data-animate="1" data-collapse-sidebar="1">
                            <i class="entypo-users"></i>{{$_SESSION["DATA_USER"]["usuario"]->perfiles_nombre}}
                        </a>
                    </li>
                    <li>
                        <a href="{{url('home')}}" data-toggle="chat" data-animate="1" data-collapse-sidebar="1">
                            <i class="entypo-home"></i>
                            IR A INICIO
                        </a>
                    </li>
                    <li class="pull-right" style="color:#FFFFFF;">
                        <a href="<?php echo asset('logout');?>" class="btn btn-info btn-icon btn-sm icon-left" style="color:#FFFFFF;">
                            <i class="entypo-logout right"></i>
                            <strong>SALIR</strong>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <script type="text/javascript">

            function validateExtension(file, extensiones){

               var filename = $('#' + file.name).val();
               var current_fileextension = filename.substr( (filename.lastIndexOf('.') + 0) );

               var extensiones = extensiones.split(',');
               var valido = false;

               extensiones.forEach(function(item) {

                   if(!valido){
                       if(current_fileextension.toUpperCase() !== item.toUpperCase()){
                           
                       }else {
                           valido = true;
                       }
                   }
               });

               if(!valido){
                   $('#' + file.name).val("");
                   alert("Extensión no soportada");
               }
           }
           
            $(document).ready(function(){

            });

        </script>
<?php
}
?>