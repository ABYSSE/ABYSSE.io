$(function() {

    $('.search').click(function() {
        $(this).hide();
        $('.search-form').show();
        $('.search-input').focus();
        return false;
    });

    $('.search-input').focusout(function() {
        $('.search-form').hide();
        $('.search').show();
        return false;
    });

});