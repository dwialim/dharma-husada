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
					<form id="form-tugas-fungsi" data-route-store="{{route('admin.tugasFungsi.store')}}">
						<input type="hidden" name="tugas_fungsi_id" value="{{$data ? $data->id : ''}}">
						<textarea name="content" id="classic-editor" rows="10" style="height: auto;" data-content="{{$data ? $data->content : ''}}">
							{{$data ? $data->content : ''}}
						</textarea>
					</form>
					<div class="mt-5 gap-4 text-right btn-right">
						<button type="button" class="btn btn-sm btn-success btn-simpan">Simpan</button>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@push('scripts')
	<script src="{{asset('admin-page/assets/js/plugins/ckeditor/classic/ckeditor.js')}}"></script>
	{{-- <script src="{{asset('admin-page/assets/js/plugins/ckeditor/document/ckeditor.js')}}"></script> --}}

	@vite('resources/js/admin-page/profil/tugas-fungsi.js')
@endpush
