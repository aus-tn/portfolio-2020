$(document).ready(function () {
	var widthOutput = window.innerWidth;
	function reportWindowSize() {
		widthOutput = window.innerWidth;
	}
	window.addEventListener("resize", reportWindowSize);

	/*--- nav ---*/

	$("nav i").click(function () {
		$("nav .fa-bars").hide();
		$("nav").css({
			"-webkit-clip-path": "polygon(0 0, 100% 0, 100% 100%, 0 100%)",
			"clip-path": "polygon(0 0, 100% 0, 100% 100%, 0 100%)",
			width: "100%",
			height: "100vh",
		});
		$("#nav-content .fa-times, #nav-content").fadeIn("slow");
		//let animation complete before hiding on mobile for height control
		setTimeout(function () {
			if (widthOutput < 1000) {
				$("body").css({ background: "#fff" }); //compensate for 100%/vh not accurate on mobile
			}
		}, 1000);
	});

	$("#nav-content .fa-times").click(function () {
		$("#nav-content .fa-times, #nav-content").fadeOut("fast", function () {
			if (navigator.appVersion.indexOf("Edge") != -1) {
				$("nav").css({
					height: "60px",
					width: "60px",
				});
			} else {
				$("nav").css({
					"-webkit-clip-path": "polygon(0 0, 100% 0, 100% 100%, 50% 50%)",
					"clip-path": "polygon(0 0, 100% 0, 100% 100%, 50% 50%)",
					width: "80px",
					height: "100px",
				});
			}
			$("nav .fa-bars").fadeIn("fast");
		});
	});

	/*--- Lottie ---*/

	//Showcase
	lottie.loadAnimation({
		container: document.getElementById("lottieShowCase"),
		renderer: "svg",
		loop: true,
		autoplay: true,
		path: "./js/lottie/showcase.json",
	});

	//Process
	lottie.loadAnimation({
		container: document.getElementById("lottieProcess"),
		renderer: "svg",
		loop: true,
		autoplay: true,
		path: "./js/lottie/process.json",
	});

	/*--- Header ---*/
	$("body").on("scroll", function () {
		var scrollTop = $(this).scrollTop();
		console.log("scroll" + scrollTop);
		if (scrollTop > 65) {
			$("header").fadeOut();
		} else {
			$("header").fadeIn();
		}
	});
});
