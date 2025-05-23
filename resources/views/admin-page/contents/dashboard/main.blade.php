@extends('admin-page.layout')

@section('contents')
	@include('admin-page.components.breadcrumb')

	<div class="row">
		<!-- [ sample-page ] start -->
		<div class="col-md-6 col-xl-3">
			<div class="card">
				<div class="card-body">
					{{-- <h6 class="mb-2 f-w-400 text-muted">Total Page Views</h6>
					<h4 class="mb-3">4,42,236 <span class="badge bg-light-primary border border-primary"><i class="ti ti-trending-up"></i> 59.3%</span></h4>
					<p class="mb-0 text-muted text-sm">You made an extra <span class="text-primary">35,000</span> this year</p> --}}
					<h6 class="mb-2 f-w-400 text-muted fs-15">Total Pengunjung</h6>
					<h4 class="mb-3">{{$data['total']}} <span class="badge bg-light-{{$data['color']}} border border-{{$data['color']}}"><i class="ti ti-trending-{{$data['font']}}"></i> {{$data['persentase']}}%</span></h4>
					<p class="mb-0 text-muted fs-10">Total ada <span class="text-{{$data['color']}}">{{$data['bulan_ini']}}</span> pengunjung di bulan ini</p>
				</div>
			</div>
		</div>

		{{-- <div class="col-md-6 col-xl-3">
			<div class="card">
				<div class="card-body">
					<h6 class="mb-2 f-w-400 text-muted">Total Users</h6>
					<h4 class="mb-3">78,250 <span class="badge bg-light-success border border-success"><i class="ti ti-trending-up"></i> 70.5%</span></h4>
					<p class="mb-0 text-muted text-sm">You made an extra <span class="text-success">8,900</span> this year</p>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-xl-3">
			<div class="card">
				<div class="card-body">
					<h6 class="mb-2 f-w-400 text-muted">Total Order</h6>
					<h4 class="mb-3">18,800 <span class="badge bg-light-warning border border-warning"><i class="ti ti-trending-down"></i> 27.4%</span></h4>
					<p class="mb-0 text-muted text-sm">You made an extra <span class="text-warning">1,943</span> this year</p>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-xl-3">
			<div class="card">
				<div class="card-body">
					<h6 class="mb-2 f-w-400 text-muted">Total Sales</h6>
					<h4 class="mb-3">$35,078 <span class="badge bg-light-danger border border-danger"><i class="ti ti-trending-down"></i> 27.4%</span></h4>
					<p class="mb-0 text-muted text-sm">You made an extra <span class="text-danger">$20,395</span> this year</p>
				</div>
			</div>
		</div> --}}
		<!-- [ Main Content ] end -->
	</div>
@endsection
