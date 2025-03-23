<div class="col-sm-12">
	<div class="card">
		<div class="card-header">
			<h4>Form slider</h4>
		</div>
		<div class="card-body">
			<form id="form-slider" data-route-store="{{route('admin.slider.store')}}">
				<input type="hidden" name="slider_id" id="slider-id" value="{{$slider ? $slider->id : ''}}">
				<div class="row g-4 mb-4">
					<div class="col-lg-6">
						<div class="form-floating mb-0">
							<input type="text" class="form-control" id="floatingJudul" name="judul" autocomplete="off" placeholder="Judul" value="{{$slider ? $slider->judul : ''}}">
							<label class="fs-10 d-md-flex align-items-center" for="floatingJudul">Judul</label>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="form-floating mb-0">
							<textarea type="text" class="form-control" id="floatingContent" name="content" autocomplete="off" placeholder="Content">{{$slider ? $slider->content : ''}}</textarea>
							<label class="fs-10 d-md-flex align-items-center" for="floatingContent">Content</label>
						</div>
					</div>
				</div>

				<hr>

				<div class="row g-4 mb-4">
					<div class="col-lg-6">
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
									$checkImage = $slider && $slider->gambar && file_exists( public_path() .'/storage/'. $slider->gambar);
								@endphp
								<img id="outPut"
									width="350px"
									height="auto"
									class="rounded mx-auto d-block responsive {{$checkImage ? 'img-thumbnail' : ''}}"
									@if($checkImage) src="{{asset('storage/'.$slider->gambar)}}" @endif
								>
							{{-- </a> --}}
						</div>
					</div>
				</div>
			</form>

			<div class="d-md-flex justify-content-between mt-5">
				<button type="button" class="btn btn-sm btn-secondary btn-kembali">Kembali</button>
				<button type="button" class="btn btn-sm btn-success btn-loader btn-simpan">Simpan</button>
			</div>
		</div>
	</div>
</div>