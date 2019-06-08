<script src="{{asset('js/select2/select2.js')}}"></script>
<link rel="stylesheet" href="{{asset('js/select2/select2-bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('js/select2/select2.css')}}">
<link rel="stylesheet" href="{{asset('js/jvectormap/jquery-jvectormap-1.2.2.css')}}">
<link rel="stylesheet" href="{{asset('js/rickshaw/rickshaw.min.css')}}">
<script src="{{asset('js/gsap/main-gsap.js') }}"></script>
<script src="{{asset('js/bootstrap.js') }}"></script>
<script src="{{asset('js/joinable.js') }}"></script>
<script src="{{asset('js/resizeable.js') }}"></script>
<script src="{{asset('js/neon-api.js') }}"></script>
<script src="{{asset('js/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('js/jvectormap/jquery-jvectormap-europe-merc-en.js')}}"></script>
<script src="{{asset('js/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('js/rickshaw/vendor/d3.v3.js')}}"></script>
<script src="{{asset('js/rickshaw/rickshaw.min.js')}}"></script>
<script src="{{asset('js/raphael-min.js')}}"></script>
<script src="{{asset('js/morris.min.js')}}"></script>
<script src="{{asset('js/toastr.js')}}"></script>
<script src="{{asset('js/neon-custom.js') }}"></script>
<script src="{{asset('js/neon-demo.js') }}"></script>
<script src="{{asset('js/bootstrap-datepicker.js') }}"></script>
<script src="{{asset('js/bootstrap-timepicker.min.js') }}"></script>
{{--<script src="{{asset('js/bootstrap-colorpicker.min.js') }}"></script>--}}

<script src="{{asset('js/neon-login.js') }}"></script>
<script src="{{asset('js/bootstrap-switch.min.js') }}"></script>
<script src="{{asset('js/jquery.inputmask.bundle.min.js')}}"></script>
<script src="{{asset('js/jquery.bootstrap.wizard.min.js')}}"></script>
<script src="{{asset('js/jquery.validate.js') }}"></script>

{{--<script src="{{asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{asset('js/dataTables.tableTools.js')}}"></script>
<script src="{{asset('js/dataTables.bootstrap.js') }}"></script>
<script src="{{asset('js/datatables/jquery.dataTables.columnFilter.js')}}"></script>
<script src="{{asset('js/datatables/lodash.min.js')}}"></script>
<script src="{{asset('js/datatables/responsive/js/datatables.responsive.js')}}"></script>--}}
<script src="{{asset('js/DataTablesNuevo/datatables.min.js') }}"></script>


<script type="text/javascript">
    /*****script para que tome dise�o datatable todas las tablas del sistema*********/
    var responsiveHelper;
    var breakpointDefinition = {
        tablet: 1024,
        phone : 480
    };
    var tableContainer;

    $('.newDataTable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'excel'
        ]
    } );

    jQuery(document).ready(function($){

    });

</script>

<footer class="main">
    &copy; RM-Software propiedad <strong>Workmato Ltda.</strong> 2018
</footer>
</div>
</div>

<script src="{{asset('js/addclear.js')}}"></script>
<script src="{{asset('js/jquery.Rut.js')}}"></script>
<script src="{{asset('js/jscustom.js')}}"></script>

</body>
</html>