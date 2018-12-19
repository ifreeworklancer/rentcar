import jquery from 'jquery';
import Flickity from 'flickity';
import ScrollReveal from 'scrollreveal';
import 'flickity/dist/flickity.css';
import IMask from 'imask';

window.jQuery = window.$ = jquery;

(function () {

    /**
     * Burger-menu
     */
    $('.burger-menu').click(function () {
        var menu = $('.menu');
        var menuMask = $('.menu-mask');
        $(this).toggleClass('active');
        menu.toggleClass('active');
        menuMask.toggleClass('active');
        if ($(menu).hasClass('active')) {
            $('.burger-menu-text').text("Закрыть");
        } else {
            $('.burger-menu-text').text("Меню");
        }
    });

    $('.menu-mask').on('click', function () {
        $('.burger-menu').removeClass('active');
        $('.burger-menu-text').text("Меню");
        $('.menu').removeClass('active');
        $('.menu-mask').removeClass('active');
    })

    /**
     * Scroll
     */
    $(".scroll-link").on("click", function (event) {
        event.preventDefault();

        var id = $(this).attr('href');

        if (id.length > 1) {

            var top = ($(id).offset().top - $('#app-header').height());

            $('body,html').animate({
                scrollTop: top
            }, 1500);

            $('.burger-menu').removeClass('active');
            $('.burger-menu-text').text("Меню");
            $('.menu').removeClass('active');
            $('.menu-mask').removeClass('active');
        }
    });

    $(window).on('scroll', function () {
        $('.burger-menu').removeClass('active');
        $('.burger-menu-text').text("Меню");
        $('.menu').removeClass('active');
        $('.menu-mask').removeClass('active');
        if ($(this).scrollTop() > 20) {
            $('#app-header').addClass('is-fixed');
        } else {
            $('#app-header').removeClass('is-fixed');
        }
    });

    /**
     * Form
     */
    $('.form-control').on('focus', function () {
        $(this).parents('.form-group').addClass('in-focus');
    });

    $('.form-control').on('blur', function () {
        if ($(this).val() !== "") {
            $(this).parents('.form-group').addClass('in-focus');
        } else {
            $(this).parents('.form-group').removeClass('in-focus');
        }
    });

    /**
     * Menu item hover
     */
    $('.menu-list li a').hover(function () {
        $('.menu-list li a').addClass('blur');
        $(this).removeClass('blur').addClass('active');
    }, function () {
        $('.menu-list li a').removeClass('blur');
        $(this).removeClass('active');
    });

    /**
     * Phone mask
     * @type {*|jQuery.fn.init|jQuery|HTMLElement}
     */
    const phones = $('[type="tel"]');
    Array.from(phones).forEach(phone => {
        new IMask(phone, {
            mask: '+{38} (000) 000-00-00'
        });
    });

    /**
     * Youtube video
     */
    $('[data-src]').on('click', function (e) {
        e.preventDefault();

        var id = $(this).data('src'),
            padding = $(window).width() > 768 ? 120 : 30,
            ratio = 510 / 1080,
            width = $(window).width() - padding,
            height = width * ratio,
            html = '<iframe style="width: ' + width + 'px; height: ' + height + 'px;" ' +
                'src="https://www.youtube.com/embed/' +
                id + '" frameborder="0" gesture="media" allowfullscreen></iframe>';

        $('body').append('<div class="outer">' + html + '</div>');
    });

    $(document).mouseup(function (e) {
        var container = $('.outer iframe');

        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $('.outer').remove();
        }
    });

    $(document).on('keyup', function (e) {
        if (e.keyCode === 27) {
            $('.outer').remove();
            $(categoryCarModal).removeClass('active');
            $(connectModal).removeClass('active');
            $(orderModal).removeClass('active');
            $(modalMask).removeClass('active');
        }
    });

    /**
     * Modal
     */
    var categoryCarModal = $('.custom-modal--category-car');
    var connectModal = $('.custom-modal--connect');
    var orderModal = $('.custom-modal--order');
    var closeModal = $('.close-modal');
    var modalMask = $('.modal-mask');

    $('.open-connect').on('click', function (e) {
        e.preventDefault();
        $(connectModal).addClass('active');
        $(modalMask).addClass('active');
    });

    $('.open-order').on('click', function (e) {
        e.preventDefault();
        $(orderModal).addClass('active');
        $(modalMask).addClass('active');
        $("[name='car_title']").val($(this).data('cartitle'));
    });

    if($(window).width() > 1024) {
        $('[data-indexCar]').on('click', function () {
            $(categoryCarModal).addClass('active');
            $(modalMask).addClass('active');
        });
    }

    $(closeModal).on('click', function () {
        $(categoryCarModal).removeClass('active');
        $(connectModal).removeClass('active');
        $(orderModal).removeClass('active');
        $(modalMask).removeClass('active');
    });

    $(modalMask).on('click', function () {
        $(categoryCarModal).removeClass('active');
        $(connectModal).removeClass('active');
        $(orderModal).removeClass('active');
        $(modalMask).removeClass('active');
    });


    /**
     * Sliders
     */
    if ($('.intro-slider')) {

        var elem1 = document.querySelector('.intro-slider');
        if (elem1) {

            const flkty1 = new Flickity(elem1, {
                prevNextButtons: false,
                cellAlign: 'center',
                contain: true,
                draggable: false,
                cellSelector: '.intro-slider-item',
                wrapAround: true,
            });

            var prevArrowIntro = document.querySelector('.slider-arrow-item--prev-intro');
            var introSliderIndex = document.querySelector('.slider-nav__item--index');

            introSliderIndex.innerText = flkty1.selectedIndex + 1;

            prevArrowIntro.addEventListener('click', function () {
                flkty1.previous(false, false);
                introSliderIndex.innerText = flkty1.selectedIndex + 1;
            });

            var nextArrowIntro = document.querySelector('.slider-arrow-item--next-intro');

            nextArrowIntro.addEventListener('click', function () {
                flkty1.next(false, false);
                introSliderIndex.innerText = flkty1.selectedIndex + 1;
            });

            var introSliderlast = document.querySelector('.slider-nav__item--last');

            introSliderlast.innerText = flkty1.getCellElements().length;

        }
    }

    if ($('.reviews-slider')) {

        let elem2 = document.querySelector('.reviews-slider');
        if (elem2) {

            const flkty2 = new Flickity(elem2, {
                prevNextButtons: false,
                cellAlign: 'center',
                contain: true,
                draggable: false,
                wrapAround: true,
                adaptiveHeight: true
            });

            var prevArrowReviews = document.querySelector('.slider-arrow-item--prev-reviews');
            prevArrowReviews.addEventListener('click', function () {
                flkty2.previous(false, false);
            });

            var nextArrowReviews = document.querySelector('.slider-arrow-item--next-reviews');
            nextArrowReviews.addEventListener('click', function () {
                flkty2.next(false, false);
            });
        }
    }

    if ($('.category-car-slider')) {

        let elem3 = document.querySelector('.category-car-slider');
        if (elem3) {

            const flkty3 = new Flickity(elem3, {
                prevNextButtons: false,
                cellAlign: 'center',
                contain: true,
                draggable: false,
                wrapAround: true,
                cellSelector: '.category-car-slider-item'
            });

            var prevArrowCategoryCar = document.querySelector('.slider-arrow-item--prev-category-car');
            var categoryCarSliderIndex = document.querySelector('.category-car-slider-nav-item--index');

            if (flkty3.selectedIndex < 9) {
                categoryCarSliderIndex.innerText = `0${flkty3.selectedIndex + 1}`;
            } else {
                categoryCarSliderIndex.innerText = flkty3.selectedIndex + 1;
            }

            prevArrowCategoryCar.addEventListener('click', function () {
                flkty3.previous(false, false);
                if (flkty3.selectedIndex < 9) {
                    categoryCarSliderIndex.innerText = `0${flkty3.selectedIndex + 1}`;
                } else {
                    categoryCarSliderIndex.innerText = flkty3.selectedIndex + 1;
                }
            });

            var nextArrowCategoryCar = document.querySelector('.slider-arrow-item--next-category-car');

            nextArrowCategoryCar.addEventListener('click', function () {
                flkty3.next(false, false);
                if (flkty3.selectedIndex < 9) {
                    categoryCarSliderIndex.innerText = `0${flkty3.selectedIndex + 1}`;
                } else {
                    categoryCarSliderIndex.innerText = flkty3.selectedIndex + 1;
                }
            });

            var categoryCarSliderlast = document.querySelector('.category-car-slider-nav-item--last');

            if (flkty3.getCellElements().length < 9) {
                categoryCarSliderlast.innerText = `0${flkty3.getCellElements().length}`;
            } else {
                categoryCarSliderlast.innerText = flkty3.getCellElements().length;
            }

            $('[data-indexCar]').on('click', function () {
                flkty3.select($(this).data('indexcar'));
                if (flkty3.selectedIndex < 9) {
                    categoryCarSliderIndex.innerText = `0${flkty3.selectedIndex + 1}`;
                } else {
                    categoryCarSliderIndex.innerText = flkty3.selectedIndex + 1;
                }
            });
        }
    }

    /**
     * Animate scroll
     */
    // ScrollReveal().reveal('.intro-item', {
    //     origin: 'left',
    //     delay: 400,
    //     distance: '200px',
    // });
    // ScrollReveal().reveal('.intro-order', {
    //     origin: 'right',
    //     delay: 400,
    //     distance: '200px',
    // });
    // ScrollReveal().reveal('.pain-item', {
    //     origin: 'left',
    //     delay: 400,
    //     distance: '200px',
    // });
    // ScrollReveal().reveal('.pain-beforeAfter', {
    //     origin: 'right',
    //     delay: 400,
    //     distance: '200px',
    // });
    // ScrollReveal().reveal('.response-item', {
    //     origin: 'bottom',
    //     delay: 400,
    //     distance: '200px',
    // });


    /**
     * Map
     */
    if ($('#contacts-map').length > 0) {
        var contactsElement = document.getElementById('contacts-map');

        var contactsMap = L.map(contactsElement);


        L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(contactsMap);

        var contactsLat = $("[name='contactsLat']").val();
        var contactsLng = $("[name='contactsLng']").val();

        var contactsTarget = L.latLng(contactsLat, contactsLng);

        contactsMap.setView(contactsTarget, 20);

        L.marker(contactsTarget, {}).addTo(contactsMap);
    }


    /**
     * Footer secondary
     */
    if ($(window).width() > 1024) {
        $('.secondary-footer').css('margin-top', '-' + $('.secondary-footer').innerHeight() + 'px');
    }

})(jQuery)