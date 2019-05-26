$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});

$("#attribute_form").hide();

$("#view_form").click(function(){
    $("#attribute_form").show();
    $("#attribute_table").hide();
});


