<div class="col-sm-12">
	<div class="card">
		<div class="card-header">
			<h4>Form Jadwal Dokter Klinik</h4>
		</div>
		<div class="card-body">
			<form id="form-jadwal-dokter-klinik" data-route-store="{{route('admin.jadwal.store')}}">
				<input type="hidden" name="jadwal_dokter_klinik_id" id="jadwal-dokter-klinik-id" value="{{$jadwalDokterKlinik ? $jadwalDokterKlinik->id : ''}}">
				<div class="row g-4 mb-4">
					<div class="col-lg-6">
						<div class="mb-3">
							<label class="form-label" for="dokter">Dokter</label>
							<select class="form-select single-select" aria-label="Select dokter" id="dokter" name="dokter">
								<option selected value="">-- PILIH OPSI --</option>
								@if (count($dokter))
									@foreach ($dokter as $item)
									<option value="{{$item->id}}"
										{{$jadwalDokterKlinik && $jadwalDokterKlinik->dokter_id == $item->id ? 'selected' : ''}}
									>
										{{$item->nama}}
									</option>
									@endforeach
								@endif
							</select>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="mb-3">
							<label class="form-label" for="poli-klinik">Poli Klinik</label>
							<select class="form-select single-select" aria-label="Select poli klinik" id="poli-klinik" name="poli_klinik">
								<option selected value="">-- PILIH OPSI --</option>
								@if (count($poliKlinik))
									@foreach ($poliKlinik as $item)
									<option value="{{$item->id}}"
										{{$jadwalDokterKlinik && $jadwalDokterKlinik->poli_klinik_id == $item->id ? 'selected' : ''}}
									>
										{{$item->nama}}
									</option>
									@endforeach
								@endif
							</select>
						</div>
					</div>

					<div class="col-lg-12">
						<div class="table-responsive">
							<table class="table table-hover mb-0">
								<thead>
									<tr class="text-center">
										<th>#</th>
										<th><span class="text-danger">*</span> Hari</th>
										<th><span class="text-danger">*</span> waktu Awal</th>
										<th><span class="text-danger">*</span> Waktu Akhir</th>
										<th class="text-center">Action</th>
									</tr>
								</thead>
								<tbody id="container-jadwal">
									{{-- <tr class="text-center">
										<td class="no-select" colspan="5" id="show-empty"><i>Tidak ada data</i></td>
									</tr> --}}

									@if ($jadwalDokterKlinik && count($jadwalDokterKlinik->detail))
									@foreach ($jadwalDokterKlinik->detail as $key => $item)
									<tr class="rows">
										<td><span class="number">{{$loop->index + 1}}</span></td>
										<td>
											<input type="hidden" name="is_new[]" value="0">
											<input type="hidden" name="jadwal_dokter_klinik_detail_id[]" value="{{$item->id}}">
											<select class="form-select" name="hari[]" aria-label="Select hari" id="hari">
												<option selected value="">-- PILIH OPSI --</option>
												<option value="1" {{$item->hari_num == 1 ? 'selected' : ''}}>SENIN</option>
												<option value="2" {{$item->hari_num == 2 ? 'selected' : ''}}>SELASA</option>
												<option value="3" {{$item->hari_num == 3 ? 'selected' : ''}}>RABU</option>
												<option value="4" {{$item->hari_num == 4 ? 'selected' : ''}}>KAMIS</option>
												<option value="5" {{$item->hari_num == 5 ? 'selected' : ''}}>JUMAT</option>
												<option value="6" {{$item->hari_num == 6 ? 'selected' : ''}}>SABTU</option>
												<option value="7" {{$item->hari_num == 7 ? 'selected' : ''}}>MINGGU</option>
											</select>
										</td>
										<td>
											<input type="time" class="form-control waktu-awal" id="floatingWaktuAwal" name="waktu_awal[]" autocomplete="off" placeholder="00:00" value="{{$item->waktu_awal}}">
										</td>
										<td width="25%;">
											<div class="row m-0">
												<div class="col-md-9">
													<input type="time"
														class="form-control"
														id="floatingWaktuAkhir"
														name="waktu_akhir[]"
														autocomplete="off"
														placeholder="00:00"
														@if ($item->waktu_akhir == 'selesai')
															readonly
														@else
															value="{{$item->waktu_akhir}}"
														@endif
													>
												</div>
												<div class="col-md-3 d-md-flex justify-content-space-between align-items-center">
													<input type="hidden"
														class="form-check-input sampai-selesai"
														name="sampai_selesai[]"
														id="sampai-selesai-{{$item->id}}"
														value="{{$item->waktu_akhir == 'selesai' ? '1' : '0'}}"
													>
													<input type="checkbox"
														class="form-check-input sampai-selesai-check"
														name="sampai_selesai_check[]"
														id="sampai-selesai-check-{{$item->id}}"
														{{$item->waktu_akhir == 'selesai' ? 'checked' : ''}}
													>
													{{-- <input type="checkbox"
														class="form-check-input sampai-selesai"
														name="sampai_selesai[]"
														id="sampai-selesai-{{$item->id}}"
														{{$item->waktu_akhir == 'selesai' ? 'checked' : ''}}
													> --}}
													<label class="form-check-label" for="sampai-selesai-check-{{$item->id}}"> s/d selesai?</label>
												</div>
											</div>
										</td>
										<td class="text-center">
											<i class="ti ti-trash text-danger pointer hover-danger f-20 btn-remove"
												data-bs-toggle="tooltip"
												data-bs-html="true"
												title="<b>Hapus</b>"
											></i>
										</td>
									</tr>

									{{-- <tr class="rows">
										<td><span class="number">{{$loop->index + 1}}</span></td>
										<td>
											<input type="hidden" name="misi_id[]" value="{{$item->id}}">
											<div class="form-floating">
												<textarea class="form-control" id="floatingMisi" style="height: 55px" name="misi[]">{{$item->content}}</textarea>
												<label for="floatingMisi">Comments</label>
											</div>
										</td>
										<td class="text-center">
											<i class="ti ti-trash text-danger pointer hover-danger f-20 btn-remove"
											data-bs-toggle="tooltip"
											data-bs-html="true"
											title="<b>Hapus</b>"
											></i>
										</td>
									</tr> --}}
									@endforeach
									@else
									<tr>
										<td class="text-center no-select" colspan="5" id="show-empty"><i>Tidak ada data</i></td>
									</tr>
									@endif
								</tbody>
							</table>
						</div>
						<div class="text-start">
							<hr class="mb-1 mt-0 border-secondary border-opacity-50">
							{!!$btnAdd!!}
						</div>
					</div>
				</div>
			</form>

			<div class="d-md-flex justify-content-between mt-5">
				<button type="button" class="btn btn-sm btn-secondary btn-kembali">Kembali</button>
				<button type="button" class="btn btn-sm btn-success btn-simpan">Simpan</button>
			</div>
		</div>
	</div>
</div>