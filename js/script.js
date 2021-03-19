$(function() { 
    $(".p-header__menu__burger-btn").on("click", function() {
        $(".p-header__menu__nav").toggleClass("menu-open");
        $(".p-header__menu__burger-btn").toggleClass("menu-open");
        $(".p-header__menu__burger-btn__bar").toggleClass("menu-open");
    });
    
    $('.p-works__slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.p-works__thumb' //サムネイルのクラス名
    });
    $('.p-works__thumb').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.p-works__slider', //スライダー本体のクラス名
        focusOnSelect: true,
    });
});