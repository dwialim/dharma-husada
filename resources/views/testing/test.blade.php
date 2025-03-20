<!doctype html>
<html lang="en">
<!-- [Head] start -->
<head>
	<title>Floating labels | Mantis Bootstrap 5 Admin Template</title>
	<!-- [Meta] -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Mantis is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
	<meta name="keywords" content="Mantis, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Bootstrap Admin Template">
	<meta name="author" content="CodedThemes">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" id="main-font-link">
	<link rel="stylesheet" href="{{asset('admin-page/assets/css/style.css')}}" id="main-style-link">
	<link rel="stylesheet" href="{{asset('admin-page/assets/css/style-preset.css')}}">

	<!-- Pan -->
	<link href="{{asset('admin-page/assets/pan/css/jquery.pan.css')}}" rel="stylesheet" />
	{{-- <link href="{{asset('src/css/jquery.pan.css')}}" rel="stylesheet" type="text/css"/> --}}

</head>
<!-- [Head] end --><!-- [Body] Start -->
<body data-pc-preset="preset-1" data-pc-direction="ltr" data-pc-theme="light">
	@include('admin-page.components.sidebar')

	@include('admin-page.components.header')

	<!-- [ Main Content ] start -->
	<section class="pc-container">
		<div class="pc-content">

				{{-- @include('testing.test-content') --}}

		</div>
	</section>
	<!-- [ Main Content ] end -->

	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

	<!-- Required Js -->
	<script src="{{asset('admin-page/assets/js/plugins/popper.min.js')}}"></script>
	<script src="{{asset('admin-page/assets/js/plugins/simplebar.min.js')}}"></script>
	<script src="{{asset('admin-page/assets/js/plugins/bootstrap.min.js')}}"></script>
	<script src="{{asset('admin-page/assets/js/fonts/custom-font.js')}}"></script>
	<script src="{{asset('admin-page/assets/js/fonts/custom-ant-icon.js')}}"></script>
	{{-- <script src="{{asset('admin-page/assets/js/plugins/i18next.min.js')}}"></script>
	<script src="{{asset('admin-page/assets/js/plugins/i18nextHttpBackend.min.js')}}"></script> --}}
	<script src="{{asset('admin-page/assets/js/pcoded.js')}}"></script>
	<script src="{{asset('admin-page/assets/js/theme.js')}}"></script>
	{{-- <script src="{{asset('admin-page/assets/js/multi-lang.js')}}"></script> --}}
	<script src="{{asset('admin-page/assets/js/plugins/feather.min.js')}}"></script>

	{{-- Pan --}}
	<script src="{{asset('admin-page/assets/pan/js/jquery.pan.min.js')}}"></script>

	<script src="{{asset('requestor/axios.min.js')}}"></script>
	<script src="{{asset('requestor/axios.js')}}"></script>
	{{-- <script src="{{asset('src/js/jquery.pan.js')}}"></script> --}}

	<script>
		$(async () => {
			const response = await postRequest("{{route('test.form')}}")

			$(".pc-content").html(response.data.data)
		})
	</script>

	@vite('resources/js/app.js')
</body>
<!-- [Body] end -->
</html>