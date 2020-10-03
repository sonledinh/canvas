
$('.slide-prd-hot').slick({
    autoplay: false,
    arrow: true,
    dots: false,
    slidesToShow: 4,
    slidesToScroll: 2, 
    prevArrow: '<button class="prev"><i class="fa fa-angle-left"></i></button>',
    nextArrow: '<button class="next"><i class="fa fa-angle-right"></i></button>',
    responsive: [
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
            }
        }
    ]
});

$('.slide-bst').slick({
    autoplay: false,
    arrow: false, 
    dots: true,
    slidesToShow: 4,
    slidesToScroll: 2, 
    prevArrow: '',
    nextArrow: '',
    responsive: [
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
            }
        }
    ]
});

$('.selectors').slick({
    autoplay: false,
    arrow: false, 
    dots: true,
    slidesToShow: 5,
    slidesToScroll: 2,  
    prevArrow: '',
    nextArrow: '',
});

$('.title-filter').click(function(event) {
    $(this).next().toggle(400);
});

var mzOptions = {};

var numberSpinner = (function() {
    $('.number-spinner>.ns-btn>a').click(function() {
        var btn = $(this),
            oldValue = btn.closest('.number-spinner').find('input').val().trim(),
            newVal = 0;

        if (btn.attr('data-dir') === 'up') {
            newVal = parseInt(oldValue) + 1;
        } else {
            if (oldValue > 1) {
                newVal = parseInt(oldValue) - 1;
            } else {
                newVal = 1;
            }
        }
        btn.closest('.number-spinner').find('input').val(newVal);
    });
    $('.number-spinner>input').keypress(function(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    });
})();

$('.clc-sale').click(function(event) {
    $('.box-code-sale').toggle(400);
});

$(window).scroll(function(){
    if ($(window).scrollTop() >= 113) {
        $('.header-menu, main').addClass('fixed-header');
    }
    else {
        $('.header-menu, main').removeClass('fixed-header');
    }
});

jQuery(document).ready(function( $ ) {
  $("#menu").mmenu({
     "extensions": [
        "fx-menu-zoom"
     ],
     "counters": true
  });
});