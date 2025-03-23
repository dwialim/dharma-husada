<nav class="pc-sidebar">
	<div class="navbar-wrapper">
		<div class="m-header">
			<a href="{{route('admin.dashboard.main')}}" class="b-brand text-primary">
				{{-- <!-- ========   Change your logo from here   ============ --> <img src="{{asset('admin-page/assets/images/logo-dark.svg')}}" class="img-fluid logo-lg" alt="logo"> --}}
				<!-- ========   Change your logo from here   ============ --> <img src="{{asset('images/rs/logo-transparan.png')}}" width="50" height="auto" class="img-fluid logo-lg" alt="logo">
			</a>
			<span class="ms-3 fs-20">Dharma Husada</span>
		</div>
		<div class="navbar-content no-select">
			<ul class="pc-navbar">
				<!-- Dashboard -->
				<li class="pc-item">
					<a href="{{route('admin.dashboard.main')}}" class="pc-link">
						<span class="pc-micon">
							<svg class="pc-icon">
								<use xlink:href="#dashboard"></use>
							</svg>
						</span>
						<span class="pc-mtext" data-i18n="Statistics">Dashboard</span>
					</a>
				</li>
				<!-- Dashboard end -->

				<!-- Master data -->
				<li class="pc-item pc-caption">
					<label data-i18n="Master Data">Master Data</label>
				</li>

				<li class="pc-item pc-hasmenu">
					<a class="pc-link pointer">
						<span class="pc-micon">
							<svg class="pc-icon">
								<use xlink:href="#database"></use>
							</svg>
						</span>
						<span class="pc-mtext" data-i18n="Master Data">Master Data</span> <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
					</a>
					<ul class="pc-submenu">
						<li class="pc-item"><a class="pc-link" href="{{route('admin.masterData.dokter.main')}}" data-i18n="Dokter">Dokter</a></li>
						<li class="pc-item"><a class="pc-link" href="{{route('admin.masterData.poliKlinik.main')}}" data-i18n="Poli Klinik">Poli Klinik</a></li>
					</ul>
				</li>

				<li class="pc-item">
					<a href="{{route('admin.profilRS.main')}}" class="pc-link">
						<span class="pc-micon">
							<svg class="pc-icon">
								<use xlink:href="#user"></use>
							</svg>
						</span>
						<span class="pc-mtext" data-i18n="Profil RS">Profil RS</span>
					</a>
				</li>
				<!-- Master data end -->

				<!-- Profil -->
				<li class="pc-item pc-caption">
					<label data-i18n="Profil">Profil</label>
				</li>

				<li class="pc-item">
					<a href="{{route('admin.strukturOrganisasi.main')}}" class="pc-link">
						<span class="pc-micon">
							<svg class="pc-icon">
								<use xlink:href="#cluster"></use>
							</svg>
						</span>
						<span class="pc-mtext" data-i18n="Struktur Organisasi">Struktur Organisasi</span>
					</a>
				</li>

				<li class="pc-item">
					<a href="{{route('admin.tugasFungsi.main')}}" class="pc-link">
						<span class="pc-micon">
							<svg class="pc-icon">
								<use xlink:href="#tool"></use>
							</svg>
						</span>
						<span class="pc-mtext" data-i18n="Tugas Fungsi">Tugas Fungsi</span>
					</a>
				</li>

				<li class="pc-item">
					<a href="{{route('admin.visiMisi.main')}}" class="pc-link">
						<span class="pc-micon">
							<svg class="pc-icon">
								<use xlink:href="#unordered-list"></use>
							</svg>
						</span>
						<span class="pc-mtext" data-i18n="Visi Misi">Visi Misi</span>
					</a>
				</li>
				<!-- Profil end -->

				<!-- Pelayanan -->
				<li class="pc-item pc-caption">
					<label data-i18n="Pelayanan">Pelayanan</label>
				</li>

				<li class="pc-item">
					<a href="{{route('admin.jadwal.main')}}" class="pc-link">
						<span class="pc-micon">
							<svg class="pc-icon">
								<use xlink:href="#schedule"></use>
							</svg>
						</span>
						<span class="pc-mtext" data-i18n="Jadwal Dokter Klinik">Jadwal Dokter Klinik</span>
					</a>
				</li>
				<!-- Pelayanan end -->

				<!-- Informasi -->
				<li class="pc-item pc-caption">
					<label data-i18n="Informasi">Informasi</label>
				</li>

				<li class="pc-item">
					<a href="{{route('admin.manajemenInformasi.main')}}" class="pc-link">
						<span class="pc-micon">
							<svg class="pc-icon">
								<use xlink:href="#snippets"></use>
							</svg>
						</span>
						<span class="pc-mtext" data-i18n="Manajemen Informasi">Manajemen Informasi</span>
					</a>
				</li>
				<!-- Informasi end -->

				<!-- Other -->
				<li class="pc-item pc-caption">
					<label data-i18n="Other">Other</label>
				</li>

				<li class="pc-item">
					<a href="{{route('admin.sambutanPimpinan.main')}}" class="pc-link">
						<span class="pc-micon">
							<svg class="pc-icon">
								<use xlink:href="#file-protect"></use>
							</svg>
						</span>
						<span class="pc-mtext" data-i18n="Sambutan Pimpinan">Sambutan Pimpinan</span>
					</a>
				</li>

				<li class="pc-item">
					<a href="{{route('admin.slider.main')}}" class="pc-link">
						<span class="pc-micon">
							<svg class="pc-icon">
								<use xlink:href="#file-image"></use>
							</svg>
						</span>
						<span class="pc-mtext" data-i18n="Slider">Slider</span>
					</a>
				</li>

				<li class="pc-item">
					<a href="{{route('admin.waktuOperasional.main')}}" class="pc-link">
						<span class="pc-micon">
							<svg class="pc-icon">
								<use xlink:href="#field-time"></use>
							</svg>
						</span>
						<span class="pc-mtext" data-i18n="Waktu Operasional RS">Waktu Operasional RS</span>
					</a>
				</li>
				<!-- Other end -->
			</ul>
			{{-- <div class="card text-center">
				<div class="card-body">
					<img src="{{asset('admin-page/assets/images/img-navbar-card.png')}}" alt="images" class="img-fluid mb-2">
					<h5>Help?</h5>
					<p>Get to resolve query</p>
					<button class="btn btn-success">Support</button>
				</div>
			</div> --}}
		</div>
	</div>
</nav>
