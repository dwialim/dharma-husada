{{-- https://w7.pngwing.com/pngs/856/491/png-transparent-organizational-chart-organizational-structure-information-technology-company-computer-maintenance-company-text-rectangle.png --}}

@extends('landing-page.layout')

@push('styles')
	{{-- @vite(['resources/css/landing-page/kontak.css']) --}}
@endpush

@section('content')
	<section id="struktur-organisasi" class="struktur-organisasi section">
		<div class="container" data-aos="fade-up" data-aos-delay="100">
			{{-- <div class="card p-5" style="box-shadow: 0px 0px 10px 0px #d8d8d8;" data-aos="fade-up" data-aos-delay="200"> --}}
				<div class="row gy-4">
					<div class="col-lg-12">
						<img src="{{asset('images/organization.svg')}}" alt="" width="100%">
						{{-- <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
							<i class="bi bi-geo-alt flex-shrink-0"></i>
							<div>
								<h3>Location</h3>
								<p>A108 Adam Street, New York, NY 535022</p>
							</div>
						</div> --}}
					</div>
				</div>
			{{-- </div> --}}
		</div>
	</section>
@endsection

@push('scripts')
	{{-- @vite(['resources/js/landing-page/kontak.js']) --}}
@endpush
