<header id="header" class="header sticky-top">

	<div class="topbar d-flex align-items-center">
		<div class="container d-flex justify-content-center justify-content-md-between">
			<div class="contact-info d-flex align-items-center">
				<i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
				<i class="bi bi-phone d-flex align-items-center ms-4"><span>+62 222 2233 3344</span></i>
			</div>
			<div class="social-links d-none d-md-flex align-items-center">
				<a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
				<a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
				<a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
				<a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
			</div>
		</div>
	</div><!-- End Top Bar -->

	<div class="branding d-flex align-items-center">

		<div class="container position-relative d-flex align-items-center justify-content-between">
			<a href="{{route('beranda.main')}}" class="logo d-flex align-items-center me-auto">
				<!-- Uncomment the line below if you also wish to use an image logo -->
				<img src="{{asset('images/rs/logo-transparan.png')}}" alt="" style="width: auto; height: 250px;">
				<h1 class="sitename">Dharma Husada</h1>
			</a>

			@php
				$prefix = strtolower(Request()->route()->getPrefix());
				$prefix = substr($prefix, 1, strlen($prefix) - 1);
			@endphp
			<nav id="navmenu" class="navmenu">
				<ul>
					<li><a href="{{route('beranda.main')}}" class="fs-4 fw-bold {{$prefix == '' ? 'active' : ''}}" data-name="{{$prefix}}"><span>Beranda</span></a></li>
					<li class="dropdown"><a href="javascript:void(0)" class="fs-4 fw-bold {{$prefix == 'profil' ? 'active' : ''}}" data-name="{{$prefix}}"><span>Profil</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
						<ul>
							<li><a href="{{route('profil.visiMisi')}}" class="fs-5">Visi dan Misi</a></li>
							<li><a href="{{route('profil.tugasPokok')}}" class="fs-5">Tugas Pokok dan Fungsi</a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="javascript:void(0)" class="fs-4 fw-bold {{$prefix == 'pelayanan' ? 'active' : ''}}" data-name="{{$prefix}}"><span>Pelayanan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
						<ul>
							<li><a href="javascript:void(0)" class="fs-5">Jadwal Poli Klinik</a></li>
						</ul>
					</li>
					<li class="dropdown"><a href="javascript:void(0)" class="fs-4 fw-bold {{$prefix == 'informasi' ? 'active' : ''}}" data-name="{{$prefix}}"><span>Informasi</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
						<ul>
							<li><a href="javascript:void(0)" class="fs-5">Berita</a></li>
							<li><a href="javascript:void(0)" class="fs-5">Pengumuman</a></li>
						</ul>
					</li>
					<li><a href="{{route('kontak.main')}}" class="fs-4 fw-bold {{$prefix == 'kontak' ? 'active' : ''}}" data-name="{{$prefix}}"><span>Kontak</span></a></li>
				</ul>
				<i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
			</nav>

			{{-- <a class="cta-btn d-none d-sm-block" href="#appointment">Make an Appointment</a> --}}

		</div>

	</div>

</header>
