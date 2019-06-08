<?php
$time = time();
$local = url();


$nombre_usuario = $_SESSION["DATA_USER"]["usuario"]["usuario_user"];
$email          = $_SESSION["DATA_USER"]["usuario"]["usuario_email"];
$razon_social   = $_SESSION["DATA_USER"]["usuario"]->nfantasia;
$id_usuario     = $_SESSION["DATA_USER"]["usuario"]["id"];
$id_empresa     = $_SESSION["DATA_USER"]["usuario"]["fkid_empresa"];
$id_sistema     = 1;//Dato en duro definido por tabla de sistema

if($razon_social == "")$razon_social = "No registrado";
if($email == "")$email = "soportedms@workmate.cl";




$url = "https://tickets.rmworkmate.com/iframe-tickets/$nombre_usuario/$email/$razon_social/$id_usuario/$id_empresa/$id_sistema";
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Error</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <link href="{{asset('/css/bootstrap.css')}}" rel="stylesheet">
    <script type="text/css">
        body { background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEgAACxIB0t1+/AAAABZ0RVh0Q3JlYXRpb24gVGltZQAxMC8yOS8xMiKqq3kAAAAcdEVYdFNvZnR3YXJlAEFkb2JlIEZpcmV3b3JrcyBDUzVxteM2AAABHklEQVRIib2Vyw6EIAxFW5idr///Qx9sfG3pLEyJ3tAwi5EmBqRo7vHawiEEERHS6x7MTMxMVv6+z3tPMUYSkfTM/R0fEaG2bbMv+Gc4nZzn+dN4HAcREa3r+hi3bcuu68jLskhVIlW073tWaYlQ9+F9IpqmSfq+fwskhdO/AwmUTJXrOuaRQNeRkOd5lq7rXmS5InmERKoER/QMvUAPlZDHcZRhGN4CSeGY+aHMqgcks5RrHv/eeh455x5KrMq2yHQdibDO6ncG/KZWL7M8xDyS1/MIO0NJqdULLS81X6/X6aR0nqBSJcPeZnlZrzN477NKURn2Nus8sjzmEII0TfMiyxUuxphVWjpJkbx0btUnshRihVv70Bv8ItXq6Asoi/ZiCbU6YgAAAABJRU5ErkJggg==);}
        .error-template {padding: 40px 15px;text-align: center;}
        .error-actions {margin-top:15px;margin-bottom:15px;}
        .error-actions .btn { margin-right:10px; }
    </script>

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="error-template">
                <br><br>
                <div class="error-actions col-md-8 pull-right">
                    <a href="<?PHP echo url('/home') ?>" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-home"></span>
                        Volver a Inicio </a>
                    <a href="<?php echo asset('logout');?>" class="btn btn-default btn-lg"><span class="entypo-logout right"></span>
                        SALIR </a>
                </div>
            </div>

            <div class="row">
                <div class="error-actions col-md-8 pull-right">
                    <div>
                        <h3><strong>Ha ocurrido un error!!</strong></h3>
                    </div>
                    <br>
                    <br>
                    <footer class="main">
                        Software propiedad <strong>Kvergara</strong> 2019
                    </footer>
                    <br><br>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

<script>

</script>

</html>