$(document).ready(function () {

    var widthOutput = '';
    function reportWindowSize() {
        widthOutput = window.innerWidth;
    }
    window.addEventListener('resize', reportWindowSize);

    /*--- nav ---*/

    $('nav i').click(function () {
        $('nav .fa-bars').hide();
        $('nav').css({
            'clip-path': 'polygon(0 0, 100% 0, 100% 100%, 0 100%)',
            'width': '100%',
            'height': '100%'
        });
        $('#nav-content .fa-times, #nav-content').fadeIn('slow');
    });

    $('#nav-content .fa-times, #nav-links a').click(function () {
        $('#nav-content .fa-times, #nav-content').
            fadeOut('fast', function () {
                $('nav').css({
                    'clip-path': 'polygon(0 0, 100% 0, 100% 100%, 50% 50%)',
                    'width': '80px',
                    'height': '100px'
                });
                $('nav .fa-bars').fadeIn('fast');
            });
    });

    /*--- Lottie ---*/

    //Showcase
    lottie.loadAnimation({
        container: document.getElementById('lottieShowCase'),
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: './js/lottie/showcase.json'
    });

    //Process
    lottie.loadAnimation({
        container: document.getElementById('lottieProcess'),
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: './js/lottie/process.json'
    });

    /*--- internal sections ---*/

    $('#btn-showcase, #btn-process').click(function () {
        var btnId = $(this).attr('id');
        if (btnId == 'btn-showcase') {
            var btnId = '#tri-right-top-lp';
            var btnIdOpp = '#tri-right-bottom-lp';
        }
        else {
            var btnId = '#tri-right-bottom-lp';
            var btnIdOpp = '#tri-right-top-lp';
        }
        $(btnId).css({
            'clip-path': 'polygon(0 0, 100% 0, 100% 100%, 0 100%)',
            'width': '100%',
            'height': '100%',
            'display': 'block',
            'overflow': 'auto',
            'z-index': '4'
        });
        $(btnIdOpp).css({ 'z-index': '1' });
        //let animation complete before hiding on mobile for height control
        setTimeout(function () {
            $(btnIdOpp).hide();
            if (widthOutput < 1000) {
                $('.tri-left, .tri-right-top, .tri-right-bottom').hide();
            }
        }, 1000);
    });

    if (widthOutput < 1000) {
        //hide header on scroll for mobile
        $('#tri-right-top-lp, #tri-right-bottom-lp').scroll(function () {
            var scrollTop = $(this).scrollTop();
            if (scrollTop > 65) {
                $('header').fadeOut();
            }
            else {
                $('header').fadeIn();
            }
        });
    }

});