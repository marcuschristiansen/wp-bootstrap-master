(function($){

	$(document).ready(function() {

		// Collapse the navbar when page is scrolled
		$(window).scroll(function() {
			if ($("#mainNav").offset().top > 100) {
		  		$("#mainNav").addClass("navbar-shrink");
		  		$(".navbar").removeClass("navbar-dark");
		  		$(".navbar").addClass("navbar-light");
			} else {
		  		$("#mainNav").removeClass("navbar-shrink");
		  		$(".navbar").addClass("navbar-dark");
		  		$(".navbar").removeClass("navbar-light");
			}
		});

		// Owl Slider
		$('.owl-slider-carousel').owlCarousel({
		    loop:true,
		    margin:10,
		    nav:false,
		    dots: true,
		    dotsEach: true,
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:1
		        },
		        1000:{
		            items:1
		        }
		    }
		});

		//initialize swiper when document ready  
	    var mySwiper = new Swiper ('.swiper-container', {
	      	// Optional parameters
	      	pagination: '.swiper-pagination',
	      	slidesPerView: 6,
	        slidesPerColumn: 2,
	        slidesPerGroup: 6,
	        paginationClickable: true,
	        // Responsive breakpoints
			breakpoints: {
			    // when window width is <= 320px
			    320: {
			    	slidesPerView: 2,
			    	slidesPerGroup: 2,
			    },
			    // when window width is <= 480px
			    480: {
			      	slidesPerView: 2,
			      	slidesPerGroup: 2,
			    },
			    // when window width is <= 640px
			    640: {
			      	slidesPerView: 2,
			      	slidesPerGroup: 2,
			    },
			    992: {
			    	slidesPerView: 3,
			      	slidesPerGroup: 3,
			    }
			}
		});  
		
	});

})(jQuery);