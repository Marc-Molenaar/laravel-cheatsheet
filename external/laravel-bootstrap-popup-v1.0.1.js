$('document').ready(function() {

    $("#product_popup #search").keyup(function() {
        var txt = $('#product_popup #search').val();
        $('.product_item').hide();
        
        $('.product_item').each(function(){
            if($(this).text().toUpperCase().indexOf(txt.toUpperCase()) != -1){
                $(this).show();
            }
        });
    });

    $("button#open").click(function() {
        $(".popup").show();
    });

    $("button#close").click(function() {
        $(".popup").hide();
    });

    $(document).click(function(event) {
        if (!$(event.target).closest("button#open, .popup .container").length) {
            $(".popup").hide();
        }
    });

});