@extends('landing-page.layout')

@push('styles')
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
	<link rel="stylesheet" href="https://unpkg.com/leaflet-gesture-handling/dist/leaflet-gesture-handling.min.css" type="text/css">

	{{-- <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
	integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
	crossorigin=""/>
	<link rel="stylesheet" href="//unpkg.com/leaflet-gesture-handling/dist/leaflet-gesture-handling.min.css"
	type="text/css"> --}}
	@vite(['resources/css/landing-page/kontak.css'])
@endpush

@section('content')
	<section id="contact" class="contact section">

		<!-- Section Title -->
		{{-- <div class="container section-title" data-aos="fade-up">
			<h2>Contact</h2>
			<p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
		</div><!-- End Section Title --> --}}

		{{-- <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
			<iframe
				style="border:0; width: 100%; height: 400px;"
				src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sMojokerto%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus"
				frameborder="0"
				allowfullscreen=""
				loading="lazy"
				referrerpolicy="no-referrer-when-downgrade"
			></iframe>
		</div><!-- End Google Maps --> --}}

		<div class="row mb-5">
			<div class="col-sm-12 mx-auto">
				{{-- <div class="card">
					<div class="card-body container-map"> --}}
						<div id="map" style="width: auto; height: 400px;"></div>
					{{-- </div>
				</div> --}}
			</div>
		</div>

		<div class="container" data-aos="fade-up" data-aos-delay="100">
			<div class="card p-5" style="box-shadow: 0px 0px 10px 0px #d8d8d8;" data-aos="fade-up" data-aos-delay="200">
				<div class="row gy-4">
					<div class="col-lg-4">
						<div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
							<i class="bi bi-geo-alt flex-shrink-0"></i>
							<div>
								<h3>Location</h3>
								<p>A108 Adam Street, New York, NY 535022</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
							<i class="bi bi-telephone flex-shrink-0"></i>
							<div>
								<h3>Call Us</h3>
								<p>+1 5589 55488 55</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
							<i class="bi bi-envelope flex-shrink-0"></i>
							<div>
								<h3>Email Us</h3>
								<p>info@example.com</p>
							</div>
						</div>
					</div>

					{{-- <div class="col-lg-8">
						<form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
							<div class="row gy-4">

								<div class="col-md-6">
									<input type="text" name="name" class="form-control" placeholder="Your Name" required="">
								</div>

								<div class="col-md-6 ">
									<input type="email" class="form-control" name="email" placeholder="Your Email" required="">
								</div>

								<div class="col-md-12">
									<input type="text" class="form-control" name="subject" placeholder="Subject" required="">
								</div>

								<div class="col-md-12">
									<textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
								</div>

								<div class="col-md-12 text-center">
									<div class="loading">Loading</div>
									<div class="error-message"></div>
									<div class="sent-message">Your message has been sent. Thank you!</div>

									<button type="submit">Send Message</button>
								</div>

							</div>
						</form>
					</div><!-- End Contact Form --> --}}

				</div>
			</div>
		</div>
	</section><!-- /Contact Section -->
@endsection

@push('scripts')
	<script src="{{asset('landing-page/assets/leaflet/leaflet.js')}}"></script>
	<script src="{{asset('landing-page/assets/leaflet/leaflet-gesture-handling.min.js')}}"></script>

	@vite(['resources/js/landing-page/kontak.js'])
@endpush
