@extends('layouts.default')
@section('content')

    <div class="row">
        <div class="col-md-6 table-responsive">
            <legend>Total credenciales impresas</legend>
            <table class="table table-bordered table-condensed">
                <thead>
                <tr>
                    <th>Proyecto</th>
                    <th>Cantidad</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cred_impre as $row)
                    <?php
                    $proy_name = Proyproyectosmodel::find($row->fkid_proyecto);
                    ?>
                    <tr>
                        <td>{{$proy_name->etiqueta_proyectos}}</td>
                        <td>{{$row->cantidad}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <br>
            <div class="well">IMPRIMIR</div>
        </div>
    </div>
@stop