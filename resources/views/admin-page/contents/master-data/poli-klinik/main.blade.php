@extends('admin-page.layout')

@push('styles')
@endpush

@section('contents')
	@include('admin-page.components.breadcrumb')

	<div id="master-container">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-body">
					<div class="table-responsive">
						@php $routePoliKlinik = 'admin.masterData.poliKlinik.'; @endphp
						<table id="dt-poli-klinik"
							class="table table-striped table-bordered nowrap"
							data-route-datatable={{route($routePoliKlinik.'datatable')}}
							data-route-form={{route($routePoliKlinik.'form')}}
							data-route-destroy={{route($routePoliKlinik.'destroy')}}
						>
							<thead>
								<tr>
									<th class="rm-sort text-center">No</th>
									<th>Nama</th>
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

	<div id="seconds-container"></div>
@endsection

@push('scripts')
	<script src="https://cdn.datatables.net/2.2.2/js/dataTables.min.js" rel="stylesheet"></script>
	<script src="https://cdn.datatables.net/2.2.2/js/dataTables.bootstrap5.min.js" rel="stylesheet"></script>

	@vite('resources/js/admin-page/master-data/poli-klinik.js')
@endpush
