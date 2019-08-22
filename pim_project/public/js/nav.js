$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});

$(".form").hide();

$("#view_form, #view_form_group").click(function(){
    $(".form").show();
    $(".table").hide();
});


