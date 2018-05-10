(function($) {
  'use strict';

    var navSearch = $('.nav__search');
    var popupSearch = $('.search-popup');
    var popupSearchClose = $('.search-popup__close');

    var navToggle = $('.nav-toggle__icon');
    var nav = $('.nav');
    var contentOverlay = $('.content-overlay');

    navSearch.on('click', function(){
      popupSearch.addClass('search-popup--active').find('input[type="text"]').focus();
    });

    popupSearchClose.on('click', function(){
      popupSearch.removeClass('search-popup--active');
    });

    navToggle.on('click', function(){
      nav.addClass('nav--mobile');
      contentOverlay.addClass('content-overlay--active');
    });

    contentOverlay.on('click', function(){
      nav.removeClass('nav--mobile');
      contentOverlay.removeClass('content-overlay--active');
    });
  
    $(function(){
		$('.nav__list').slicknav({
        prependTo: '.nav__container',
		allowParentLinks: true
        });
  });
 
$('.github_demo .github').prepend('<span class="fa fa-github fa-1x"></span> ');
$('.github_demo .eye').prepend('<span class="fa fa-eye fa-1x"></span> ');

})(jQuery);
$('.form-newsletter').submit(function(e) {
    e.preventDefault();  
    var form = $(this);   
    $.ajax({
      type: "POST",
      url: form.attr('action'),
      data: form.serialize(), // serializes the form's elements.
      success: function(data)
      {
        form.replaceWith('<h4>E-mail enviado com sucesso!</h4>');
      }
    });
 
});



