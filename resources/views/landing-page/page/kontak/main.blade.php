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

		<div class="row mb-5">
			<div class="col-sm-12 mx-auto">
				<div id="map" style="width: auto; height: 400px;" data-lat="{{$data ? $data->lat : ''}}" data-lng="{{$data ? $data->lng : ''}}" data-nama="{{$data ? $data->nama : ''}}"></div>
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
								<p>{{$data ? $data->alamat : ''}}</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
							<i class="bi bi-telephone flex-shrink-0"></i>
							<div>
								<h3>Call Us</h3>
								<p>{{$data ? $data->telepon : ''}}</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
							<i class="bi bi-envelope flex-shrink-0"></i>
							<div>
								<h3>Email Us</h3>
								<p>{{$data ? $data->email : ''}}</p>
							</div>
						</div>
					</div>

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
