function notify(msg, speed, fadeSpeed, type,icon) {
    $('.notifyx').remove();
    if (typeof fade != "undefined") {
        clearTimeout(fade);
    }
    $('body').append('<div class="notifyx ' + type + '" style="display:none;position:fixed;left:20"><p><i  class='+icon+'></i>'  + msg + '</p></div>');
    notifyHeight = $('.notifyx').outerHeight();
    $('.notifyx').css('top', -notifyHeight).animate({top: 10, opacity: 'toggle'}, speed);
    fade = setTimeout(function () {
        $('.notifyx').animate({top: notifyHeight + 20, opacity: 'toggle'}, speed);
    }, fadeSpeed);
}

//llamar notify
// | Mensaje | velocidad | permanencia | clase css
//notify('Campo Obligatorio',500,3000,'warning');
//llamar notify