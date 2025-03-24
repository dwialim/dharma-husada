@extends('admin-page.layout')

@push('styles')
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
	<link rel="stylesheet" href="https://unpkg.com/leaflet-gesture-handling/dist/leaflet-gesture-handling.min.css" type="text/css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet-easybutton@2/src/easy-button.css">
>
	@vite('resources/css/admin-page/master-data/profil-rs.css')
@endpush

@section('contents')
	@include('admin-page.components.breadcrumb')
	<div class="row">
		<div class="col-lg-12">
			<div class="card profile-wave-card">
				<img src="{{asset('admin-page/assets/images/profile/img-profile-top.svg')}}" alt="images" class="img-fluid profille-wave-img wave-top">
				<img src="{{asset('admin-page/assets/images/profile/img-profile-bottom.svg')}}" alt="images" class="img-fluid profille-wave-img wave-bottom">
				<div class="card-body">
					<div class="alert alert-primary d-flex align-items-center" role="alert">
						<span class="pc-micon">
							<svg class="pc-icon me-2">
								<use xlink:href="#info-circle"></use>
							</svg>
						</span>
						<div class="fs-12">Aktifkan GPS dan berikan izin lokasi untuk menggunakan fitur geolokasi</div>
					</div>

					<form id="form-profil-rs" data-route-store="{{route('admin.profilRS.store')}}">
						<div class="row my-4">
							<div class="col-md-12">
								<input type="hidden" name="profil_rs_id" value="{{$data ? $data->id : ''}}">
								<input type="hidden" id="input-latitude" name="latitude" value="{{$data ? $data->lat : ''}}">
								<input type="hidden" id="input-longitude" name="longitude" value="{{$data ? $data->lng : ''}}">
								<div id="map" style="width: auto; height: 400px; display:none;" data-lat="" data-lng=""></div>
							</div>
						</div>
						<div class="row g-4 mb-4">
							<div class="col-md-6">
								<div class="input-group">
									<span class="input-group-text" id="inputAlamat"><i class="fas fa-map-marker-alt fs-15"></i></span>
									<div class="form-floating mb-0">
										<input type="text" class="form-control" id="floatingAlamat" name="alamat" autocomplete="off" placeholder="Alamat" value="{{$data ? $data->alamat : ''}}">
										<label class="fs-10 d-md-flex align-items-center" for="floatingAlamat">Alamat</label>
									</div>
								</div>
							</div>

							<div class="col-md-6">
								<div class="input-group">
									<span class="input-group-text" id="inputTelepon"><i class="ti ti-phone fs-15"></i></span>
									<div class="form-floating mb-0">
										<input type="text" class="form-control" id="floatingTelepon" name="telepon" autocomplete="off" placeholder="Telepon" value="{{$data ? $data->telepon : ''}}">
										<label class="fs-10 d-md-flex align-items-center" for="floatingTelepon">Telepon</label>
									</div>
								</div>
							</div>

							<div class="col-lg-6">
								<div class="input-group">
									<span class="input-group-text" id="inputWhatsapp"><i class="bi bi-whatsapp fs-15"></i></span>
									<div class="form-floating mb-0">
										<input type="text" class="form-control" id="floatingWhatsapp" name="whatsapp" autocomplete="off" placeholder="Whatsapp" value="{{$data ? $data->whatsapp : ''}}">
										<label class="fs-10 d-md-flex align-items-center" for="floatingWhatsapp">Whatsapp Number</label>
									</div>
								</div>
							</div>

							<div class="col-md-6">
								<div class="input-group">
									<span class="input-group-text" id="inputEmail"><i class="ti ti-mail fs-15"></i></span>
									<div class="form-floating mb-0">
										<input type="email" class="form-control" id="floatingEmail" name="email" autocomplete="off" placeholder="Email" value="{{$data ? $data->email : ''}}">
										<label class="fs-10 d-md-flex align-items-center" for="floatingEmail">Email</label>
									</div>
								</div>
							</div>

							<div class="col-lg-6">
								<div class="input-group">
									<span class="input-group-text" id="inputTwitter"><i class="ti ti-brand-tiktok fs-15"></i></span>
									<div class="form-floating mb-0">
										<input type="text" class="form-control" id="floatingTiktok" name="tiktok" autocomplete="off" placeholder="Tiktok" value="{{$data ? $data->tiktok : ''}}">
										<label class="fs-10 d-md-flex align-items-center" for="floatingTiktok">Tiktok Url</label>
									</div>
								</div>
							</div>

							<div class="col-lg-6">
								<div class="input-group">
									<span class="input-group-text" id="inputTwitter"><i class="bi bi-twitter-x fs-15"></i></span>
									<div class="form-floating mb-0">
										<input type="text" class="form-control" id="floatingTwitter" name="twitter" autocomplete="off" placeholder="Twitter" value="{{$data ? $data->twitter : ''}}">
										<label class="fs-10 d-md-flex align-items-center" for="floatingTwitter">Twitter Url</label>
									</div>
								</div>
							</div>

							<div class="col-lg-6">
								<div class="input-group">
									<span class="input-group-text" id="inputFacebook"><i class="bi bi-facebook fs-15"></i></span>
									<div class="form-floating mb-0">
										<input type="text" class="form-control" id="floatingFacebook" name="facebook" autocomplete="off" placeholder="Facebook" value="{{$data ? $data->facebook : ''}}">
										<label class="fs-10 d-md-flex align-items-center" for="floatingFacebook">Facebook Url</label>
									</div>
								</div>
							</div>

							<div class="col-lg-6">
								<div class="input-group">
									<span class="input-group-text" id="inputInstagram"><i class="bi bi-instagram fs-15"></i></span>
									<div class="form-floating mb-0">
										<input type="text" class="form-control" id="floatingInstagram" name="instagram" autocomplete="off" placeholder="Instagram" value="{{$data ? $data->instagram : ''}}">
										<label class="fs-10 d-md-flex align-items-center" for="floatingInstagram">Instagram Url</label>
									</div>
								</div>
							</div>
						</div>

						<div class="mt-5 gap-4 text-right btn-right">
							<button type="button" class="btn btn-sm btn-success btn-loader btn-simpan">Simpan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection

@push('scripts')
	<script src="{{asset('landing-page/assets/leaflet/leaflet.js')}}"></script>
	<script src="{{asset('landing-page/assets/leaflet/leaflet-gesture-handling.min.js')}}"></script>
	<script src="https://cdn.jsdelivr.net/npm/leaflet-easybutton@2/src/easy-button.js"></script>

	@vite('resources/js/admin-page/master-data/profil-rs.js')
@endpush
