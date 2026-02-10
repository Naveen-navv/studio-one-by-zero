<footer id="footer-sec" >
	<section class="footer-sec-wrap py-md-5">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="single-footer-box">
						<img src="images/footer-logo.png" alt="logo">
					</div>
				</div>
				<div class="col-md-3">
					<div class="single-footer-box">
						<h3>VISIT US</h3>
						<p>15/2, Chellammal Street, Shenoy Nagar, Chennai - 600030. </p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="single-footer-box">
						<h3>CALL US</h3>
						<p><a href="tel:+91 638 12 15102">+91 638 12 15102</a> </p>
						<p><a href="tel:+91 80 726 08686">+91 80 726 08686</a> </p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="single-footer-box">
						<h3>EMAIL</h3>
						<p><a href="mailto:info@studioonebyzero.com">info@studioonebyzero.com</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="bottom-footer">
		<div class="container">
			<div class="row align-items-center justify-content-between">
				<div class="col-md-6">
				    <div class="social-media-wrap d-flex">
				        <img src="images/s-instagram.png" alt="instagram img">
				        <img src="images/s-fb.png" alt="fb img">
				        <img src="images/s-linkedin.png" alt="linkedin img">
				    </div>
				</div>
				<div class="col-md-6">
					<div class="bottom-footer-left">
						<p class="text-center"> © 2024<a href="#">
							Studio One By Zero </a>All Rights
							Reserved. </p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>




<!-- Modal -->

<a href="javascript:;" class="scrollToTop"></a>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>
<script type="text/javascript"
	src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script>



</script>
<script>

	
	$('.home-client-section').owlCarousel({
		loop: true,
		margin: 10,
		nav: false,
		autoplay: true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 3
			},
			1000: {
				items: 4
			}
		}
	})

	$(".single-testimonial-wrap").owlCarousel({
		dots: true,
		loop: true,
		nav: false,
		autoplay: true,
		arrows: false,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 1
			},
			1000: {
				items: 1
			}
		}
	})
	//active menu
	$(document).ready(function () {
		$(".menu-items li a").removeClass('active-menu')
		if (window.location.href.indexOf("about-us") > -1) {
			$("li .about-us-menu").addClass('active-menu');
		} else
			if (window.location.href.indexOf("projects") > -1) {
				$("li .projects-menu").addClass('active-menu');
			}
			else
			if (window.location.href.indexOf("services") > -1) {
				$("li .services-menu").addClass('active-menu');
			}
			else
			if (window.location.href.indexOf("news") > -1) {
				$("li .news-menu").addClass('active-menu');
			}
			else
				if (window.location.href.indexOf("contact-us") > -1) {
					$("li .contact-menu").addClass('active-menu');
				} else {
					$("li .home-menu").addClass('active-menu');
				}
	});

	//scroll to top script

	jQuery(function () {
		jQuery('.zoop-view-course').click(function () {
			jQuery('html,body').animate({ scrollTop: jQuery('#featured-courses').offset().top - 0 }, 3000)
		});
		jQuery("html").css('scroll-behavior', 'auto');
	});


	jQuery(function ($) {
		var path = window.location.href;
		$('ul a').each(function () {
			if (this.href === path) {
				$(this).addClass('active');
			}
		});
	});


	function inVisible(element) {
		//Checking if the element is
		//visible in the viewport
		var WindowTop = $(window).scrollTop();
		var WindowBottom = WindowTop + $(window).height();
		var ElementTop = element.offset().top;
		var ElementBottom = ElementTop + element.height();
		//animating the element if it is
		//visible in the viewport
		if ((ElementBottom <= WindowBottom) && ElementTop >= WindowTop)
			animate(element);
	}

	$('.loan-tab-names-wrap li').click(function () {
		$('.loan-tab-names-wrap li').removeClass('active');
		$(this).addClass('active');

		$('.loan-tab-value-wrap .loan-tab-values').removeClass('active');
		$('.loan-tab-value-wrap .loan-tab-values[data-tab-val=' + $(this).attr('data-tab-name') + ']').addClass('active');
	})


</script>
</body>

</html>