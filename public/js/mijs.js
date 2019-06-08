/*
 * document onready muestra cuando cargo la pagina
 * 
 */
$( document ).ready(function() {

    //Impide que se envie el formulario sin apretar el submit
    $("#frm_Empresa").submit(function(){

        if($(".rutrp").val()==""){
            $(".rutrp").focus();
            //alert("el rut esta pelado visthe");
            return false;
        }
    });

    //inicializo la clase sin errores  
    /*
     *Aca se validan los rut por separados 
     * 
     */
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

    $('.rutre').parent().addClass('');

    $('.rutem').Rut({
        on_error: function(){
            //assigno clase error

            $('.rutem').parent().addClass('has-error');
        },
        on_success: function(){
            // le quito la clase error
            $('.rutem').parent().removeClass('has-error');
        },
        format_on: 'keyup'
    });
    //--------------------------------------------------------------------------
    //valido mail
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
    //----------------------------------------------------------------------


    $(function(){
        //Para escribir solo letras
        $('.letra').validCampoFranz(' abcdefghijklmnñopqrstuvwxyzáéiou');

        //Para escribir solo numeros    
        $('.numero').validCampoFranz('0123456789');
    });

    //aparece y desaparece pais
    $(".paisdivrl").hide();
    $(".paisdivre").hide();

    $("#nacionalrl").change(function (){

        $(".paisdivrl").hide();
    });

    $("#extranjerorl").change(function (){

        $(".paisdivrl").show();
    });

    $(".paisdivre").hide();

    $("#nacionalre").change(function (){

        $(".paisdivre").hide();
    });

    $("#extranjerore").change(function (){

        $(".paisdivre").show();
    });
    //validacion textos vacios


//    $('.appatrl').parent().addClass('');
//    $('.nomrl').parent().addClass('');
//    
//    $("#frm_Empresa").submit(function () 
//    {  
//        
//        if($('.nomrl').val().length < 1) {  
//            $('.nomrl').parent().addClass('has-error');
//            return false; 
//        }
//        
//        $('.nomrl').parent().removeClass('has-error');
//        return true; 
//    });  
//    

}); 

