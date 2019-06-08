/****
***JS CUSTOM PARA HEAD SIN MENUS  BY AROMERO****
******/

$( document ).ready(function() {	

	
});





/***********FUNCIONES ***CONTROLER SOLICITUD*************************************************/












function selectchangeproy(val){
	    var stream="PROYECTO="+val;
		show_loading_bar(100);

		//alert( _site_url + "acrsolicitud/tablaresp"+ stream);
    	$.ajax({
     	 type: "POST",
		  url: _site_url + "acrsolicitud/tablaresp",
		  data:stream,
		  statusCode: {
                        404: function() {					
                        	     toastr.error('Error Grave no se encontro controller Buscador_ingreso');
                              }
                    },
             error: function() {
                             toastr.error('Ha ocurrido un error al modificar el documento\nSi el error persiste comuniquese con el Proveedor');
                                       },
		    success: function(data) {
//alert(data);			
			var opts = {
	"closeButton": true,
	"debug": false,
	"showEasing": "swing",
	"hideEasing": "linear",
	"showMethod": "fadeIn",
	"hideMethod": "fadeOut"
						};
	         toastr.success("Cambios realizados en la solicitud",":) CAMBIOS",opts);
					 $('#cambio_div').html(data); 
		           }
		
	});

}


function cambio(val){  
	var valor=val;
	    var stream="ENVIADA_CHECK="+valor;
//alert(_site_url + "/acrsolicitud/cambiaestado"+stream);
	     	$.ajax({
     	 type: "POST",
		  url: _site_url + "/acrsolicitud/cambiaestado",
		  data:stream,
		  statusCode: {
                        404: function() {					
                        	   notify('Error Grave no se encontro controller Buscador_ingreso',1000,3000);
                              }
                    },
             error: function() {
                           notify('Ha ocurrido un error al modificar el documento\nSi el error persiste comuniquese con el Proveedor',1000,3000);
                                       },
		    success: function(data) {	
			var opts = {
	"closeButton": true,
	"debug": false,
	"showEasing": "swing",
	"hideEasing": "linear",
	"showMethod": "fadeIn",
	"hideMethod": "fadeOut"
};
	         toastr.success("Cambios realizados en la solicitud",":) CAMBIOS",opts);
			 
			// toastr.success("So me by marianne admitted speaking.", "This is a title", opts);
				//	 $('#POPUP_ID_EMPRESAS').val(data); 
		           }
		
	});
	}
/***************************************************************/
