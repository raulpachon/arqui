$(document).ready(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 0) {
            $('header').addClass('header2');
        } else {
            $('header').removeClass('header2');
        }
    });
});



//var itemJuego = document.createElement("div");
//var imgJuego = document.createElement("img");
//itemJuego.addClass('itemJuego');
//imgJuego.addClass('imgJuego');
//itemJuego.appendChild(imgJuego);
//celda.appendChild(textoCelda);
//celda.appendChild(itemJuego);