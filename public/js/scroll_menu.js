//Animación del menú
$(document).ready(function () {
  $(window).scroll(function () {
      //Altura del scroll
       var scroll = $(this).scrollTop();
      //Secciónes
  		 var secc01 = $("#secc_encuentra").offset().top;
       var secc02 = $("#main-01").offset().top;

      //Espacio de la sección
  		 var espacio = 250;
      //Calcular el espacio recorido
       var secc01 = secc01 - espacio;
       var secc02 = secc02 - espacio;

      //Condicionales
       if (scroll >= secc01) {
            var menu = document.getElementById('header');
            TweenMax.to(menu, 2, {top:0});
        }else {
          var menu = document.getElementById('header');
            TweenMax.to(menu, 2, {top:-100});
        }
    });
});
