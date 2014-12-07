$(document).ready(function(){
	
	//Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});
	
	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	
});

$(document).ready(function () {
  setTimeout(function () {
    $('.sidebar > *').affix({
      offset: {
        top: function () { return $window.width() <= 980 ? 290 : 210 }
        , bottom: 270
      }
    })
  }, 100)
});