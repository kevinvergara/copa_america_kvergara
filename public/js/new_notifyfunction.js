function notify_new(msg, speed, fadeSpeed, type,icon) {
    $('.notifyx_new').remove();
    if (typeof fade != "undefined") {
        clearTimeout(fade);
    }
    $('body').append('<div class="notifyx_new ' + type + '" style="display:none;position:fixed;left:20"><p><i  class='+icon+'></i>'  + msg + '</p></div>');
    notifyHeight = $('.notifyx_new').outerHeight();
    $('.notifyx_new').css('top', -notifyHeight).animate({top: 10, opacity: 'toggle'}, speed);
    fade = setTimeout(function () {
        $('.notifyx_new').animate({top: notifyHeight + 20, opacity: 'toggle'}, speed);
    }, fadeSpeed);
}