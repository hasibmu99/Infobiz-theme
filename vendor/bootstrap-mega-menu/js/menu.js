"use strict";


// toggle menu for mobile
function mobileDropdown () {
  if(jQuery('#mega-menu-wrapper').length) {
    jQuery('#mega-menu-wrapper .nav li.dropdown-holder').append(function () {
      return '<i class="fa fa-caret-down icon" aria-hidden="true"></i>';
    });
    jQuery('#mega-menu-wrapper .nav li.dropdown-holder .icon').on('click', function () {
      jQuery(this).parent('li').children('ul').slideToggle();
    });
  }
}

// DOM ready function
jQuery(document).on('ready', function() {
  mobileDropdown();
});