function validaperiodo(periodo)
{
    //alert(periodo);
    var stream = periodo;
    alert(_site_url + "solicitudauditoria/consultaperiodo?" + stream);
        $.ajax({
            type: "POST",
            url: _site_url + "solicitudauditoria/consultaperiodo",
            data:stream,
            statusCode: {
                404: function() {
                    //   notify('Error Grave no se encontro controller Buscador_ingreso',1000,3000);
                }
            },
            error: function() {
                //notify('Ha ocurrido un error al modificar el documento\nSi el error persiste comuniquese con el Proveedor',1000,3000);
//                var opts = {
//                        "closeButton": true,
//                        "debug": false,
//                        "showEasing": "swing",
//                        "hideEasing": "linear",
//                        "showMethod": "fadeIn",
//                        "hideMethod": "fadeOut"
//                };
//                
//                toastr.error(" Sin Auditoria.","INFORMACION DE SISTEMA",opts);
            },
            success: function(err) {
                
                if(err==0){
                    
                    var opts = {
                        "closeButton": true,
                        "debug": false,
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    };
                    toastr.success("Otro mensaje.","INFORMACION DE SISTEMA",opts);
                    
                }else{
                     var opts = {
                            "closeButton": true,
                            "debug": false,
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                    };

                    toastr.error(" Existe una auditoria solicitada previamente a los datos ingresados.","INFORMACION DE SISTEMA",opts);
                }
                

            }
        });
    
}

function valida_envia(){ 
   	//valido el nombre 
   	if  ($(".obligatorio").val()==''){ 
      	alert("Tiene que escribir su nombre") 
      //	document.fvalida.nombre.focus() 
      	//return 0; 
        return false;	
    } 
   	//el formulario se envia 
   	//alert("Muchas gracias por enviar el formulario"); 
   	//document.frm_Solicitudauditoria.submit(); 
}


$(document).ready(function(){




/*
 $("#frm_Solicitudauditoria").submit(function(){
     //var value = $(".obligatorio").closest("input").val();
     
     //alert(value);
//alert($(".obligatorio").val());

   /*	if  ($(".obligatorio").val()==''){ 
      	alert("Tiene que escribir su nombre") 
    
        return false;	
    } 
   	
     return false;
     
     
 });*/

//-------documentos por proyecto------------------------------------

//   
//        var stream = "ENVIADA_CHECK=" + $("#proyecto").val();
//        
//        $("#documentos_auditoria").html("cargando..");        
//    //  alert( _site_url + "solicitudauditoria/docauditoria" + stream);
//        $.ajax({
//            type: "POST",
//            url: _site_url + "solicitudauditoria/docauditoria",
//            data:stream,
//            statusCode: {
//                404: function() {
//                    //   notify('Error Grave no se encontro controller Buscador_ingreso',1000,3000);
//                }
//            },
//            error: function() {
//                //notify('Ha ocurrido un error al modificar el documento\nSi el error persiste comuniquese con el Proveedor',1000,3000);
//                var opts = {
//                        "closeButton": true,
//                        "debug": false,
//                        "showEasing": "swing",
//                        "hideEasing": "linear",
//                        "showMethod": "fadeIn",
//                        "hideMethod": "fadeOut"
//                };
//                
//               // toastr.error(" La empresa solicitada no se encuentra en los registros.","INFORMACION DE SISTEMA",opts);
//            },
//            success: function(cadena) {
//                
//                
//                //alert(cadena);
//                 $("#documentos_auditoria").html(cadena);
//
//            }
//        });
//    });


//------------Busca contrato-------------------------------------------
$("#contrato").blur(function()
    {
         var verificacion= $('#datosverificacion :input').serialize();  
         //alert($("#contrato"));
        var stream = "ENVIADA_CHECK=" + $("#contrato").val() + '&PROYECTO=' + $("#proyecto").val()+ '&EMPRESA=' + $("#idempresa").val();
        //alert(_site_url + "solicitudauditoria/consultacontrato?" + stream);
        $.ajax({
            type: "POST",
            url: _site_url + "solicitudauditoria/consultacontrato",
            data:stream,
            statusCode: {
                404: function() {
                    //   notify('Error Grave no se encontro controller Buscador_ingreso',1000,3000);
                }
            },
            error: function() {
                //notify('Ha ocurrido un error al modificar el documento\nSi el error persiste comuniquese con el Proveedor',1000,3000);
                var opts = {
                        "closeButton": true,
                        "debug": false,
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                };
                
                toastr.error(" El contrato solicitado no existe.","INFORMACION DE SISTEMA",opts);
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
				
                toastr.success("Contrato encontrado.","INFORMACION DE SISTEMA",opts);
			
                var arr = cadena.split('|');
                validaperiodo(verificacion); 
            }
        });
    });
});