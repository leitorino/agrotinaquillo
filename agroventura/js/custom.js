$('#nuevo-trabajador').appendTo("body") 	

$("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

$('.f-date').datepicker({
    format: "dd/mm/yy",
    language: "es"
});

/*formulario*/
