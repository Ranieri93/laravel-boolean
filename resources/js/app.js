require('./bootstrap');
var $ = require('jquery');

$(document).ready(function () {

    $('.faq-question i').click(function () {
        var currentText = $(this).parent().siblings('p');
        if (currentText.hasClass('active')) {
            currentText.removeClass('active')
        } else {
            $('.answer').each( function () {
                var eachCurrent = $(this);
                if (eachCurrent != currentText) {
                    eachCurrent.removeClass('active')
                }
            });
            $(currentText).toggleClass('active');
        }
    })
});
