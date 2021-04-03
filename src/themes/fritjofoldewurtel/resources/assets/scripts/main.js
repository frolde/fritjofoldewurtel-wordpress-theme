// import external dependencies
import 'jquery';
import 'slick-carousel';
import 'wowjs';

// Import everything from autoload
import './autoload/**/*'

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());

//
//	Add class to Navigation on scroll
//

function scrollHeader() {
  var nav = $('#navigation-header');
  var scroll = $(window).scrollTop();

  if (scroll >= 90) {
    nav.addClass('headerScrolled');
  }
  if (scroll <= 60) {
    nav.removeClass('headerScrolled');
  }
}

$(window).scroll(function(){
    scrollHeader();
});

$(document).ready(function(){
  scrollHeader();
});

//
//   Smooth Anchor scrolling via jQuery
//
$(document).on('click', 'a[href^="#"]', function (event) {
  event.preventDefault();
  $('html, body').animate({
    scrollTop: $($.attr(this, 'href')).offset().top,
  }, 500);
});

//
//   Initialize client Slider
//
$('.clients__slider').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  arrows: false,
  autoplay: true,
  autoplaySpeed: 0,
  speed: 5000,
  pauseOnHover: false,
  cssEase: 'linear',
  responsive: [{
      breakpoint: 992,
      settings: {
        slidesToShow: 3,
      },
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 2,
      },
    },
  ],
});
