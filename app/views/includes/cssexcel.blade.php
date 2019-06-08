<style type="text/css">
.CSSTableGenerator {
}

.CSSTableGenerator table {
}

.CSSTableGenerator td {
	vertical-align: middle;
	font-size: 8px;
	font-family: Arial;
	font-weight: normal;
	color: #000000;
}

.CSSTableGenerator th {
	background-color: #D3D3D3;
	font-size: 14px;
	font-family: Arial;
	font-weight: bold;
	color: #000000;
	text-align: center;
	height: 22px;
	width: 18%;
}

.tg  {
	border-collapse:collapse;
	border-color:#aaa;

}
.tg td{
	font-family:Arial;
	font-size:11px;
	background-color:#fff;
	height: 15px;

}
.tg th{
	font-family:Arial;
	font-size:11px;
	background-color:#f8a102;
	height: 35px;
	font-weight:bold;

}
.tg .tg-054q{
	font-family:Arial;
}
.tg .tg-lszj{
	background-color:#D3D3D3;
}
.tg .tg-8led{
	background-color:#f8a102;
}

.th-list{
	background-color: #D3D3D3;
	font-size: 10px !important;
	font-family: Arial;
	font-weight: normal !important;
	color: #000000;
	text-align: center;
	height: 22px;
	width: 25% !important;
}
</style>



<!-- ////////////////////    STYLE EXCEL  ////////<img src="public/images/logowm.png" height="50" width="25"><//////////////////-->

<?php $time = time(); ?>
<table class="tg">
	<tr>
		<th class="tg-lszj" colspan="1" align="center">
			<img src="{{ public_path() }}/images/Codelco_Logo.png" height="60" width="40" />.
		</th>
	    	<th class="tg-054q" colspan="5" align="left">{{ utf8_decode("Portal de Acreditación") }}</th>
	  </tr>
	  <tr>
	 		<td class="tg-lszj" colspan="1"></td>
	    	<td class="tg-lszj" colspan="5" align="left">Informe Excel {{ isset($titulo) ? utf8_decode($titulo) : 'Generado por Sistema' }}</td>
	  </tr>
	  <tr>	
	  		<td class="tg-lszj" colspan="1"></td>
	    	<td class="tg-8led" colspan="5" align="left">Fecha: <?php echo Carbon\Carbon::now()->format('d-m-Y H:i:s'); ?> </td>
	  </tr>
	  <tr>	
	  		<td class="tg-lszj" colspan="1"></td>
	    	<td class="tg-lszj" colspan="5" align="left"> NADA <?php date('Y'); ?>  </td>
	  </tr>
</table>