@extends('admin-page.layout')

@push('styles')
@endpush

@section('contents')
	@include('admin-page.components.breadcrumb')

	<div class="row">
		<div class="col-md-12">
			<div class="card profile-wave-card">
				<img src="{{asset('admin-page/assets/images/profile/img-profile-top.svg')}}" alt="images" class="img-fluid profille-wave-img wave-top">
				<img src="{{asset('admin-page/assets/images/profile/img-profile-bottom.svg')}}" alt="images" class="img-fluid profille-wave-img wave-bottom">
				<div class="card-body">
					<form id="form-sambutan-pimpinan" data-route-store="{{route('admin.sambutanPimpinan.store')}}">
						<div class="row">
							<div class="col-lg-12 py-4">
								<input type="hidden" name="sambutan_pimpinan_id" value="{{$data ? $data->id : ''}}">
								<textarea name="content" id="classic-editor" rows="10" style="height: auto;" data-content="{{$data ? $data->content : ''}}">
									{{$data ? $data->content : ''}}
								</textarea>
							</div>

							<div class="col-lg-12 py-4">
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

							<div class="col-lg-12 py-4">
								<div class="mx-1" id="container-pan">
									@php
										$checkImage = $data && $data->gambar && file_exists( public_path() .'/storage/'. $data->gambar);
									@endphp
									<img id="outPut"
										width="40%"
										height="auto"
										class="rounded mx-auto d-block responsive {{$checkImage ? 'img-thumbnail' : ''}}"
										@if($checkImage)
											data-src="{{asset('storage/'.$data->gambar)}}"
											src="{{asset('storage/'.$data->gambar)}}"
										@endif
									>
								</div>
							</div>
						</div>
					</form>
					<div class="mt-5 gap-4 text-right btn-right">
						<button type="button" class="btn btn-success btn-loader btn-simpan">Simpan</button>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@push('scripts')
	<script src="{{asset('admin-page/assets/js/plugins/ckeditor/classic/ckeditor.js')}}"></script>
	{{-- <script src="{{asset('admin-page/assets/js/plugins/ckeditor/document/ckeditor.js')}}"></script> --}}

	@vite('resources/js/admin-page/sambutan-pimpinan.js')
@endpush
