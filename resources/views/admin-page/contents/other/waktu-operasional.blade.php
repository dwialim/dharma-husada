@extends('admin-page.layout')

@push('styles')
	@vite('resources/css/admin-page/waktu-operasional.css')
@endpush

@section('contents')
	@include('admin-page.components.breadcrumb')

	<div class="row">
		<div class="col-md-12">
			<div class="card profile-wave-card">
				<img src="{{asset('admin-page/assets/images/profile/img-profile-top.svg')}}" alt="images" class="img-fluid profille-wave-img wave-top">
				<img src="{{asset('admin-page/assets/images/profile/img-profile-bottom.svg')}}" alt="images" class="img-fluid profille-wave-img wave-bottom">
				<div class="card-body">
					<form id="form-waktu-operasional" data-route-store="{{route('admin.waktuOperasional.store')}}">
						<div class="row mb-3">
							<div class="mb-3 col-xl-4 col-md-6 col-sm-12 p-3">
								<label class="form-label" for="inputEmail4">Senin</label>
								<div class="input-group">
									<input type="hidden" name="senin_id" value="{{count($data) && isset($data['1']) ? $data['1']['id'] : ''}}">
									<input type="time" class="form-control text-left" name="senin[]" value="{{count($data) && isset($data['1']) ? $data['1']['waktu_awal'] : ''}}">
									<span class="input-group-text">s/d</span>
									<input type="time" class="form-control text-end" name="senin[]" value="{{count($data) && isset($data['1']) ? $data['1']['waktu_akhir'] : ''}}">
								</div>
							</div>

							<div class="mb-3 col-xl-4 col-md-6 col-sm-12 p-3">
								<label class="form-label" for="inputEmail4">Selasa</label>
								<div class="input-group">
									<input type="hidden" name="selasa_id" value="{{count($data) && isset($data['2']) ? $data['2']['id'] : ''}}">
									<input type="time" class="form-control text-left" name="selasa[]" value="{{count($data) && isset($data['2']) ? $data['2']['waktu_awal'] : ''}}">
									<span class="input-group-text">s/d</span>
									<input type="time" class="form-control text-end" name="selasa[]" value="{{count($data) && isset($data['2']) ? $data['2']['waktu_akhir'] : ''}}">
								</div>
							</div>

							<div class="mb-3 col-xl-4 col-md-6 col-sm-12 p-3">
								<label class="form-label" for="inputEmail4">Rabu</label>
								<div class="input-group">
									<input type="hidden" name="rabu_id" value="{{count($data) && isset($data['3']) ? $data['3']['id'] : ''}}">
									<input type="time" class="form-control text-left" name="rabu[]" value="{{count($data) && isset($data['3']) ? $data['3']['waktu_awal'] : ''}}">
									<span class="input-group-text">s/d</span>
									<input type="time" class="form-control text-end" name="rabu[]" value="{{count($data) && isset($data['3']) ? $data['3']['waktu_akhir'] : ''}}">
								</div>
							</div>

							<div class="mb-3 col-xl-4 col-md-6 col-sm-12 p-3">
								<label class="form-label" for="inputEmail4">Kamis</label>
								<div class="input-group">
									<input type="hidden" name="kamis_id" value="{{count($data) && isset($data['4']) ? $data['4']['id'] : ''}}">
									<input type="time" class="form-control text-left" name="kamis[]" value="{{count($data) && isset($data['4']) ? $data['4']['waktu_awal'] : ''}}">
									<span class="input-group-text">s/d</span>
									<input type="time" class="form-control text-end" name="kamis[]" value="{{count($data) && isset($data['4']) ? $data['4']['waktu_akhir'] : ''}}">
								</div>
							</div>

							<div class="mb-3 col-xl-4 col-md-6 col-sm-12 p-3">
								<label class="form-label" for="inputEmail4">Jumat</label>
								<div class="input-group">
									<input type="hidden" name="jumat_id" value="{{count($data) && isset($data['5']) ? $data['5']['id'] : ''}}">
									<input type="time" class="form-control text-left" name="jumat[]" value="{{count($data) && isset($data['5']) ? $data['5']['waktu_awal'] : ''}}">
									<span class="input-group-text">s/d</span>
									<input type="time" class="form-control text-end" name="jumat[]" value="{{count($data) && isset($data['5']) ? $data['5']['waktu_akhir'] : ''}}">
								</div>
							</div>

							<div class="mb-3 col-xl-4 col-md-6 col-sm-12 p-3">
								<label class="form-label" for="inputEmail4">Sabtu</label>
								<div class="input-group">
									<input type="hidden" name="sabtu_id" value="{{count($data) && isset($data['6']) ? $data['6']['id'] : ''}}">
									<input type="time" class="form-control text-left" name="sabtu[]" value="{{count($data) && isset($data['6']) ? $data['6']['waktu_awal'] : ''}}">
									<span class="input-group-text">s/d</span>
									<input type="time" class="form-control text-end" name="sabtu[]" value="{{count($data) && isset($data['6']) ? $data['6']['waktu_akhir'] : ''}}">
								</div>
							</div>

							<div class="mb-3 col-xl-4 col-md-6 col-sm-12 p-3">
								<label class="form-label" for="inputEmail4">Minggu</label>
								<div class="input-group">
									<input type="hidden" name="minggu_id" value="{{count($data) && isset($data['7']) ? $data['7']['id'] : ''}}">
									<input type="time" class="form-control text-left" name="minggu[]" value="{{count($data) && isset($data['7']) ? $data['7']['waktu_awal'] : ''}}">
									<span class="input-group-text">s/d</span>
									<input type="time" class="form-control text-end" name="minggu[]" value="{{count($data) && isset($data['7']) ? $data['7']['waktu_akhir'] : ''}}">
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
	@vite('resources/js/admin-page/waktu-operasional.js')
@endpush
