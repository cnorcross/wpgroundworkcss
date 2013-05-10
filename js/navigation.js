/**
 * navigation.js
 *
 * Navigation menu customizations.
 */
jQuery(document).ready(function($){
	
	// Find length of menu
	var items = $(".menu > ul > li").length;
	switch (items) {
		case 0:
			break;
		case 1:
			var fractional_count = ' whole';
			break;
		case 2:
			var fractional_count = ' half';
			break;
		case 3:
			var fractional_count = ' third';
			break;
		case 4:
			var fractional_count = ' fourth';
			break;
		case 5:
			var fractional_count = ' fifth';
			break;
		case 6:
			var fractional_count = ' sixth';
			break;
		case 7:
			var fractional_count = ' seventh';
			break;
		case 8:
			var fractional_count = ' eighth';
			break;
		case 9:
			var fractional_count = ' ninth';
			break;
		case 10:
			var fractional_count = ' tenth';
			break;
		case 11:
			var fractional_count = ' eleventh';
			break;
		case 12:
			var fractional_count = ' twelfth';
			break;
		default:
			var fractional_count = ' twelfth';
	}
	// Add grid class to menu items
	$("nav.menu > ul > li").addClass("one " + fractional_count);

	// Add 'menu' class to sub-menus
	$(".sub-menu").parent("li").addClass("menu");
});
