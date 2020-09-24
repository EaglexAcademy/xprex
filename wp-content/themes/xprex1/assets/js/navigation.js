/**
 * Theme functions file.
 *
 * Contains handlers for navigation and widget area.
 */

jQuery(function($){
 	"use strict";
   	jQuery('.main-menu-navigation > ul').superfish({
		delay:       500,
		animation:   {opacity:'show',height:'show'},  
		speed:       'fast'
   	});
});

function nikhar_spa_salon_open() {
	jQuery(".sidenav").addClass("open");
}
function nikhar_spa_salon_close() {
  	jQuery(".sidenav").removeClass("open");
}

function nikhar_spa_salon_menuAccessibility() {
	var links, i, len,
	    nikhar_spa_salon_menu = document.querySelector( '.nav-menu' ),
	    nikhar_spa_salon_iconToggle = document.querySelector( '.nav-menu ul li:first-child a' );
    
	let nikhar_spa_salon_focusableElements = 'button, a, input';
	let nikhar_spa_salon_firstFocusableElement = nikhar_spa_salon_iconToggle; // get first element to be focused inside menu
	let nikhar_spa_salon_focusableContent = nikhar_spa_salon_menu.querySelectorAll(nikhar_spa_salon_focusableElements);
	let nikhar_spa_salon_lastFocusableElement = nikhar_spa_salon_focusableContent[nikhar_spa_salon_focusableContent.length - 1]; // get last element to be focused inside menu

	if ( ! nikhar_spa_salon_menu ) {
    	return false;
	}

	links = nikhar_spa_salon_menu.getElementsByTagName( 'a' );

	// Each time a menu link is focused or blurred, toggle focus.
	for ( i = 0, len = links.length; i < len; i++ ) {
	    links[i].addEventListener( 'focus', toggleFocus, true );
	    links[i].addEventListener( 'blur', toggleFocus, true );
	}

	// Sets or removes the .focus class on an element.
	function toggleFocus() {
      	var self = this;

      	// Move up through the ancestors of the current link until we hit .mobile-menu.
      	while (-1 === self.className.indexOf( 'nav-menu' ) ) {
	      	// On li elements toggle the class .focus.
	      	if ( 'li' === self.tagName.toLowerCase() ) {
	          	if ( -1 !== self.className.indexOf( 'focus' ) ) {
	          		self.className = self.className.replace( ' focus', '' );
	          	} else {
	          		self.className += ' focus';
	          	}
	      	}
	      	self = self.parentElement;
      	}
	}
    
	// Trap focus inside modal to make it ADA compliant
	document.addEventListener('keydown', function (e) {
	    let isTabPressed = e.key === 'Tab' || e.keyCode === 9;

	    if ( ! isTabPressed ) {
	    	return;
	    }

	    if ( e.shiftKey ) { // if shift key pressed for shift + tab combination
		    if (document.activeElement === nikhar_spa_salon_firstFocusableElement) {
		        nikhar_spa_salon_lastFocusableElement.focus(); // add focus for the last focusable element
		        e.preventDefault();
		    }
	    } else { // if tab key is pressed
	    	if (document.activeElement === nikhar_spa_salon_lastFocusableElement) { // if focused has reached to last focusable element then focus first focusable element after pressing tab
		      	nikhar_spa_salon_firstFocusableElement.focus(); // add focus for the first focusable element
		      	e.preventDefault();
	    	}
	    }
	});   
}

jQuery(function($){
	$('.mobile-menu').click(function () {
	    nikhar_spa_salon_menuAccessibility();
	});
});