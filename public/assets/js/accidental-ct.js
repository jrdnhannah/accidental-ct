$(document).ready(function(){
    $('#login-or-register-text').click(function(){
        $('#login-wrapper').removeClass('disappear');
        $('#main-wrapper').addClass('disappear');
    });

    $('#forgot-your-password-text').click(function(){
        $('#login-wrapper').addClass('disappear');
        $('#register-wrapper').removeClass('disappear');
    });

    $('#register-text').click(function(){
        $('#login-wrapper').removeClass('disappear');
        $('#register-wrapper').removeClass('disappear');
    });

    $('input, textarea').on('keydown keyup change click', function(){
        var identifier = $(this).attr('name');
        var content = $(this).val();
        $('td#' + identifier).html(content);
    });
});
