/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// identity function for calling harmony imports with the correct context
/******/ 	__webpack_require__.i = function(value) { return value; };
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


(function ($) {

	var $GeneralScope = {

		// Constructor
		init: function init() {
			this.menuScripts();
			this.fancyScripts();
		},

		// scripts for Menu
		menuScripts: function menuScripts() {
			$(window).scroll(function () {

				var scroll = $(window).scrollTop();
				var header_el = $('.navbar');

				if (scroll >= 100) {
					header_el.addClass("scroll_menu");
				} else {
					header_el.removeClass("scroll_menu");
				}
			});
		},

		fancyScripts: function fancyScripts() {
			$('[data-fancybox="gallery"]').fancybox({
				loop: false,
				gutter: 50,
				keyboard: true,
				preventCaptionOverlap: true,
				arrows: true,
				infobar: true,
				buttons: ["zoom",
				//"share",
				"slideShow",
				//"fullScreen",
				"download", "thumbs", "close"]
			});
		}
	};

	// -- Home -- //
	var $HomeScope = {

		// Constructor
		init: function init() {
			// Instance functions
			this.homeSlider();
			this.newsSlider();
			this.timeSlider();
			this.homeCounter();
		},

		// scripts for banner
		homeSlider: function homeSlider() {
			var slider_wrapper = $('.slider-wrapper');
			var slick_settings = {
				dots: false,
				arrows: true,
				infinite: true,
				autoplay: true,
				autoplaySpeed: 6000,
				speed: 300,
				slidesToShow: 1,
				slidesToScroll: 1,
				adaptiveHeight: true
			};

			if (!slider_wrapper.hasClass('slick-initialized')) {
				var slick_slider = slider_wrapper.slick(slick_settings);
			}
		},

		// scripts for news
		newsSlider: function newsSlider() {
			var slider_wrapper = $('.home-news--wrapper');
			var slick_settings = {
				dots: false,
				arrows: true,
				slidesToShow: 3,
				infinite: false,
				slidesToScroll: 3,
				responsive: [{
					breakpoint: 680,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}]
			};

			if (!slider_wrapper.hasClass('slick-initialized')) {
				var slick_slider = slider_wrapper.slick(slick_settings);
			}
		},

		// scripts for history
		timeSlider: function timeSlider() {
			var slider_wrapper = $('.time--numbers');
			var time_items = slider_wrapper.find('.time--number');
			var time_tab = $('.time---detail');
			var numbersball = time_items.find('.time--holder');

			var slick_settings = {
				dots: false,
				arrows: true,
				slidesToShow: 6,
				infinite: false,
				slidesToScroll: 6,
				accessibility: false,
				responsive: [{
					breakpoint: 680,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}]
			};

			if (!slider_wrapper.hasClass('slick-initialized')) {
				var slick_slider = slider_wrapper.slick(slick_settings);
			}

			if (time_items) {
				time_items.each(function (index, el) {
					var instance = $(this);
					var yearclick = instance.data('year');
					var yearcolor = instance.data('color');
					var numberball = instance.find('.time--holder');

					instance.click(function (event) {
						/* Act on the event */
						time_items.removeClass('active');
						time_tab.css('display', 'none');
						numbersball.css('background-color', '#f6f6f6');

						instance.addClass('active');
						$('.time--details').find("[data-year=" + yearclick + "]").css({
							'display': 'block',
							'background-color': yearcolor
						});
						numberball.css('background-color', yearcolor);
					});
				});
			}
		},

		// scripts for counter
		homeCounter: function homeCounter() {

			var numberItems = $('.numbers--item');

			$('.counter').counterUp({
				delay: 10,
				separator: '.',
				time: 1500
			});

			if (numberItems) {
				numberItems.each(function (index, el) {
					var instance = $(this);
					var numberItem = instance.find('h4');
				});
			}
		}
	};

	// -- Press -- //
	var $PressScope = {

		// Constructor
		init: function init() {
			// Instance functions
			this.videoSlider();
			this.gallerySlider();
		},

		// Scripts Video
		videoSlider: function videoSlider() {
			var slider_wrapper = $('.video-news--wrapper');
			var slick_settings = {
				dots: false,
				arrows: true,
				slidesToShow: 3,
				infinite: false,
				slidesToScroll: 3,
				responsive: [{
					breakpoint: 680,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}]
			};

			if (!slider_wrapper.hasClass('slick-initialized')) {
				var slick_slider = slider_wrapper.slick(slick_settings);
			}
		},

		// Scripts Gallery
		gallerySlider: function gallerySlider() {
			var slider_wrapper = $('.gallery-news--wrapper');
			var slick_settings = {
				dots: false,
				arrows: true,
				slidesToShow: 4,
				infinite: false,
				slidesToScroll: 4,
				responsive: [{
					breakpoint: 680,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}]
			};

			if (!slider_wrapper.hasClass('slick-initialized')) {
				var slick_slider = slider_wrapper.slick(slick_settings);
			}
		}
	};

	// -- Map -- //
	var $MapScope = {
		// Constructor
		init: function init() {
			this.mapScripts();
		},

		mapScripts: function mapScripts() {
			var map = L.map('mapid', {
				center: [4.632, -74.299],
				zoom: 6
			});

			var gl = L.mapboxGL({
				attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">© MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">© OpenStreetMap contributors</a>',
				accessToken: 'no-token',
				style: 'https://api.maptiler.com/maps/070eadaf-a6cd-45ba-b39b-d2c301279159/style.json?key=4ByPNrAy6wHbEZdnwieo'
			}).addTo(map);
		}
	};

	// Trigger
	$GeneralScope.init();

	// Home Scripts
	if ($('body').hasClass('home')) {
		$HomeScope.init();
	}

	// Press / Blog Scripts
	if ($('body').hasClass('page-template-templates_prensa-tpl-php') || $('body').hasClass('single-post')) {
		$PressScope.init();
	}

	// Map Scripts
	if ($('body').hasClass('page-template-_map-tpl')) {
		$MapScope.init();
	}
})(jQuery);

/***/ }),
/* 1 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 2 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(0);
module.exports = __webpack_require__(1);


/***/ })
/******/ ]);