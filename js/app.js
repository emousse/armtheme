jQuery( document ).ready( function( $ ) {
  // $() will work as an alias for jQuery() inside of this function
  $('#header__icon').click(function(e){
    e.preventDefault();
    $('body').toggleClass('with--sidebar');
  });

  $('#site-cache').click(function(e){
    $('body').removeClass('with--sidebar');
  });

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

  var fake = document.createElement('div');
  fake.style.width = rect.width + "px";
  fake.style.height = rect.height +"px";

  var onScroll = function() {
    var hasScrollClass = element.classList.contains('fixed');
    if(scrollY()>top && !hasScrollClass){
      element.classList.add('fixed')
      element.style.width = rect.width + "px";
      siteContent.style.paddingTop = rect.height + "px";
    } else if (scrollY()<top && hasScrollClass){
      element.classList.remove('fixed');
      siteContent.style.paddingTop = "";
    }
  }
  window.addEventListener('scroll', onScroll);
} );
