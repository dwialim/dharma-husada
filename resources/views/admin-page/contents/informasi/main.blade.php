@extends('admin-page.layout')

@push('styles')
@endpush

@section('contents')
	@include('admin-page.components.breadcrumb')

	<div id="master-container">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							@php $routeManajemenInformasi = 'admin.manajemenInformasi.'; @endphp
							<table id="dt-manajemen-informasi"
								class="table table-striped table-bordered nowrap"
								data-route-datatable={{route($routeManajemenInformasi.'datatable')}}
								data-route-form={{route($routeManajemenInformasi.'form')}}
								data-route-destroy={{route($routeManajemenInformasi.'destroy')}}
							>
								<thead>
									<tr>
										<th class="rm-sort text-center">No</th>
										<th>Judul</th>
										<th>Kategori</th>
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
	<script src="{{asset('admin-page/assets/js/plugins/ckeditor/classic/ckeditor.js')}}"></script>

	<script src="https://cdn.datatables.net/2.2.2/js/dataTables.min.js" rel="stylesheet"></script>
	<script src="https://cdn.datatables.net/2.2.2/js/dataTables.bootstrap5.min.js" rel="stylesheet"></script>

	@vite('resources/js/admin-page/informasi.js')
@endpush
