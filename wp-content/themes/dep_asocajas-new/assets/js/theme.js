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
/******/ 	return __webpack_require__(__webpack_require__.s = 3);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


function _toConsumableArray(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = Array(arr.length); i < arr.length; i++) arr2[i] = arr[i]; return arr2; } else { return Array.from(arr); } }

var _vendorsCounterup = __webpack_require__(2);

(function ($) {
  var $GeneralScope = {
    // Constructor
    init: function init() {
      this.menuScripts();
      this.fancyScripts();
      this.hashLink();
    },

    // scripts for Menu
    menuScripts: function menuScripts() {
      $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        var header_el = $(".navbar");

        if (scroll >= 100) {
          header_el.addClass("scroll_menu");
        } else {
          header_el.removeClass("scroll_menu");
        }
      });
    },

    hashLink: function hashLink() {
      // Select all links with hashes
      $('a[href*="#"]')
      // Remove links that don't actually link to anything
      .not('[href="#"]').not('[href="#0"]').click(function (event) {
        // On-page links
        if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
          // Figure out element to scroll to
          var target = $(this.hash);
          target = target.length ? target : $("[name=" + this.hash.slice(1) + "]");
          // Does a scroll target exist?
          if (target.length) {
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            $("html, body").animate({
              scrollTop: target.offset().top
            }, 1000, function () {
              // Callback after animation
              // Must change focus!
              var $target = $(target);
              $target.focus();
              if ($target.is(":focus")) {
                // Checking if the target was focused
                return false;
              } else {
                $target.attr("tabindex", "-1"); // Adding tabindex for elements not focusable
                $target.focus(); // Set focus again
              }
            });
          }
        }
      });
    },

    fancyScripts: function fancyScripts() {
      if ($('[data-fancybox="gallery"]').length) {
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
      var slider_wrapper = $(".slider__wrapper");
      var slick_settings = {
        dots: true,
        arrows: true,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 6000,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        adaptiveHeight: true
      };

      if (!slider_wrapper.hasClass("slick-initialized")) {
        var slick_slider = slider_wrapper.slick(slick_settings);
      }
    },

    // scripts for news
    newsSlider: function newsSlider() {
      var slider_wrapper = $(".home-news--wrapper");
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

      if (!slider_wrapper.hasClass("slick-initialized")) {
        var slick_slider = slider_wrapper.slick(slick_settings);
      }
    },

    // scripts for history
    timeSlider: function timeSlider() {
      var slider_wrapper = $(".time--numbers");
      var time_items = slider_wrapper.find(".time--number");
      var time_tab = $(".time---detail");
      var numbersball = time_items.find(".time--holder");

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

      if (!slider_wrapper.hasClass("slick-initialized")) {
        var slick_slider = slider_wrapper.slick(slick_settings);
      }

      if (time_items) {
        time_items.each(function (index, el) {
          var instance = $(this);
          var yearclick = instance.data("year");
          var yearcolor = instance.data("color");
          var numberball = instance.find(".time--holder");

          instance.click(function (event) {
            /* Act on the event */
            time_items.removeClass("active");
            time_tab.css("display", "none");
            numbersball.css("background-color", "#f6f6f6");

            instance.addClass("active");
            $(".time--details").find("[data-year=" + yearclick + "]").css({
              display: "block",
              "background-color": yearcolor
            });
            numberball.css("background-color", yearcolor);
          });
        });
      }
    },

    // scripts for counter
    homeCounter: function homeCounter() {
      var numberItems = [].concat(_toConsumableArray(document.querySelectorAll(".cifras__wrapper-item")));

      if (numberItems) {
        (function () {

          var options = {
            duration: 7,
            separator: '.',
            decimal: ','
          };

          numberItems.forEach(function (el) {
            var numberItem = el.querySelector(".counter").textContent;
            var cleanN = parseInt(numberItem.split('.').join(""));
            var trigger = new _vendorsCounterup.CountUp(el.querySelector(".counter"), cleanN, options);

            if (!trigger.error) {
              trigger.start();
            } else {
              console.error(trigger.error);
            }
          });
        })();
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
      var slider_wrapper = $(".video-news--wrapper");
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

      if (!slider_wrapper.hasClass("slick-initialized")) {
        var slick_slider = slider_wrapper.slick(slick_settings);
      }
    },

    // Scripts Gallery
    gallerySlider: function gallerySlider() {
      var slider_wrapper = $(".gallery-news--wrapper");
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

      if (!slider_wrapper.hasClass("slick-initialized")) {
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
      var map = L.map("mapid", {
        center: [4.632, -74.299],
        zoom: 6
      });

      var gl = L.mapboxGL({
        attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">© MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">© OpenStreetMap contributors</a>',
        accessToken: "no-token",
        style: "https://api.maptiler.com/maps/070eadaf-a6cd-45ba-b39b-d2c301279159/style.json?key=4ByPNrAy6wHbEZdnwieo"
      }).addTo(map);

      // Set sidebar
      var sidebar = L.control.sidebar("sidebar", {
        closeButton: true,
        position: "left"
      });

      map.addControl(sidebar);

      // Set markers
      var MarkerPointer = $("#mapMarkers li");

      if (MarkerPointer) {
        MarkerPointer.each(function (index, el) {
          var instance = $(this);
          // Mav item vars
          var latLen = instance.data("lat-len");
          var itemTitle = instance.data("name");
          var itemBody = instance.html();

          var latSplited = latLen.split(",");
          var Lat = parseFloat(latSplited[0]);
          var Len = parseFloat(latSplited[1]);
          var div_circle = L.divIcon({ className: "circle" });

          console.log("latLen", Lat, Len);

          var markerItem = L.marker([Lat, Len], { icon: div_circle }).addTo(map).on("click", function () {
            $("#sidebar").html("");
            sidebar.toggle();
            $("#sidebar").html("<h2>" + itemTitle + "</h2>" + itemBody);
          });
        });
      }

      map.on("click", function () {
        sidebar.hide();
      });
    }
  };

  // -- Events -- //
  var $eventScope = {
    // Constructor
    init: function init() {
      this.popScripts();
    },

    popScripts: function popScripts() {
      var popItems = $(".event-ponents-item");

      if (popItems) {
        popItems.each(function (index, el) {
          var instance = $(this);
          var imageWrapper = instance.find("img");
          var captionPop = instance.find(".event-ponents-item-caption");

          instance.click(function (event) {
            /* Act on the event */
            $.fancybox.open('<div class="modalmessage"><figure><img src="' + imageWrapper.attr("src") + '"></figure><div class="caption">' + captionPop.html() + "</div></div>");
          });
        });
      }
    }
  };

  // -- Landing -- //
  var $LandingScope = {
    // Constructor
    init: function init() {
      // Instance functions
      this.videoSlider();
      this.gallerySlider();
    },

    // Scripts Video
    videoSlider: function videoSlider() {
      var slider_wrapper = $(".video-news--wrapper");
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

      if (!slider_wrapper.hasClass("slick-initialized")) {
        var slick_slider = slider_wrapper.slick(slick_settings);
      }
    },

    // Scripts Gallery
    gallerySlider: function gallerySlider() {
      var slider_wrapper = $(".gallery-landing--wrapper");
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

      if (!slider_wrapper.hasClass("slick-initialized")) {
        var slick_slider = slider_wrapper.slick(slick_settings);
      }
    }
  };

  var $MemoriasScope = {
    // Constructor
    init: function init() {
      // Instance functions
      this.videoSlider();
      this.gallerySlider();
    },

    // Scripts Video
    videoSlider: function videoSlider() {
      var slider_wrapper = $(".video-news--wrapper");
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

      if (!slider_wrapper.hasClass("slick-initialized")) {
        var slick_slider = slider_wrapper.slick(slick_settings);
      }
    },

    // Scripts Gallery
    gallerySlider: function gallerySlider() {
      var slider_wrapper = $(".gallery-memorias--wrapper");
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

      if (!slider_wrapper.hasClass("slick-initialized")) {
        var slick_slider = slider_wrapper.slick(slick_settings);
      }
    }
  };

  // -- Event Congress -- //
  var $congressScope = {
    // Constructor
    init: function init() {
      this.ponentsCarousel();
    },

    ponentsCarousel: function ponentsCarousel() {
      var eventWrapper = $(".event-ponents");

      if (eventWrapper.length > 0) {
        var slick_settings = {
          dots: false,
          autoplay: true,
          arrows: true,
          slidesToShow: 4,
          slidesToScroll: 4,
          accessibility: false,
          responsive: [{
            breakpoint: 680,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }]
        };

        if (!eventWrapper.hasClass("slick-initialized")) {
          var eventWrapperSlider = eventWrapper.slick(slick_settings);
        }
      }
    }
  };

  // -- Gremio New -- //
  var $gremioScope = {
    // Constructor
    init: function init() {
      this.hideItems = $('.afiliadas__wrapper-cajas > div');
      this.trigger = $('.see_more');
      this.toogleItems(this.hideItems);
    },

    toogleItems: function toogleItems(items) {
      items.each(function (i1, obj) {
        if (i1 > 3) {
          $(this).hide();
        }
      });

      this.trigger.click(function (e) {
        e.preventDefault();

        items.each(function () {
          $(this).show(500);
        });

        $(this).hide(400);
      });
    }
  };
  // Trigger
  $GeneralScope.init();

  // Home Scripts
  if ($("body").hasClass("home")) {
    $HomeScope.init();
  }

  // Press / Blog Scripts
  if ($("body").hasClass("page-template-templates_prensa-tpl-php") || $("body").hasClass("single-post")) {
    $PressScope.init();
  }

  // Map Scripts
  if ($("body").hasClass("page-template-_map-tpl")) {
    $MapScope.init();
  }

  // Event Single
  if ($("body").hasClass("single-eventos")) {
    $eventScope.init();
  }

  // Landing Scripts
  if ($("body").hasClass("page-template-templates_landing-tpl-php")) {
    $LandingScope.init();
  }
  if ($("body").hasClass("page-template-templates_memorias-tpl-php")) {
    $MemoriasScope.init();
  }

  if ($("body").hasClass("page-template-templates_congreso-tpl-php")) {
    $eventScope.init();
    $congressScope.init();
  }
  if ($("body").hasClass("page-template-templates_premio-tpl-php")) {
    $eventScope.init();
    $congressScope.init();
  }

  // gremio script
  if ($("body").hasClass("page-template-templates_gremio-tpl-php")) {
    $gremioScope.init();
  }
})(jQuery);

/***/ }),
/* 1 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 2 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
var __assign = undefined && undefined.__assign || function () {
  return (__assign = Object.assign || function (t) {
    for (var i, a = 1, s = arguments.length; a < s; a++) for (var n in i = arguments[a]) Object.prototype.hasOwnProperty.call(i, n) && (t[n] = i[n]);return t;
  }).apply(this, arguments);
},
    CountUp = (function () {
  function t(t, i, a) {
    var s = this;this.target = t, this.endVal = i, this.options = a, this.version = "2.0.7", this.defaults = { startVal: 0, decimalPlaces: 0, duration: 2, useEasing: !0, useGrouping: !0, smartEasingThreshold: 999, smartEasingAmount: 333, separator: ",", decimal: ".", prefix: "", suffix: "" }, this.finalEndVal = null, this.useEasing = !0, this.countDown = !1, this.error = "", this.startVal = 0, this.paused = !0, this.count = function (t) {
      s.startTime || (s.startTime = t);var i = t - s.startTime;s.remaining = s.duration - i, s.useEasing ? s.countDown ? s.frameVal = s.startVal - s.easingFn(i, 0, s.startVal - s.endVal, s.duration) : s.frameVal = s.easingFn(i, s.startVal, s.endVal - s.startVal, s.duration) : s.countDown ? s.frameVal = s.startVal - (s.startVal - s.endVal) * (i / s.duration) : s.frameVal = s.startVal + (s.endVal - s.startVal) * (i / s.duration), s.countDown ? s.frameVal = s.frameVal < s.endVal ? s.endVal : s.frameVal : s.frameVal = s.frameVal > s.endVal ? s.endVal : s.frameVal, s.frameVal = Number(s.frameVal.toFixed(s.options.decimalPlaces)), s.printValue(s.frameVal), i < s.duration ? s.rAF = requestAnimationFrame(s.count) : null !== s.finalEndVal ? s.update(s.finalEndVal) : s.callback && s.callback();
    }, this.formatNumber = function (t) {
      var i,
          a,
          n,
          e,
          r,
          o = t < 0 ? "-" : "";if ((i = Math.abs(t).toFixed(s.options.decimalPlaces), n = (a = (i += "").split("."))[0], e = a.length > 1 ? s.options.decimal + a[1] : "", s.options.useGrouping)) {
        r = "";for (var l = 0, h = n.length; l < h; ++l) 0 !== l && l % 3 == 0 && (r = s.options.separator + r), r = n[h - l - 1] + r;n = r;
      }return s.options.numerals && s.options.numerals.length && (n = n.replace(/[0-9]/g, function (t) {
        return s.options.numerals[+t];
      }), e = e.replace(/[0-9]/g, function (t) {
        return s.options.numerals[+t];
      })), o + s.options.prefix + n + e + s.options.suffix;
    }, this.easeOutExpo = function (t, i, a, s) {
      return a * (1 - Math.pow(2, -10 * t / s)) * 1024 / 1023 + i;
    }, this.options = __assign(__assign({}, this.defaults), a), this.formattingFn = this.options.formattingFn ? this.options.formattingFn : this.formatNumber, this.easingFn = this.options.easingFn ? this.options.easingFn : this.easeOutExpo, this.startVal = this.validateValue(this.options.startVal), this.frameVal = this.startVal, this.endVal = this.validateValue(i), this.options.decimalPlaces = Math.max(this.options.decimalPlaces), this.resetDuration(), this.options.separator = String(this.options.separator), this.useEasing = this.options.useEasing, "" === this.options.separator && (this.options.useGrouping = !1), this.el = "string" == typeof t ? document.getElementById(t) : t, this.el ? this.printValue(this.startVal) : this.error = "[CountUp] target is null or undefined";
  }return t.prototype.determineDirectionAndSmartEasing = function () {
    var t = this.finalEndVal ? this.finalEndVal : this.endVal;this.countDown = this.startVal > t;var i = t - this.startVal;if (Math.abs(i) > this.options.smartEasingThreshold) {
      this.finalEndVal = t;var a = this.countDown ? 1 : -1;this.endVal = t + a * this.options.smartEasingAmount, this.duration = this.duration / 2;
    } else this.endVal = t, this.finalEndVal = null;this.finalEndVal ? this.useEasing = !1 : this.useEasing = this.options.useEasing;
  }, t.prototype.start = function (t) {
    this.error || (this.callback = t, this.duration > 0 ? (this.determineDirectionAndSmartEasing(), this.paused = !1, this.rAF = requestAnimationFrame(this.count)) : this.printValue(this.endVal));
  }, t.prototype.pauseResume = function () {
    this.paused ? (this.startTime = null, this.duration = this.remaining, this.startVal = this.frameVal, this.determineDirectionAndSmartEasing(), this.rAF = requestAnimationFrame(this.count)) : cancelAnimationFrame(this.rAF), this.paused = !this.paused;
  }, t.prototype.reset = function () {
    cancelAnimationFrame(this.rAF), this.paused = !0, this.resetDuration(), this.startVal = this.validateValue(this.options.startVal), this.frameVal = this.startVal, this.printValue(this.startVal);
  }, t.prototype.update = function (t) {
    cancelAnimationFrame(this.rAF), this.startTime = null, this.endVal = this.validateValue(t), this.endVal !== this.frameVal && (this.startVal = this.frameVal, this.finalEndVal || this.resetDuration(), this.finalEndVal = null, this.determineDirectionAndSmartEasing(), this.rAF = requestAnimationFrame(this.count));
  }, t.prototype.printValue = function (t) {
    var i = this.formattingFn(t);"INPUT" === this.el.tagName ? this.el.value = i : "text" === this.el.tagName || "tspan" === this.el.tagName ? this.el.textContent = i : this.el.innerHTML = i;
  }, t.prototype.ensureNumber = function (t) {
    return "number" == typeof t && !isNaN(t);
  }, t.prototype.validateValue = function (t) {
    var i = Number(t);return this.ensureNumber(i) ? i : (this.error = "[CountUp] invalid start or end value: " + t, null);
  }, t.prototype.resetDuration = function () {
    this.startTime = null, this.duration = 1e3 * Number(this.options.duration), this.remaining = this.duration;
  }, t;
})();exports.CountUp = CountUp;

/***/ }),
/* 3 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(0);
module.exports = __webpack_require__(1);


/***/ })
/******/ ]);