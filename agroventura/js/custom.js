$('#nuevo-trabajador').appendTo("body")

$("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

$('.f-date').datepicker({
    format: "dd/mm/yy",
    language: "es"
});

$('.val-letras').keydown(function (e) {
                var tecla = document.all ? tecla = e.keyCode : tecla = e.which;
                return !((tecla > 47 && tecla < 58) || tecla == 46);
            });

    $(".val-numero").keydown(function(event){

        if((event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105) && event.keyCode !==190  && event.keyCode !==110 && event.keyCode !==8 && event.keyCode !==9  ){
            return false;
        }
    });
