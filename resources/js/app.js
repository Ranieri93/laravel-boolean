require('./bootstrap');
var $ = require('jquery');

$(document).ready(function () {

    $('.faq-question i').click(function () {
        var currentText = $(this).parent().siblings('p');
        if (!currentText.hasClass('active')) {
            $('.answer').removeClass('active');
            $('i').removeClass('fa-minus').addClass('fa-plus');
            currentText.addClass('active');
            $(this).removeClass('fa-plus').addClass('fa-minus');
        } else {
            currentText.removeClass('active');
            $(this).removeClass('fa-plus').addClass('fa-minus');
        }
    })
});
