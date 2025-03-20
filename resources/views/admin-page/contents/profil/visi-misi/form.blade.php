<div class="col-sm-12">
	<div class="card">
		<div class="card-header">
			<h4>Form Visi Misi</h4>
		</div>
		<div class="card-body">
			<form id="form-poli-klinik" data-route-store="{{route('admin.visiMisi.store')}}">
				{{-- <input type="hidden" name="poli_klinik_id" id="poli-klinik-id" value="{{$poliKlinik ? $poliKlinik->id : ''}}"> --}}
				<div class="row g-4 mb-4">
					<div class="col-lg-12">
						<div class="form-floating mb-0">
							<input type="text" class="form-control" id="floatingNama" name="nama" autocomplete="off" placeholder="Nama" value="{{$poliKlinik ? $poliKlinik->nama : ''}}">
							<label for="floatingNama">Nama Poli Klinik</label>
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