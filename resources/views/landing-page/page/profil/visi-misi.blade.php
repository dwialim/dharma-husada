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
				<div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
					<h4 class="poppins-semibold">VISI</h4>
					<span class="fs-14 poppins-semibold">Menjadi Rumah Sakit Pilihan Masyarakat yang Berkualitas dan Terjangkau</span>
				</div>
				<div class="col-md-6">
					<h4 class="poppins-semibold">MISI</h4>
					<ul data-aos="fade-up" data-aos-delay="300">
						<li><i class="ri-check-double-line"></i> Menyelenggarakan pelayanan kesehatan yang professional.</li>
						<li><i class="ri-check-double-line"></i> Mewujudkan iklim kerja sesuai standar akreditasi dengan suasana kekeluargaan.</li>
						<li><i class="ri-check-double-line"></i> Meningkatkan kompetensi SDM sesuai bidangnya.</li>
					</ul>
				</div>
			</div>
			<div class="row gy-4 gx-5 align-items-stretch my-5 content">
				<div class="col-md-12 poppins-semibold" data-aos="fade-up" data-aos-delay="400">
					<h4 class="poppins-semibold">MOTTO</h4>
					<span class="fs-14">KESEMBUHAN DAN KEPUASAN ANDA ADALAH TUJUAN KAMI</span>
				</div>
			</div>
		</div>
	</section>

@endsection

@push('scripts')
@endpush
