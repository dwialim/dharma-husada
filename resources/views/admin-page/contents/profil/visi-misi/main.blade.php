@extends('admin-page.layout')

@push('styles')
	@vite('resources/css/admin-page/profil/visi-misi.css')
@endpush

@section('contents')
	@include('admin-page.components.breadcrumb')

	<div class="row" id="master-container">
		<div class="col-md-12">
			<div class="card profile-wave-card">
				<img src="{{asset('admin-page/assets/images/profile/img-profile-top.svg')}}" alt="images" class="img-fluid profille-wave-img wave-top">
				<img src="{{asset('admin-page/assets/images/profile/img-profile-bottom.svg')}}" alt="images" class="img-fluid profille-wave-img wave-bottom">
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
							<div class="accordion accordion-flush" id="accordionFlushExample">
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingOne">
										<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											<h4 class="m-0">VISI MISI</h4>
										</button>
									</h2>
									<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<form id="form-visi-misi" data-route-store="{{route('admin.visiMisi.store')}}">
												<div class="row justify-content-between">
													<div class="col-sm-5">
														<div class="row g-4">
															<div class="col-lg-12">
																<div class="form-floating mb-0">
																	<input type="text" class="form-control" id="floatingVisi" name="visi" autocomplete="off" placeholder="Visi" value="{{$data && $data->visi ? $data->visi->content : '' }}">
																	<label for="floatingVisi">Visi</label>
																</div>
															</div>
															<div class="col-lg-12">
																<div class="form-floating mb-0">
																	<input type="text" class="form-control" id="floatingMotto" name="motto" autocomplete="off" placeholder="Motto" value="{{$data && $data->motto ? $data->motto->content : '' }}">
																	<label for="floatingMotto">Motto</label>
																</div>
															</div>
														</div>
													</div>

													<div class="col-sm-6">
														<div class="row g-4">
															<div class="col-lg-12">
																<div class="table-responsive">
																	<table class="table table-hover mb-0">
																		<thead>
																			<tr class="text-center">
																				<th>#</th>
																				<th><span class="text-danger">*</span> Misi</th>
																				<th class="text-center">Action</th>
																			</tr>
																		</thead>
																		<tbody id="container-misi">
																			@if ($data && count($data->misi))
																			@foreach ($data->misi as $key => $item)
																			<tr class="rows">
																				<td><span class="number">{{$loop->index + 1}}</span></td>
																				<td>
																					<input type="hidden" name="misi_id[]" value="{{$item->id}}">
																					<input type="hidden" name="is_new[]" value="0">
																					<div class="form-floating">
																						<textarea class="form-control" id="floatingMisi" style="height: 55px" name="misi[]">{{$item->content}}</textarea>
																						<label for="floatingMisi">Comments</label>
																					</div>
																					{{-- <input type="text" name="misi[]" class="form-control" placeholder="Misi" autocomplete="off" value="{{$item->content}}"> --}}
																				</td>
																				<td class="text-center">
																					<i class="ti ti-trash text-danger pointer hover-danger f-20 btn-remove"
																					data-bs-toggle="tooltip"
																					data-bs-html="true"
																					title="<b>Hapus</b>"
																					></i>
																				</td>
																			</tr>
																			@endforeach
																			@else
																			<tr>
																				<td class="no-select" colspan="3" id="show-empty"><i>Tidak ada data</i></td>
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
													</div>
												</div>

												<div class="mt-5 gap-4 text-right btn-right">
													{{-- <button type="button" class="btn btn-sm btn-secondary btn-batal">Batal</button> --}}
													<button type="button" class="btn btn-sm btn-success btn-simpan">Simpan</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="seconds-container"></div>
@endsection

@push('scripts')
	<script src="https://cdn.datatables.net/2.2.2/js/dataTables.min.js" rel="stylesheet"></script>
	<script src="https://cdn.datatables.net/2.2.2/js/dataTables.bootstrap5.min.js" rel="stylesheet"></script>

	@vite('resources/js/admin-page/profil/visi-misi.js')
@endpush
