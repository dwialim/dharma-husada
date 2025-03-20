@extends('landing-page.layout')

@push('styles')
	@vite(['resources/css/landing-page/profil.css'])
@endpush

@section('content')

	<section id="visi-misi" class="visi-misi section py-5">
		<div class="container">
			<div class="row gy-4 gx-5 align-items-stretch">
				<div class="col-md-12" data-aos="fade-up" data-aos-delay="200">
					<h2 class="text-center poppins-bold">VISI DAN MISI RUMAH SAKIT DHARMA HUSADA</h2>
				</div>
			</div>
			<div class="row gy-4 gx-5 align-items-stretch my-5 content">
				@if ($data)
					<div class="col-md-6" data-aos="fade-right" data-aos-delay="300">
						<div class="row gy-5">
							<div class="col-md-12">
								<h4 class="poppins-semibold">VISI</h4>
								<span class="fs-14 poppins-semibold">{{$data->visi->content}}</span>
							</div>
							<div class="col-md-12 poppins-semibold" data-aos="fade-right" data-aos-delay="300">
								<h4 class="poppins-semibold">MOTTO</h4>
								<span class="fs-14">{{$data->motto->content}}</span>
							</div>
						</div>
					</div>
					<div class="col-md-6" data-aos="fade-left" data-aos-delay="300">
						<h4 class="poppins-semibold">MISI</h4>
						<ul class="fs-14 remove-style">
							@if (count($data->misi))
								@foreach ($data->misi as $item)
								<li><i class="ri-check-double-line"></i>{{$item->content}}</li>
								@endforeach
							@endif
						</ul>
					</div>
				@endif
			</div>
		</div>
	</section>

@endsection

@push('scripts')
@endpush
