@extends('landing-page.layout')

@push('styles')
	{{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> --}}
	@vite(['resources/css/landing-page/informasi/app.css'])
@endpush

@section('content')
	<section id="berita" class="berita section">
		<div class="container no-select">
			<div class="row gap-4">
				<div class="col-md-12 d-md-flex justify-content-center align-items-center">
					<img src="{{asset('storage/' . $pengumuman->gambar)}}"
						height="auto"
						width="90%"
						alt=""
						class="rounded mx-auto d-block responsive img-thumbnail"
					>
				</div>

				<div class="content-detail gap-5">
					<div class="date fs-13 fw-bolder pointer">
						{{Formatter::dateIndo($pengumuman->created_at)}}
					</div>
					<span class="fs-40 fw-bolder courier-prime-bold">{{$pengumuman->judul}}</span>
					<div class="content-text fs-15">
						{!!$pengumuman->content!!}
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

@push('scripts')
	{{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	@vite(['resources/js/landing-page/pelayanan.js']) --}}

	@vite(['resources/js/landing-page/informasi.js'])
@endpush
