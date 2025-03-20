<!doctype html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- [Favicon] icon -->
	<link rel="icon" href="{{asset('images/rs/'.config('attribute.icon'))}}" type="image/x-icon">

	<!-- [Google Font] Family -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" id="main-font-link">

	<link rel="stylesheet" href="{{asset('admin-page/assets/css/style.css')}}" id="main-style-link">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

	@vite('resources/css/app.css')
	@vite('resources/css/auth/app.css')
</head>
<body id="body-auth" style="display: none;">
	<div class="auth-main">
		<div class="auth-wrapper v3">
			<div class="auth-form">
				<div class="auth-header test"><a class="pointer item-center"><img width="120px" height="auto" src="{{asset('images/rs/logo-transparan.png')}}" alt="img"></a></div>
				<div class="card my-5">
					<div class="card-body">
						<div class="d-flex justify-content-between align-items-end mb-4">
							<h3 class="mb-0"><b>Login</b></h3>
						</div>
						<div class="mb-3">
							<label class="form-label">Username</label>
							<input type="text" class="form-control" id="username" placeholder="Username" name="username">
						</div>
						<div class="mb-3">
							<label class="form-label">Password</label>
							<input type="password" class="form-control" id="password" placeholder="Password" name="password">
						</div>
						<div class="d-flex mt-1 justify-content-between">
							<div class="form-check">
								<input class="form-check-input input-primary" type="checkbox" id="customCheckc1" checked="">
								<label class="form-check-label text-muted" for="customCheckc1">Keep me sign in</label>
							</div>
						</div>
						<div class="d-grid mt-4"><button type="button" class="btn btn-primary" id="btn-login" data-url-token="{{route('admin.auth.generateToken')}}" data-url-dashboard="{{route('admin.dashboard.main')}}">Login</button></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
	<script src="{{asset('admin-page/assets/js/plugins/bootstrap.min.js')}}"></script>
	<script src="{{asset('admin-page/assets/js/theme.js')}}"></script>
	<script src="{{asset('admin-page/assets/js/plugins/feather.min.js')}}"></script>
	<script>layout_rtl_change('false')</script>

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<script src="{{asset('requestor/axios.min.js')}}"></script>

	@vite(['resources/js/app.js'])

	@vite(['resources/js/auth/app.js'])
</body>
</html>