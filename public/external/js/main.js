(function ($) {
    "use strict";
/*--
Commons Variables
-----------------------------------*/
var windows = $(window);
    
/*--
    Menu Sticky
-----------------------------------*/
var sticky = $('.header-sticky');

windows.on('scroll', function() {
    var scroll = windows.scrollTop();
    if (scroll < 300) {
        sticky.removeClass('is-sticky');
    }else{
        sticky.addClass('is-sticky');
    }
});

/*--
    Header Search 
-----------------------------------*/
var $headerSearchToggle = $('.header-search-toggle');
var $headerSearchForm = $('.header-search-form');
    
$headerSearchToggle.on('click', function() {
    var $this = $(this);
    if(!$this.hasClass('open')) {
        $this.addClass('open').find('i').removeClass('lnr lnr-magnifier').addClass('lnr lnr-cross');
        $headerSearchForm.slideDown();
    } else {
        $this.removeClass('open').find('i').removeClass('lnr lnr-cross').addClass('lnr lnr-magnifier');
        $headerSearchForm.slideUp();
    }
});

/*--
    Mobile Menu
-----------------------------------*/
var $html = $('html'),
$body = $('body');
function menuClose() {
    $body.removeClass('popup-mobile-menu-wrapper'), $html.css({
        overflow: ""
    })
};

$('.popup-mobile-click').on('click', function (e) {
    e.preventDefault(),
        function () {
            $body.addClass('popup-mobile-menu-wrapper'), $html.css({
                overflow: "hidden"
            });
        }()
});


$('.mobile-close').on('click', function (e) {
    e.preventDefault();
    menuClose();
});
$('.popup-mobile-visiable').on('click', function (e) {
    e.target === this && menuClose();
});

/*--
    Sidebar Mobile Menu
-----------------------------------*/
$('.object-custom-menu > li.has-mega-menu > a').on('click', function (e) {
    e.preventDefault();
    $(this).siblings('.object-submenu').slideToggle('400');
    $(this).toggleClass('active').siblings('.object-submenu').toggleClass('is-visiable');
})


/*--
    Job Alert Box Toggle
-----------------------------------*/
    

$('.job-alert-form .btn-open-form').on('click', function (e) {
    e.preventDefault();

    $(this).next('.job-alert-form-box').slideToggle();
});

$('.job-alert-form-box .btn-close-form').on('click', function (e) {
    e.preventDefault();
    $('.job-alert-form-box').slideUp()
})

/*--
    Slider Range Toggle
-----------------------------------*/

$('.open-slide-range .open-range').on('click', function (e) {
    e.preventDefault();

    $(this).next('.hide-form .range-slider').slideToggle();
});

/*--
    Hide Advanced Search Toggole
-----------------------------------*/
$('.action-advance .hide-advance').on('click', function (e) {
    e.preventDefault();
    $('.hide-form').slideToggle()
})

/*--
    Slider Range Toggle
-----------------------------------*/

var $openRange = $('.open-range');
var $sliderRangeWrap = $('.range-slider-wrap');
$sliderRangeWrap.slideUp();

$openRange.on('click', function (e) {
    e.preventDefault();
    $sliderRangeWrap.slideToggle(500)
})

/*--
    Bottom Mobile Popup Toggle
-----------------------------------*/

$('.toggle-btn-js').on('click', function (e) {
    e.preventDefault();
    var $this = $(this);
    var $target = $this.data('target');
    $this.toggleClass('open')
    var $sibiling = $this.parent().siblings().children('.toggle-btn-js.open')
    var $prevTarget = $sibiling.data('target');
    if ($prevTarget) {
        $($prevTarget).slideToggle(300);
        $($sibiling).removeClass('open')
    }
    $($target).slideToggle(500)
})    

/*--
    - Background Image
------------------------------------------*/
var $backgroundImage = $('.bg-image');
$backgroundImage.each(function() {
    var $this = $(this),
        $bgImage = $this.data('bg');
    $this.css('background-image', 'url('+$bgImage+')');
});
    

/*--
    Sliders
-----------------------------------*/
// Job Slider
$('.job-location-slider').slick({
    infinite: true,
    arrows: true,
    dots: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    prevArrow: '<button class="slick-prev"><i class="lnr lnr-chevron-left"></i></button>',
    nextArrow: '<button class="slick-next"><i class="lnr lnr-chevron-right"></i></button>',
    responsive: [
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 575,
            settings: {
                slidesToShow: 1,
            }
        },
    ]
});
// Testimonial Slider
$('.testimonial-slider').slick({
    infinite: true,
    arrows: true,
    dots: false,
    slidesToShow: 2,
    slidesToScroll: 1,
    prevArrow: '<button class="slick-prev"><i class="lnr lnr-chevron-left"></i></button>',
    nextArrow: '<button class="slick-next"><i class="lnr lnr-chevron-right"></i></button>',
    responsive: [
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 1,
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
            }
        },
        {
            breakpoint: 575,
            settings: {
                slidesToShow: 1,
            }
        },
    ]
});
$('.testimonial-slider-two').slick({
    infinite: true,
    arrows: false,
    dots: true,
    adaptiveHeight: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    rows: 2,
    prevArrow: '<button class="slick-prev"><i class="lnr lnr-chevron-left"></i></button>',
    nextArrow: '<button class="slick-next"><i class="lnr lnr-chevron-right"></i></button>',
    responsive: [
        {
            breakpoint: 1501,
            settings: {
                slidesToShow: 1,
            }
        },
        {
            breakpoint: 1199,
            settings: {
                slidesToShow: 1,
            }
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 1,
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
            }
        },
        {
            breakpoint: 575,
            settings: {
                slidesToShow: 1,
            }
        },
    ]
});
$('.testimonial-slider-three').slick({
    infinite: true,
    arrows: true,
    dots: false,
    adaptiveHeight: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    prevArrow: '<button class="slick-prev"><i class="lnr lnr-chevron-left"></i></button>',
    nextArrow: '<button class="slick-next"><i class="lnr lnr-chevron-right"></i></button>',
    responsive: [
        {
            breakpoint: 1501,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 1199,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 575,
            settings: {
                slidesToShow: 1,
            }
        },
    ]
});
$('.testimonial-slider-four').slick({
    infinite: true,
    arrows: false,
    dots: true,
    adaptiveHeight: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    prevArrow: '<button class="slick-prev"><i class="lnr lnr-chevron-left"></i></button>',
    nextArrow: '<button class="slick-next"><i class="lnr lnr-chevron-right"></i></button>',
    responsive: [
        {
            breakpoint: 1501,
            settings: {
                slidesToShow: 1,
            }
        },
        {
            breakpoint: 1199,
            settings: {
                slidesToShow: 1,
            }
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 1,
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
            }
        },
        {
            breakpoint: 575,
            settings: {
                slidesToShow: 1,
            }
        },
    ]
});

// employer Slider
function firstLastClass(slick) {
    var $activeItem = $(slick.target).find('.slick-active'),
        $total = $activeItem.length;
    $activeItem.removeClass('first last');
    $activeItem.each(function (index) {
        if (index === 0) {
            $(this).addClass('first');
        }
        if (index === $total - 1 && $total > 1) {
            $(this).addClass('last');
        }
    });
}
$('.employer-slider').on('init', function (slick) {
    firstLastClass(slick);
}).slick({
    infinite: true,
    arrows: true,
    dots: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    prevArrow: '<button class="slick-prev"><i class="lnr lnr-chevron-left"></i></button>',
    nextArrow: '<button class="slick-next"><i class="lnr lnr-chevron-right"></i></button>',
    responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 575,
            settings: {
                slidesToShow: 1,
            }
        },
    ]
}).on('afterChange', function (slick) {
    firstLastClass(slick);
});
$('.employer-slider-two').slick({
    infinite: true,
    arrows: false,
    dots: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    prevArrow: '<button class="slick-prev"><i class="lnr lnr-chevron-left"></i></button>',
    nextArrow: '<button class="slick-next"><i class="lnr lnr-chevron-right"></i></button>',
    responsive: [
        {
            breakpoint: 1199,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 575,
            settings: {
                slidesToShow: 1,
            }
        },
    ]
});

// Job Slider
$('.job-grid-slider').slick({
    infinite: true,
    arrows: true,
    dots: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    prevArrow: '<button class="slick-prev"><i class="lnr lnr-chevron-left"></i></button>',
    nextArrow: '<button class="slick-next"><i class="lnr lnr-chevron-right"></i></button>',
    responsive: [
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
            }
        },
        {
            breakpoint: 575,
            settings: {
                slidesToShow: 1,
            }
        },
    ]
});
// Company History Slider
$('.company-history-slider').slick({
    infinite: true,
    arrows: false,
    dots: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    prevArrow: '<button class="slick-prev"><i class="lnr lnr-chevron-left"></i></button>',
    nextArrow: '<button class="slick-next"><i class="lnr lnr-chevron-right"></i></button>',
    responsive: [
        {
            breakpoint: 1199,
            settings: {
                slidesToShow: 1,
            }
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 1,
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
            }
        },
        {
            breakpoint: 575,
            settings: {
                slidesToShow: 1,
            }
        },
    ]
});
$('a[data-slide]').click(function(e) {
    e.preventDefault();
    var slideno = $(this).data('slide');
    $('.company-history-slider').slick('slickGoTo', slideno - 1);
  });

// Sponsors Slider
$('.sponsors-slider').slick({
infinite: true,
arrows: false,
dots: false,
slidesToShow: 1,
slidesToScroll: 1,
adaptiveHeight: true,
prevArrow: '<button class="slick-prev"><i class="lnr lnr-chevron-left"></i></button>',
nextArrow: '<button class="slick-next"><i class="lnr lnr-chevron-right"></i></button>',
responsive: [
    {
        breakpoint: 1199,
        settings: {
            slidesToShow: 1,
        }
    },
    {
        breakpoint: 992,
        settings: {
            slidesToShow: 1,
        }
    },
    {
        breakpoint: 768,
        settings: {
            slidesToShow: 1,
        }
    },
    {
        breakpoint: 575,
        settings: {
            slidesToShow: 1,
        }
    },
]
});
// Sidebar EMP Slider
$('.sidebar-emp-slider').slick({
    infinite: true,
    arrows: true,
    dots: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    adaptiveHeight: true,
    prevArrow: '<button class="slick-prev"><i class="lnr lnr-chevron-left"></i></button>',
    nextArrow: '<button class="slick-next"><i class="lnr lnr-chevron-right"></i></button>',
    responsive: [
        {
            breakpoint: 1199,
            settings: {
                slidesToShow: 1,
            }
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 1,
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
            }
        },
        {
            breakpoint: 575,
            settings: {
                slidesToShow: 1,
            }
        },
    ]
    });
// Blog Gallery Slider
$('.blog-gallery-slider').slick({
    infinite: true,
    arrows: true,
    dots: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    prevArrow: '<button class="slick-prev"><i class="lnr lnr-chevron-left"></i></button>',
    nextArrow: '<button class="slick-next"><i class="lnr lnr-chevron-right"></i></button>',
    responsive: [
        {
            breakpoint: 767,
            settings: {
                arrows: false,
                dots: true,
            }
        },
    ]
});

/*----------------------------------- 
    Single Product Slider
--------------------------------------*/  
// Product Image Slider
$('.product-image-slider').slick({
    infinite: true,
    arrows: false,
    dots: false,
    draggable: false,
    swipe: false,
    touchMove: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '.product-thumb-slider',
});
// Product Thumb Slider
$('.product-thumb-slider').slick({
    infinite: true,
    arrows: false,
    dots: false,
    slidesToShow: 5,
    slidesToScroll: 1,
    prevArrow: '<button class="slick-prev"><i class="lnr lnr-chevron-left"></i></button>',
    nextArrow: '<button class="slick-next"><i class="lnr lnr-chevron-right"></i></button>',
    asNavFor: '.product-image-slider',
    focusOnSelect: true,
    responsive: [
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 4,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 5,
            }
        },
        {
            breakpoint: 479,
            settings: {
                slidesToShow: 4,
            }
        }
    ]
});

// Product Slider 3 (3 Column)
$('.product-slider-3').slick({
    infinite: true,
    arrows: true,
    dots: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    prevArrow: '<button class="slick-prev"><i class="lnr lnr-chevron-left"></i></button>',
    nextArrow: '<button class="slick-next"><i class="lnr lnr-chevron-right"></i></button>',
    responsive: [
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
                arrows: false,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 2,
                arrows: false,
            }
        },
        {
            breakpoint: 575,
            settings: {
                slidesToShow: 1,
                arrows: false,
            }
        }
    ]
});

/*--------------------------------
    Match Height Active
----------------------------------*/
$('.single-employer-item, .single-testimonial-two').matchHeight();

/*----------------------------------- 
    Price slider Active 
----------------------------------*/
$('#salary-range').slider({
    range: true,
    min: 300,
    max: 1000,
    values: [ 325, 900 ],
    slide: function( event, ui ) {
        $('#salary-amount').val( '$' + ui.values[ 0 ] + ' - $' + ui.values[ 1 ] );
    }
});
$('#salary-amount').val('$' + $('#salary-range').slider( 'values', 0 ) +
    ' - $' + $('#salary-range').slider('values', 1 ) ); 


/*----------------------------------- 
    Location slider range Active 
----------------------------------*/
$( "#slider-range-min" ).slider({
    range: "min",
    value: 37,
    min: 1,
    max: 700,
    slide: function( event, ui ) {
        $( "#amount" ).val( ui.value + " KM" );
    }
});
$( "#amount" ).val( $( "#slider-range-min" ).slider( "value" ) );

/*---------------------------
    Slider Range Active
-----------------------------*/
var $rangeSlider = $('.range-slider');
$rangeSlider.each(function(){
    var $this = $(this),
        $min = $this.data('min'),
        $max = $this.data('max'),
        $value = $this.data('value'),
        $step = $this.data('step');
    $this.slider({
        orientation: 'horizontal',
        range: 'min',
        min: $min,
        max: $max,
        value: $value,
        step: $step,
        slide: function(event, ui) {
            $uiHandle.html( '<span>' + ui.value + '</span>');
        }
    });
    var $uiHandle = $this.children('.ui-slider-handle');
    $uiHandle.html( '<span>' + $this.slider('value') + '</span>');
});

/*--------------------------
    Counter Up
---------------------------- */
$('.counter').counterUp({
    delay: 70,
    time: 5000
}); 

/*------------------------
	Sticky Sidebar Active
-------------------------*/
$('#sticky-sidebar').theiaStickySidebar({
    // Settings
    additionalMarginTop: 80
  })

/*----- 
	Quantity
--------------------------------*/
$('.pro-qty').prepend('<button class="dec qtybtn">-</button>');
$('.pro-qty').append('<button class="inc qtybtn">+</button>');
$('.qtybtn').on('click', function() {
	var $button = $(this);
	var oldValue = $button.parent().find('input').val();
	if ($button.hasClass('inc')) {
	  var newVal = parseFloat(oldValue) + 1;
	} else {
	   // Don't allow decrementing below zero
	  if (oldValue > 0) {
		var newVal = parseFloat(oldValue) - 1;
		} else {
		newVal = 0;
	  }
	  }
	$button.parent().find('input').val(newVal);
});
/* -------------------------
    Venobox Active
* --------------------------*/  
$('.venobox').venobox({
    border: '10px',
    titleattr: 'data-title',
    numeratio: true,
    infinigall: true
});
/* --------------------------------------------------------
    FAQ Accordion 
* -------------------------------------------------------*/ 
$('.card-header a').on('click', function() {
    $('.card').removeClass('actives');
    $(this).parents('.card').addClass('actives');
  }); 

/*----- 
	Shipping Form Toggle
--------------------------------*/ 
$('[data-shipping]').on('click', function(){
    if( $('[data-shipping]:checked').length > 0 ) {
        $('#shipping-form').slideDown();
    } else {
        $('#shipping-form').slideUp();
    }
})
    
/*----- 
	Payment Method Select
--------------------------------*/
$('[name="payment-method"]').on('click', function(){
    
    var $value = $(this).attr('value');

    $('.single-method p').slideUp();
    $('[data-method="'+$value+'"]').slideDown();
    
})

/*------------------------------ 
    Nice Select Active
---------------------------------*/
$('select').niceSelect();

/*----------------------------------
    ScrollUp Active
-----------------------------------*/
$.scrollUp({
    scrollText: '<i class="fa fa-angle-up"></i>',
    easingType: 'linear',
    scrollSpeed: 900,
    animation: 'fade'
});
    
/*--
	MailChimp
-----------------------------------*/
$('#mc-form').ajaxChimp({
	language: 'en',
	callback: mailChimpResponse,
	// ADD YOUR MAILCHIMP URL BELOW HERE!
	url: 'http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef'

});
function mailChimpResponse(resp) {
	
	if (resp.result === 'success') {
		$('.mailchimp-success').html('' + resp.msg).fadeIn(900);
		$('.mailchimp-error').fadeOut(400);
		
	} else if(resp.result === 'error') {
		$('.mailchimp-error').html('' + resp.msg).fadeIn(900);
	}  
}
    

  
})(jQuery);	