jQuery(function($) {

  //Check Window Width

  let winWid = $(window).width();
  let windHeig = $(window).height();

  $(window).resize(function () {
    winWid = $(window).width();
    windHeig = $(window).height();
  });

  // Lazy load

  $('.lazy').lazy();

  //Fixed Menu

  $(document).scroll(function() {

    let y = $(this).scrollTop();

    if (y > 1) {
      $('header').addClass('fixed');
      $('.rec').css({'opacity' : '1'});
    } else {
      $('header').removeClass('fixed');
      $('.rec').css({'opacity' : '0'});
    }
  });

  let positionScrollHeader = $(window).scrollTop();

  $(window).scroll(function() {

    let scroll = $(window).scrollTop();

    if(scroll > positionScrollHeader) {

      if ( $('.header-nav.open-menu').length ){
        $('header').addClass('fixed-vis');
      }else{
        $('header').removeClass('fixed-vis');
      }

      $('#lang-nav .lang-list').slideUp(200);
      $('#lang-nav .current').removeClass('active');


    } else {
      $('header').addClass('fixed-vis');

    }

    positionScrollHeader = scroll;
  });

  //SCROLL MENU

  $('.page-template-template-home #primary-menu li a').addClass('scroll-to');

  $(document).on('click', '.scroll-to', function (e) {
    e.preventDefault();

    let href = $(this).attr('href');

    $('html, body').animate({
      scrollTop: $(href).offset().top
    }, 1000);

  });

  //Inner Menu

  if ( !$('.page-template-template-home').length ){

    $('#primary-menu li a').each( function (){

      let thisAnchor = $(this).attr('href');

      $(this).attr('href', $('header .logo').attr('href')+'/'+thisAnchor);
    })

  }

  //Lang Drop Down

  const currentLang = $('#lang-nav .current-lang');

  $('#lang-nav .current span').text(currentLang.find('a').text());

  currentLang.remove();

  $('#lang-nav .current').on('click', function (e) {
    e.preventDefault();

    $(this).toggleClass('active');

    $('#lang-nav .lang-list').slideToggle(200);

  });

  //Mob Menu

  $('#menu-btn').on('click', function (e) {
    e.preventDefault();

    $(this).toggleClass('active');
    $('header').toggleClass('active-menu');
    $('header .header-nav').toggleClass('open-menu');
    $('html').toggleClass("fixedPosition");

  });

  // Main Screen Text Slider

  $('#text-slider').slick({
        autoplay: true,
        autoplaySpeed: 1500,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true

    });

  // Client Slider

  $('#clients-slider').slick({
    autoplay: true,
    autoplaySpeed: 1500,
    slidesToShow: 4,
    slidesToScroll: 1,
    rows: 2,
    arrows: false,
    fade: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3
        }
      },
      {
        breakpoint: 380,
        settings: {
          slidesToShow: 2
        }
      }
    ]

  });

  // PHONE MASK

  $("input[type=tel]").mask("+38(099) 999-99-99");

  //Animation

  let animationTracking = $('.animation-tracking');

  animationTracking.each(function () {

    var thisTrack = $(this);

    thisTrack.viewportChecker({

      offset: 300,

      callbackFunction: function (elem, action) {

        if ('.visible #counter'){
          const counter = $('#counter');
          const deathCount = counter.attr('data-number');

          counter.rollNumber({
            number: deathCount,
            speed: 2000,
            interval: 200,
            // rooms: 9,
            // space: 90,
            symbol: ' ',
            fontStyle: {
              /*'font-size': 48, */
              color: '#FF0000',
              // 'font-family': 'LetsgoDigital',
              // 'font-weight': 700
            }
          });

          setTimeout(function () {
            $('.map-wrapper').addClass('active');
          }, 900);

        }

        $('.visible .first-up').addClass('animate');

        setTimeout(function () {
          $('.visible .second-up').addClass('animate');
        }, 500);

      }
    });
  })

  //Characteristics scroll animation

  if ( $('.characteristics').length ){

    let scrollWindowPosition = $(window).scrollTop();

    const characteristicsProgressContainer = $('.characteristics .content');

    $(document).scroll(function() {

      let scrollPosition = $(this).scrollTop(); //Получение значения скролла

      let indentToStart = windHeig / 2; //Получение трети высоты экрана для ускорения старрта анимации

      let stepContentPosition = characteristicsProgressContainer.offset(); //Коорнжинаты блока с котентом

      stepContentPosition = stepContentPosition.top;

      let stopAnimationPosition =  characteristicsProgressContainer.height(); //Получаем высоту блока с контентом

      stopAnimationPosition = ( stepContentPosition + stopAnimationPosition ) - ( indentToStart + 20 ); //Координаты остановки анимации

      stepContentPosition = stepContentPosition - indentToStart;

      //Начало и конец движения авто при скроле
      if( scrollPosition >= stepContentPosition && scrollPosition <= stopAnimationPosition ){

        let animateDown = scrollPosition - stepContentPosition;

        characteristicsProgressContainer.find('.progress-bar-wrapper span').css({'height' : ''+animateDown+'px'});

        /*$('#accordion .progress-wrapper span').css({'height' : ''+animateDown+'px'});*/

      }



      scrollWindowPosition = scrollPosition;

    });

  }

  //Form focus

  $('.form-group').each(function (){

    let thisInput = $(this);

    thisInput.find('input').on('focus', function (){
      thisInput.addClass('active');
    })

    thisInput.find('input').on('blur', function (){
      if ( $(this).val() == '' ){
        thisInput.removeClass('active');
      }
    })
  });

  /**
   * Form btn block
   */

  $('form').on('submit', function () {

    $(this).find('.button').css({'pointer-events' : 'none'});

  });



  // UTM

  function getQueryVariable(variable) {
      var query = window.location.search.substring(1);
      var vars = query.split('&');
      for (let i = 0; i < vars.length; i++) {
          let pair = vars[i].split('=');
          if (decodeURIComponent(pair[0]) == variable) {
              return decodeURIComponent(pair[1]);
          }
      }
  }
  utm_source = getQueryVariable('utm_source') ? getQueryVariable('utm_source') : "";
  utm_medium = getQueryVariable('utm_medium') ? getQueryVariable('utm_medium') : "";
  utm_campaign = getQueryVariable('utm_campaign') ? getQueryVariable('utm_campaign') : "";
  utm_term = getQueryVariable('utm_term') ? getQueryVariable('utm_term') : "";
  utm_content = getQueryVariable('utm_content') ? getQueryVariable('utm_content') : "";

  let forms = $('form');
  $.each(forms, function (index, form) {
      jQueryform = $(form);
      jQueryform.append('<input type="hidden" name="utm_source" value="' + utm_source + '">');
      jQueryform.append('<input type="hidden" name="utm_medium" value="' + utm_medium + '">');
      jQueryform.append('<input type="hidden" name="utm_campaign" value="' + utm_campaign + '">');
      jQueryform.append('<input type="hidden" name="utm_term" value="' + utm_term + '">');
      jQueryform.append('<input type="hidden" name="utm_content" value="' + utm_content + '">');
  });

  //Get Window Width, Height

  /*let windWid = jQuery(window).width();
  let windHeig = jQuery(window).height();

  jQuery(window).resize(function () {
    windWid = jQuery(window).width();
    windHeig = jQuery(window).height();
  });*/


  //Смена категории курсов

  /*jQuery('.page-template-template-home .curses-cat-wrapper .cat').on('click', function (e) {
    e.preventDefault();

    jQuery('.page-template-template-home .curses-cat-wrapper .cat').removeClass('active-cat');

    jQuery(this).addClass('active-cat');

    var subCatId = jQuery(this).data('subcatid');

    var allCat = jQuery(this).data('allcat');

    var currentLang = jQuery(this).data('lang');

    var pageCatNavWrapper = jQuery('#mor-curses-dtn-wrap');

    var allCatPosts = Number(jQuery(this).attr('data-allposts'));

    pageCatNavWrapper.attr('data-allposts', allCatPosts);

    var targetAllPosts = Number(pageCatNavWrapper.attr('data-allposts'));

    if ( targetAllPosts <= 6 ){
      pageCatNavWrapper.addClass('d-none');
    }else{
      pageCatNavWrapper.removeClass('d-none');
    }

    let data = {

      action: 'change_curses_category',
      allCat: allCat,
      currentLang: currentLang,
      subCatId: subCatId
    };

    jQuery.post( myajax.url, data, function(response) {

      if(jQuery.trim(response) !== ''){

        jQuery('#curses-list').html(response);
      }
    });

  });*/

  //Вывод больше курсов

  /*if ( jQuery('.page-template-template-home').length ){

    var activeCat = jQuery('.curses-cat-wrapper .cat.active-cat');
    var allPosts = Number(activeCat.attr('data-allposts'));

    jQuery('#mor-curses-dtn-wrap').attr('data-allposts', allPosts);

    var targetAllPosts = Number(jQuery('#mor-curses-dtn-wrap').attr('data-allposts'));

    var btnMore = jQuery('#more-curses');

    btnMore.attr('data-currentcat', activeCat.attr('data-subcatid'));
    btnMore.attr('data-allcat', activeCat.attr('data-allcat'));

    btnMore.on('click', function (e) {
      e.preventDefault();

      var curseLeng = jQuery(this).attr('data-lang');
      var curseCurrentCat = Number(jQuery(this).attr('data-currentcat'));
      var curseAllCat = Number(jQuery(this).attr('data-allcat'));

      var moreCurses = {
        action: 'more_curses',
        currentLang: curseLeng,
        allCat: curseAllCat,
        currentCat: curseCurrentCat
      };

      jQuery.post( myajax.url, moreCurses, function(response) {

        if(jQuery.trim(response) !== ''){

          jQuery('#curses-list').append(response);
        }
      });

      jQuery('#mor-curses-dtn-wrap').addClass('d-none');

    });

  }*/

  //Fancybox Init

  /*jQuery('[data-fancybox]').fancybox({
    protect: true,
    loop : true,
    fullScreen : true,
    scrolling : 'yes',
    image : {
      preload : "auto",
      protect : true
    },
    buttons: [
      "zoom",
      "slideShow",
      "fullScreen",
      "close"
    ]

  });*/

  //Webinar Countdown Timer

  /*if ( jQuery('.courses-template-template-webinar-page').length ){

    let startData = Number(jQuery('#timer').data('start'));

    const date = new Date(startData*1000);

    startData = new Date(date).getTime();

    // Update the count down every 1 second
    let dataTimer = setInterval(function() {

      // Get today's date and time
      let getDate = new Date().getTime();

      // Find the distance between now and the count down date
      let distance = startData - getDate;

      // Time calculations for days, hours, minutes and seconds
      let days = Math.floor(distance / (1000 * 60 * 60 * 24));
      let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      let seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // Display the result in the element with id="demo"

      jQuery('#timer .day .date').text(days);
      jQuery('#timer .hour .date').text(hours);
      jQuery('#timer .minute .date').text(minutes);
      jQuery('#timer .second .date').text(seconds);


      // If the count down is finished, write some text
      if (distance < 0) {
        clearInterval(dataTimer);

      }
    }, 1000);

  }*/
    // MAP INIT

    /*function initMap() {
        var location = {
            lat: 48.268376,
            lng: 25.9301257
        };

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: location,
            scrollwheel: false
        });

        var marker = new google.maps.Marker({
            position: location,
            map: map
        });

        var marker = new google.maps.Marker({ // кастомный марекр + подпись
            position: location,
            title:"Город, Улица, \n" +
            "Дом, Квартира",
            map: map,
            icon: {
                url: ('img/marker.svg'),
                scaledSize: new google.maps.Size(141, 128)
            }
        });

        jQuery.getJSON("map-style_dark.json", function(data) { // подключения стиля для гугл карты
            map.setOptions({styles: data});
        });

    }

    initMap();*/

    // MOB-MENU

    /*jQuery('#menu-btn').on('click', function (e) {
       e.preventDefault();

       jQuery('#mob-menu').toggleClass('active-menu');
       jQuery(this).toggleClass('open-menu');
    });

    jQuery('#mob-menu a').on('click', function (e) {
        e.preventDefault();

        jQuery('#mob-menu').removeClass('active-menu');
        jQuery('#menu-btn').removeClass('open-menu');
    });*/


    //SCROLL MENU

    /*jQuery(document).on('click', '.scroll-to', function (e) {
        e.preventDefault();

        var href = jQuery(this).attr('href');

        jQuery('html, body').animate({
            scrollTop: jQuery(href).offset().top
        }, 1000);

    });*/

    // CASTOME SLIDER ARROWS

    /*jQuery('.mein-slider').slick({
        autoplay: false,
        autoplaySpeed: 5000,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true

    });

    jQuery('.main-page .arrow-left').click(function(e){
        e.preventDefault();

        jQuery('.mein-slider').slick('slickPrev');
    });

    jQuery('.main-page .arrow-right').click(function(e){
        e.preventDefault();

        jQuery('.mein-slider').slick('slickNext');
    });*/



    // DTA VALUE REPLACE

    /*jQuery('.open-form').on('click', function (e) {
        e.preventDefault();
        var type = jQuery(this).data('type');
        jQuery('#type-form').find('input[name=type]').val(type);
    });*/

    // FORM LABEL FOCUS UP

    /*jQuery('.form-control').on('focus', function() {
        jQuery(this).closest('.form-control').find('label').addClass('active');
    });

    jQuery('.form-control').on('blur', function() {
        var jQuerythis = jQuery(this);
        if (jQuerythis.val() == '') {
            jQuerythis.closest('.form-control').find('label').removeClass('active');
        }
    });*/

    // SCROLL TOP.

    /*jQuery(document).on('click', '.up-btn', function() {
        jQuery('html, body').animate({
            scrollTop: 0
        }, 300);
    });*/

    // SHOW SCROLL TOP BUTTON.

    /*jQuery(document).scroll(function() {
        var y = jQuery(this).scrollTop();

        if (y > 800) {
            jQuery('.up-btn').fadeIn();
        } else {
            jQuery('.up-btn').fadeOut();
        }
    });*/



});

// PRELOADER

/*jQuery(window).on('load', function () {

    jQuery('#loader').fadeOut(400);
});*/
