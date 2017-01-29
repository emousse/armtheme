jQuery( document ).ready( function( $ ) {
  // $() will work as an alias for jQuery() inside of this function
  $('#header__icon').click(function(e){
    e.preventDefault();
    $('body').toggleClass('with--sidebar');
  });

  $('#site-cache').click(function(e){
    $('body').removeClass('with--sidebar');
  });

  $('#up').click(function(e){
    window.scroll({ top: 0, left: 0, behavior: 'smooth' });
  })

  //"quantité" de scroll vertical
  function scrollY(){
    var supportPageOffset = window.pageXOffset !== undefined;
    var isCSS1Compat = ((document.compatMode || "") === "CSS1Compat");

    return supportPageOffset ? window.pageYOffset : isCSS1Compat ? document.documentElement.scrollTop : document.body.scrollTop;
  }

  var element  = document.querySelector('.header');
  var siteContent = document.querySelector('.site-content');
  var rect = element.getBoundingClientRect();
  //position de l'element "top" par rapport au haut de la fenetre.
  var top = rect.top + scrollY();

  var onScroll = function() {
    var hasScrollClass = element.classList.contains('fixed');
    if(scrollY()>top && !hasScrollClass){
      element.classList.add('fixed')
      element.style.width = rect.width + "px";
      $('#up').addClass('up--show');
      if(rect.width>768)
        siteContent.style.paddingTop = rect.height + "px";
    } else if (scrollY()<top && hasScrollClass){
      element.classList.remove('fixed');
      siteContent.style.paddingTop = "";
      $('#up').removeClass('up--show')
    }
  }

  var onResize = function(){
    element.style.width = "auto";
    element.classList.remove('fixed');
    siteContent.style.paddingTop = "";

    //on recalcule les variables
    rect = element.getBoundingClientRect();
    top = rect.top + scrollY();

    onScroll();
  }
  window.addEventListener('scroll', onScroll);

  window.addEventListener('resize', onResize);

  //event for flickity
  var $carousel = $('.carousel').flickity();
  var flkty = $carousel.data('flickity');
  $carousel.on( 'settle.flickity', function() {
    //index of current slide flkty.selectedIndex
    $(".carousel-content").velocity("transition.flipBounceXIn");
  });
  //init isotope
  var $grid = $('.project-grids').isotope({
    itemSelector: '.projects-item',
    layoutMode: 'fitRows'
  });

  // bind filter button click
  $('.filters-button-group').on( 'click', 'li', function() {
    var filterValue = $( this ).attr('data-filter');
    // use filterFn if matches value
    $grid.isotope({ filter: filterValue });
  });
// change is-checked class on buttons




} );
