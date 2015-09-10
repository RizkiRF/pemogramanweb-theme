var $ = jQuery.noConflict();

$( document ).ready(function(){
	$('.search-overlay-trigger').click(function(){
		$('.search-overlay').show();
	});

	$('.search-overlay .close').click(function(){
		$('.search-overlay').hide();
	});

	$(document).keyup(function(e){
		if (e.keyCode == 27) $('.search-overlay').hide();
	});


   [].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {    
       new SelectFx(el, {
           stickyPlaceholder: false
       });
   } );

   $('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
		   		$('html,body').animate({
		     		scrollTop: target.offset().top
		     	}, 1000);
		   		return false;
		 	}
		}
	});

   $('.download-wrap .cs-options li').click(function(){
   	url = $(this).attr('data-value');
   	name = $(this).text();
   	forcedownload(url);
   });

   	function forcedownload(url){
   		window.open(url,'_blank');
	}

});
