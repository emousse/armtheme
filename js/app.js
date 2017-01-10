jQuery( document ).ready( function( $ ) {
  // $() will work as an alias for jQuery() inside of this function
  $('#header__icon').click(function(e){
    e.preventDefault();
    $('body').toggleClass('with--sidebar');
  });

  $('#site-cache').click(function(e){
    $('body').removeClass('with--sidebar');
  });
} );
