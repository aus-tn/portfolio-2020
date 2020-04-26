$(document).ready(function () {

    /*--- header ---*/

    /*$().click(function () {

    });*/

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

    $('#nav-content .fa-times').click(function () {
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
        path: 'lottie/showcase.json'
    });

    //Process
    lottie.loadAnimation({
        container: document.getElementById('lottieProcess'),
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: 'lottie/process.json'
    });

    /*--- internal sections ---*/

    $('#btn-showcase, #btn-process').click(function () {
        var btnId = $(this).attr('id');
        console.log('id: '.btnId);
        var btnClass = '';
        console.log('class: '.btnClass);
        if (btnId == 'btn-showcase') {
            btnClass = '.tri-right-top-lp';
        }
        else {
            btnClass = '.tri-right-bottom-lp';
        }
        $(btnClass).css({
            'display': 'block',
            'clip-path': 'polygon(0 0, 100% 0, 100% 100%, 0 100%)',
            'width': '100%',
            'height': '100%',
            'z-index': '3'
        });
    });

});