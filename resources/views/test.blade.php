<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>

	<!-- Favicons -->
	<link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
	<link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com" rel="preconnect">
	<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<!-- Vendor CSS Files -->
	{{-- <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
	<link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
	<link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet"> --}}

	<!-- Main CSS File -->
	{{-- <link href="{{asset('assets/css/main.css')}}" rel="stylesheet"> --}}

	<link rel="stylesheet" href="{{asset('assets/owlcarousel/dist/assets/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/owlcarousel/dist/assets/owl.theme.default.min.css')}}">
	@vite(['resources/css/app.css', 'resources/js/app.js'])

	<style>
		/* --------------- For Smartphone --------------- */

		/* --------------- Responsive CSS Ends --------------- */
		#owl-demo .item img{
			display: block;
			width: 50%;
			height: auto;
		}
	</style>
</head>
<body>
	<main class="main">
		<section id="hero" class="section light-background">

		<div id="owl-demo" class="owl-carousel owl-theme">
			<div class="item"><img src="https://gratisography.com/wp-content/uploads/2024/11/gratisography-augmented-reality-800x525.jpg" alt="The Last of us"></div>
			<div class="item"><img src="https://gratisography.com/wp-content/uploads/2024/11/gratisography-augmented-reality-800x525.jpg" alt="GTA V"></div>
			<div class="item"><img src="https://gratisography.com/wp-content/uploads/2024/11/gratisography-augmented-reality-800x525.jpg" alt="Mirror Edge"></div>
		</div>
		</section>
	</main>
	<div class="container">
		{{-- <div id="owl-demo" class="owl-carousel owl-theme">
			<div class="item"><img src="https://gratisography.com/wp-content/uploads/2024/11/gratisography-augmented-reality-800x525.jpg" alt="The Last of us"></div>
			<div class="item"><img src="https://gratisography.com/wp-content/uploads/2024/11/gratisography-augmented-reality-800x525.jpg" alt="GTA V"></div>
			<div class="item"><img src="https://gratisography.com/wp-content/uploads/2024/11/gratisography-augmented-reality-800x525.jpg" alt="Mirror Edge"></div>
		</div> --}}
		{{-- <div class="owl-slider" id="owl-slider">
		  <!-- slide 01 -->
		  <div class="slide">
			<div class="owl-slide">
			  <div class="owl-text text-center">
				<span> We need the tonic of wildness </span>
				<button class="btn">Read more</button>
			  </div>
			</div>
		  </div>
		  <!-- slide 02 -->
		  <div class="slide">
			<div class="owl-slide">
			  <div class="owl-text text-center">
				<span> We need the tonic of wildness </span>
				<button class="btn">Read more</button>
			  </div>
			</div>
		  </div>
		  <!-- slide 03 -->
		  <div class="slide">
			<div class="owl-slide">
			  <div class="owl-text text-center">
				<span> We need the tonic of wildness </span>
				<button class="btn">Read more</button>
			  </div>
			</div>
		  </div>
		</div> --}}
	</div>


	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

	<!-- Vendor JS Files -->
	{{-- <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
	<script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
	<script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
	<script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script> --}}

	<!-- Main JS File -->
	{{-- <script src="{{asset('assets/js/main.js')}}"></script> --}}

	<script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
	<script src="{{asset('assets/owlcarousel/dist/owl.carousel.min.js')}}"></script>
	<script>
		$(document).ready(function(){
			// var owl = $('.owl-carousel');
			// owl.owlCarousel({
			// 	items:5,
			// 	loop:true,
			// 	margin:10,
			// 	autoplay:true,
			// 	autoplayTimeout:2000,
			// 	autoplayHoverPause:true
			// });

			$("#owl-demo").owlCarousel({
				// autoPlay: 1000, //Set AutoPlay to 3 seconds
				// // navigation : true, // Show next and prev buttons
				// slideSpeed : 300,
				// paginationSpeed : 400,
				// items : 1,
				// itemsDesktop : [1199,3],
				// itemsDesktopSmall : [979,3],
				// // itemsDesktop : false,
				// // itemsDesktopSmall : false,
				// itemsTablet: false,
				// itemsMobile : false,

				items: 1,
				nav: false,
				dots: true,
				loop: true,
				autoplay: true,
				autoplayTimeout:6000,
				responsive: {
					0: {
						items: 1
					}
				}

			});

			// $("#owl-slider").owlCarousel({
			// 	items: 1,
			// 	// nav: false,
			// 	// dots: true,
			// 	loop: true,
			// 	autoplay: true,
			// 	autoplayTimeout:6000,
			// 	responsive: {
			// 		0: {
			// 			items: 1
			// 		}
			// 	}
			// });

			// $('.play').on('click',function(){
			// 	owl.trigger('play.owl.autoplay',[1000])
			// })
			// $('.stop').on('click',function(){
			// 	owl.trigger('stop.owl.autoplay')
			// })
		});
	</script>
</body>
</html>
