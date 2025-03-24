<footer id="footer" class="footer light-background" data-route-footer="{{route('landing.beranda.dataFooter')}}">

	<div class="container footer-top pb-3">
		<div class="row">
			<div class="col-lg-6 mx-auto fs-25 text-center courier-prime-bold" id="container-time">
				<span id="data-date"></span> <b id="data-time" class="gradient">{{ date('H:i:s') }}</b>
			</div>
		</div>
		<div class="row gy-4 poppins-semibold">
			{{-- <div class="col-lg-4 col-md-6 footer-about">
				<a href="{{route('landing.beranda.main')}}" class="logo d-flex align-items-center">
					<span class="sitename">Dharma Husada</span>
				</a>
				<div class="footer-contact pt-3">
					<p>Jalan Raya Ngoro No.192, Kec. Ngoro, Kabupaten Mojokerto</p>
					<p class="mt-3"><strong>Phone:</strong> <span>(0321) 6817833</span></p>
					<p><strong>Email:</strong> <span>info@example.com</span></p>
				</div>
				<div class="social-links d-flex mt-4">
					<a href=""><i class="bi bi-twitter-x"></i></a>
					<a href=""><i class="bi bi-facebook"></i></a>
					<a href=""><i class="bi bi-instagram"></i></a>
					<a href=""><i class="bi bi-linkedin"></i></a>
				</div>
			</div> --}}

			<div class="col-lg-4 col-md-3 d-flex flex-column align-items-center profile">
				<i class="fa-solid fa-house-medical top"></i>
				<div class="stats-item footer-links footer-about">
					<a href="{{route('landing.beranda.main')}}" class="logo d-flex align-items-center">
						<span class="sitename">Dharma Husada</span>
					</a>
					<div class="footer-contact pt-3">
						<p class="contact-alamat"></p>
						<p class="mt-3"><strong>Phone:</strong> <span class="contact-telepon"></span></p>
						<p><strong>Email:</strong> <span class="contact-email"></span></p>
						<p><strong>Pendaftaran:</strong> <span class="contact-pendaftaran"></span></p>
					</div>
					<div class="social-links d-flex mt-4">
						<a href="" class="sl-twitter"><i class="bi bi-twitter-x"></i></a>
						<a href="" class="sl-facebook"><i class="bi bi-facebook"></i></a>
						<a href="" class="sl-instagram"><i class="bi bi-instagram"></i></a>
						<a href="" class="sl-whatsapp"><i class="ri-whatsapp-line"></i></a>
						<a href="" class="sl-tiktok"><i class="ri-tiktok-fill"></i></a>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-3 d-flex flex-column align-items-center schedule">
				{{-- <i class="fas fa-flask"></i> --}}
				<i class="fa-solid fa-clock top"></i>
				<div class="stats-item footer-links">
					<span class="d-flex title">Waktu Operasional</span>
					{{-- <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span> --}}
					<div class="day"><span>Senin</span> <span class="waktu-senin"></span></div>
					<div class="day"><span>Selasa</span> <span class="waktu-selasa"></span></div>
					<div class="day"><span>Rabu</span> <span class="waktu-rabu"></span></div>
					<div class="day"><span>Kamis</span> <span class="waktu-kamis"></span></div>
					<div class="day"><span>Jumat</span> <span class="waktu-jumat"></span></div>
					<div class="day"><span>Sabtu</span> <span class="waktu-sabtu"></span></div>
					<div class="day"><span>Minggu</span> <span class="waktu-minggu"></span></div>
				</div>
			</div>

			<div class="col-lg-4 col-md-3 d-flex flex-column align-items-center statistik">
				<i class="fa-solid fa-chart-simple top"></i>
				<div class="stats-item footer-links">
					<span class="d-flex title">Statistik Pengunjung</span>
					<div class="day"><span>Hari ini</span> <span class="stats-hari"></span></div>
					<div class="day"><span>Bulan ini</span> <span class="stats-bulan"></span></div>
					<div class="day"><span>Total</span> <span class="stats-total"></span></div>
				</div>
			</div>
		</div>
	</div>

	{{-- <div class="container copyright text-center mt-4">
		<p>© <span>Copyright</span> <strong class="px-1 sitename">Medilab</strong> <span>All Rights Reserved</span></p>
		<div class="credits">
			<!-- All the links in the footer should remain intact. -->
			<!-- You can delete the links only if you've purchased the pro version. -->
			<!-- Licensing information: https://bootstrapmade.com/license/ -->
			<!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
			Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
		</div>
	</div> --}}

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>
