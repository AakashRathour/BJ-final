$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
    $(e.target.hash).find('img').each(function () {
        var imageSrc = $(this).attr("data-src");
        $(this).attr("src", imageSrc).attr("data-src");
    });
});
$('.carousel').bind('slide.bs.carousel', function (e) {
    $(e.relatedTarget).find('img').each(function () {
        var imageSrc = $(this).attr("data-src");
        $(this).attr("src", imageSrc).attr("data-src");
    });
});
/* dropdown hover */
(function($) {
    var defaults={
        sm : 540,
        md : 720,
        lg : 960,
        xl : 1140,
        navbar_expand: 'lg'
    };
    $.fn.bootnavbar = function() {
        var screen_width = $(document).width();
        if(screen_width >= defaults.lg){
            $(this).find('.dropdown').hover(function() {
                $(this).addClass('show');
                $(this).find('.dropdown-menu').first().addClass('show').addClass('animated fadeIn').one('animationend oAnimationEnd mozAnimationEnd webkitAnimationEnd', function () {
                    $(this).removeClass('animated fadeIn');
                });
            }, function() {
                $(this).removeClass('show');
                $(this).find('.dropdown-menu').first().removeClass('show');
            });
        }
        $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
          if (!$(this).next().hasClass('show')) {
            $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
          }
          var $subMenu = $(this).next(".dropdown-menu");
          $subMenu.toggleClass('show');

          $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
            $('.dropdown-submenu .show').removeClass("show");
          });

          return false;
        });
    };
})(jQuery);
$(function () {
    $('#main_navbar').bootnavbar();
})
/* menu */
$(function () {
    function close() {
        $('body').removeClass('has-active-menu');
        setTimeout(function () {
            $('.nav-slider').removeClass('toggling');
        }, 500);
    }
    function open() {
        $('body').addClass('has-active-menu');
        $('.nav-slider').addClass('toggling');
    }
    $('.nav-mask').click(close);
    $('.navbar-toggler').click(open);
});
/* lang option */
$('#langMobileBlockOpen').click(function () {
    $('#langMobileBlock').show();
});
$('#langMobileBlockClose').click(function () {
    $('#langMobileBlock').hide();
})
/* sort option */
$('#filterBtns-mobileSort').click(function () {
    $('#sortMobileBlock').show();
    $('.filter-overly1').addClass('overlycls');
});
$('#sortMobileBlockClose').click(function() {
    $("#sortMobileBlock").fadeOut(300);
    $('.filter-overly1').removeClass('overlycls');
 });
$("#filterBtns-mobFilter").click(function(e){
    e.preventDefault();
    $("#filterMobileBlock").fadeIn(300,function(){$(this).focus();});
    $('.filter-overly2').addClass('overlycls');
});

$('#sortMobileBlockClose1').click(function() {
    $("#filterMobileBlock").fadeOut(300);
    $('.filter-overly2').removeClass('overlycls');
 });

/* Featued pop */

 $(".featuresMob-title").click(function(){
 // e.preventDefault();
  $(this).closest('.featuresMob-row-wrp').find('.featuresMobBlock').fadeIn(300,function(){$(this).focus();});
  $('body').addClass('overlay-featured');
});

$(document).on('click touch', function(event) {
  if (!$(event.target).parents().addBack().is('.featuresMob-title')) {
    $('.featuresMobBlock').hide();
    $('body').removeClass('overlay-featured');
  }
});
$('.featuresMobBlock').on('click touch', function(event) {
  event.stopPropagation();
}); 

$('.fpopup-close').click(function () {
  $('.featuresMobBlock').hide();
  $('body').removeClass('overlay-featured');
})

/* search bar */
$('.searchTractorsbtn').click(function () {
    $('.fixedsearchbar').show();
});
$('.fixedsearchbar-close').click(function () {
    $('.fixedsearchbar').hide();
});
/* ckeditor */
$('.ckeditor-btn').click(function(){
    $(this).parent().siblings('.content-ckeditor-hide').slideToggle();
});
$('.fixedInputsearch').focus(function () {
    $('div.fixedsearchbar-results').show();
    $(document).bind('focusin.fixedsearchbar-results click.fixedsearchbar-results', function (e) {
        if ($(e.target).closest('.fixedsearchbar-results, .fixedInputsearch').length) return;
        $(document).unbind('.fixedsearchbar-results');
        $('div.fixedsearchbar-results').hide();
    });
});
$('div.fixedsearchbar-results').hide();
/* load function */
$(function() {
    $('.sliderBlock').addClass('sliderBlockHeight');
});
/* lazy load */
$(function () {
    $("img").unveil(500);
});
/* filter */
$("#filterBtns-mobileFilter").click(function(){
    $(".truckFilterBlock").addClass("truckFilterBlock-mobile");
});
$("#cancle-filter").click(function(){
    $(".truckFilterBlock").removeClass("truckFilterBlock-mobile");
})
/* variants */
$(".newTruckBlock-variants").click(function(){
    $(this).find(".newTruckBlock-variantsList").slideToggle();
    $(this).find("p img").toggleClass("flipImg");
})


 $(document).on('click touch', function(event) {
    
    if (!$(event.target).parents().addBack().is('#filterBtns-mobFilter')) {
      $('#filterMobileBlock').hide();
      $('.filter-overly2').removeClass('overlycls');
    }
    
  });
  $('#filterMobileBlock').on('click touch', function(event) {
    event.stopPropagation();
  });  

  $(document).on('click touch', function(event) {
    if (!$(event.target).parents().addBack().is('#filterBtns-mobileSort')) {
      $('#sortMobileBlock').hide();
      $('.filter-overly1').removeClass('overlycls');
    }
  });
  $('#sortMobileBlock').on('click touch', function(event) {
    event.stopPropagation();
  }); 
  
  


  $('#bannerbrands-popfields').click(function () {
    $('#brandsMobileBlock').show();
    $('.filter-overly3').addClass('overlycls');
});
$('#sortMobileBlockClose2').click(function() {
    $("#brandsMobileBlock").fadeOut(300);
    $('.filter-overly3').removeClass('overlycls');
 });
  $(document).on('click touch', function(event) {
    if (!$(event.target).parents().addBack().is('#bannerbrands-popfields')) {
      $('#brandsMobileBlock').hide();
      $('.filter-overly3').removeClass('overlycls');
    }
  });
  $('#brandsMobileBlock').on('click touch', function(event) {
    event.stopPropagation();
  });
  
  
  

  $('#bannerbudget-popfields').click(function () {
    $('#budgetBannerMobileBlock').show();
    $('.filter-overly4').addClass('overlycls');
});
$('#sortMobileBlockClose3').click(function() {
    $("#budgetBannerMobileBlock").fadeOut(300);
    $('.filter-overly4').removeClass('overlycls');
 });
  $(document).on('click touch', function(event) {
    if (!$(event.target).parents().addBack().is('#bannerbudget-popfields')) {
      $('#budgetBannerMobileBlock').hide();
      $('.filter-overly4').removeClass('overlycls');
    }
  });
  $('#budgetBannerMobileBlock').on('click touch', function(event) {
    event.stopPropagation();
  }); 



  $('#bannerbrands-popfields1').click(function () {
    $('#brandsMobileBlock1').show();
    $('.filter-overly5').addClass('overlycls');
});
$('#sortMobileBlockClose4').click(function() {
    $("#brandsMobileBlock1").fadeOut(300);
    $('.filter-overly5').removeClass('overlycls');
 });
  $(document).on('click touch', function(event) {
    if (!$(event.target).parents().addBack().is('#bannerbrands-popfields1')) {
      $('#brandsMobileBlock1').hide();
      $('.filter-overly5').removeClass('overlycls');
    }
  });
  $('#brandsMobileBlock1').on('click touch', function(event) {
    event.stopPropagation();
  });


  $('#mileage-popfields').click(function () {
    $('#milageBannerMobileBlock').show();
    $('.filter-overly6').addClass('overlycls');
});
$('#sortMobileBlockClose5').click(function() {
    $("#milageBannerMobileBlock").fadeOut(300);
    $('.filter-overly6').removeClass('overlycls');
 });
  $(document).on('click touch', function(event) {
    if (!$(event.target).parents().addBack().is('#mileage-popfields')) {
      $('#milageBannerMobileBlock').hide();
      $('.filter-overly6').removeClass('overlycls');
    }
  });
  $('#milageBannerMobileBlock').on('click touch', function(event) {
    event.stopPropagation();
  }); 


    $('.tabs-nav li a').click(function(){
        $('.tabs-nav li').removeClass('active');
        $(this).parent().addClass('active');
        let newdiv = $(this).attr('href');
    $('.tabs-content .b-tabcls').hide();
    $(newdiv).show(); 
        return false;
    });
  
/* fileupload */
jQuery(($) => {
    $('.attachment input[type="file"]')
      .on('change', (event) => {
      let el = $(event.target).closest('.attachment').find('.attachment-file');
      el
        .find('.attachment-preview')
        .css({
          'background-image': 'url(' + window.URL.createObjectURL(event.target.files[0]) + ')'
        });
    });
});
/* sell truck popup */
$(".listTruckBtn-popup").click(function(){
    $("#sellTruck").show();
})
$(".listTruckBtn-popupClose").click(function(){
    $("#sellTruck").hide();
})
/* youtube */
let deferVideo = () => {
    const vidDefer = document.querySelectorAll("iframe.lazyVid"); 
    if ("IntersectionObserver" in window) {
        let lazyYoutube = new IntersectionObserver((entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    let lazyVid = entry.target;
                    lazyVid.src = lazyVid.dataset.src;
                    lazyYoutube.unobserve(lazyVid);
                }
            });
        });
        vidDefer.forEach((lazyVid) => {
            lazyYoutube.observe(lazyVid);
        });
    }
}
window.onload = deferVideo();
/* social share */
$(".social_share_product_icon").click(function(){
    $(".social_share_product_inner").fadeIn();
})
$(".social_share_product_close").click(function(){
    $(".social_share_product_inner").fadeOut();
})
/* favourite */
$(".favorite_product").click(function(){
    $(".favourite_icon").toggleClass("favourite_icon_active");
})

// Slick Slider
$(document).ready(function () {
    $(".explore-slider").slick({
      dots: false,
      infinite: true,
      autoplaySpeed: 2500,
      slidesToShow: 4,
      slidesToScroll: 1,
      prevArrow: "<div class='slick-nav slick-nav-hori slick-prev sectionShadow'><img src='assets/images/icons/caret-down.svg' alt='' /></div>",
        nextArrow: "<div class='slick-nav slick-nav-hori slick-next sectionShadow'><img src='assets/images/icons/caret-down.svg' alt='' /></div>",
      autoplay: true,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: false,
          },
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
      ],
    });
  });

  $(document).ready(function () {
    $('.brands-slider').owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:4,
                nav:true,
                loop:false
            },
            1280:{
              items:6,
              nav:true,
              loop:false
          }
        }
    })
    
  });
  $(document).ready(function () {
    $('.newbike-slide').owlCarousel({
        loop:true,
        margin:0,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true,
                margin:15,
            },
            600:{
                items:2,
                nav:false,
                margin:15,
            },
            1000:{
                items:4,
                nav:true,
                loop:false
            }
        }
    })
  });
  $(document).ready(function () {
    $('.newbike-slide2').owlCarousel({
      loop:true,
      margin:0,
      responsiveClass:true,
      responsive:{
          0:{
              items:1,
              nav:true,
              margin:15,
          },
          600:{
              items:2,
              nav:false,
              margin:15,
          },
          1000:{
              items:4,
              nav:true,
              loop:false
          }
      }
  })
  
});
  $(document).ready(function () {
    $('.newbike-slide3').owlCarousel({
      loop:true,
      margin:0,
      responsiveClass:true,
      responsive:{
          0:{
              items:1,
              nav:true,
              margin:15,
          },
          600:{
              items:2,
              nav:false,
              margin:15,
          },
          1000:{
              items:4,
              nav:true,
              loop:false
          }
      }
  })
  
});

  $(document).ready(function () {
    $('.newbike-slide4').owlCarousel({
      loop:true,
      margin:0,
      responsiveClass:true,
      responsive:{
          0:{
              items:1,
              nav:true,
              margin:15,
          },
          600:{
              items:2,
              nav:false,
              margin:15,
          },
          1000:{
              items:4,
              nav:true,
              loop:false
          }
      }
  })
  });
  
  $(document).ready(function () {
    $('.compare-slide').owlCarousel({
      loop:true,
      margin:0,
      responsiveClass:true,
      responsive:{
          0:{
              items:1,
              nav:true,
              margin:15,
          },
          600:{
              items:2,
              nav:false,
              margin:15,
          },
          1000:{
              items:3,
              nav:true,
              loop:false
          }
      }
  })
  });
   


  function getVals(){
    // Get slider values
    let parent = this.parentNode;
    let slides = parent.getElementsByTagName("input");
      let slide1 = parseFloat( slides[0].value );
      let slide2 = parseFloat( slides[1].value );
    // Neither slider will clip the other, so make sure we determine which is larger
    if( slide1 > slide2 ){ let tmp = slide2; slide2 = slide1; slide1 = tmp; }
    
    let displayElement = parent.getElementsByClassName("rangeValues")[0];
        displayElement.innerHTML = "₹" + slide1 + " - ₹" + slide2;
  }
  
  window.onload = function(){
    // Initialize Sliders
    let sliderSections = document.getElementsByClassName("range-slider");
        for( let x = 0; x < sliderSections.length; x++ ){
          let sliders = sliderSections[x].getElementsByTagName("input");
          for( let y = 0; y < sliders.length; y++ ){
            if( sliders[y].type ==="range" ){
              sliders[y].oninput = getVals;
              // Manually trigger event first time to display values
              sliders[y].oninput();
            }
          }
        }
  }
  

  $(window).scroll(function(){
    if ($(window).scrollTop() >= 5) {
      $('.headerMain').addClass('fixed');
     }
     else {
      $('.headerMain').removeClass('fixed');
     }
  });
  $(window).scroll(function(){
    if ($(window).scrollTop() >= 105) {
      $('.new-bike-listing-row').addClass('act-scroll');
     }
     else {
      $('.new-bike-listing-row').removeClass('act-scroll');
     }
  });

  // Select With image

  $(function() {
    // Set
    var main = $('div.mm-dropdown .textfirst')
    var li = $('div.mm-dropdown > ul > li.input-option')
    var inputoption = $("div.mm-dropdown .option")
    var default_text = 'Select';
  
    // Animation
    main.click(function() {
      main.html(default_text);
      li.toggle('fast');
    });
  
    // Insert Data
    li.click(function() {
      // hide
      li.toggle('fast');
      var livalue = $(this).data('value');
      var lihtml = $(this).html();
      main.html(lihtml);
      inputoption.val(livalue);
    });
  });