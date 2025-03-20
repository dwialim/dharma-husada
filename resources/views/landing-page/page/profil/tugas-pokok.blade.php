@extends('landing-page.layout')

@push('styles')
	@vite(['resources/css/landing-page/profil.css'])
@endpush

@section('content')

	<section id="tugas-pokok" class="tugas-pokok section py-5">
		<div class="container">
			<div class="row gy-4 gx-5 align-items-stretch">
				<div class="col-md-12" data-aos="fade-up" data-aos-delay="200">
					<h2 class="text-center poppins-bold">TUGAS POKOK DAN FUNGSI</h2>
				</div>
			</div>
			<div class="row gy-4 gx-5 align-items-stretch my-5 content">
				<div class="col-md-12 poppins-medium fs-14" data-aos="fade-up" data-aos-delay="300">
					@if ($data)
						{!!$data->content!!}
					@endif
				</div>
			</div>
		</div>
	</section>

@endsection

@push('scripts')
@endpush
