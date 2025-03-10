@extends('landing-page.layout')

@push('styles')
	{{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> --}}
	@vite(['resources/css/landing-page/informasi/app.css'])
@endpush

@section('content')
	<section id="berita" class="berita section">
		{{-- <div class="container section-title" data-aos="fade-up">
			<h2>Dokter</h2>
		</div> --}}

		<div class="container no-select">
			<div class="row">
				<div class="col-md-4 p-3" data-aos="fade-up" data-aos-delay="200">
					<div class="card">
						<img src="https://images.unsplash.com/photo-1562979314-bee7453e911c?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
						<div class="tag">
							<span>05</span>
							<span>Mar</span>
						</div>
						<div class="card-body poppins">
							<h3 class="card-title">Judul Pengumuman</h3>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-primary">Baca Selengkapnya</a>
						</div>
					</div>
				</div>

				<div class="col-md-4 p-3" data-aos="fade-up" data-aos-delay="300">
					<div class="card">
						<img src="https://plus.unsplash.com/premium_photo-1681586126003-2a6d4ba943a2?q=80&w=2012&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
						<div class="tag">
							<span>05</span>
							<span>Mar</span>
						</div>
						<div class="card-body poppins">
							<h3 class="card-title">Judul Pengumuman</h3>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-primary">Baca Selengkapnya</a>
						</div>
					</div>
				</div>

				<div class="col-md-4 p-3" data-aos="fade-up" data-aos-delay="400">
					<div class="card">
						<img src="https://images.unsplash.com/photo-1609342432142-53128e7090e9?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
						<div class="tag">
							<span>05</span>
							<span>Mar</span>
						</div>
						<div class="card-body poppins">
							<h3 class="card-title">Judul Pengumuman</h3>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-primary">Baca Selengkapnya</a>
						</div>
					</div>
				</div>

				<div class="col-md-4 p-3" data-aos="fade-up" data-aos-delay="500">
					<div class="card">
						<img src="https://images.unsplash.com/photo-1575395467458-06c557dafe99?q=80&w=2072&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
						<div class="tag">
							<span>05</span>
							<span>Mar</span>
						</div>
						<div class="card-body poppins">
							<h3 class="card-title">Judul Pengumuman</h3>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-primary">Baca Selengkapnya</a>
						</div>
					</div>
				</div>

				<div class="col-md-4 p-3" data-aos="fade-up" data-aos-delay="600">
					<div class="card">
						<img src="https://images.unsplash.com/photo-1582892206642-e7860764fa96?q=80&w=2127&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
						<div class="tag">
							<span>05</span>
							<span>Mar</span>
						</div>
						<div class="card-body poppins">
							<h3 class="card-title">Judul Pengumuman</h3>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-primary">Baca Selengkapnya</a>
						</div>
					</div>
				</div>

				<div class="col-md-4 p-3" data-aos="fade-up" data-aos-delay="700">
					<div class="card">
						<img src="https://images.unsplash.com/photo-1552901968-625d78cd875e?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
						<div class="tag">
							<span>05</span>
							<span>Mar</span>
						</div>
						<div class="card-body poppins">
							<h3 class="card-title">Judul Pengumuman</h3>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-primary">Baca Selengkapnya</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

@push('scripts')
	{{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	@vite(['resources/js/landing-page/pelayanan.js']) --}}
@endpush
