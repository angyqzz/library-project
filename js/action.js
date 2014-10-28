$( document ).ready(function() {
    $( ".group-filter" ).click(function() {
        $(".mix").hide();
        $('#'+ $(this).data('name')).show();
    });
    
    $( "#all" ).click(function() {
        $(".mix").show();
    });
});