@extends('landing-page.layout')

@push('styles')
	<link rel="stylesheet" href="{{asset('assets/owlcarousel/dist/assets/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/owlcarousel/dist/assets/owl.theme.default.min.css')}}">
	@vite(['resources/css/landing-page/beranda.css'])
@endpush

@section('content')
	<!-- Hero Section -->
	<section id="hero" class="section p-0 m-0">
		<div id="owl-demo" class="owl-carousel owl-theme py-3">
			<div class="item rounded responsive img-thumbnail">
				<img src="{{asset('images/rs/DSC0245333.jpg')}}" alt="">
			</div>
			<div class="item rounded responsive img-thumbnail">
				{{-- <img src="https://images.unsplash.com/photo-1566577134624-6f6cc4bb272b?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt=""> --}}
				{{-- <img src="https://images.unsplash.com/photo-1519819286236-0b3c6506e475?q=80&w=1926&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt=""> --}}
				<img src="{{asset('images/rs/slide-1.jpg')}}" alt="">
			</div>
			{{-- <div class="item rounded responsive img-thumbnail">
				<img src="https://images.unsplash.com/photo-1584824486516-0555a07fc511?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
			</div> --}}
		</div>
	</section><!-- /Hero Section -->

	<section id="sambutan" class="sambutan section">

		<div class="container">
			<div class="row gy-4 gx-5 align-items-stretch">
				{{-- <div class="col col-lg-4 position-relative align-self-start" data-aos="fade-up" data-aos-delay="300"> --}}
				{{-- <div class="col col-lg-4" data-aos="fade-up" data-aos-delay="300"> --}}
					{{-- <img src="{{asset('assets/img/about.jpg')}}" class="img-fluid" alt=""> --}}
					{{-- <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a> --}}
				{{-- </div>
				<div class="col col-lg-8 content" data-aos="fade-up" data-aos-delay="200"> --}}
					{{-- <h3>About Us</h3>
					<p>
						Dolor iure expedita id fuga asperiores qui sunt consequatur minima. Quidem voluptas deleniti. Sit quia molestiae quia quas qui magnam itaque veritatis dolores. Corrupti totam ut eius incidunt reiciendis veritatis asperiores placeat.
					</p>
					<ul>
						<li>
							<i class="fa-solid fa-vial-circle-check"></i>
							<div>
								<h5>Ullamco laboris nisi ut aliquip consequat</h5>
								<p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>
							</div>
						</li>
						<li>
							<i class="fa-solid fa-pump-medical"></i>
							<div>
								<h5>Magnam soluta odio exercitationem reprehenderi</h5>
								<p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata redi</p>
							</div>
						</li>
						<li>
							<i class="fa-solid fa-heart-circle-xmark"></i>
							<div>
								<h5>Voluptatem et qui exercitationem</h5>
								<p>Et velit et eos maiores est tempora et quos dolorem autem tempora incidunt maxime veniam</p>
							</div>
						</li>
					</ul> --}}
				{{-- </div> --}}
				<div class="col-md-12 text-justify">
					<div data-aos="fade-up" data-aos-delay="300">
						<img src="{{asset('assets/img/about.jpg')}}" class="img-sambutan" alt="">
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

	{{-- <section id="layanan" class="layanan section">

		<!-- Section Title -->
		<div class="container section-title" data-aos="fade-up">
			<h2>Layanan Rumah Sakit Dharma Husada</h2>
		</div><!-- End Section Title -->

		<div class="container" data-aos="fade-up" data-aos-delay="100">
			<div class="row">
				<div class="col-lg-3">
					<ul class="nav nav-tabs flex-column">
						<li class="nav-item">
							<a class="nav-link active show" data-bs-toggle="tab" href="#departments-tab-1">Cardiology</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" href="#departments-tab-2">Neurology</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" href="#departments-tab-3">Hepatology</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" href="#departments-tab-4">Pediatrics</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" href="#departments-tab-5">Eye Care</a>
						</li>
					</ul>
				</div>
				<div class="col-lg-9 mt-4 mt-lg-0">
					<div class="tab-content">
						<div class="tab-pane active show" id="departments-tab-1">
							<div class="row">
								<div class="col-lg-8 details order-2 order-lg-1">
									<h3>Cardiology</h3>
									<p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
									<p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
								</div>
								<div class="col-lg-4 text-center order-1 order-lg-2">
									<img src="{{asset('assets/img/departments-1.jpg')}}" alt="" class="img-fluid">
								</div>
							</div>
						</div>
						<div class="tab-pane" id="departments-tab-2">
							<div class="row">
								<div class="col-lg-8 details order-2 order-lg-1">
									<h3>Et blanditiis nemo veritatis excepturi</h3>
									<p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
									<p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
								</div>
								<div class="col-lg-4 text-center order-1 order-lg-2">
									<img src="{{asset('assets/img/departments-2.jpg')}}" alt="" class="img-fluid">
								</div>
							</div>
						</div>
						<div class="tab-pane" id="departments-tab-3">
							<div class="row">
								<div class="col-lg-8 details order-2 order-lg-1">
									<h3>Impedit facilis occaecati odio neque aperiam sit</h3>
									<p class="fst-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p>
									<p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae</p>
								</div>
								<div class="col-lg-4 text-center order-1 order-lg-2">
									<img src="{{asset('assets/img/departments-3.jpg')}}" alt="" class="img-fluid">
								</div>
							</div>
						</div>
						<div class="tab-pane" id="departments-tab-4">
							<div class="row">
								<div class="col-lg-8 details order-2 order-lg-1">
									<h3>Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore</h3>
									<p class="fst-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus</p>
									<p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p>
								</div>
								<div class="col-lg-4 text-center order-1 order-lg-2">
									<img src="{{asset('assets/img/departments-4.jpg')}}" alt="" class="img-fluid">
								</div>
							</div>
						</div>
						<div class="tab-pane" id="departments-tab-5">
							<div class="row">
								<div class="col-lg-8 details order-2 order-lg-1">
									<h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
									<p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
									<p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
								</div>
								<div class="col-lg-4 text-center order-1 order-lg-2">
									<img src="{{asset('assets/img/departments-5.jpg')}}" alt="" class="img-fluid">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> --}}

	<section id="doctors" class="doctors section">
		<div class="container section-title" data-aos="fade-up">
			<h2>Dokter</h2>
		</div>

		<div class="container">
			<div class="row gy-4">
				@foreach ($dokter as $key => $item)
					<div class="col-lg-6" data-aos="fade-up" data-aos-delay="{{$loop->index + 1}}00">
						<div class="team-member d-flex align-items-start">
							<div class="pic"><img src="{{asset('images/dokter/' . $item)}}" class="img-fluid" alt=""></div>
							<div class="member-info">
								<h4>Nama Dokter</h4>
								<span>Praktek</span>
								<p>Jadwal</p>
								<div class="social">
									<a href=""><i class="bi bi-twitter-x"></i></a>
									<a href=""><i class="bi bi-facebook"></i></a>
									<a href=""><i class="bi bi-instagram"></i></a>
									<a href=""> <i class="bi bi-linkedin"></i> </a>
								</div>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</section>


	<!-- About Section -->
	{{-- <section id="about" class="about section light-background">

		<div class="container">

			<div class="row gy-4 gx-5">

				<div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="200">
					<img src="{{asset('assets/img/about.jpg')}}" class="img-fluid" alt="">
					<a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
				</div>

				<div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
					<h3>About Us</h3>
					<p>
						Dolor iure expedita id fuga asperiores qui sunt consequatur minima. Quidem voluptas deleniti. Sit quia molestiae quia quas qui magnam itaque veritatis dolores. Corrupti totam ut eius incidunt reiciendis veritatis asperiores placeat.
					</p>
					<ul>
						<li>
							<i class="fa-solid fa-vial-circle-check"></i>
							<div>
								<h5>Ullamco laboris nisi ut aliquip consequat</h5>
								<p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>
							</div>
						</li>
						<li>
							<i class="fa-solid fa-pump-medical"></i>
							<div>
								<h5>Magnam soluta odio exercitationem reprehenderi</h5>
								<p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata redi</p>
							</div>
						</li>
						<li>
							<i class="fa-solid fa-heart-circle-xmark"></i>
							<div>
								<h5>Voluptatem et qui exercitationem</h5>
								<p>Et velit et eos maiores est tempora et quos dolorem autem tempora incidunt maxime veniam</p>
							</div>
						</li>
					</ul>
				</div>

			</div>

		</div>

	</section><!-- /About Section --> --}}



	<!-- Stats Section -->
	{{-- <section id="stats" class="stats section light-background">

		<div class="container" data-aos="fade-up" data-aos-delay="100">

			<div class="row gy-4">

				<div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
					<i class="fa-solid fa-user-doctor"></i>
					<div class="stats-item">
						<span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>
						<p>Doctors</p>
					</div>
				</div><!-- End Stats Item -->

				<div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
					<i class="fa-regular fa-hospital"></i>
					<div class="stats-item">
						<span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1" class="purecounter"></span>
						<p>Departments</p>
					</div>
				</div><!-- End Stats Item -->

				<div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
					<i class="fas fa-flask"></i>
					<div class="stats-item">
						<span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
						<p>Research Labs</p>
					</div>
				</div><!-- End Stats Item -->

				<div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
					<i class="fas fa-award"></i>
					<div class="stats-item">
						<span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
						<p>Awards</p>
					</div>
				</div><!-- End Stats Item -->

			</div>

		</div>

	</section><!-- /Stats Section --> --}}

	<!-- Services Section -->
	{{-- <section id="services" class="services section">

		<!-- Section Title -->
		<div class="container section-title" data-aos="fade-up">
			<h2>Services</h2>
			<p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
		</div><!-- End Section Title -->

		<div class="container">

			<div class="row gy-4">

				<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
					<div class="service-item  position-relative">
						<div class="icon">
							<i class="fas fa-heartbeat"></i>
						</div>
						<a href="#" class="stretched-link">
							<h3>Nesciunt Mete</h3>
						</a>
						<p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
					</div>
				</div><!-- End Service Item -->

				<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
					<div class="service-item position-relative">
						<div class="icon">
							<i class="fas fa-pills"></i>
						</div>
						<a href="#" class="stretched-link">
							<h3>Eosle Commodi</h3>
						</a>
						<p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
					</div>
				</div><!-- End Service Item -->

				<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
					<div class="service-item position-relative">
						<div class="icon">
							<i class="fas fa-hospital-user"></i>
						</div>
						<a href="#" class="stretched-link">
							<h3>Ledo Markt</h3>
						</a>
						<p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
					</div>
				</div><!-- End Service Item -->

				<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
					<div class="service-item position-relative">
						<div class="icon">
							<i class="fas fa-dna"></i>
						</div>
						<a href="#" class="stretched-link">
							<h3>Asperiores Commodit</h3>
						</a>
						<p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
						<a href="#" class="stretched-link"></a>
					</div>
				</div><!-- End Service Item -->

				<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
					<div class="service-item position-relative">
						<div class="icon">
							<i class="fas fa-wheelchair"></i>
						</div>
						<a href="#" class="stretched-link">
							<h3>Velit Doloremque</h3>
						</a>
						<p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
						<a href="#" class="stretched-link"></a>
					</div>
				</div><!-- End Service Item -->

				<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
					<div class="service-item position-relative">
						<div class="icon">
							<i class="fas fa-notes-medical"></i>
						</div>
						<a href="#" class="stretched-link">
							<h3>Dolori Architecto</h3>
						</a>
						<p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
						<a href="#" class="stretched-link"></a>
					</div>
				</div><!-- End Service Item -->

			</div>

		</div>

	</section><!-- /Services Section --> --}}

	<!-- Appointment Section -->
	{{-- <section id="appointment" class="appointment section">

		<!-- Section Title -->
		<div class="container section-title" data-aos="fade-up">
			<h2>Appointment</h2>
			<p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
		</div><!-- End Section Title -->

		<div class="container" data-aos="fade-up" data-aos-delay="100">

			<form action="forms/appointment.php" method="post" role="form" class="php-email-form">
				<div class="row">
					<div class="col-md-4 form-group">
						<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
					</div>
					<div class="col-md-4 form-group mt-3 mt-md-0">
						<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
					</div>
					<div class="col-md-4 form-group mt-3 mt-md-0">
						<input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" required="">
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 form-group mt-3">
						<input type="datetime-local" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" required="">
					</div>
					<div class="col-md-4 form-group mt-3">
						<select name="department" id="department" class="form-select" required="">
							<option value="">Select Department</option>
							<option value="Department 1">Department 1</option>
							<option value="Department 2">Department 2</option>
							<option value="Department 3">Department 3</option>
						</select>
					</div>
					<div class="col-md-4 form-group mt-3">
						<select name="doctor" id="doctor" class="form-select" required="">
							<option value="">Select Doctor</option>
							<option value="Doctor 1">Doctor 1</option>
							<option value="Doctor 2">Doctor 2</option>
							<option value="Doctor 3">Doctor 3</option>
						</select>
					</div>
				</div>

				<div class="form-group mt-3">
					<textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
				</div>
				<div class="mt-3">
					<div class="loading">Loading</div>
					<div class="error-message"></div>
					<div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
					<div class="text-center"><button type="submit">Make an Appointment</button></div>
				</div>
			</form>

		</div>

	</section><!-- /Appointment Section --> --}}

	<!-- Departments Section -->
	{{-- <section id="departments" class="departments section">

		<!-- Section Title -->
		<div class="container section-title" data-aos="fade-up">
			<h2>Departments</h2>
			<p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
		</div><!-- End Section Title -->

		<div class="container" data-aos="fade-up" data-aos-delay="100">

			<div class="row">
				<div class="col-lg-3">
					<ul class="nav nav-tabs flex-column">
						<li class="nav-item">
							<a class="nav-link active show" data-bs-toggle="tab" href="#departments-tab-1">Cardiology</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" href="#departments-tab-2">Neurology</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" href="#departments-tab-3">Hepatology</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" href="#departments-tab-4">Pediatrics</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" href="#departments-tab-5">Eye Care</a>
						</li>
					</ul>
				</div>
				<div class="col-lg-9 mt-4 mt-lg-0">
					<div class="tab-content">
						<div class="tab-pane active show" id="departments-tab-1">
							<div class="row">
								<div class="col-lg-8 details order-2 order-lg-1">
									<h3>Cardiology</h3>
									<p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
									<p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
								</div>
								<div class="col-lg-4 text-center order-1 order-lg-2">
									<img src="{{asset('assets/img/departments-1.jpg')}}" alt="" class="img-fluid">
								</div>
							</div>
						</div>
						<div class="tab-pane" id="departments-tab-2">
							<div class="row">
								<div class="col-lg-8 details order-2 order-lg-1">
									<h3>Et blanditiis nemo veritatis excepturi</h3>
									<p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
									<p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
								</div>
								<div class="col-lg-4 text-center order-1 order-lg-2">
									<img src="{{asset('assets/img/departments-2.jpg')}}" alt="" class="img-fluid">
								</div>
							</div>
						</div>
						<div class="tab-pane" id="departments-tab-3">
							<div class="row">
								<div class="col-lg-8 details order-2 order-lg-1">
									<h3>Impedit facilis occaecati odio neque aperiam sit</h3>
									<p class="fst-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p>
									<p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae</p>
								</div>
								<div class="col-lg-4 text-center order-1 order-lg-2">
									<img src="{{asset('assets/img/departments-3.jpg')}}" alt="" class="img-fluid">
								</div>
							</div>
						</div>
						<div class="tab-pane" id="departments-tab-4">
							<div class="row">
								<div class="col-lg-8 details order-2 order-lg-1">
									<h3>Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore</h3>
									<p class="fst-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus</p>
									<p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p>
								</div>
								<div class="col-lg-4 text-center order-1 order-lg-2">
									<img src="{{asset('assets/img/departments-4.jpg')}}" alt="" class="img-fluid">
								</div>
							</div>
						</div>
						<div class="tab-pane" id="departments-tab-5">
							<div class="row">
								<div class="col-lg-8 details order-2 order-lg-1">
									<h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
									<p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
									<p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
								</div>
								<div class="col-lg-4 text-center order-1 order-lg-2">
									<img src="{{asset('assets/img/departments-5.jpg')}}" alt="" class="img-fluid">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

	</section><!-- /Departments Section --> --}}

	<!-- Doctors Section -->
	{{-- <section id="doctors" class="doctors section">

		<!-- Section Title -->
		<div class="container section-title" data-aos="fade-up">
			<h2>Doctors</h2>
			<p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
		</div><!-- End Section Title -->

		<div class="container">

			<div class="row gy-4">

				<div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
					<div class="team-member d-flex align-items-start">
						<div class="pic"><img src="{{asset('assets/img/doctors/doctors-1.jpg')}}" class="img-fluid" alt=""></div>
						<div class="member-info">
							<h4>Walter White</h4>
							<span>Chief Medical Officer</span>
							<p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
							<div class="social">
								<a href=""><i class="bi bi-twitter-x"></i></a>
								<a href=""><i class="bi bi-facebook"></i></a>
								<a href=""><i class="bi bi-instagram"></i></a>
								<a href=""> <i class="bi bi-linkedin"></i> </a>
							</div>
						</div>
					</div>
				</div><!-- End Team Member -->

				<div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
					<div class="team-member d-flex align-items-start">
						<div class="pic"><img src="{{asset('assets/img/doctors/doctors-2.jpg')}}" class="img-fluid" alt=""></div>
						<div class="member-info">
							<h4>Sarah Jhonson</h4>
							<span>Anesthesiologist</span>
							<p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
							<div class="social">
								<a href=""><i class="bi bi-twitter-x"></i></a>
								<a href=""><i class="bi bi-facebook"></i></a>
								<a href=""><i class="bi bi-instagram"></i></a>
								<a href=""> <i class="bi bi-linkedin"></i> </a>
							</div>
						</div>
					</div>
				</div><!-- End Team Member -->

				<div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
					<div class="team-member d-flex align-items-start">
						<div class="pic"><img src="{{asset('assets/img/doctors/doctors-3.jpg')}}" class="img-fluid" alt=""></div>
						<div class="member-info">
							<h4>William Anderson</h4>
							<span>Cardiology</span>
							<p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
							<div class="social">
								<a href=""><i class="bi bi-twitter-x"></i></a>
								<a href=""><i class="bi bi-facebook"></i></a>
								<a href=""><i class="bi bi-instagram"></i></a>
								<a href=""> <i class="bi bi-linkedin"></i> </a>
							</div>
						</div>
					</div>
				</div><!-- End Team Member -->

				<div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
					<div class="team-member d-flex align-items-start">
						<div class="pic"><img src="{{asset('assets/img/doctors/doctors-4.jpg')}}" class="img-fluid" alt=""></div>
						<div class="member-info">
							<h4>Amanda Jepson</h4>
							<span>Neurosurgeon</span>
							<p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
							<div class="social">
								<a href=""><i class="bi bi-twitter-x"></i></a>
								<a href=""><i class="bi bi-facebook"></i></a>
								<a href=""><i class="bi bi-instagram"></i></a>
								<a href=""> <i class="bi bi-linkedin"></i> </a>
							</div>
						</div>
					</div>
				</div><!-- End Team Member -->

			</div>

		</div>

	</section><!-- /Doctors Section --> --}}

	<!-- Faq Section -->
	{{-- <section id="faq" class="faq section light-background">

		<!-- Section Title -->
		<div class="container section-title" data-aos="fade-up">
			<h2>Frequently Asked Questions</h2>
			<p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
		</div><!-- End Section Title -->

		<div class="container">

			<div class="row justify-content-center">

				<div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

					<div class="faq-container">

						<div class="faq-item faq-active">
							<h3>Non consectetur a erat nam at lectus urna duis?</h3>
							<div class="faq-content">
								<p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
							</div>
							<i class="faq-toggle bi bi-chevron-right"></i>
						</div><!-- End Faq item-->

						<div class="faq-item">
							<h3>Feugiat scelerisque varius morbi enim nunc faucibus?</h3>
							<div class="faq-content">
								<p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
							</div>
							<i class="faq-toggle bi bi-chevron-right"></i>
						</div><!-- End Faq item-->

						<div class="faq-item">
							<h3>Dolor sit amet consectetur adipiscing elit pellentesque?</h3>
							<div class="faq-content">
								<p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
							</div>
							<i class="faq-toggle bi bi-chevron-right"></i>
						</div><!-- End Faq item-->

						<div class="faq-item">
							<h3>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h3>
							<div class="faq-content">
								<p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
							</div>
							<i class="faq-toggle bi bi-chevron-right"></i>
						</div><!-- End Faq item-->

						<div class="faq-item">
							<h3>Tempus quam pellentesque nec nam aliquam sem et tortor?</h3>
							<div class="faq-content">
								<p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in</p>
							</div>
							<i class="faq-toggle bi bi-chevron-right"></i>
						</div><!-- End Faq item-->

						<div class="faq-item">
							<h3>Perspiciatis quod quo quos nulla quo illum ullam?</h3>
							<div class="faq-content">
								<p>Enim ea facilis quaerat voluptas quidem et dolorem. Quis et consequatur non sed in suscipit sequi. Distinctio ipsam dolore et.</p>
							</div>
							<i class="faq-toggle bi bi-chevron-right"></i>
						</div><!-- End Faq item-->

					</div>

				</div><!-- End Faq Column-->

			</div>

		</div>

	</section><!-- /Faq Section --> --}}

	<!-- Testimonials Section -->
	{{-- <section id="testimonials" class="testimonials section">

		<div class="container">

			<div class="row align-items-center">

				<div class="col-lg-5 info" data-aos="fade-up" data-aos-delay="100">
					<h3>Testimonials</h3>
					<p>
						Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
						velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
					</p>
				</div>

				<div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">

					<div class="swiper init-swiper">
						<script type="application/json" class="swiper-config">
							{
							"loop": true,
							"speed": 600,
							"autoplay": {
							"delay": 5000
							},
							"slidesPerView": "auto",
							"pagination": {
							"el": ".swiper-pagination",
							"type": "bullets",
							"clickable": true
							}
							}
						</script>
						<div class="swiper-wrapper">

							<div class="swiper-slide">
								<div class="testimonial-item">
									<div class="d-flex">
										<img src="{{asset('assets/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img flex-shrink-0" alt="">
										<div>
											<h3>Saul Goodman</h3>
											<h4>Ceo &amp; Founder</h4>
											<div class="stars">
												<i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
											</div>
										</div>
									</div>
									<p>
										<i class="bi bi-quote quote-icon-left"></i>
										<span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
										<i class="bi bi-quote quote-icon-right"></i>
									</p>
								</div>
							</div><!-- End testimonial item -->

							<div class="swiper-slide">
								<div class="testimonial-item">
									<div class="d-flex">
										<img src="{{asset('assets/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img flex-shrink-0" alt="">
										<div>
											<h3>Sara Wilsson</h3>
											<h4>Designer</h4>
											<div class="stars">
												<i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
											</div>
										</div>
									</div>
									<p>
										<i class="bi bi-quote quote-icon-left"></i>
										<span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
										<i class="bi bi-quote quote-icon-right"></i>
									</p>
								</div>
							</div><!-- End testimonial item -->

							<div class="swiper-slide">
								<div class="testimonial-item">
									<div class="d-flex">
										<img src="{{asset('assets/img/testimonials/testimonials-3.jpg')}}" class="testimonial-img flex-shrink-0" alt="">
										<div>
											<h3>Jena Karlis</h3>
											<h4>Store Owner</h4>
											<div class="stars">
												<i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
											</div>
										</div>
									</div>
									<p>
										<i class="bi bi-quote quote-icon-left"></i>
										<span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
										<i class="bi bi-quote quote-icon-right"></i>
									</p>
								</div>
							</div><!-- End testimonial item -->

							<div class="swiper-slide">
								<div class="testimonial-item">
									<div class="d-flex">
										<img src="{{asset('assets/img/testimonials/testimonials-4.jpg')}}" class="testimonial-img flex-shrink-0" alt="">
										<div>
											<h3>Matt Brandon</h3>
											<h4>Freelancer</h4>
											<div class="stars">
												<i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
											</div>
										</div>
									</div>
									<p>
										<i class="bi bi-quote quote-icon-left"></i>
										<span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
										<i class="bi bi-quote quote-icon-right"></i>
									</p>
								</div>
							</div><!-- End testimonial item -->

							<div class="swiper-slide">
								<div class="testimonial-item">
									<div class="d-flex">
										<img src="{{asset('assets/img/testimonials/testimonials-5.jpg')}}" class="testimonial-img flex-shrink-0" alt="">
										<div>
											<h3>John Larson</h3>
											<h4>Entrepreneur</h4>
											<div class="stars">
												<i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
											</div>
										</div>
									</div>
									<p>
										<i class="bi bi-quote quote-icon-left"></i>
										<span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
										<i class="bi bi-quote quote-icon-right"></i>
									</p>
								</div>
							</div><!-- End testimonial item -->

						</div>
						<div class="swiper-pagination"></div>
					</div>

				</div>

			</div>

		</div>

	</section><!-- /Testimonials Section --> --}}

	<!-- Gallery Section -->
	{{-- <section id="gallery" class="gallery section">

		<!-- Section Title -->
		<div class="container section-title" data-aos="fade-up">
			<h2>Gallery</h2>
			<p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
		</div><!-- End Section Title -->

		<div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

			<div class="row g-0">

				<div class="col-lg-3 col-md-4">
					<div class="gallery-item">
						<a href="{{asset('assets/img/gallery/gallery-1.jpg')}}" class="glightbox" data-gallery="images-gallery">
							<img src="{{asset('assets/img/gallery/gallery-1.jpg')}}" alt="" class="img-fluid">
						</a>
					</div>
				</div><!-- End Gallery Item -->

				<div class="col-lg-3 col-md-4">
					<div class="gallery-item">
						<a href="{{asset('assets/img/gallery/gallery-2.jpg')}}" class="glightbox" data-gallery="images-gallery">
							<img src="{{asset('assets/img/gallery/gallery-2.jpg')}}" alt="" class="img-fluid">
						</a>
					</div>
				</div><!-- End Gallery Item -->

				<div class="col-lg-3 col-md-4">
					<div class="gallery-item">
						<a href="{{asset('assets/img/gallery/gallery-3.jpg')}}" class="glightbox" data-gallery="images-gallery">
							<img src="{{asset('assets/img/gallery/gallery-3.jpg')}}" alt="" class="img-fluid">
						</a>
					</div>
				</div><!-- End Gallery Item -->

				<div class="col-lg-3 col-md-4">
					<div class="gallery-item">
						<a href="{{asset('assets/img/gallery/gallery-4.jpg')}}" class="glightbox" data-gallery="images-gallery">
							<img src="{{asset('assets/img/gallery/gallery-4.jpg')}}" alt="" class="img-fluid">
						</a>
					</div>
				</div><!-- End Gallery Item -->

				<div class="col-lg-3 col-md-4">
					<div class="gallery-item">
						<a href="{{asset('assets/img/gallery/gallery-5.jpg')}}" class="glightbox" data-gallery="images-gallery">
							<img src="{{asset('assets/img/gallery/gallery-5.jpg')}}" alt="" class="img-fluid">
						</a>
					</div>
				</div><!-- End Gallery Item -->

				<div class="col-lg-3 col-md-4">
					<div class="gallery-item">
						<a href="{{asset('assets/img/gallery/gallery-6.jpg')}}" class="glightbox" data-gallery="images-gallery">
							<img src="{{asset('assets/img/gallery/gallery-6.jpg')}}" alt="" class="img-fluid">
						</a>
					</div>
				</div><!-- End Gallery Item -->

				<div class="col-lg-3 col-md-4">
					<div class="gallery-item">
						<a href="{{asset('assets/img/gallery/gallery-7.jpg')}}" class="glightbox" data-gallery="images-gallery">
							<img src="{{asset('assets/img/gallery/gallery-7.jpg')}}" alt="" class="img-fluid">
						</a>
					</div>
				</div><!-- End Gallery Item -->

				<div class="col-lg-3 col-md-4">
					<div class="gallery-item">
						<a href="{{asset('assets/img/gallery/gallery-8.jpg')}}" class="glightbox" data-gallery="images-gallery">
							<img src="{{asset('assets/img/gallery/gallery-8.jpg')}}" alt="" class="img-fluid">
						</a>
					</div>
				</div><!-- End Gallery Item -->

			</div>

		</div>

	</section><!-- /Gallery Section --> --}}
@endsection

@push('scripts')
	<script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
	<script src="{{asset('assets/owlcarousel/dist/owl.carousel.min.js')}}"></script>

	<script>
		$(document).ready(function(){
			$("#owl-demo").owlCarousel({
				// items: 1,
				nav: false,
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
			})
		})
	</script>
@endpush
