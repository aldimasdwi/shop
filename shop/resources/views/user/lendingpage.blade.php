<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="user/img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>PonIT Shop</title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="user/css/linearicons.css">
	<link rel="stylesheet" href="user/css/font-awesome.min.css">
	<link rel="stylesheet" href="user/css/themify-icons.css">
	<link rel="stylesheet" href="user/css/bootstrap.css">
	<link rel="stylesheet" href="user/css/owl.carousel.css">
	<link rel="stylesheet" href="user/css/nice-select.css">
	<link rel="stylesheet" href="user/css/nouislider.min.css">
	<link rel="stylesheet" href="user/css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="user/css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="user/css/magnific-popup.css">
	<link rel="stylesheet" href="user/css/main.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="user/index.html"><b class="text-[30px]">PonIT Shop</b></a>
				</div>
			</nav>
		</div>
	</header>


    @yield('depann')
    @yield('produk')



	<!-- Start brand Area -->
	<section class="brand-area section_gap">
		<div class="container">
			<div class="row">
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="img/multimedia.png" alt="">
				</a>
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="img/manager.png" alt="">
				</a>
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="img/programmer.png" alt="">
				</a>
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="img/sidaq.png" alt="">
				</a>
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="img/marketer.png" alt="">
				</a>
			</div>
		</div>
	</section>
	<!-- End brand Area -->
<br><br>


	<!-- start footer Area -->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>About Us</h6>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore
							magna aliqua.
						</p>
					</div>
				</div>
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Pesan untuk admin</h6>
						<div class="" id="mc_embed_signup">

							<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="form-inline">

								<div>

									<form action="" method="post">
										<input type="text" class="form-control" placeholder="pesan">
										<br>
										<input class="form-control mt-3" type="email" placeholder="email">
										<br>
										<button type="submit" class="text-[#ec7411] text-lg mt-3">kirim</button>
									</form>
								</div>
								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget mail-chimp">

					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Follow Us</h6>
						<p>Let us be social</p>
						<div class="footer-social d-flex align-items-center">
							<a href="user/#"><i class="fa fa-facebook"></i></a>
							<a href="user/#"><i class="fa fa-twitter"></i></a>
							<a href="user/#"><i class="fa fa-dribbble"></i></a>
							<a href="user/#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
            <br><br>
		</div>
	</footer>
	<!-- End footer Area -->

	<script src="user/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="user/js/vendor/bootstrap.min.js"></script>
	<script src="user/js/jquery.ajaxchimp.min.js"></script>
	<script src="user/js/jquery.nice-select.min.js"></script>
	<script src="user/js/jquery.sticky.js"></script>
	<script src="user/js/nouislider.min.js"></script>
	<script src="user/js/countdown.js"></script>
	<script src="user/js/jquery.magnific-popup.min.js"></script>
	{{-- <script src="user/js/owl.carousel.min.js"></script> --}}
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="user/js/gmaps.min.js"></script>
	<script src="user/js/main.js"></script>
</body>

</html>
