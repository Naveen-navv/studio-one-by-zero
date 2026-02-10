<?php
$base_url = "http://localhost/studio-one-by-zero/";
$pagename_with = basename($_SERVER['PHP_SELF']);
$pagename_ = explode(".", $pagename_with);
$pagename = $pagename_[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" user-scalable="no">
	<title>Studio-One-By-Zero
	</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
		rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
	<link rel="icon" href="<?php echo $base_url; ?>images/fav-icon.png" type="image/gif" sizes="16x16">
	<link rel="stylesheet" href="<?php echo $base_url; ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $base_url; ?>css/animate.min.css">
	<link rel="stylesheet" href="<?php echo $base_url; ?>css/style.css">
	<link rel="stylesheet" href="<?php echo $base_url; ?>css/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

</head>

<body>
	<!-- <div class="bg_load"></div> -->

	<header id="property-header" class="header-area">

		<nav class="navbar navbar-expand-lg navbar-dark">
			<div class="container">

				<a class="navbar-brand" href="<?php echo $base_url; ?>index.php">
					<img class="lenovo-logo" src="images/logo.png" alt="logo">
				</a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
					data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class=" menu-items navbar-nav align-items-md-center align-item-start mb-lg-0" id="myDIV">
						<li class="nav-item">
							<a class="nav-link btn1 home-menu" aria-current="page"
								href="<?php echo $base_url; ?>">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link btn1 about-us-menu" href="<?php echo $base_url; ?>about-us.php">About
								Us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link btn1 services-menu" href="<?php echo $base_url; ?>services.php">Services</a>
						</li>
						<li class="nav-item">
							<a class="nav-link btn1 projects-menu" href="<?php echo $base_url; ?>projects.php">Projects</a>
						</li>
						<li class="nav-item">
							<a class="nav-link btn1 news-menu" href="<?php echo $base_url; ?>news.php">News</a>
						</li>
						<li class="nav-item">
							<a class="nav-link btn1 contact-menu" href="<?php echo $base_url; ?>contact-us.php">Contact
								Us</a>
						</li>


						<!-- <li class="nav-item"> -->
						<!-- <a  class="nav-link btn1 whatsapp-menu" href=""><img src="images/whatsapp-image.png" alt="" width="100%"></a> -->
						<!-- </li> -->
					</ul>
				</div>
				<!-- <div class="sticky-social">
					<ul class="social">
						<li class="fb mb-2"><a href="https://api.whatsapp.com/send?phone=7710006883&text%20=%20Hi"
								target="_blank"><img src="images/whatsapp-icon.png" alt="" width="100%"></a></li>
						<li class="fb"><a href="tel:7710006883" target="_blank"><img src="images/call-icon.png" alt=""
									width="100%"></a></li>
					</ul>
				</div> -->


			</div>

		</nav>

	</header>
	<div class="height-header"></div>
	<script>
		/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
		function myFunction() {
			document.getElementById("myDropdown").classList.toggle("show");
		}

		// Close the dropdown if the user clicks outside of it
		window.onclick = function (event) {
			if (!event.target.matches('.dropbtn')) {
				var dropdowns = document.getElementsByClassName("dropdown-content");
				var i;
				for (i = 0; i < dropdowns.length; i++) {
					var openDropdown = dropdowns[i];
					if (openDropdown.classList.contains('show')) {
						openDropdown.classList.remove('show');
					}
				}
			}
		}
	</script>