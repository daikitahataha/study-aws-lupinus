jQuery(function($){

  $('#MenuBtn').on('click', function(){
    $(this).toggleClass('active');
    $('.menu-nav').slideToggle();
  });

  $('.menu-nav .nav-link').on('click', function(){
    $('#MenuBtn').removeClass('active');
    $('.menu-nav').slideUp();
  });
});
