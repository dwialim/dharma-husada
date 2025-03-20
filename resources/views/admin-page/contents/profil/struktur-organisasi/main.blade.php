@extends('admin-page.layout')

@push('styles')
@endpush

@section('contents')
	@include('admin-page.components.breadcrumb')

	<div class="row" id="master-container">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-header">
					<div class="d-md-flex justify-content-end gap-4">
						<button type="button" class="btn btn-sm btn-outline-secondary btn-reset" style="display: none;">Reset</button>
						<button type="button" class="btn btn-sm btn-success btn-simpan">Simpan</button>
					</div>
				</div>
				<div class="card-body">
					<form id="form-struktur-organisasi" data-route-store="{{route('admin.strukturOrganisasi.store')}}">
						<input type="hidden" name="struktur_organisasi_id" id="struktur-organisasi-id" value="{{$data ? $data->id : ''}}">
						<div class="row g-4 mb-4">
							<div class="col-lg-12">
								<div class="input-group">
									<input type="file"
										class="form-control custom-input-file"
										id="input-gambar"
										name="gambar"
										accept="image/ico, image/gif, image/jpeg, image/jpg, image/png, image/svg+xml"
									>
									<label class="input-group-text" for="input-gambar">Gambar</label>
								</div>
							</div>

							<div class="col-lg-12">
								<div class="mx-1" id="container-pan">
									{{-- <a class="pan" id="btnOutPut" href="#"> --}}
										@php
											$checkImage = $data && $data->gambar && file_exists( public_path() .'/storage/'. $data->gambar);
										@endphp
										<img id="outPut"
											width="80%"
											height="auto"
											class="rounded mx-auto d-block responsive {{$checkImage ? 'img-thumbnail' : ''}}"
											@if($checkImage)
												data-src="{{asset('storage/'.$data->gambar)}}"
												src="{{asset('storage/'.$data->gambar)}}"
											@endif
										>
									{{-- </a> --}}
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection

@push('scripts')
	@vite('resources/js/admin-page/profil/struktur-organisasi.js')
@endpush
