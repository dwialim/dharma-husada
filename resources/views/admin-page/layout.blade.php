<!doctype html>
<html lang="en">
<head>
	<title>Admin</title>
	<!-- [Meta] -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	@include('admin-page.styles.main')
</head>
<body id="body-admin" style="display: none;" data-pc-preset="preset-1" data-pc-direction="ltr" data-pc-theme="light">
	<!-- [ Pre-loader ] start -->
	{{-- <div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div> --}}
	<!-- [ Pre-loader ] End -->

	{{-- Loader --}}
	@include('partials.loading')
	{{-- Loader end --}}

	<!-- [ Sidebar Menu ] start -->
	@include('admin-page.components.sidebar')
	<!-- [ Sidebar Menu ] end -->

	<!-- [ Header Topbar ] start -->
	@include('admin-page.components.header')
	<!-- [ Header ] end -->

	<!-- [ Main Content ] start -->
	<div class="pc-container">
		<div class="pc-content">
			@yield('contents')
		</div>
	</div>
	<!-- [ Main Content ] end -->

	{{-- @include('admin-page.components.footer') --}}

	@include('admin-page.scripts.main')
</body>
</html>
