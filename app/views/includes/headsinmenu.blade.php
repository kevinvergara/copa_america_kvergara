<head>

<link href="{{ asset('js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/font-icons/entypo/css/entypo.css') }}" rel="stylesheet">
<!--<link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('/css/neon-core.css') }}" rel="stylesheet">
<link href="{{ asset('/css/neon-theme.css') }}" rel="stylesheet">
<link href="{{ asset('/css/neon-forms.css') }}" rel="stylesheet">
<link href="{{ asset('/css/custom.css') }}" rel="stylesheet">
	-->
	  <script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>	
		<script type="text/javascript">
		var base_url = '<?php echo url();?>';
		//alert(baseurl);
		</script>
		<script>

var _site_url='<?php echo  asset('/');?>';
//alert(url);
</script>

	<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	
	
	
	
	
	
	<!-- Bottom Scripts   que estaban en footer pero  se movieron para aca para quer la pagina carge mas rapido :) angelo -->
	<!--<script src="{{ asset('js/gsap/main-gsap.js') }}"></script>
	<script src="{{ asset('js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.js') }}"></script>
	<script src="{{ asset('js/joinable.js') }}"></script>
	<script src="{{ asset('js/resizeable.js') }}"></script>
	<script src="{{ asset('js/neon-api.js') }}"></script>
	<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
	<script src="{{ asset('js/neon-login.js') }}"></script>
	<script src="{{ asset('js/neon-custom.js') }}"></script>
	<script src="{{ asset('js/neon-demo.js') }}"></script>	-->
	<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>	
	<script src="{{asset('js/bootstrap-switch.min.js') }}"></script>
	<link rel="stylesheet" href="{{asset('js/jvectormap/jquery-jvectormap-1.2.2.css')}}">
	<link rel="stylesheet" href="{{asset('js/rickshaw/rickshaw.min.css')}}">
	<script src="{{asset('js/select2/select2.min.js')}}"></script>
    <script src="{{asset('js/toastr.js')}}"></script>

	<script src="{{asset('js/datatables/TableTools.min.js')}}"></script>
	<script src="{{asset('js/dataTables.bootstrap.js')}}"></script>
	<script src="{{asset('js/datatables/jquery.dataTables.columnFilter.js')}}"></script>
	<script src="{{asset('js/datatables/lodash.min.js')}}"></script>
<!--	<script src="{{asset('js/datatables/responsive/js/datatables.responsive.js')}}"></script>-->
	<link rel="stylesheet" href="{{asset('js/select2/select2-bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('js/select2/select2.css')}}">


<script type="text/javascript">
/*****script para que tome diseño datatable todas las tablas del sistema*********/
var responsiveHelper;
var breakpointDefinition = {
    tablet: 1024,
    phone : 480
};
var tableContainer;

	jQuery(document).ready(function($)
	{
		tableContainer = $(".table");
		
		tableContainer.dataTable({
			"sPaginationType": "bootstrap",
			"aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
			"bStateSave": true,
			

		    // Responsive Settings
		    bAutoWidth     : false,
		    fnPreDrawCallback: function () {
		        // Initialize the responsive datatables helper once.
		        if (!responsiveHelper) {
		            responsiveHelper = new ResponsiveDatatablesHelper(tableContainer, breakpointDefinition);
		        }
		    },
		    fnRowCallback  : function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
		        responsiveHelper.createExpandIcon(nRow);
		    },
		    fnDrawCallback : function (oSettings) {
		        responsiveHelper.respond();
		    }
		});
		
		$(".dataTables_wrapper select").select2({
			minimumResultsForSearch: -1
		});
	});
/*******************/
	/*					
	jQuery(document).ready(function($)
	{
		var table = $(".table").dataTable({
			"sPaginationType": "bootstrap",
			"sDom": "<'row'<'col-xs-6 col-left'l><'col-xs-6 col-right'<'export-data'T>f>r>t<'row'<'col-xs-6 col-left'i><'col-xs-6 col-right'p>>",
			"oTableTools": {
			},
			
		});
	});
*/
</script>

<script src="{{asset('js/jscustomsinmenu.js')}}"></script><!---script personalizados--->

	<!--
	<script src="{{ asset('js/datatables/TableTools.min.js') }}"></script>
	<script src="{{ asset('js/dataTables.bootstrap.js') }}"></script>
	<script src="{{ asset('js/jquery.dataTables.columnFilter.js') }}"></script>
	<script src="{{ asset('js/datatables/responsive/js/datatables.responsive.js') }}"></script>
	-->


	
	
	
	
	
	
	
	
	
</head>