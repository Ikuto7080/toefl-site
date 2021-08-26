
// FAQ
// ===================================================================================
$(function () {
    $('.js-accordion').on('click', function () {
        $(this).toggleClass('active')
        $(this).next().slideToggle();
    })
});

// header > nav
// ===========================================================

$(function(){
    $('#nav-btn').on('click',function(){
        $(this).toggleClass('-active');
        $('#nav').toggleClass('-active');
    });
});
// ScrollHint

new ScrollHint('.js-scrollable');
 