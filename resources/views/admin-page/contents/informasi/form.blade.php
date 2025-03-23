<div class="col-sm-12">
	<div class="card">
		<div class="card-header">
			<h4>Form Manajemen Informasi</h4>
		</div>
		<div class="card-body">
			<form id="form-manajemen-informasi" data-route-store="{{route('admin.manajemenInformasi.store')}}">
				<input type="hidden" name="manajemen_informasi_id" id="manajemen-informasi-id" value="{{$manajemenInformasi ? $manajemenInformasi->id : ''}}">
				<div class="row g-4 mb-4">
					<div class="col-lg-12">
						<textarea name="content" id="classic-editor" rows="20" style="height: 100px;" data-content="{{$manajemenInformasi ? $manajemenInformasi->content : ''}}">
							{{$manajemenInformasi ? $manajemenInformasi->content : ''}}
						</textarea>
					</div>
				</div>

				<div class="row g-4 mb-4">
					<div class="col-lg-6">
						<div class="row mb-4">
							<div class="col-md-12">
								<div class="form-floating mb-0">
									<input type="text" class="form-control" id="floatingJudul" name="judul" autocomplete="off" placeholder="Judul" value="{{$manajemenInformasi ? $manajemenInformasi->judul : ''}}">
									<label for="floatingJudul">Judul</label>
								</div>
							</div>
						</div>
						<div class="row mb-4">
							<div class="col-md-12">
								<select class="form-select" aria-label="Select kategori" id="kategori" name="kategori">
									<option selected value="">-- PILIH KATEGORI --</option>
									<option value="berita" {{$manajemenInformasi && $manajemenInformasi->kategori =='berita' ? 'selected' : ''}}>berita</option>
									<option value="pengumuman" {{$manajemenInformasi && $manajemenInformasi->kategori =='pengumuman' ? 'selected' : ''}}>pengumuman</option>
								</select>
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
									$checkImage = $manajemenInformasi && $manajemenInformasi->gambar && file_exists( public_path() .'/storage/'. $manajemenInformasi->gambar);
								@endphp
								<img id="outPut"
									width="350px"
									height="auto"
									class="rounded mx-auto d-block responsive {{$checkImage ? 'img-thumbnail' : ''}}"
									@if($checkImage) src="{{asset('storage/'.$manajemenInformasi->gambar)}}" @endif
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