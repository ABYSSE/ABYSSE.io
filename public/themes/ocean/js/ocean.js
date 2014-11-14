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

    $('body').on('click', '.list-group .list-group-item', function (){

        $(this).toggleClass('active');

    });

    $('.list-arrows button').click(function (){

        var $button = $(this), actives = '';
        if ($button.hasClass('move-left'))
        {
            actives = $('.list-right ul li.active');
            actives.clone().appendTo('.list-left ul').removeClass('active');
            actives.remove();
        }
        else if ($button.hasClass('move-right'))
        {
            actives = $('.list-left ul li.active');
            actives.clone().appendTo('.list-right ul').removeClass('active');
            actives.remove();
        }

    });

});