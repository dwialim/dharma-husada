@extends('landing-page.layout')

@push('styles')
	@vite(['resources/css/landing-page/profil.css'])
@endpush

@section('content')

	<section id="visi-misi" class="visi-misi section py-5">
		<div class="container">
			<div class="row gy-4 gx-5 align-items-stretch">
				<div class="col-md-12" data-aos="fade-up" data-aos-delay="200">
					<h2 class="text-center poppins-bold">TUGAS POKOK DAN FUNGSI</h2>
				</div>
			</div>
			<div class="row gy-4 gx-5 align-items-stretch my-5 content">
				<div class="col-md-12 poppins-medium fs-14" data-aos="fade-up" data-aos-delay="300">
					<p>
						Tugas Pokok Rumah Sakit adalah menyelenggarakan pelayanan kesehatan yang efektif dan efisien dengan mengutamakan upaya penyembuhan dan pemulihan,
						serta melakukan upaya peningkatan kesehatan dan pencegahan penyakit secara terpadu, termasuk penyelenggaraan layanan rujukan.
					</p>
					<p>
						Dalam melaksanakan tugas pokok sebagaimana dimaksud, Rumah Sakit mempunyai fungsi:
					</p>
					<ol type="A">
						<li>Penyelenggaraan pelayanan medik</li>
						<li>Penyelenggaraan pelayanan penunjang medik dan nonmedik</li>
						<li>Penyelenggaraan pelayanan dan asuhan keperawatan</li>
						<li>Penyelenggaraan pelayanan rujukan</li>
						<li>Penyelenggaraan pendidikan dan pelatihan</li>
						<li>Penyelenggaraan penelitian dan pengembangan</li>
						<li>Penyelenggaraan administrasi dan keuangan</li>
					</ol>
				</div>
			</div>
		</div>
	</section>

@endsection

@push('scripts')
@endpush
