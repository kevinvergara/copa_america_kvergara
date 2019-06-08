function ciudadcomuna(valor){
    var valorfinal=valor.split('|');
    $('#'+valorfinal[1]).html("<img src='"+ _site_url +"/images/loader-2.gif'>" );
    
   // alert(_site_url +'/images/loader-2.gif');
    var stream="ENVIADA_CHECK="+valorfinal[0]+"&NOMBRECOMBO="+valorfinal[1];
        alert(_site_url + "/extcomuna/consultacomuna?"+stream);
        $.ajax({
            type: "POST",
            url: _site_url + "/extcomuna/consultacomuna",
            data:stream,
            statusCode: {
                  404: function() {					
                          //   notify('Error Grave no se encontro controller Buscador_ingreso',1000,3000);
                        }
            },
            error: function() {
                           //notify('Ha ocurrido un error al modificar el documento\nSi el error persiste comuniquese con el Proveedor',1000,3000);
                                       },
		    success: function(data) {
			//show_loading_bar(100);	 //barra de pensando :P		
			$('#'+valorfinal[1]).html(data); 
		/*	var opts = {
	"closeButton": true,
	"debug": false,
	"showEasing": "swing",
	"hideEasing": "linear",
	"showMethod": "fadeIn",
	"hideMethod": "fadeOut"
};*/
	         //toastr.success("Cambios realizados en la solicitud","CAMBIOS",opts);
			 
			// toastr.success("So me by marianne admitted speaking.", "This is a title", opts);
			
		           }
		
	});
}


$(document).ready(function(){
  // alert("VOSSSSS SOSSS LOCOOOO");

    /*valida mail---------------------------------------------------------------*/

    $('.rutrl').parent().addClass('');

        $('.rutrl').Rut({
            on_error: function(){
                //assigno clase error

                $('.rutrl').parent().addClass('has-error');
            },
            on_success: function(){
                // le quito la clase error
                $('.rutrl').parent().removeClass('has-error');
            },
            format_on: 'keyup'
        });

        $('.rutre').parent().addClass('');

        $('.rutre').Rut({
            on_error: function(){
                //assigno clase error

                $('.rutre').parent().addClass('has-error');
            },
            on_success: function(){
                // le quito la clase error
                $('.rutre').parent().removeClass('has-error');
            },
            format_on: 'keyup'
        });

        $('.rutem').parent().addClass('');

        $('.rutem').Rut({
            on_error: function(){

                $('.rutem').parent().addClass('has-error');
            },
            on_success: function(){
                // le quito la clase error
                $('.rutem').parent().removeClass('has-error');
            },
            format_on: 'keyup'
        });
    /*--------------------------------------------------------------------------*/

    /*valida mail---------------------------------------------------------------*/

    $(".mailrl").change(function(){
        if($(".mailrl").val().indexOf('@', 0) == -1 || $(".mailrl").val().indexOf('.', 0) == -1) {
            $('.mailrl').parent().addClass('has-error');
            return false;
        }else{
            $('.mailrl').parent().removeClass('has-error');
            return true;
        }
    });

    $(".mailre").change(function(){
        if($(".mailre").val().indexOf('@', 0) == -1 || $(".mailre").val().indexOf('.', 0) == -1) {
            $('.mailre').parent().addClass('has-error');
            return false;
        }else{
            $('.mailre').parent().removeClass('has-error');
            return true;
        }
    });

    $(".mailem").change(function(){
        if($(".mailem").val().indexOf('@', 0) == -1 || $(".mailem").val().indexOf('.', 0) == -1) {
            $('.mailem').parent().addClass('has-error');
            return false;
        }else{
            $('.mailem').parent().removeClass('has-error');
            return true;
        }
    });
    /*--------------------------------------------------------------------------*/
    /*pais extranjero*/
    /*
        las empresas no pueden ser extranjeras
     */

    $(".paisdivrl").hide();
    $(".paisdivre").hide();
    $("#nacionalrl").change(function (){

        $(".paisdivrl").hide();
    });

    $("#extranjerorl").change(function (){

        $(".paisdivrl").show();
    });
    $("#nacionalre").change(function (){

        $(".paisdivre").hide();
    });

    $("#extranjerore").change(function (){

        $(".paisdivre").show();
    });
    /*--------------------------------------------------------------------------*/
    /* permite solo letras */
   /* $(function(){
        //Para escribir solo letras
        $('.letra').validCampoFranz(' abcdefghijklmnñopqrstuvwxyzáéiou');

        //Para escribir solo numeros
        $('.numero').validCampoFranz('0123456789');
    });*/
    /*--------------------------------------------------------------------------*/
    /* busca rut empresa */
    $("#rutem").blur(function()
    {
        var stream = "ENVIADA_CHECK=" + $("#rutem").val();
        //alert(_site_url + "empresa/consultaempresa?" + stream);
        $.ajax({
            type: "POST",
            url: _site_url + "empresa/consultaempresa",
            data:stream,
            statusCode: {
                404: function() {
                    //   notify('Error Grave no se encontro controller Buscador_ingreso',1000,3000);
                }
            },
            error: function() {
                //notify('Ha ocurrido un error al modificar el documento\nSi el error persiste comuniquese con el Proveedor',1000,3000);
            },
            success: function(cadena) {
			
				var opts = {
					"closeButton": true,
					"debug": false,
					"showEasing": "swing",
					"hideEasing": "linear",
					"showMethod": "fadeIn",
					"hideMethod": "fadeOut"
				};
				
				toastr.success("La empresa que desea crear ya posee registros.","INFORMACION DE SISTEMA",opts);
			
				 var arr = cadena.split('|');
                //show_loading_bar(100);	 
				//barra de pensando :P
                //$('#rutem').html(data);
                
				if(arr[1]!=''){	  
					
					//trae datos empresa
					//$('#rutem').prop('readonly', true);
					
					$("#nombrelegal").val(arr[3]);
					$('#nombrelegal').prop('readonly', true);
					
					$("#nombrefantasia").val(arr[4]);
					$('#nombrefantasia').prop('readonly', true);
					
					$("#direccionem").val(arr[5]);										
					$('#direccionem').prop('readonly', false);
					
					$("#fono1em").val(arr[6]);				
					$("#fono1em").prop('readonly', false);
					
					$("#fono2em").val(arr[7]);					
					$("#fono2em").prop('readonly', false);
					
					$("#faxem").val(arr[8]);				
					$("#faxem").prop('readonly', false);
					
					$("#mailem").val(arr[9]);
					$("#mailem").prop('readonly', false);
					
					//trae datos representante legal
					
					$("#rutrl").val(arr[16]);
					$('#rutrl').prop('readonly', false);
					
					$("#pasaporterl").val(arr[17]);
					$('#pasaporterl').prop('readonly', false);
					
					$("#nombresrl").val(arr[18]);
					$('#nombresrl').prop('readonly', false);
					
					$("#appatrl").val(arr[19]);
					$('#appatrl').prop('readonly', false);
					
					$("#apmatrl").val(arr[20]);
					$('#apmatrl').prop('readonly', false);
					
					$("#direccionrl").val(arr[21]);
					$('#direccionrl').prop('readonly', false);
					
					$("#fonorl").val(arr[22]);
					$('#fonorl').prop('readonly', false);
					
					$("#celularrl").val(arr[23]);
					$('#celularrl').prop('readonly', false);
					 
					$("#mailrl").val(arr[24]);
					$('#mailrl').prop('readonly', false);
											
					//trae datos resolutor emergenca
					
					$("#rutre").val(arr[29]);
					$('#rutre').prop('readonly', false);
					
					$("#pasaportere").val(arr[30]);
					$('#pasaportere').prop('readonly', false);
					
					$("#nombresre").val(arr[31]);
					$('#nombresre').prop('readonly', false);
					
					$("#appatre").val(arr[32]);
					$('#appatre').prop('readonly', false);
					
					$("#apmatre").val(arr[33]);
					$('#apmatre').prop('readonly', false);
					
					$("#direccionre").val(arr[34]);
					$('#direccionre').prop('readonly', false);
					
					$("#fonore").val(arr[35]);
					$('#fonore').prop('readonly', false);
					
					$("#celularre").val(arr[36]);
					$('#celularre').prop('readonly', false);
					 
					$("#mailre").val(arr[37]);
					$('#mailre').prop('readonly', false);		
					
				}
            }
        });
    });
	
	$("#rutrl").blur(function()
    {
        var stream = "ENVIADA_CHECK=" + $("#rutrl").val();
        //alert(_site_url + "empresa/consultapersona?" + stream);
        $.ajax({
            type: "POST",
            url: _site_url + "empresa/consultapersona",
            data:stream,
            statusCode: {
                404: function() {
                    //   notify('Error Grave no se encontro controller Buscador_ingreso',1000,3000);
                }
            },
            error: function() {
                //notify('Ha ocurrido un error al modificar el documento\nSi el error persiste comuniquese con el Proveedor',1000,3000);
            },
            success: function(cadena) {
			
				var opts = {
					"closeButton": true,
					"debug": false,
					"showEasing": "swing",
					"hideEasing": "linear",
					"showMethod": "fadeIn",
					"hideMethod": "fadeOut"
				};
				
				 var arr = cadena.split('|');
				 
				 if(arr[1]!=''){	
					
					$("#pasaporterl").val(arr[2]);
					$('#pasaporterl').prop('readonly', false);
					
					$("#nombresrl").val(arr[3]);
					$('#nombresrl').prop('readonly', false);
					
					$("#appatrl").val(arr[4]);
					$('#appatrl').prop('readonly', false);
					
					$("#apmatrl").val(arr[5]);
					$('#apmatrl').prop('readonly', false);
					
					$("#direccionrl").val(arr[6]);
					$('#direccionrl').prop('readonly', false);
					
					$("#fonorl").val(arr[7]);
					$('#fonorl').prop('readonly', false);
					
					$("#celularrl").val(arr[8]);
					$('#celularrl').prop('readonly', false);
					 
					$("#mailrl").val(arr[9]);
					$('#mailrl').prop('readonly', false);
					
					toastr.success("La persona ya fue creado anteriormente.","INFORMACION DE SISTEMA",opts);
				 }
			}
		});
	});
	
	$("#rutre").blur(function()
    {
        var stream = "ENVIADA_CHECK=" + $("#rutre").val();
        //alert(_site_url + "empresa/consultapersona?" + stream);
        $.ajax({
            type: "POST",
            url: _site_url + "empresa/consultapersona",
            data:stream,
            statusCode: {
                404: function() {
                    //   notify('Error Grave no se encontro controller Buscador_ingreso',1000,3000);
                }
            },
            error: function() {
                //notify('Ha ocurrido un error al modificar el documento\nSi el error persiste comuniquese con el Proveedor',1000,3000);
            },
            success: function(cadena) {
			
				var opts = {
					"closeButton": true,
					"debug": false,
					"showEasing": "swing",
					"hideEasing": "linear",
					"showMethod": "fadeIn",
					"hideMethod": "fadeOut"
				};
				
				 var arr = cadena.split('|');
				 
				 if(arr[1]!=''){	
					
					$("#pasaportere").val(arr[2]);
					$('#pasaportere').prop('readonly', false);
					
					$("#nombresre").val(arr[3]);
					$('#nombresre').prop('readonly', false);
					
					$("#appatre").val(arr[4]);
					$('#appatre').prop('readonly', false);
					
					$("#apmatre").val(arr[5]);
					$('#apmatre').prop('readonly', false);
					
					$("#direccionre").val(arr[6]);
					$('#direccionre').prop('readonly', false);
					
					$("#fonore").val(arr[7]);
					$('#fonore').prop('readonly', false);
					
					$("#celularre").val(arr[8]);
					$('#celularre').prop('readonly', false);
					 
					$("#mailre").val(arr[9]);
					$('#mailre').prop('readonly', false);
					
					toastr.success("La persona ya fue creado anteriormente.","INFORMACION DE SISTEMA",opts);
				 }
			}
		});
	});
	
	
				
	
	
	
	


    /*--------------------------------------------------------------------------*/


});
/*
mapa de datos arreglo cadena empresa - resp legal - res emergencia

0    $cadena=$arr->IDEMPRESA				
1			.'|'.$arr->RUTEMPRESA
2			.'|'.$arr->DVEMPRESA
3			.'|'.$arr->RAZONSOCIALEMPRESA 
4			.'|'.$arr->NFANTASIAEMPRESA
5			.'|'.$arr->DIRECCIONEMPRESA
6			.'|'.$arr->FONO1EMPRESA
7			.'|'.$arr->FONO2EMPRESA
8			.'|'.$arr->CELULAREMPRESA
9			.'|'.$arr->EMAILEMPRESA 						
10			.'|'.$arr->COMUNAEMPRESA
11			.'|'.$arr->CIUDADEMPRESA
12			.'|'.$arr->CAJAEMPRESA
13			.'|'.$arr->MUTUALEMPRESA

14			.'|'.$rutrl

15			.'|'.$arr->PASAPORTEREPLEGAL	
16			.'|'.$arr->NOMBRESREPLEGAL
17			.'|'.$arr->APELLIDOPATERNOREPLEGAL
18			.'|'.$arr->APELLIDOMATERNOREPLEGAL
19			.'|'.$arr->DIRECCIONREPLEGAL
20			.'|'.$arr->FONOREPLEGAL 
21			.'|'.$arr->CELULARREPLEGAL
22			.'|'.$arr->EMAILREPLEGAL

23			.'|'.$arr->COMUNAREPLEGAL
24			.'|'.$arr->TIPOPERSONAREPLEGAL
25			.'|'.$arr->PAISREPLEGAL
26			.'|'.$arr->CIUDADREPLEGAL

27			.'|'.$rutre
	
28			.'|'.$arr->PASAPORTERESEME
29			.'|'.$arr->NOMBRESRESEME
30			.'|'.$arr->APELLIDOPATERNORESEME
31			.'|'.$arr->APELLIDOMATERNORESEME
32			.'|'.$arr->DIRECCIONRESEME
33			.'|'.$arr->FONORESEME
34			.'|'.$arr->CELULARRESEME
35			.'|'.$arr->EMAILRESEME

36			.'|'.$arr->COMUNARESEME
37			.'|'.$arr->TIPOPERSONARESEME
38			.'|'.$arr->PAISRESEME
39			.'|'.$arr->CIUDADRESEME;
*/

/* mapa de datos cadena personalbar

0 $arr->ID	
1 .'|'.$rut
2			.'|'.$arr->PASAPORTE_PERSONA
3			.'|'.$arr->NOMBRES_PERSONA
4			.'|'.$arr->APELLIDOPATERNO_PERSONA
5			.'|'.$arr->APELLIDOMATERNO_PERSONA
6			.'|'.$arr->DIRECCION_PERSONA
7			.'|'.$arr->FONO_PERSONA
8			.'|'.$arr->CELULAR_PERSONA
9			.'|'.$arr->EMAIL_PERSONA;
*/
