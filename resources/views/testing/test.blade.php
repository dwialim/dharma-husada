<!doctype html>
<html lang="en">
<!-- [Head] start -->
<head>
	<title>Floating labels | Mantis Bootstrap 5 Admin Template</title>
	<!-- [Meta] -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Mantis is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
	<meta name="keywords" content="Mantis, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Bootstrap Admin Template">
	<meta name="author" content="CodedThemes">

	<link rel="stylesheet" href="{{asset('admin-page/assets/fonts/phosphor/duotone/style.css')}}">

	<!-- [Tabler Icons] https://tablericons.com -->
	<link rel="stylesheet" href="{{asset('admin-page/assets/fonts/tabler-icons.min.css')}}">

	<!-- [Feather Icons] https://feathericons.com -->
	<link rel="stylesheet" href="{{asset('admin-page/assets/fonts/feather.css')}}">

	<!-- [Font Awesome Icons] https://fontawesome.com/icons -->
	<link rel="stylesheet" href="{{asset('admin-page/assets/fonts/fontawesome.css')}}">

	<!-- [Material Icons] https://fonts.google.com/icons -->
	<link rel="stylesheet" href="{{asset('admin-page/assets/fonts/material.css')}}">
	<link href="{{asset('landing-page/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">

	<link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.bootstrap5.min.css" id="main-style-link">

	@vite([
		'resources/css/app.css',
		'resources/css/admin-page/app.css',
	])


	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" id="main-font-link">
	<link rel="stylesheet" href="{{asset('admin-page/assets/css/style.css')}}" id="main-style-link">
	<link rel="stylesheet" href="{{asset('admin-page/assets/css/style-preset.css')}}">

	<!-- Pan -->
	<link href="{{asset('admin-page/assets/pan/css/jquery.pan.css')}}" rel="stylesheet" />
	{{-- <link href="{{asset('src/css/jquery.pan.css')}}" rel="stylesheet" type="text/css"/> --}}

	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
	<link rel="stylesheet" href="https://unpkg.com/leaflet-gesture-handling/dist/leaflet-gesture-handling.min.css" type="text/css">
</head>
<!-- [Head] end --><!-- [Body] Start -->
<body data-pc-preset="preset-1" data-pc-direction="ltr" data-pc-theme="light">
	@include('admin-page.components.sidebar')

	@include('admin-page.components.header')

	<!-- [ Main Content ] start -->
	<section class="pc-container">
		<div class="pc-content">

			<div class="row">
				<div class="col-md-12">
					<div class="card profile-wave-card">
						<img src="{{asset('admin-page/assets/images/profile/img-profile-top.svg')}}" alt="images" class="img-fluid profille-wave-img wave-top">
						<img src="{{asset('admin-page/assets/images/profile/img-profile-bottom.svg')}}" alt="images" class="img-fluid profille-wave-img wave-bottom">
						<div class="card-body">
							<form id="form-profil-rs" data-route-store="{{route('admin.profilRS.store')}}">
								{{-- <input type="hidden" name="profil_rs_id" value="{{$data ? $data->id : ''}}"> --}}
								<div class="row">
									<div class="col-sm-12 mx-auto">
										<div id="map" style="width: auto; height: 400px;"></div>
									</div>
								</div>
							</form>
							<div class="mt-5 gap-4 text-right btn-right">
								<button type="button" class="btn btn-sm btn-success btn-simpan">Simpan</button>
							</div>
						</div>
					</div>
				</div>
			</div>
				{{-- @include('testing.test-content') --}}

		</div>
	</section>
	<!-- [ Main Content ] end -->

	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

	<!-- Required Js -->
	<script src="{{asset('admin-page/assets/js/plugins/popper.min.js')}}"></script>
	<script src="{{asset('admin-page/assets/js/plugins/simplebar.min.js')}}"></script>
	<script src="{{asset('admin-page/assets/js/plugins/bootstrap.min.js')}}"></script>
	<script src="{{asset('admin-page/assets/js/fonts/custom-font.js')}}"></script>
	<script src="{{asset('admin-page/assets/js/fonts/custom-ant-icon.js')}}"></script>
	<script src="{{asset('admin-page/assets/js/pcoded.js')}}"></script>
	<script src="{{asset('admin-page/assets/js/theme.js')}}"></script>
	{{-- <script src="{{asset('admin-page/assets/js/multi-lang.js')}}"></script> --}}
	<script src="{{asset('admin-page/assets/js/plugins/feather.min.js')}}"></script>

	{{-- Pan --}}
	<script src="{{asset('admin-page/assets/pan/js/jquery.pan.min.js')}}"></script>

	<script src="{{asset('requestor/axios.min.js')}}"></script>
	<script src="{{asset('requestor/axios.js')}}"></script>
	{{-- <script src="{{asset('src/js/jquery.pan.js')}}"></script> --}}



<script src="{{asset('admin-page/assets/js/theme.js')}}"></script>

<script src="{{asset('admin-page/assets/js/plugins/feather.min.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@vite(['resources/js/app.js'])
@vite(['resources/js/admin-page/app.js'])


	<script src="{{asset('landing-page/assets/leaflet/leaflet.js')}}"></script>
	<script src="{{asset('landing-page/assets/leaflet/leaflet-gesture-handling.min.js')}}"></script>

	<script>
		// $(async () => {
		// 	// const response = await postRequest("{{route('test.form')}}")

		// 	// $(".pc-content").html(response.data.data)

		// })


		var map,
			currentMarker = null, // Pastikan hanya ada satu marker
			tileLayer,
			// lat = "-7.6282424",
			// lng = "111.5332031",
			lat = "-7.5545456",
			lng = "112.623519",
			// -7.554545661454418, 112.6235193503378
			year = new Date().getFullYear();

		$(() => {
			/** Maps */
			// map = L.map('map', {
			// 	gestureHandling: true
			// }).fitWorld();

			// // Pastikan tile layer ditambahkan setelah peta diinisialisasi

			// setTimeout(() => {
			// 	tileLayer = L.tileLayer('https://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
			// 		maxZoom: 20,
			// 		subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
			// 		attribution: `&copy; ${year}`,
			// 	}).addTo(map);
			// 	map.setView([lat, lng], 16);
			// }, 500);


			map = L.map('map', {
				gestureHandling: true,
			}).fitWorld() // Inisialisasi map

			// Tambahkan tile layer
			tileLayer = L.tileLayer('https://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
				maxZoom: 20,
				subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
				attribution: `&copy; ${year}`,
			}).addTo(map)

			map.setView([lat, lng], 16)

			if (currentMarker) map.removeLayer(currentMarker);

			currentMarker = L.marker([lat, lng])
				.addTo(map)
				.bindPopup('Nama Lokasi')
				.openPopup();

			currentMarker.on('mouseover',function(ev) {
				currentMarker.openPopup()
			})
			currentMarker.on('mouseout', function() {
				setTimeout(() => {
					currentMarker.closePopup()
				}, 1500)
			})
			/** Maps end */
		})
	</script>

	@vite('resources/js/app.js')
</body>
<!-- [Body] end -->
</html>