$(document).ready(function(){
    $('input, textarea').on('keydown keyup change click', function(){
        var identifier = $(this).attr('name');
        var content = $(this).val();
        $('td#' + identifier).html(content);
    });
});
