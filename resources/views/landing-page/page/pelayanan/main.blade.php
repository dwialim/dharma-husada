@extends('landing-page.layout')

@push('styles')
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	@vite(['resources/css/landing-page/pelayanan.css'])
@endpush

@section('content')
	<section id="jadwal-poli-klinik" class="jadwal-poli-klinik section">
		{{-- <div class="container section-title" data-aos="fade-up">
			<h2>Dokter</h2>
		</div> --}}

		<div class="container-jadwal-poli-klinik mx-auto">
			<div class="row gy-4">
				<div class="col-lg-12">
					{{-- <div id="border" style="border-radius: 6px 6px 0px 0px; width: 97.5%; margin: auto;" class="border border-3 border-primary"></div> --}}
					<div class="card p-3">
						<div class="row p-4">
							<div class="col-md-5 p-2">
								<label for="input-hari" class="form-label">Hari <span class="text-primary">*Optional</span></label>
								<select class="select2-single form-control" id="input-hari" name="input_hari">
									<option selected value="">Semua Hari</option>
									<option value="1">Senin</option>
									<option value="2">Selasa</option>
									<option value="3">Rabu</option>
									<option value="4">Kamis</option>
									<option value="5">Jumat</option>
									<option value="6">Sabtu</option>
									<option value="7">Minggu</option>
								</select>
							</div>
							<div class="col-md-5 p-2">
								<label for="input-poli" class="form-label">Spesialis / Klinik <span class="text-primary">*Optional</span></label>
								<select class="select2-single form-control" id="input-poli" name="input_poli" style="width: 100%;">
									<option selected value="">Semua Spesialis / Klinik</option>
									@if (count($poliKlinik))
										@foreach ($poliKlinik as $item)
										<option value="{{$item->id}}">{{$item->nama}}</option>
										@endforeach
									@endif
								</select>
							</div>
							<div class="col-md-2 p-2 container-button-search">
								{{-- <button class="buttonload btn-search"><i class="fa fa-spinner fa-pulse loader hide"></i>Loading</button> --}}
								{{-- <button type="button" class="btn btn-primary btn-search">Cari</button> --}}

								{{-- <button class="action-btn loading" id="btn-cari">Login</button> --}}
								<button class="btn btn-primary fw-bolder btn-loader"
									id="btn-cari"
									data-route-jadwal="{{route('landing.pelayanan.jadwalDokter')}}"
								>
									Cari
								</button>
							</div>
						</div>

						<div id="data-jadwal"></div>
						<!-- Search form -->
						{{-- <div class="row">
							<div class="col-md-12 container-input-search" id="container-input-search">
								<center>Berikut adalah Jadwal Rutin, <span class="text-danger">Jadwal bisa berubah sewaktu-waktu</span></center>
								<div class="px-4 py-3 text-center">
									<div><h3><i>Cari Dokter / Klinik disini :</i></h3></div>
									<input type="text" class="form-control" id="cari-jadwal" placeholder="Cari disini..." autocomplete="off">
								</div>
							</div>
						</div><!-- End search form -->

						@foreach ($jadwal as $key => $item)
							<div class="row">
								<div class="col-md-12">
									<div class="title v-find courier-prime-bold rounded"><span class="text-center fs-20">{{$item->nama}}</span></div>
									@foreach ($item->jadwal as $keys => $items)
									@php
										$waktu = array_reduce(json_decode(json_encode($items->detail), true), function ($carry, $item) {
											$carry[$item['hari_num']][] = $item;
											return $carry;
										}, []);
									@endphp
									<div class="row v-find container-data-dokter" data-filter="{{strtolower($item->nama)}} | {{strtolower($items->dokter->nama)}}">
										<div class="col-md-3">
											<div class="pic mx-auto"><img src="{{asset('storage/' . $items->dokter->gambar)}}" class="img-fluid" alt=""></div>
										</div>
										<div class="col-md-9 p-5">
											<h4 class="courier-prime-bold">{{$items->dokter->nama}}</h4>
											<h5 class="poli-klinik-name mb-4">{{$item->nama}}</h5>
											<div class="table-responsive">
												<table class="table table-striped table-bordered text-center table-data-dokter no-wrap">
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
														@for ($i = 1; $i <= 7; $i++)
															<td>{{isset($waktu[$i]) ? $waktu[$i][0]['waktu_awal'] . ' - ' . $waktu[$i][0]['waktu_akhir'] : '-'}}</td>
														@endfor
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									@endforeach
								</div>
							</div>
						@endforeach --}}
						<!-- Display dokter & klinik -->
						{{-- <div class="row">
							<div class="col-md-12">
								<div class="title v-find courier-prime-bold rounded"><span class="text-center fs-20">Fisioterapi</span></div>
								<div class="row v-find container-data-dokter" data-filter="fisioterapi | dr sandra">
									<div class="col-md-3">
										<div class="pic mx-auto"><img src="{{asset('images/dokter/dr Krisna.jpg')}}" class="img-fluid" alt=""></div>
									</div>
									<div class="col-md-9 p-5">
										<h4 class="courier-prime-bold">Dr Sandra</h4>
										<h5 class="poli-klinik-name mb-4">Fisioterapi</h5>
										<div class="table-responsive">
											<table class="table table-striped table-bordered text-center table-data-dokter no-wrap">
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
									</div>
								</div>
								<div class="row v-find container-data-dokter" data-filter="fisioterapi | dr sandra">
									<div class="col-md-3">
										<div class="pic mx-auto"><img src="{{asset('images/dokter/dr Krisna.jpg')}}" class="img-fluid" alt=""></div>
									</div>
									<div class="col-md-9 p-5">
										<h4 class="courier-prime-bold">Dr Sandra</h4>
										<h5 class="poli-klinik-name mb-4">Fisioterapi</h5>
										<div class="table-responsive">
											<table class="table table-striped table-bordered text-center table-data-dokter no-wrap">
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
									</div>
								</div>
								<div class="row v-find container-data-dokter" data-filter="fisioterapi | dr sandra">
									<div class="col-md-3">
										<div class="pic mx-auto"><img src="{{asset('images/dokter/dr Krisna.jpg')}}" class="img-fluid" alt=""></div>
									</div>
									<div class="col-md-9 p-5">
										<h4 class="courier-prime-bold">Dr Sandra</h4>
										<h5 class="poli-klinik-name mb-4">Fisioterapi</h5>
										<div class="table-responsive">
											<table class="table table-striped table-bordered text-center table-data-dokter no-wrap">
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
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<div class="title v-find courier-prime-bold rounded"><span class="text-center fs-20">Anastesi</span></div>
								<div class="row v-find container-data-dokter" data-filter="anastesi | dr alex">
									<div class="col-md-3">
										<div class="pic mx-auto"><img src="{{asset('images/dokter/dr Krisna.jpg')}}" class="img-fluid" alt=""></div>
									</div>
									<div class="col-md-9 p-5">
										<h4>Dr Alex</h4>
										<h5 class="poli-klinik-name mb-4">Anastesi</h5>
										<div class="table-responsive">
											<table class="table table-striped table-bordered text-center table-data-dokter no-wrap">
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
									</div>
								</div>
								<div class="row v-find container-data-dokter" data-filter="anastesi | dr alex">
									<div class="col-md-3">
										<div class="pic mx-auto"><img src="{{asset('images/dokter/dr Krisna.jpg')}}" class="img-fluid" alt=""></div>
									</div>
									<div class="col-md-9 p-5">
										<h4>Dr Alex</h4>
										<h5 class="poli-klinik-name mb-4">Anastesi</h5>
										<div class="table-responsive">
											<table class="table table-striped table-bordered text-center table-data-dokter no-wrap">
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
									</div>
								</div>
							</div>
						</div> --}}
						<!-- End display dokter & klinik -->
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

@push('scripts')
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	@vite(['resources/js/landing-page/pelayanan.js'])
@endpush
