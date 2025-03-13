<!doctype html>
<html lang="en">
<head>
	<title>404</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Mantis is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
	<meta name="keywords" content="Mantis, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Bootstrap Admin Template">
	<meta name="author" content="CodedThemes">

	<link rel="icon" href="{{asset('admin-page/assets/images/favicon.svg')}}" type="image/x-icon">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" id="main-font-link">

	<link rel="stylesheet" href="{{asset('admin-page/assets/css/style.css')}}" id="main-style-link">
	<link rel="stylesheet" href="{{asset('admin-page/assets/css/style-preset.css')}}">
	@vite(['resources/css/app.css'])
</head>
<body style="background-color: #F1F1F1;">
	<div class="maintenance-block">
		<div class="container no-select">
			<div class="row">
				<div class="col-sm-12">
					<div class="card error-card" style="background-color: unset;">
						<div class="card-body">
							<div class="error-image-block">
								<img class="img-fluid no-select" src="{{asset('admin-page/assets/images/pages/Error404.png')}}" alt="img">
								<img class="img-fluid img-twocone" src="{{asset('admin-page/assets/images/pages/TwoCone.png')}}" alt="img">
							</div>
							<div class="text-center">
								<h1 class="mt-5"><b>Page Not Found</b></h1>
								<p class="mt-2 mb-4 text-muted">The page you are looking was moved, removed,<br>renamed, or might never exist!</p>
								<button type="button" class="btn btn-primary mb-3 btn-back">Back</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
	@vite(['resources/js/app.js'])
	<script>
		$(".btn-back").click(() => {window.history.back()})
	</script>
</div>
</body>
</html>
