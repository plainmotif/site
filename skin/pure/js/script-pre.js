jQuery(document).ready(function() {
    $('.close').on('click', function(e) {
        e.preventDefault();
        $(this).parent().slideUp(300, function() {
            $(this).remove();
        });
    });
    
});
