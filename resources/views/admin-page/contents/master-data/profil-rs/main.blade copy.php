@extends('admin-page.layout')

@push('styles')
	{{-- <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet-easybutton@2/src/easy-button.css"> --}}
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
	<link rel="stylesheet" href="https://unpkg.com/leaflet-gesture-handling/dist/leaflet-gesture-handling.min.css" type="text/css">
@endpush

@section('contents')
	@include('admin-page.components.breadcrumb')

	<div class="row">
		<div class="col-md-12">
			{{-- <div class="card profile-wave-card">
				<img src="{{asset('admin-page/assets/images/profile/img-profile-top.svg')}}" alt="images" class="img-fluid profille-wave-img wave-top">
				<img src="{{asset('admin-page/assets/images/profile/img-profile-bottom.svg')}}" alt="images" class="img-fluid profille-wave-img wave-bottom">
				<div class="card-body"> --}}
					{{-- <form id="form-profil-rs" data-route-store="{{route('admin.profilRS.store')}}"> --}}
						{{-- <input type="hidden" name="profil_rs_id" value="{{$data ? $data->id : ''}}"> --}}
						<div class="row">
							<div class="col-sm-12 mx-auto">
								<div id="map" style="width: auto; height: 400px;"></div>
							</div>
						</div>
					{{-- </form> --}}
					<div class="mt-5 gap-4 text-right btn-right">
						<button type="button" class="btn btn-sm btn-success btn-simpan">Simpan</button>
					</div>
				{{-- </div>
			</div> --}}
		</div>
	</div>
@endsection

@push('scripts')
	<script src="{{asset('landing-page/assets/leaflet/leaflet.js')}}"></script>
	<script src="{{asset('landing-page/assets/leaflet/leaflet-gesture-handling.min.js')}}"></script>
	{{-- <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
	<script src="https://cdn.jsdelivr.net/npm/leaflet-easybutton@2/src/easy-button.js"></script> --}}

	<script>
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
			map = L.map('map', {
				gestureHandling: true
			}).fitWorld();

			// Pastikan tile layer ditambahkan setelah peta diinisialisasi

			setTimeout(() => {
				tileLayer = L.tileLayer('https://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
					maxZoom: 20,
					subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
					attribution: `&copy; ${year}`,
				}).addTo(map);
				map.setView([lat, lng], 16);
			}, 500);


			// map = L.map('map', {
			// 	gestureHandling: true,
			// }).fitWorld() // Inisialisasi map

			// // Tambahkan tile layer
			// tileLayer = L.tileLayer('https://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
			// 	maxZoom: 20,
			// 	subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
			// 	attribution: `&copy; ${year}`,
			// }).addTo(map)

			// map.setView([lat, lng], 16)

			// if (currentMarker) map.removeLayer(currentMarker);

			// currentMarker = L.marker([lat, lng])
			// 	.addTo(map)
			// 	.bindPopup('Nama Lokasi')
			// 	.openPopup();

			// currentMarker.on('mouseover',function(ev) {
			// 	currentMarker.openPopup()
			// })
			// currentMarker.on('mouseout', function() {
			// 	setTimeout(() => {
			// 		currentMarker.closePopup()
			// 	}, 1500)
			// })
			/** Maps end */
		})
	</script>
	{{-- @vite('resources/js/admin-page/master-data/profil-rs.js') --}}
@endpush
