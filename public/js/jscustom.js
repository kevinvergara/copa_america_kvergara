$("[title]").tooltip({
    track: true
});

$(document).ready(function() {


    $(".SOLICITUDES_ACREDITACION_BORRAR_BUTTON").submit(function() {
        toastr.error("Borrando la solicitud",":) BORRANDO");
    });

    $("#ENVIO_MASVO_BTN").click(function() {
        toastr.success("Realizando envio masivo",":) ENVIO");
    });

    $('.VALIDAR_RUT').Rut({
        on_error: function(){ alert('Rut incorrecto'); },
        format_on: 'keyup'
    });

    $('.table').css({fontSize: "12px"});

});


/***********FUNCIONES ***CONTROLER SOLICITUD*************************************************/
function actualizatablaimpresa(idimpresion,proyec){
    //alert(proyec);

    if($("#tr_"+idimpresion).find(".codigo_hid").val()!=""){

        var hid = $("#tr_"+idimpresion).find(".codigo_hid").val();
    }else{
        alert("Debe ingresar un codigo HID");
        return false;
    }

    $('#imprepresionajaxbutton'+idimpresion).html("<i class='glyphicon glyphicon-time'></i>");
    var stream="IDIMPRESION="+idimpresion + "&PROYECTO="+proyec;
    //alert(stream);

    //	alert( _site_url + "acrsolicitud/tablarespacred"+ stream);
    $.ajax({
        type: "POST",
        url: _site_url + "acrsolicitud/cambiaestadoactualizatabla",
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
            $('#cambio_divacred').html(data);
            window.open( _site_url +  'acrsolicitud/imprimircredencial?idimpresion='+idimpresion+'&hid='+hid,'_blank ');
            /*<?php //echo url('acrsolicitud/imprimircredencial');?>/--{{$acr_solicitu->ID}}--	*/
            var opts = {
                "closeButton": true,
                "debug": false,
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };
            toastr.success("",":) Impresion de tarjeta realizada",opts);
        }

    });
}

function actualizatablaimpresapropia(idimpresion,proyec){

    if($("#tr_"+idimpresion).find(".codigo_hid").val()!=""){

        var hid = $("#tr_"+idimpresion).find(".codigo_hid").val();
    }else{
        alert("Debe ingresar un codigo HID");
        return false;
    }

    $('#imprepresionajaxbutton'+idimpresion).html("<i class='glyphicon glyphicon-time'></i>");
    var stream="IDIMPRESION="+idimpresion + "&PROYECTO="+proyec;

    $.ajax({
        type: "POST",
        url: _site_url + "acrsolicitud/cambiaestadoactualizatablapropia",
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

            if(data == "ERROR_NO_IMAGEN"){
                toastr.error('Este trabajador, no tiene imagen asociada.');
            }else {
                $('#cambio_divacred').html(data);

                console.log();
                window.open( _site_url +  'acrsolicitud/imprimircredencialpropia?idimpresion='+idimpresion+'&hid='+hid,'_blank ');
                var opts = {
                    "closeButton": true,
                    "debug": false,
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                };
                toastr.success("",":) Impresion de tarjeta realizada",opts);
            }
        }
    });
}

function actualizatablaimpresalicencia(idimpresion,proyec){
    //alert(proyec);

    $('#imprepresionajaxbutton'+idimpresion).html("<i class='glyphicon glyphicon-time'></i>");

    window.open( _site_url +  'acrsolicitud/imprimircredenciallicencia/'+idimpresion,'_blank ');
    /*<?php //echo url('acrsolicitud/imprimircredencial');?>/--{{$acr_solicitu->ID}}--  */
    var opts = {
        "closeButton": true,
        "debug": false,
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };
    toastr.success("",":) Impresion de tarjeta realizada",opts);
}

function actualizatablaimpresalicenciapropia(idimpresion,proyec){
    //alert(proyec);

    $('#imprepresionajaxbutton'+idimpresion).html("<i class='glyphicon glyphicon-time'></i>");

    window.open( _site_url +  'acrsolicitud/imprimircredenciallicenciapropia/'+idimpresion,'_blank ');
    /*<?php //echo url('acrsolicitud/imprimircredencial');?>/--{{$acr_solicitu->ID}}--  */
    var opts = {
        "closeButton": true,
        "debug": false,
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };
    toastr.success("",":) Impresion de tarjeta realizada",opts);
}

function selectchangeacred(val){

    var stream="PROYECTO="+val;
    show_loading_bar(100);
    //	alert( _site_url + "acrsolicitud/tablarespacred"+ stream);
    $.ajax({
        type: "POST",
        url: _site_url + "acrsolicitud/tablarespacred",
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
            //	alert(data);
            var opts = {
                "closeButton": true,
                "debug": false,
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };
            toastr.success("",":) Consulta realizada",opts);
            $('#cambio_divacred').html(data);
        }

    });

}

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
            toastr.success("",":) Consulta realizada",opts);
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
/*
 Funciones para formulario solicitud acreditacion
 */
function getRegion(region) {
    $("#region").attr('value', "Cargando..");
    $.get(_site_url +'/ajax/region/'+region, function(data) {
        $("#region").attr('value', data);
    });
}

function validaEmail(){
    if($(".email").val().indexOf('@', 0) == -1 || $(".email").val().indexOf('.', 0) == -1) {
        $('.email').parent().addClass('has-error');
        alert('El correo no es válido');
        return false;
    }
    else{
        $('.email').parent().removeClass('has-error');
        return true;
    }
}

function setDisables() {
    if ($("#estado").attr('estado') != "ENTREGADA" ) {
        $("input").each(function(index, el) {
            if ($(this).attr('fijo') != "true") {
                $(this).attr('disabled', false);
            }
        });
        $("select").each(function(index, el) {
            if ($(this).attr('fijo') != "true") {
                $(this).attr('disabled', false);
            }
        });
        $("textarea").each(function(index, el) {
            $(this).attr('disabled', false);
        });
        $("#Region").attr('disabled', true);
        $("#region").attr('disabled', true);
        //$("#inicioContrato").attr('disabled', true);
        //$("#terminoContrato").attr('disabled', true);
    }
    if($('#rut').val() && $('#rut').val() != ""){
        $("#rut").attr('readonly', true);
        var rut = $("#rut").val();
        rut = setRut(rut);
        $("#rut").val(rut);
    }
    if($('#rut_provisorio').val() && $('#rut_provisorio').val() != ""){
        $("#rut_provisorio").attr('readonly', true);
        var rut = $("#rut_provisorio").val();
        rut = setRut(rut);
        $("#rut_provisorio").val(rut);
    }

    if($('#pasaporte').val() != ""){
        $("#pasaporte").attr('readonly', true);
    }

}

function setFormato() {
    $(".datepicker").each(function(index, el) {
        var fecha = $(this).val();
        fecha = setFecha(fecha);
        $(this).val(fecha);
    });
}

function setRut (rut) {
    var indice = rut.indexOf("-");
    rut1 = rut.substr(0,indice);
    var c = 0;
    var nrut = "";
    for (var i = rut1.length - 1; i >= 0; i--) {
        if (c == 3) {
            nrut=nrut+"."+rut1[i];
            c=0;
        }
        else{
            nrut=nrut+rut1[i];
        }
        c = c+1;
    }
    var rutf = "";
    for (var i = nrut.length - 1 ; i >= 0; i--) {
        rutf = rutf+nrut[i];
    }
    rutf = rutf+rut.substr(indice,rut.length);
    return rutf;
}

function setFecha(fecha) {
    if (fecha != "") {
        aux = fecha.split("-");
        return aux[2]+"-"+aux[1]+"-"+aux[0];
    }
    else{
        return "";
    }
}

function comprobarCamposRequiredo(){

    var error = 0;
    $('.requeridofprm').each(function(i, elem){
        if($(elem).val() == ''){
            $(elem).css({'border':'1px solid red'});
            error=1;

        }else{

            $(elem).css({'border':'1px solid green'});
        }
    });

    return error;
}

function comprobarCamposRequired(idForm){
    var correcto=true;
    var campos=$('#'+idForm+' input[type="text"]:required');
    var file=$('#'+idForm+' input[type="file"]:required');
    var select=$('#'+idForm+' select:required');
    $(campos).each(function() {
        if($(this).val()==''){
            correcto=false;
            $(this).addClass('error');
        }
    });
    $(file).each(function() {

        if($(this).val()==''){
            correcto=false;
            $(this).addClass('error');
        }
    });

    $(select).each(function() {
        if($(this).val()==''){
            correcto=false;
            $(this).addClass('error');
        }
    });
    return correcto;
}
function comprobarFechas(){
    var fechaInicio = $("#fechaInicio").val();
    var fechaTermino = $("#fechaTermino").val();
    fechaInicio = fechaInicio.split("-");
    fechaTermino = fechaTermino.split("-");
    if (fechaTermino[2] < fechaInicio[2]) {
        setAlert("datosp","El año de la fecha de término de contrato debe ser mayor al año de la fecha de inicio","error");
        return false;
    }
    else if(fechaTermino[2] == fechaInicio[2]){
        if (fechaTermino[1] < fechaInicio[1]) {
            setAlert("datosp","El mes de la fecha de término de contrato debe ser mayor al mes de la fecha de inicio","error");
            return false;
        }
        else if (fechaTermino[1] == fechaInicio[1]) {
            if (fechaTermino[0] <= fechaInicio[0]) {
                setAlert("datosp","El dia de la fecha de término de contrato debe ser mayor al dia de la fecha de inicio","error");
                return false;
            }
        }
    }
    var fechaVinculacion = $("#fechaVinculacion").val();
    //var fechaInicioCEmpresa = $("#inicioCEmpresa").val();
    var fechaInicioCEmpresa = $("#fechaInicio").val();
    fechaVinculacion = fechaVinculacion.split("-");
    fechaInicioCEmpresa = fechaInicioCEmpresa.split("-");
    if (fechaVinculacion[2] < fechaInicioCEmpresa[2]) {
        setAlert("datosp","El año de la fecha de vinculación al proyecto debe ser mayor al año de la fecha de inicio del contrato","error");
        return false;
    }
    else if(fechaVinculacion[2] == fechaInicioCEmpresa[2]){
        if (fechaVinculacion[1] < fechaInicioCEmpresa[1]) {
            setAlert("datosp","El mes de la fecha de vinculación al proyecto debe ser mayor al mes de la fecha de inicio del contrato","error");
            return false;
        }
        else if (fechaVinculacion[1] == fechaInicioCEmpresa[1]) {
            if (fechaVinculacion[0] < fechaInicioCEmpresa[0]) {
                setAlert("datosp","El dia de la fecha de vinculación al proyecto debe ser mayor al dia de la fecha de inicio del contrato ","error");
                return false;
            }
        }
    }

    return true;
}

function guardarDatosPersonales () {
    $('#submit').attr('disabled', true);
    if (comprobarCamposRequired("datosp")) {
        if (comprobarFechas()) {
            $("#divloader").append('<div id="loader"><img src="/images/loader-1.gif"/> </div>');
            $("#fechaTermino").attr('disabled', false);
            $.post(_site_url + 'ajax/guarda-data-persona',$("#datosp").serialize() , function(data, textStatus, xhr) {
                if(textStatus == 'success'){
                    //alert(data);
                    if (!isNaN(data)) {
                        $('.solicitud_numero').each(function(index, el) {
                            $(this).attr('value', data);
                        });
                        $('#solicitud').attr('value', data);
                        $("#loader").remove();
                        $("#docCriticos").attr('guardado', 'si');
                        $('#fdocfechas').attr('guardado', 'si');
                        setAlert("datosp","Datos Guardados Exitosamente","exito");
                    }
                    else{
                        setAlert("datosp",data,"error");
                        $("#loader").remove();
                    }
                }
                else{
                    setAlert("datosp","Se ha producido un error, contáctese con el soporte","error");
                    $("#loader").remove();
                }
            });
            $(this).attr('disabled', true);
        }
        else{
            //
        }
    }
    else{
        setAlert("datosp","Debe completar los campos requeridos","error");
    }
}

function subirDocFechas () {
//	var listo = true;
//	if ($("#fdocfechas").attr('guardado') == "si") {
//		//if(comprobarCamposRequired("fdocfechas")){
//			if ($("#archCursoInduccion").val() == "" & $("#archDeclaracion").val() == "") {
//				setAlert("fdocfechas","Debe subir algún archivo","error");
//			}
//			else{
//				if ($("#archCursoInduccion").val() != "" & !validaDocumentos("archCursoInduccion","pdf")){
//					listo = false;
//					setAlert("fdocfechas","El curso de inducción debe ser un PDF","error");
//				
//				}
//				if ($("#archDeclaracion").val() != "" & !validaDocumentos("archDeclaracion","pdf")) {
//					listo = false;
//					setAlert("fdocfechas","La declaración debe ser un PDF","error");
//				}
//				if (listo) {
    $("#fdocfechas").submit();
//					$("#docCriticos").attr('guardado', 'si');	
//				}
//			}
    /*
     }
     else{
     setAlert("fdocfechas","Debe subir todos los documentos","error");
     }*/
//	}
//	else{
//		setAlert("fdocfechas","Debe guardar los datos personales primero","error");
//	}
}

function subirDocCriticos () {
    if($('#docCriticos').attr('guardado') == "si" ){
        if(comprobarCamposRequired("docCriticos")){
            if(comprobarFechasDocs()){
                if (validaDocumentos("archContrato","pdf")) {
                    if (validaDocumentos("archExamenMedico","pdf")) {
                        if (validaDocumentos("archCertAnt","pdf")) {
                            $('#docCriticos').submit();
                        }else{
                            setAlert("docCriticos","El certificado de antecedentes debe ser un PDF");
                        }
                    }
                    else{
                        setAlert("docCriticos","El examen médico debe ser un PDF");
                    }
                }
                else{
                    setAlert("docCriticos","El contrato debe ser un archivo PDF");
                }
            }
            else{

            }
        }
        else{
            setAlert("docCriticos","Debe completar la información obligatoria","error");
        }
    }
    else{
        setAlert("docCriticos","Debe guardar los documentos con fechas primero","error");
    }

}
//string id = id input file
//string tipo = "pdf", "jpg", "etc".
function validaDocumentos (id,tipo) {
    var correcto = true;
    var extension = $("#"+id).val();
    extension= extension.split(".");
    extension = extension[extension.length-1].toLowerCase();
    if(extension != tipo ){
        correcto = false;
    }
    return correcto;
}
//string id del objeto que estara arriba del msje
//string tipo: "error" o "exito"
//string mensaje
function setAlert (id,mensaje,tipo) {
    $("#mensaje").remove();
    if (tipo == "exito") {
        $('#'+id).append('<div id="mensaje" class="alert alert-success"hidden><strong>¡Atención! </strong>'+mensaje+'</div>');
    }
    else if(tipo == "error"){
        $("#"+id).append('<div id="mensaje" class="alert alert-danger" hidden><strong>¡Atención! </strong>'+mensaje+'</div>');
    }
    $("#mensaje").fadeIn(3500, function() {
        $("#mensaje").fadeOut(3500);
    });
}
function setTipoContrato (id,contrato) {
    if (id == 1 || id == 3) {
        $.get('/ajax/termino-contrato-empresa/'+contrato, function(data) {
            data = setFecha(data);
            $("#fechaTermino").removeClass('datepicker');
            $("#fechaTermino").removeAttr('data-start-view');
            $("#fechaTermino").val(data);
            $("#fechaTermino").attr('value',data);
            $("#fechaTermino").attr('required', false);
            //$("#fechaTermino").attr('readonly', true);
            $("#fechaTermino").removeClass('datepicker');

            $("#termino1").removeClass('datepicker');
            $("#termino1").removeAttr('data-start-view');
            $("#termino1").val(data);
            $("#termino1").attr('value',data);
            $("#termino1").attr('required', false);
            //$("#termino1").attr('readonly', true);
            $("#termino1").removeClass('datepicker');
        });

    }
    else{
        $("#fechaTermino").attr('required', true);
        $("#fechaTermino").attr('disabled', false);
        $("#fechaTermino").addClass('datepicker');
        //$("#fechaTermino").attr('readonly', false);
        $("#fechaTermino").val("");

        $("#termino1").attr('required', true);
        $("#termino1").attr('disabled', false);
        $("#termino1").addClass('datepicker');
        //$("#termino1").attr('readonly', false);
        $("#termino1").val("");

    }
}

function setTerminoContrato (id) {
    $.get('/ajax/termino-contrato-empresa/'+id, function(data) {
        data = setFecha(data);
        $("#terminoCEmpresa").attr('value', data);
        setInicioContrato(id);
    });
}

function setInicioContrato (id) {
    $.get('/ajax/inicio-contrato-empresa/'+id, function(data) {
        data = setFecha(data);
        $("#inicioCEmpresa").attr('value', data);
    });
}

function comprobarFechasDocs(){
    var fechaInicio = $("#inicioExamen").val();
    var fechaTermino = $("#terminoExamen").val();
    fechaInicio = fechaInicio.split("-");
    fechaTermino = fechaTermino.split("-");
    if (fechaTermino[2] < fechaInicio[2]) {
        setAlert("docCriticos","El año de la fecha de término del examen debe ser mayor al año de la fecha de inicio","error");
        return false;
    }
    else if(fechaTermino[2] == fechaInicio[2]){
        if (fechaTermino[1] < fechaInicio[1]) {
            setAlert("docCriticos","El mes de la fecha de término del examen debe ser mayor al mes de la fecha de inicio","error");
            return false;
        }
        else if (fechaTermino[1] == fechaInicio[1]) {
            if (fechaTermino[0] <= fechaInicio[0]) {
                setAlert("docCriticos","El dia de la fecha de término del examen debe ser mayor al dia de la fecha de inicio","error");
                return false;
            }
        }
    }
    return true;
}


$("#CIUDAD_EMPRESA").change(function(){
    var ciudad = $(this).val();
    //alert(ciudad);
    $.ajax({
        type: "POST",
        url: _site_url + "extcomuna/comunaporciudad",
        data:{ciudad:ciudad},
        statusCode: {
            404: function() {
                //notify('Error Grave no se encontro controller Buscador_ingreso',1000,3000);
            }
        },
        error: function() {
            //notify('Ha ocurrido un error al modificar el documento\nSi el error persiste comuniquese con el Proveedor',1000,3000);
        },
        success: function(data) {
            //alert(data);
            $("#OnChangeComuna").html(data);
        }
    });
});

$('#RUT_EMPRESA').Rut({
    on_error:function(){
        toastr.error("INGRESE UN RUT CORRECTO","INFORMACION DE SISTEMA");
        $('#RUT_EMPRESA').val("");
    }
});

function actualizaverimpresalicencia(idimpresion,proyec){

    window.open( _site_url +  'acrsolicitud/vercredenciallicencia/'+idimpresion,'_blank ');

    var opts = {
        "closeButton": true,
        "debug": false,
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };
}