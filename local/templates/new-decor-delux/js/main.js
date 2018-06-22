//import '../scss/main.scss';
//import $ from 'jquery';
//import 'owl.carousel';
//import 'device';
//import device from 'current-device'
//import 'slick-carousel';
//import 'bootstrap';
//import 'bootstrap/js/dist/collapse';
//$('.dd-article__slider').owlCarousel();

const mobileWidth = 576;

$(document).ready(function(){

    $('#toggleMenu').on('click', function(){
        $('#navbarMenu').toggle();
    });

    $('.dd-article__slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    dots:false,
                    arrows:true
                }
            },
            {
                breakpoint: mobileWidth,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots:false,
                    arrows:true,
                    centerMode: true
                }
            }
        ]
    });

    $('.dd-brands-slider').slick({
        infinite: true,
        slidesToShow: 7,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        responsive: [
            {
                breakpoint: mobileWidth,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }
        ]
    });



    $('.dd-profile__info-buy-count-btn').on('click', function(e){
        let $elem = $(e.currentTarget),
            $value = $('.dd-profile__info-buy-count-value'),
            result;
        if ($elem.hasClass('_minus')) {
            result = parseInt($value.val()) - 1;
            if (result < 1) {
                result = 1;
            }
        }
        if ($elem.hasClass('_plus')) {
            result = parseInt($value.val()) + 1;
        }
        $value.val(result);
    });


    if (parseInt($(window).width()) < 768){
        let $slider2 = $('.js-slider-2');

        //((parseInt($(window).width()) - 38) / 2) + 72 + 60);

        $slider2.slick({
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 1,
            dots: false,
            arrows: true,
            responsive: [
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        centerMode: true
                    }
                }
            ]
        });

        $slider2.css('height', $('.js-slider-2').find('.slick-list.draggable').height());

        $('.dd-profile__slider-main').css('height', parseInt($(window).width()) - 30);
        $('.dd-profile__info-variant-slider').css('height', (parseInt($(window).width()) - 80) / 2 - 26);

    }



    $('.dd-profile__slider-main').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.dd-profile__slider-nav',
        responsive: [
            {
                breakpoint: mobileWidth,
                settings: {
                    arrows: true,
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.dd-profile__slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.dd-profile__slider-main',
        dots: false,
        focusOnSelect: true
    });


    $('.dd-profile__info-variant-slider').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: mobileWidth,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }
        ]
    });



    $('.dd-catalog__filter-item-head').on('click', function(e){
        let $elem = $(e.currentTarget).parent();
        $elem.toggleClass('_active');
    });

    $('.dd-catalog__filter-item-more').on('click', function(e){
        let $more = $(e.currentTarget).parent();
        $more.siblings('.dd-catalog__filter-item-link._hidden').removeClass('_hidden');
        $more.hide();
        return false;
    });

    $('.dd-catalog__toggle-filter').on('click', function(){
        $('.dd-catalog__filter-item._active').removeClass('_active');
        $('.dd-catalog__filter').toggle();
    });

    window.$ = $;

});