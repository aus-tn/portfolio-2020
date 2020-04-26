/* --- Nav --- */
$(document).ready(function () {
    $('nav i').click(function () {
        $('nav .fa-bars').hide();
        $('nav').css({
            'clip-path': 'polygon(0 0, 100% 0, 100% 100%, 0 100%)',
            'width': '100%',
            'height': '100%'
        });
        $('#nav-content .fa-times-circle, #nav-content').fadeIn('slow');
    });
    $('#nav-content .fa-times-circle').click(function () {
        $('#nav-content .fa-times-circle, #nav-content').
            fadeOut('fast', function () {
                $('nav').css({
                    'clip-path': 'polygon(0 0, 100% 0, 100% 100%, 50% 50%)',
                    'width': '80px',
                    'height': '100px'
                });
                $('nav .fa-bars').delay(700).fadeIn('fast');
            });
    });
});

/*--- Lottie ---*/

//Showcase
var lottieShowCase = document.getElementById('lottieShowCase');
lottie.loadAnimation({
    container: element, // the dom element that will contain the animation
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'lottie/showcase.json'
});

/*Process
lottie.loadAnimation({
    container: element, // the dom element that will contain the animation
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'data.json'
});

//Research
lottie.loadAnimation({
    container: element, // the dom element that will contain the animation
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'data.json'
});

//Build
lottie.loadAnimation({
    container: element, // the dom element that will contain the animation
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'data.json'
});

//Test
lottie.loadAnimation({
    container: element, // the dom element that will contain the animation
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'data.json'
}); */