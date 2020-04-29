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
            <h2>Showcase</h2>
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
    </section>

    <section id="tri-right-top-lp">
        <h1>Showcase</h1>
        <div class="lp-col">
            <h2><img src="img/AAG.png" alt="AMSI" />AMSI/AAG</h2>
            <p>The third largest privately held automotive management corporation in the USA with over 150
                dealerships</p>
            <a href="aag.php" class="btn" id="btn-process">VIEW</a>
        </div>
        <div class="lp-col">
            <h2><img src="img/LF.png" alt="Living Fresh" />Living Fresh</h2>
            <p>The residential e-commerce branch of Valley Forge Fabrics, an international sustainable
                fabrics company</p>
            <a href="lf.php" class="btn" id="btn-process">VIEW</a>
        </div>
        <div class="lp-col">
            <h2><img src="img/Steeda.png" alt="Steeda" />Steeda</h2>
            <p>One of the largest Ford performance parts manufacturers in the world</p>
            <a href="steeda.php" class="btn" id="btn-process">VIEW</a>
        </div>
    </section>

    <!--- Process --->

    <section class="tri-right-bottom">
        <div class="tri-content">
            <h2>Process</h2>
            <div id="lottieProcess"></div>
            <a href="#" class="btn" id="btn-process">VIEW</a>
        </div>
    </section>

    <section id="tri-right-bottom-lp">
        <h1>Process</h1>
        <div class="lp-col">
            <h2><i class="far fa-object-group"></i>Research</h2>
            <ul>
                <li>SWOT Analysis</li>
                <li>User &amp; Company Goals</li>
                <li>Google Analytics Analysis</li>
                <li>User Profiles</li>
                <li>Information Architecture</li>
                <li>Sketching, Wireframing</li>
            </ul>
        </div>
        <div class="lp-col">
            <h2><i class="fas fa-code"></i>Build</h2>
            <ul>
                <li>Adobe Photoshop, Illustrator</li>
                <li>Prototyping, Adobe XD</li>
                <li>HTML, CSS, SASS</li>
                <li>JS, jQuery, AJAX, Gulp</li>
                <li>Bootstrap, Foundation</li>
                <li>Git, GitLab, GitHub</li>
                <li>PHP, Twig, REST API</li>
                <li>Craft, Shopify, WordPress</li>
            </ul>
        </div>
        <div class="lp-col">
            <h2><i class="fas fa-vial"></i>Test</h2>
            <ul>
                <li>User Testing</li>
                <li>Google Analytics ROI & KPI</li>
                <li>A/B Testing</li>
            </ul>
        </div>
    </section>
</body>

</html>