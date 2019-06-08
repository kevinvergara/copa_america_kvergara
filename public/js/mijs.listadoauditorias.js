$(document).ready(function(){
    $("#proyecto").change(function()
    {   
        var stream = "ENVIADA_CHECK=" + $("#proyecto").val();
        alert(_site_url + "listadoauditorias/auditoriasporproyecto?" + stream);
     
        $.ajax({
            type: "POST",
            url: _site_url + "listadoauditorias/auditoriasporproyecto",
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
			
                $("#tabla_auditorias").html(cadena);
            }
      });
  });
    
});
