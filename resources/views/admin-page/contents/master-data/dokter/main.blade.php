@extends('admin-page.layout')

@push('styles')
	{{-- @vite('resources/css/admin-page/master-data/dokter.css') --}}
@endpush

@section('contents')
	@include('admin-page.components.breadcrumb')

	<div id="master-container">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-body">
					<div class="table-responsive">
						@php $routeDokter = 'admin.masterData.dokter.'; @endphp
						<table id="dt-dokter"
							class="table table-striped table-bordered nowrap"
							data-route-datatable={{route($routeDokter.'datatable')}}
							data-route-form={{route($routeDokter.'form')}}
							data-route-destroy={{route($routeDokter.'destroy')}}
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

	@vite('resources/js/admin-page/master-data/dokter.js')
@endpush