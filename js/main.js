$(document).ready(function () {

  /**
   * Menus e submenus
   */
  $("#menu-items .logo").on('click', function () {
    $("#menu-items").addClass('menu-responsive');
    $("#menu-items ul.menu-item").slideToggle('slow');
  });


  $("#menu-items ul.menu-item > li").on('click', function () {
    var tamanhoTela = $(window).width();
    if (tamanhoTela <= 768) {
      $(this).find(".menu-submenus").slideToggle('slow');
    }
  });


  /**
   * Carousel pagina home
   */
  $('#home-carousel').owlCarousel({
    items:1,
    margin:10
  });

  /**
   * Carousel pagina evento
   */
  $('#evento-carousel').owlCarousel({
    items:1,
    margin:10
  });


  /**
   * Carousel pagina evento
   */
  $('#docaria-carousel').owlCarousel({
    items:1,
    margin:10
  });
});