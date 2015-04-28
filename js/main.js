
(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away

// == Owl Carousel ================================================
		
		function initOwl() {
		
			$("#owl-carousel").owlCarousel({
 
			  navigation : true, // Show next and prev buttons
			  slideSpeed : 300,
			  paginationSpeed : 400,
			  singleItem:true
			});
		}
		
// == fix menu on top on scroll ===================================
		

		function onScrollFixTopMenu() {
				if ($(document).scrollTop() >= 120) {
				  $('.menu-wrapper').addClass('navbar-fixed-top');
				  $('html').addClass('has-fixed-nav');
				} else {
				  $('.menu-wrapper').removeClass('navbar-fixed-top');
				  $('html').removeClass('has-fixed-nav');
				}
		}
		
		function fixMenuOnTop() {
			//Adding fixed position to header
			/*
			$(document).scroll(function() {
				if ($(document).scrollTop() >= 120) {
				  $('.menu-wrapper').addClass('navbar-fixed-top');
				  $('html').addClass('has-fixed-nav');
				} else {
				  $('.menu-wrapper').removeClass('navbar-fixed-top');
				  $('html').removeClass('has-fixed-nav');
				}
			});
			*/
				window.addEventListener("scroll", onScrollFixTopMenu);
		} //fixMenuOnTop
	
	
// === click to scroll ==========================================

		$(document).on("scroll", onScroll);
		// Smooth scrolling https://css-tricks.com/snippets/jquery/smooth-scrolling/
		function clickToScoll() {
			//$('.navbar li a[href*=#]:not([href=#])').click(function() {
			$('.navbar li a, .back-top a').click(function(e) {
				e.preventDefault();
				$(document).off("scroll");

				
				$('.navbar li').removeClass("active");
				$(this).parent().addClass("active");
				
				if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
					|| location.hostname == this.hostname) {

					var target = $(this.hash);
					var secID = this.hash.slice(1);
					target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
					   if (target.length) {
						 $('html,body').animate({
							 scrollTop: target.offset().top
						}, 1000, function() {
									fixMenuOnTop();
									$(document).on("scroll", onScroll);
							});
						return false;
						}
				}
			});
		} //clickToScoll
		
		function handleAnimation(secID) {
			$("." + secID + " .hiding").each(function(idx) {
				$(this).addClass("animated");																 
			});
		} //handleAnimation
		
		// http://www.instantshift.com/2014/11/14/jquery-page-scroll-active-menu/		
		function onScroll(event){
			var scrollPos = $(document).scrollTop();

			$('#main-menu a').each(function () {
			
				var currLink = $(this);
				var refElement = $(currLink.attr("href"));
				
				if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
					$('#main-menu ul li').removeClass("active");
					currLink.parent().addClass("active");
				}
				else{
					currLink.parent().removeClass("active");
				}
				
			});
		}
		
		
// === check if element has scrolled into view, then add animation ===========================
		
		// http://www.web2feel.com/tutorial-for-animated-scroll-loading-effects-with-animate-css-and-jquery
		function checkElementInView() {
			$('.service').addClass("hiding").viewportChecker({
					classToAdd: 'animated',
					offset: 100
			});
		} //checkElementInView
	
	
	
		function init() {
			fixMenuOnTop();
			clickToScoll();
			checkElementInView();
			initOwl();
		} //init
		
		
		
		
// === Initialise ================================================================================		
		init();
		
	});
	
	
	
	
})(jQuery, this);

		
		
		
jQuery(document).ready(function() {

});

		