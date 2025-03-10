@extends('landing-page.layout')

@push('styles')
	<link rel="stylesheet" href="{{asset('landing-page/assets/owlcarousel/dist/assets/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('landing-page/assets/owlcarousel/dist/assets/owl.theme.default.min.css')}}">
	@vite(['resources/css/landing-page/beranda.css'])
@endpush

@section('content')
	<!-- Hero Section -->
	<section id="hero" class="dark-background section p-0 m-0 no-select">
		{{-- <div id="owl-demo" class="owl-carousel owl-theme py-3">
			<div class="item rounded responsive img-thumbnail">
				<img src="{{asset('images/rs/slide-1.jpg')}}" alt="">
			</div>
			<div class="item rounded responsive img-thumbnail">
				<img src="{{asset('images/rs/DSC0245333.jpg')}}" alt="">
			</div>
		</div> --}}
		<div id="owl-demo" class="owl-carousel owl-theme">
			<div class="item responsive">
				<div class="text-overlay">
					<div class="text-content fade-in-down">
						<h1 class="marcellus-bold">Text 1</h1>
						<p class="marcellus-regular">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
					</div>
				</div>
				<img src="{{asset('images/rs/slide-1.jpg')}}" alt="">
			</div>
			<div class="item responsive">
				<div class="text-overlay">
					<div class="text-content">
						<h1 class="marcellus-bold">Text 2</h1>
						<p class="marcellus-regular">Some text bla bla bla</p>
					</div>
				</div>
				<img src="{{asset('images/rs/DSC0245333.jpg')}}" alt="">
			</div>
		</div>
	</section><!-- /Hero Section -->

	<section id="sambutan" class="sambutan section poppins">

		<div class="container">
			<div class="row gy-4 gx-5 align-items-stretch">
				<div class="col-md-12 text-justify">
					<div data-aos="fade-up" data-aos-delay="300">
						<img src="{{asset('landing-page/assets/img/about.jpg')}}" class="img-sambutan" alt="">
					</div>
					<div data-aos="fade-up" data-aos-delay="200">
						<h1 class="widget-title">Sambutan Pimpinan Rumah Sakit</h1>
						<p class="fs-15">Selamat datang di Rumah Sakit <strong>[Nama Rumah Sakit]</strong>,</p>

						<p>Kami mengucapkan terima kasih atas kunjungan Anda di situs resmi kami. Sebagai Kepala Rumah Sakit <strong>[Nama Rumah Sakit]</strong>, saya merasa terhormat untuk menyampaikan sambutan ini kepada Anda.</p>

						<p>Di Rumah Sakit <strong>[Nama Rumah Sakit]</strong>, kami berkomitmen untuk memberikan pelayanan kesehatan yang berkualitas tinggi dan berorientasi pada pasien. Dengan dukungan tim medis yang profesional dan berpengalaman, kami berusaha untuk memenuhi kebutuhan kesehatan masyarakat dengan sepenuh hati. Kami percaya bahwa setiap pasien berhak mendapatkan perawatan yang terbaik, dan kami berkomitmen untuk menciptakan lingkungan yang aman, nyaman, dan mendukung proses penyembuhan.</p>

						<p>Kami memahami bahwa kesehatan adalah aspek yang sangat penting dalam kehidupan setiap individu. Oleh karena itu, kami terus berinovasi dan meningkatkan layanan kami, baik dalam hal fasilitas, teknologi, maupun sumber daya manusia. Kami juga aktif menjalin kerjasama dengan berbagai institusi dan organisasi untuk memperluas jangkauan layanan kami dan meningkatkan kualitas perawatan yang kami tawarkan.</p>

						<p>Kami berkomitmen untuk mendengarkan dan memahami kebutuhan pasien serta keluarga mereka. Umpan balik dari Anda sangat berharga bagi kami dalam upaya untuk terus meningkatkan kualitas layanan. Kami percaya bahwa kolaborasi antara pasien, keluarga, dan tim medis adalah kunci untuk mencapai hasil kesehatan yang optimal.</p>

						<p>Kami mengajak Anda untuk menjelajahi situs web kami, di mana Anda akan menemukan informasi lebih lanjut tentang layanan yang kami tawarkan, fasilitas yang kami miliki, serta berbagai program kesehatan yang kami jalankan. Kami berharap dapat menjadi mitra Anda dalam menjaga dan meningkatkan kesehatan Anda dan keluarga.</p>

						<p>Terima kasih atas kepercayaan Anda kepada Rumah Sakit <strong>[Nama Rumah Sakit]</strong>. Mari bersama-sama kita wujudkan kesehatan yang lebih baik untuk masyarakat.</p>

						<h2>Hormat kami,</h2>
						<p>
							<strong>[Nama Pimpinan]</strong><br>
							Kepala Rumah Sakit <strong>[Nama Rumah Sakit]</strong>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<hr class="mx-auto container" width="86%">

	<section id="doctors" class="doctors section poppins">
		<div class="container section-title" data-aos="fade-up">
			<h2>Dokter</h2>
		</div>

		<div class="container">
			<div class="row gy-4">
				@foreach ($dokter as $key => $item)
					<div class="col-lg-6" data-aos="fade-up" data-aos-delay="{{$loop->index + 1}}00">
						<div class="team-member
						{{-- d-flex --}}
						align-items-start">
							<div class="row">
								<div class="col-md-4">
									<div class="pic mx-auto"><img src="{{asset('images/dokter/' . $item)}}" class="img-fluid" alt=""></div>
								</div>
								<div class="col-md-8">
									<div class="member-info">
										<h4>Nama Dokter</h4>
										<span>Poli Klinik</span>
										<div class="table-responsive">
											<table class="table table-bordered table-default table-striped text-center table-data-dokter no-wrap">
												<thead>
													<tr>
														<th>Senin</th>
														<th>Selasa</th>
														<th>Rabu</th>
														<th>Kamis</th>
														<th>Jumat</th>
														<th>Sabtu</th>
														<th>Minggu</th>
													</tr>
												</thead>
												<tbody>
													<tr>
													  <td>08:00 - 15:00</td>
													  <td>08:00 - 15:00</td>
													  <td>-</td>
													  <td>08:00 - 15:00</td>
													  <td>-</td>
													  <td>08:00 - 15:00</td>
													  <td>08:00 - 15:00</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="social">
											<a href=""><i class="bi bi-twitter-x"></i></a>
											<a href=""><i class="bi bi-facebook"></i></a>
											<a href=""><i class="bi bi-instagram"></i></a>
											<a href=""> <i class="bi bi-linkedin"></i> </a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</section>
@endsection

@push('scripts')
	<script src="{{asset('landing-page/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
	<script src="{{asset('landing-page/assets/owlcarousel/dist/owl.carousel.min.js')}}"></script>

	<script>
		$(document).ready(function(){
			var owl = $("#owl-demo")
			owl.owlCarousel({
				// items: 1,
				dots: true,
				loop: true,
				autoplay: true,
				// autoplay: false,
				autoplayTimeout: 6000,
				smartSpeed: 500,
				responsive: {
					0: {
						items: 1
					},
				},
				autoHeight: true,
				touchDrag  : false,
				mouseDrag  : false,
				nav: true,
				navText : ["<i class='fa fa-chevron-left fs-30'></i>", "<i class='fa fa-chevron-right fs-30'></i>"],
				navClass: ['owl-prev', 'owl-next'],
			})

			owl.on('changed.owl.carousel', function(event) {
				var item = event.item.index - 2 // Position of the current item

				$(".owl-item").find(".text-content").removeClass('fade-in-down')
				$(".owl-item").not(".cloned").eq(item).find('.text-content').addClass('fade-in-down')

				// $('h1').removeClass('animated bounce');
				// $('.owl-item').not('.cloned').eq(item).find('h1').addClass('animated bounce');
			})
		})
	</script>
@endpush
