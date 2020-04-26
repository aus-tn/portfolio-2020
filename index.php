<!DOCTYPE html>
<html>

<?php include 'inc/head.php';?>

<body>
    <?php include 'inc/header.php';?>

    <?php include 'inc/nav.php';?>

    <!--- UX/UI Designer --->

    <section class="tri-left">
        <div class="tri-content">
            <h1>UX/UI Designer</h1>
            <h2>Currently at <img src="img/nascar-logo.png" alt="NASCAR" id="currentJob" /></h2>
            <h3>other known brand worked with</h3>
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
        <svg height="0" width="0" class="svg-clip">
            <defs>
                <clipPath id="hero-clip" clipPathUnits="objectBoundingBox">
                    <polygon fill="none" points="0,0 .9,0 1,1 0,1" />
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
            <div id="lottieShowCase"></div>
            <h2>Showcase</h2>
            <a href="showcase.php" class="btn" id="btn-showcase">VIEW</a>
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
    </section>

    <section id="tri-right-top-lp">
        <h2>Showcase</h2>
        <div id="lottieShowCase"></div>
        <div class="lp-col"></div>
        <div class="lp-col"></div>
        <div class="lp-col"></div>
    </section>

    <!--- Process --->

    <section class="tri-right-bottom">
        <div class="tri-content">
            <div class="lottieProcess"></div>
            <h2>Process</h2>
            <a href="process.php" class="btn" id="btn-process">VIEW</a>
        </div>
    </section>

    <section id="tri-right-bottom-lp">
        <h1>Process</h1>
        <div class="lottieProcess"></div>
        <div class="lp-col">
            <h2>Research</h2>
            <ul>
                <li>SWOT Analysis</li>
                <li>User &amp; Company Goals</li>
                <li>Google Analytics Analysis</li>
                <li>User Profiles</li>
                <li>Information Architecture</li>
                <li>Sketching \ Wireframing</li>
                <li>Graphics (Adobe Photoshop &amp; Illustrator)</li>
            </ul>
        </div>
        <div class="lp-col">
            <h2>Build</h2>
            <ul>
                <li>Prototyping (Adobe XD)</li>
                <li>HTML, CSS, SASS</li>
                <li>Javascript, jQuery, AJAX, Gulp</li>
                <li>Bootstrap, Foundation</li>
                <li>Git, GitLab, GitHub</li>
                <li>PHP, Twig, REST API</li>
                <li>Craft CMS, Shopify, WordPress</li>
            </ul>
        </div>
        <div class="lp-col">
            <h2>Test</h2>
            <ul>
                <li>User Testing</li>
                <li>Google Analytics ROI & KPI Metrics</li>
                <li>A/B Testing</li>
            </ul>
        </div>
    </section>
</body>

</html>