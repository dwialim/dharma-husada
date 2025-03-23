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
				@if ($berita && count($berita))
					@foreach ($berita as $key => $item)
						<div class="col-md-4 p-3" data-aos="fade-up" data-aos-delay="200">
							<div class="card">
								<img src="{{asset('storage/' . $item->gambar)}}" class="card-img-top" alt="...">
								<div class="tag">
									<span>{{date('d', strtotime($item->created_at))}}</span>
									<span>{{substr(date('F', strtotime($item->created_at)), 0, 3)}}</span>
								</div>
								<div class="card-body poppins">
									<h3 class="card-title">{{$item->judul}}</h3>
									<div class="my-4 content" id="content-{{$item->id}}" data-id="{{$item->id}}">
										{!!$item->content!!}
									</div>
									{{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
									<a href="{{route('landing.informasi.berita.detail', ['id' => $item->id])}}" class="btn btn-primary">Baca Selengkapnya</a>
								</div>
							</div>
						</div>
					@endforeach
				@endif
				{{-- <div class="col-md-4 p-3" data-aos="fade-up" data-aos-delay="200">
					<div class="card">
						<img src="https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
						<div class="tag">
							<span>05</span>
							<span>Mar</span>
						</div>
						<div class="card-body poppins">
							<h3 class="card-title">Judul Berita</h3>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-primary">Baca Selengkapnya</a>
						</div>
					</div>
				</div>

				<div class="col-md-4 p-3" data-aos="fade-up" data-aos-delay="300">
					<div class="card">
						<img src="https://images.unsplash.com/photo-1550969026-f069940eedae?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
						<div class="tag">
							<span>05</span>
							<span>Mar</span>
						</div>
						<div class="card-body poppins">
							<h3 class="card-title">Judul Berita</h3>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-primary">Baca Selengkapnya</a>
						</div>
					</div>
				</div>

				<div class="col-md-4 p-3" data-aos="fade-up" data-aos-delay="400">
					<div class="card">
						<img src="https://plus.unsplash.com/premium_photo-1690297732659-9fbcd02a021f?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
						<div class="tag">
							<span>05</span>
							<span>Mar</span>
						</div>
						<div class="card-body poppins">
							<h3 class="card-title">Judul Berita</h3>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-primary">Baca Selengkapnya</a>
						</div>
					</div>
				</div>

				<div class="col-md-4 p-3" data-aos="fade-up" data-aos-delay="500">
					<div class="card">
						<img src="https://images.unsplash.com/photo-1438703025185-2954c4c6baee?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
						<div class="tag">
							<span>05</span>
							<span>Mar</span>
						</div>
						<div class="card-body poppins">
							<h3 class="card-title">Judul Berita</h3>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-primary">Baca Selengkapnya</a>
						</div>
					</div>
				</div>

				<div class="col-md-4 p-3" data-aos="fade-up" data-aos-delay="600">
					<div class="card">
						<img src="https://plus.unsplash.com/premium_photo-1673214880293-0e94d61548b5?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
						<div class="tag">
							<span>05</span>
							<span>Mar</span>
						</div>
						<div class="card-body poppins">
							<h3 class="card-title">Judul Berita</h3>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-primary">Baca Selengkapnya</a>
						</div>
					</div>
				</div>

				<div class="col-md-4 p-3" data-aos="fade-up" data-aos-delay="700">
					<div class="card">
						<img src="https://images.unsplash.com/photo-1509005170144-85e9af46b57d?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
						<div class="tag">
							<span>05</span>
							<span>Mar</span>
						</div>
						<div class="card-body poppins">
							<h3 class="card-title">Judul Berita</h3>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-primary">Baca Selengkapnya</a>
						</div>
					</div>
				</div> --}}
			</div>
		</div>
	</section>
@endsection

@push('scripts')
	{{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	@vite(['resources/js/landing-page/pelayanan.js']) --}}

	@vite(['resources/js/landing-page/informasi.js'])
@endpush
