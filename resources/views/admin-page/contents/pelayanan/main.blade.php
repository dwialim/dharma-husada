@extends('admin-page.layout')

@push('styles')
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@section('contents')
	@include('admin-page.components.breadcrumb')

	<div id="master-container">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							@php $routeDokter = 'admin.jadwal.'; @endphp
							<table id="dt-jadwal-dokter-klinik"
								class="table table-striped table-bordered nowrap"
								data-route-datatable={{route($routeDokter.'datatable')}}
								data-route-form={{route($routeDokter.'form')}}
								data-route-destroy={{route($routeDokter.'destroy')}}
							>
								<thead>
									<tr>
										<th class="rm-sort text-center">No</th>
										<th>Dokter</th>
										<th>Poli</th>
										<th class="text-center">Action</th>
									</tr>
								</thead>
								<tbody>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="seconds-container"></div>
@endsection

@push('scripts')
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	<script src="https://cdn.datatables.net/2.2.2/js/dataTables.min.js" rel="stylesheet"></script>
	<script src="https://cdn.datatables.net/2.2.2/js/dataTables.bootstrap5.min.js" rel="stylesheet"></script>

	@vite('resources/js/admin-page/jadwal-dokter-klinik.js')
@endpush
