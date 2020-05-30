<!DOCTYPE html>
<html>

<?php include 'inc/head.php';?>

<body>
    <?php include 'inc/header.php';?>

    <?php include 'inc/nav.php';?>

    <!--- UX Engineer --->

    <section class="tri-left">
        <div class="tri-content">
            <div class="tri-pad">
                <h1>UX Engineer</h1>
                <h2 class="mt0">Currently at <img src="img/nascar-logo.png" alt="NASCAR" id="currentJob" /></h2>
                <h3>other major brands worked with</h3>
                <div id="brand-logos">
                    <img src="img/bmw.png" alt="BMW" />
                    <img src="img/best-western.png" alt="Best Western" />
                    <img src="img/cadillac.png" alt="Cadillac">
                    <img src="img/crowne-plaza.png" alt="Crowne Plaza">
                    <img src="img/chrysler.png" alt="Chrysler">
                    <img src="img/comfort-suites.png" alt="Comfort Suites">
                    <img src="img/dodge.png" alt="Dodge">
                    <img src="img/holiday-inn.png" alt="Holiday Inn">
                    <img src="img/honda.png" alt="Honda">
                    <img src="img/hyundai.png" alt="Hyundai">
                    <img src="img/infiniti.png" alt="Infiniti">
                    <img src="img/jeep.png" alt="Jeep">
                    <img src="img/lexus.png" alt="Lexus">
                    <img src="img/mercedes.png" alt="Mercedes-benz">
                    <img src="img/mini.png" alt="Mini">
                    <img src="img/nissan.png" alt="Nissan">
                    <img src="img/porsche.png" alt="Porche">
                    <img src="img/sebring.png" alt="Sebring">
                    <img src="img/volvo.png" alt="Volvo">
                </div>
            </div>
        </div>
        <svg height="0" width="0" class="svg-clip">
            <defs>
                <clipPath id="hero-clip" clipPathUnits="objectBoundingBox">
                    <polygon fill="none" points="0,0 1,0 .9,1 0,1" />
                </clipPath>
            </defs>
            <defs>
                <clipPath id="mobile-clip" clipPathUnits="objectBoundingBox">
                    <polygon fill="none" points="0,0 1,0 1,1 0,.93" />
                </clipPath>
            </defs>
        </svg>
    </section>

    <!--- Showcase --->

    <section class="tri-right-top">
        <div class="tri-content">
            <div class="tri-vert">
                <h2 class="mb0 mt0">Showcase</h2>
                <div id="lottieShowCase"></div>
                <a href="#" class="btn" id="btn-showcase">VIEW</a>
            </div>
            <svg height="0" width="0" class="svg-clip">
                <defs>
                    <clipPath id="hero-clip-2" clipPathUnits="objectBoundingBox">
                        <polygon fill="none" points="0,0 1,0 1,.8 0,1" />
                    </clipPath>
                </defs>
                <defs>
                    <clipPath id="mobile-clip" clipPathUnits="objectBoundingBox">
                        <polygon fill="none" points="0,0 1,0 1,1 0,.93" />
                    </clipPath>
                </defs>
            </svg>
        </div>
        </div>
    </section>

    <?php include 'inc/showcase.php';?>

    <!--- Process --->

    <section class="tri-right-bottom">
        <div class="tri-content">
            <div class="tri-vert">
                <h2 class="mb0 mt0">Process</h2>
                <div id="lottieProcess"></div>
                <a href="#" class="btn" id="btn-process">VIEW</a>
            </div>
        </div>
    </section>

    <?php include 'inc/process.php';?>

</body>

</html>