jQuery(document).ready(function ($) {
    "use strict";

    $('.menu__btn-search').on('click', function(e) {
        $('#form1').toggle();
    });
    $('.char-textarea').on('keyup', function(e) {
        var maxLength = parseInt($(this).attr('maxlength'));
        var length = $(this).val().length;
        length = maxLength - length;
        $('.char-count').text(length);
    });

});
