
//menú desplegable
$("#btn_toggle_dsk").click(function () {
  if ($("#menu_toogle_dsk").hasClass('hide-menu')) {
      $("#menu_toogle_dsk").removeClass('hide-menu');
      $("#menu_toogle_dsk").addClass('view-menu');
  }else {
      $("#menu_toogle_dsk").addClass('hide-menu');
  }
});

//Formulario interesado
$("#btn_send").click(function () {
  var nombre = $("#nombre").val();
  var correo = $("#correo").val();

  if (nombre == "") {
        $("#alert_nombre").text("Dato requerido");
  }else {
        $("#alert_nombre").text("");
  }

  if (correo == "") {
        $("#alert_correo").text("Dato requerido");
  }else {
        $("#alert_correo").text("");
  }


});
//Abre la vista modal de interesado
$('.modal-interes').click(function () {
    $("#modal-ineteresado").modal('show');
    $('.form_datos input').val('');
    $('.form_datos textarea').val('');
});
$('.modal-enviar').click(function () {
    $("#modal-ineteresado").modal('hide');
    $("#modal-enviar").modal('show');
    $('.form_datos input').val('');
    $('.form_datos textarea').val('');
    $("#alert_nombre").text("");
    $("#alert_correo").text("");
})
$('.modal-img').click(function () {
    $("#modal-img").modal('show');
});
//Limpia los datos del formulario
$('.close').click(function () {
    $('.form_datos input').val('');
    $('.form_datos textarea').val('');
    $("#alert_nombre").text("");
    $("#alert_correo").text("");
});



$("#button-precios").dropdown('toogle');

$("#drop-control button").click(function () {
    var costoTexto = $(this).text();
    $("#dropdownMenu2").text(costoTexto);
    $('.money').mask("###,000", {reverse: false});
});

//Cambio de fondo
$("#btn-credito").click(function () {
    var btnCredito = $("#btnRadio").hasClass('jplist-selected');

    if (btnCredito == true) {
          $("#header-img").addClass('img_city_02');
          $("#header-img").removeClass('img_city_01');
          $("#bg-city").removeClass('color-city-01');
          $("#bg-city").addClass('color-city-02');
    }else {
      $("#header-img").removeClass('img_city_02');
      $("#header-img").addClass('img_city_01');
      $("#bg-city").removeClass('color-city-02');
      $("#bg-city").addClass('color-city-01');
    }
    $("#btn-credito").addClass('credito-activo');
});
//Acordion
$('.btnSub').click(function () {
    var btnSup = $(this).attr('id');

    $('.acordion-faq div').removeClass('color-gris');
    $('.acordion-faq div').removeClass('texto-blanco');

    $("#"+btnSup).addClass('color-gris');
    $("#"+btnSup).addClass('texto-blanco');
});

//Menú página principal


//Menú mobil
$("#btn-toogle").click(function () {
   var menuMobil = document.getElementById('menu-mobil');
   TweenMax.to(menuMobil, .6, {scale:1, opacity: 1});
});

$("#close-toogle").click(function () {
  var menuMobil = document.getElementById('menu-mobil');
  TweenMax.to(menuMobil, .6, {opacity: 0, scale:0});
});

if ($('#gallery-thumbs').length > 0) {


  var thumb = $('#gallery-thumbs').find('.thumb');


  var visibleThumbs = 5;


  var gallerySlider = $('#gallery').bxSlider({
      controls: false,
      mode: 'fade',
      pager: false,
      adaptiveHeight: true,
      easing: 'easeInOutQuint',
      infiniteLoop: true,
      speed: 500,
      auto: false,
      onSlideAfter: function (currentSlideNumber) {
          var currentSlideNumber = gallerySlider.getCurrentSlide();
          thumb.removeClass('pager-active');
          thumb.eq(currentSlideNumber).addClass('pager-active');
      },

      onSlideNext: function () {
          var currentSlideNumber = gallerySlider.getCurrentSlide();
          slideThumbs(currentSlideNumber, visibleThumbs);
      },

      onSlidePrev: function () {
          var currentSlideNumber = gallerySlider.getCurrentSlide();
          slideThumbs(currentSlideNumber, visibleThumbs);
      }
  });

  // Cuando se da un click a una miniatura
  thumb.click(function (e) {

      // -6 as BX slider clones a bunch of elements
      gallerySlider.goToSlide($(this).closest('.thumb-item').index());

      // Prevent default click behaviour
      e.preventDefault();
  });

  // Thumbnail slider
  var thumbsSlider = $('#gallery-thumbs').bxSlider({
      controls: true,
      pager: false,
      easing: 'easeInOutQuint',
      infiniteLoop: false,
      minSlides: 3,
      maxSlides: 2,
      slideWidth: 600,
  });

  // Function to calculate which slide to move the thumbs to
  function slideThumbs(currentSlideNumber, visibleThumbs) {

      // Calculate the first number and ignore the remainder
      var m = Math.floor(currentSlideNumber / visibleThumbs);

      // Multiply by the number of visible slides to calculate the exact slide we need to move to
      var slideTo = m * visibleThumbs;

      // Tell the slider to move
      thumbsSlider.goToSlide(m);
  }

  // When you click on a thumb
  $('#gallery-thumbs').find('.thumb').click(function () {

      // Remove the active class from all thumbs
      $('#gallery-thumbs').find('.thumb').removeClass('pager-active');

      // Add the active class to the clicked thumb
      $(this).addClass('pager-active');

  });

}
//Modal contacto
$("#btn-modal").click(function () {
    $("#modalContacto").modal('show');
});
