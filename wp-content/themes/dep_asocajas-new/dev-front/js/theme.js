(function($){

  const $GeneralScope = {

    // Constructor
    init: function() {
      this.menuScripts();
      this.fancyScripts();
      this.hashLink();
    },

    // scripts for Menu
    menuScripts: function() {
      $(window).scroll(function() {

        let scroll    = $(window).scrollTop();
        let header_el = $('.navbar');

        if (scroll >= 100) {
          header_el.addClass("scroll_menu");
        } else {
          header_el.removeClass("scroll_menu");
        }
      });
    },

    hashLink: function(){
      // Select all links with hashes
      $('a[href*="#"]')
      // Remove links that don't actually link to anything
      .not('[href="#"]')
      .not('[href="#0"]')
      .click(function(event) {
      // On-page links
      if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
        &&
        location.hostname == this.hostname
      ) {
        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        // Does a scroll target exist?
        if (target.length) {
          // Only prevent default if animation is actually gonna happen
          event.preventDefault();
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000, function() {
            // Callback after animation
            // Must change focus!
            var $target = $(target);
            $target.focus();
            if ($target.is(":focus")) { // Checking if the target was focused
              return false;
            } else {
              $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
              $target.focus(); // Set focus again
            };
          });
        }
      }
      });
    },

    fancyScripts: function(){
      $('[data-fancybox="gallery"]').fancybox({
        loop: false,
        gutter: 50,
        keyboard: true,
        preventCaptionOverlap: true,
        arrows: true,
        infobar: true,
        buttons: [
          "zoom",
          //"share",
          "slideShow",
          //"fullScreen",
          "download",
          "thumbs",
          "close"
        ],
      });
    },
  }

  // -- Home -- //
  const $HomeScope = {

    // Constructor
    init: function() {
      // Instance functions
      this.homeSlider();
      this.newsSlider();
      this.timeSlider();
      this.homeCounter();
    },


    // scripts for banner
    homeSlider: function() {
      let slider_wrapper = $('.slider-wrapper');
      let slick_settings = {
        dots: false,
        arrows: true,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 6000,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        adaptiveHeight: true
      }

      if(!slider_wrapper.hasClass('slick-initialized')) {
        const slick_slider = slider_wrapper.slick(slick_settings);
      }
    },

    // scripts for news
    newsSlider: function() {
      let slider_wrapper = $('.home-news--wrapper');
      let slick_settings = {
        dots: false,
        arrows: true,
        slidesToShow: 3,
        infinite: false,
        slidesToScroll: 3,
        responsive: [
          {
            breakpoint: 680,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      }

      if(!slider_wrapper.hasClass('slick-initialized')) {
        const slick_slider = slider_wrapper.slick(slick_settings);
      }
    },

    // scripts for history
    timeSlider: function() {
      let slider_wrapper = $('.time--numbers');
      let time_items = slider_wrapper.find('.time--number');
      let time_tab = $('.time---detail');
      let numbersball = time_items.find('.time--holder');

      let slick_settings = {
        dots: false,
        arrows: true,
        slidesToShow: 6,
        infinite: false,
        slidesToScroll: 6,
        accessibility: false,
        responsive: [
          {
            breakpoint: 680,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      }

      if(!slider_wrapper.hasClass('slick-initialized')) {
        const slick_slider = slider_wrapper.slick(slick_settings);
      }

      if(time_items) {
        time_items.each(function(index, el) {
          let instance = $(this);
          let yearclick = instance.data('year');
          let yearcolor = instance.data('color');
          let numberball = instance.find('.time--holder');

          instance.click(function(event) {
            /* Act on the event */
            time_items.removeClass('active');
            time_tab.css('display','none');
            numbersball.css('background-color','#f6f6f6');

            instance.addClass('active');
            $('.time--details').find("[data-year="+yearclick+"]").css({
              'display' : 'block',
              'background-color': yearcolor
            });
            numberball.css('background-color', yearcolor);
          });
        });
      }
    },

    // scripts for counter
    homeCounter: function() {

      let numberItems = $('.numbers--item');


      $('.counter').counterUp({
          delay: 10,
          separator: '.',
          time: 1500
      });

      if(numberItems) {
        numberItems.each(function(index, el) {
          let instance   = $(this);
          let numberItem = instance.find('h4');
        });
      }
    }
  }

  // -- Press -- //
  const $PressScope = {

    // Constructor
    init: function() {
      // Instance functions
      this.videoSlider();
      this.gallerySlider();
    },

    // Scripts Video
    videoSlider: function() {
      let slider_wrapper = $('.video-news--wrapper');
      let slick_settings = {
        dots: false,
        arrows: true,
        slidesToShow: 3,
        infinite: false,
        slidesToScroll: 3,
        responsive: [
          {
            breakpoint: 680,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      }

      if(!slider_wrapper.hasClass('slick-initialized')) {
        const slick_slider = slider_wrapper.slick(slick_settings);
      }
    },

    // Scripts Gallery
    gallerySlider: function() {
      let slider_wrapper = $('.gallery-news--wrapper');
      let slick_settings = {
        dots: false,
        arrows: true,
        slidesToShow: 4,
        infinite: false,
        slidesToScroll: 4,
        responsive: [
          {
            breakpoint: 680,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      }

      if(!slider_wrapper.hasClass('slick-initialized')) {
        const slick_slider = slider_wrapper.slick(slick_settings);
      }
    },
  }

  // -- Map -- //
  const $MapScope = {
    // Constructor
    init: function() {
      this.mapScripts();
    },

    mapScripts: function() {
      let map = L.map('mapid', {
          center: [4.632,-74.299],
          zoom: 6
        });

      let gl = L.mapboxGL({
        attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">© MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">© OpenStreetMap contributors</a>',
        accessToken: 'no-token',
        style: 'https://api.maptiler.com/maps/070eadaf-a6cd-45ba-b39b-d2c301279159/style.json?key=4ByPNrAy6wHbEZdnwieo'
      }).addTo(map);

      // Set sidebar
      let sidebar = L.control.sidebar('sidebar', {
        closeButton: true,
        position: 'left'
      });

      map.addControl(sidebar);

      // Set markers
      let MarkerPointer = $('#mapMarkers li');

      if(MarkerPointer) {
        MarkerPointer.each(function(index, el) {
          let instance = $(this);
          // Mav item vars
          let latLen = instance.data('lat-len');
          let itemTitle = instance.data('name');
          let itemBody = instance.html();

          let latSplited = latLen.split(",");
          let Lat = parseFloat(latSplited[0]);
          let Len = parseFloat(latSplited[1]);
          let div_circle = L.divIcon({ className: 'circle'})

          console.log('latLen', Lat,Len );

          let markerItem = L.marker([Lat,Len],{icon: div_circle}).addTo(map).on('click', function () {
            $('#sidebar').html('');
            sidebar.toggle();
            $('#sidebar').html('<h2>'+itemTitle+'</h2>'+ itemBody );
          });
        });
      }

      map.on('click', function () {
        sidebar.hide();
      })
    },
  }

  // -- Events -- //
  const $eventScope = {
    // Constructor
    init: function() {
      this.popScripts();
    },

    popScripts: function() {
      let popItems = $('.event-ponents-item');

      if(popItems) {
        popItems.each(function(index, el) {
          let instance = $(this);
          let imageWrapper = instance.find('img');
          let captionPop = instance.find('.event-ponents-item-caption');


          instance.click(function(event) {
            /* Act on the event */
            $.fancybox.open('<div class="modalmessage"><figure><img src="'+imageWrapper.attr('src')+'"></figure><div class="caption">'+ captionPop.html() +'</div></div>');
          });
        });
      }
    }
  }

  // -- Landing -- //
  const $LandingScope = {

    // Constructor
    init: function() {
      // Instance functions
      this.videoSlider();
      this.gallerySlider();
    },

    // Scripts Video
    videoSlider: function() {
      let slider_wrapper = $('.video-news--wrapper');
      let slick_settings = {
        dots: false,
        arrows: true,
        slidesToShow: 3,
        infinite: false,
        slidesToScroll: 3,
        responsive: [
          {
            breakpoint: 680,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      }

      if(!slider_wrapper.hasClass('slick-initialized')) {
        const slick_slider = slider_wrapper.slick(slick_settings);
      }
    },

    // Scripts Gallery
    gallerySlider: function() {
      let slider_wrapper = $('.gallery-landing--wrapper');
      let slick_settings = {
        dots: false,
        arrows: true,
        slidesToShow: 4,
        infinite: false,
        slidesToScroll: 4,
        responsive: [
          {
            breakpoint: 680,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      }

      if(!slider_wrapper.hasClass('slick-initialized')) {
        const slick_slider = slider_wrapper.slick(slick_settings);
      }
    },
  }


  const $MemoriasScope = {

    // Constructor
    init: function() {
      // Instance functions
      this.videoSlider();
      this.gallerySlider();
    },

    // Scripts Video
    videoSlider: function() {
      let slider_wrapper = $('.video-news--wrapper');
      let slick_settings = {
        dots: false,
        arrows: true,
        slidesToShow: 3,
        infinite: false,
        slidesToScroll: 3,
        responsive: [
          {
            breakpoint: 680,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      }

      if(!slider_wrapper.hasClass('slick-initialized')) {
        const slick_slider = slider_wrapper.slick(slick_settings);
      }
    },

    // Scripts Gallery
    gallerySlider: function() {
      let slider_wrapper = $('.gallery-memorias--wrapper');
      let slick_settings = {
        dots: false,
        arrows: true,
        slidesToShow: 4,
        infinite: false,
        slidesToScroll: 4,
        responsive: [
          {
            breakpoint: 680,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      }

      if(!slider_wrapper.hasClass('slick-initialized')) {
        const slick_slider = slider_wrapper.slick(slick_settings);
      }
    },
  }



  // -- Event Congress -- //
  const $congressScope = {
    // Constructor
    init: function() {
      this.ponentsCarousel();
    },

    ponentsCarousel: function() {
      let eventWrapper = $('.event-ponents');

      if(eventWrapper.length > 0) {
        let slick_settings = {
          dots: false,
          autoplay: true,
          arrows: true,
          slidesToShow: 4,
          slidesToScroll: 4,
          accessibility: false,
          responsive: [
            {
              breakpoint: 680,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
        }

        if(!eventWrapper.hasClass('slick-initialized')) {
          const eventWrapperSlider = eventWrapper.slick(slick_settings);
        }
      }
    }
  }

  // Trigger
  $GeneralScope.init();

  // Home Scripts
  if($('body').hasClass('home')) {
    $HomeScope.init();
  }

  // Press / Blog Scripts
  if($('body').hasClass('page-template-templates_prensa-tpl-php') || $('body').hasClass('single-post')  ) {
    $PressScope.init();
  }

  // Map Scripts
  if($('body').hasClass('page-template-_map-tpl')  ) {
    $MapScope.init();
  }

  // Event Single
  if($('body').hasClass('single-eventos')  ) {
    $eventScope.init();
  }

  // Landing Scripts
  if($('body').hasClass('page-template-templates_landing-tpl-php')) {
    $LandingScope.init();
  }
  if($('body').hasClass('page-template-templates_memorias-tpl-php')) {
    $MemoriasScope.init();
  }

  if($('body').hasClass('page-template-templates_congreso-tpl-php')) {
    $eventScope.init();
    $congressScope.init();
  }
  if($('body').hasClass('page-template-templates_premio-tpl-php')) {
    $eventScope.init();
    $congressScope.init();
  }

})(jQuery);
