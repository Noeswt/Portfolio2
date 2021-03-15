$(function() { 
    $(".p-header__menu__burger-btn").on("click", function() {
        $(".p-header__menu__nav").toggleClass("menu-open");
        $(".p-header__menu__burger-btn").toggleClass("menu-open");
        $(".p-header__menu__burger-btn__bar").toggleClass("menu-open");
    });
});
