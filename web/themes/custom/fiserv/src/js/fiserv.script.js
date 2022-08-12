import 'popper.js';
import 'bootstrap';

import '../components/card/collapsible-card';

(function ($) {

  'use strict';

  Drupal.behaviors.helloWorld = {
    attach: function (context) {
      console.log('Hello World');
    }
  };
  Drupal.behaviors.stickyNavbar = {
    attach: function (context, settings) {

        var navbar = $('nav.navbar');

        if (navbar.length) {
            var elmHeight = $('nav.navbar').outerHeight(true);
            $(window).scroll(function() {
                var scrolltop = $(window).scrollTop();
                if (scrolltop > elmHeight) {
                    if (!navbar.hasClass('sticky')) {
                        navbar.addClass('sticky');
                    }
                } else {
                    navbar.removeClass('sticky');
                }
            });
        }

    }

}

})(jQuery, Drupal);
