<div class="col-sm-12">
	<div class="card">
		<div class="card-header">
			<h4>Form Dokter</h4>
		</div>
		<div class="card-body">
			<h5>Social Media</h5>
			<hr>
			<form id="form-dokter" data-route-store="{{route('admin.masterData.dokter.store')}}">
				<input type="hidden" name="dokter_id" id="dokter-id" value="{{$dokter ? $dokter->id : ''}}">
				<div class="row g-4 mb-4">
					<div class="col-lg-6">
						<div class="input-group">
							<span class="input-group-text" id="inputTwitter"><i class="bi bi-twitter-x fs-15"></i></span>
							<div class="form-floating mb-0">
								<input type="text" class="form-control" id="floatingTwitter" name="twitter" autocomplete="off" placeholder="Twitter" value="{{$dokter ? $dokter->twitter : ''}}">
								<label class="fs-10 d-md-flex align-items-center" for="floatingTwitter">Twitter Url</label>
							</div>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="input-group">
							<span class="input-group-text" id="inputFacebook"><i class="bi bi-facebook fs-15"></i></span>
							<div class="form-floating mb-0">
								<input type="text" class="form-control" id="floatingFacebook" name="facebook" autocomplete="off" placeholder="Facebook" value="{{$dokter ? $dokter->facebook : ''}}">
								<label class="fs-10 d-md-flex align-items-center" for="floatingFacebook">Facebook Url</label>
							</div>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="input-group">
							<span class="input-group-text" id="inputInstagram"><i class="bi bi-instagram fs-15"></i></span>
							<div class="form-floating mb-0">
								<input type="text" class="form-control" id="floatingInstagram" name="instagram" autocomplete="off" placeholder="Instagram" value="{{$dokter ? $dokter->instagram : ''}}">
								<label class="fs-10 d-md-flex align-items-center" for="floatingInstagram">Instagram Url</label>
							</div>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="input-group">
							<span class="input-group-text" id="inputLinkedIn"><i class="bi bi-linkedin fs-15"></i></span>
							<div class="form-floating mb-0">
								<input type="text" class="form-control" id="floatingLinkedIn" name="linkedin" autocomplete="off" placeholder="LinkedIn" value="{{$dokter ? $dokter->linkedin : ''}}">
								<label class="fs-10 d-md-flex align-items-center" for="floatingLinkedIn">LinkedIn Url</label>
							</div>
						</div>
					</div>
				</div>

				<h5>Profil</h5>
				<hr>
				<div class="row g-4 mb-4">
					<div class="col-lg-6">
						<div class="row mb-4">
							<div class="col-md-12">
								<div class="form-floating mb-0">
									<input type="text" class="form-control" id="floatingNama" name="nama" autocomplete="off" placeholder="Nama" value="{{$dokter ? $dokter->nama : ''}}">
									<label for="floatingNama">Nama Dokter</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="input-group">
									<input type="file" class="form-control custom-input-file" id="input-gambar" name="gambar" accept="image/ico, image/gif, image/jpeg, image/jpg, image/png, image/svg">
									<label class="input-group-text" for="input-gambar">Gambar</label>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="mx-5" id="container-pan">
							{{-- <a class="pan" id="btnOutPut" href="#"> --}}
								@php
									$checkImage = $dokter && $dokter->gambar && file_exists( public_path() .'/storage/'. $dokter->gambar);
								@endphp
								<img id="outPut"
									width="350px"
									height="auto"
									class="rounded mx-auto d-block responsive {{$checkImage ? 'img-thumbnail' : ''}}"
									@if($checkImage) src="{{asset('storage/'.$dokter->gambar)}}" @endif
								>
							{{-- </a> --}}
						</div>
					</div>
				</div>
			</form>

			<div class="d-md-flex justify-content-between mt-5">
				<button type="button" class="btn btn-sm btn-secondary btn-kembali">Kembali</button>
				<button type="button" class="btn btn-sm btn-success btn-simpan">Simpan</button>
			</div>
		</div>
	</div>
</div>