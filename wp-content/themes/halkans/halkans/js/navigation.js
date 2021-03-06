/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {
	var container, button, menu, links, i, len;

	container = document.getElementById( 'site-navigation' );
	if ( ! container ) {
		return;
	}

	button = container.getElementsByTagName( 'button' )[0];
	if ( 'undefined' === typeof button ) {
		return;
	}

	menu = container.getElementsByTagName( 'ul' )[0];

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	menu.setAttribute( 'aria-expanded', 'false' );
	if ( -1 === menu.className.indexOf( 'nav-menu' ) ) {
		menu.className += ' nav-menu';
	}

	button.onclick = function() {
		if ( -1 !== container.className.indexOf( 'toggled' )  ) {
			container.className = container.className.replace( ' toggled', '' );
			button.setAttribute( 'aria-expanded', 'false' );
			menu.setAttribute( 'aria-expanded', 'false' );
		} else {
			container.className += ' toggled';
			button.setAttribute( 'aria-expanded', 'true' );
			menu.setAttribute( 'aria-expanded', 'true' );
		}
	};

	// Get all the link elements within the menu.
	links    = menu.getElementsByTagName( 'a' );

	// Each time a menu link is focused or blurred, toggle focus.
	for ( i = 0, len = links.length; i < len; i++ ) {
		links[i].addEventListener( 'focus', toggleFocus, true );
		links[i].addEventListener( 'blur', toggleFocus, true );
	}

	/**
	 * Sets or removes .focus class on an element.
	 */
	function toggleFocus() {
		var self = this;

		// Move up through the ancestors of the current link until we hit .nav-menu.
		while ( -1 === self.className.indexOf( 'nav-menu' ) ) {

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

	/**
	 * Toggles `focus` class to allow submenu access on tablets. Does not work in Chrome
	 */
	( function( container ) {
		var touchStartFn, i,
			parentLink = container.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

		if ( 'ontouchstart' in window || 'onmousedown' in window ) {
			touchStartFn = function( e ) {
        e.stopPropagation();
				var menuItem = this.parentNode, i;

				if ( ! menuItem.classList.contains( 'focus' ) ) {
          e.stopPropagation();
					e.preventDefault();
					for ( i = 0; i < menuItem.parentNode.children.length; ++i ) {
						if ( menuItem === menuItem.parentNode.children[i] ) {
							continue;
						}
						menuItem.parentNode.children[i].classList.remove( 'focus' );
					}
					menuItem.classList.add( 'focus' );
				} else {
					menuItem.classList.remove( 'focus' );
				}
			};

			for ( i = 0; i < parentLink.length; ++i ) {
				parentLink[i].addEventListener( 'touchstart', touchStartFn, false );
			}
		}

    //Solution for Chrome. Eventlistener with passive set to false
//     document.addEventListener("touchstart", touchToggle(event), false );
//
// 	function touchToggle(e) {
// 			touchStartFn = function( e ) {
// 				var menuItem = this.parentNode, i;
//
// 				if ( ! menuItem.classList.contains( 'focus' ) ) {
// 					e.preventDefault();
// 					for ( i = 0; i < menuItem.parentNode.children.length; ++i ) {
// 						if ( menuItem === menuItem.parentNode.children[i] ) {
// 							continue;
// 						}
// 						menuItem.parentNode.children[i].classList.remove( 'focus' );
// 					}
// 					menuItem.classList.add( 'focus' );
// 				} else {
// 					menuItem.classList.remove( 'focus' );
// 				}
// 			};
//
// 			for ( i = 0; i < parentLink.length; ++i ) {
// 				parentLink[i].addEventListener( 'touchstart', touchStartFn, false );
// 			}
// }

		window.onclick = function(event) {
  if (!event.target.matches('.sub-menu') || !event.target.matches('.sub-menu li') || !event.target.matches('.sub-menu li a') ) {
    var instruments = document.getElementById("menu-item-586");
      if (instruments.classList.contains('focus')) {
        instruments.classList.remove('focus');
      }
      var accessories = document.getElementById("menu-item-559");
        if (accessories.classList.contains('focus')) {
          accessories.classList.remove('focus');
        }
      var sold = document.getElementById("menu-item-627");
        if (sold.classList.contains('focus')) {
          sold.classList.remove('focus');
        }
    }
  }
	}( container ) );

	// // Show and hide submenu on click in mobile mode
// 	( function() {
// 		var menuItems = document.querySelectorAll('.main-navigation li');
// 		for ( i = 0; i < menuItems.length; ++i ){
// 			if (menuItems[i].childNodes.length > 1){
// 				menuItems[i].addEventListener('click', toggleSubMenu(menuItems[i].getElementsByTagName('ul')) )
// 			}
// 		}
//
//
//
// 	}
// 	)();
//
//
} )();
//
// function toggleSubMenu(subMenu) {
// 	alert("Yo");
// 	console.log(this);
// 	console.log(subMenu);
// 	subMenu.classList.toggle("show")
// 	return false;
// }
