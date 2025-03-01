<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>RS Dharma Husada</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	{{-- <meta http-equiv="Content-Security-Policy" content="default-src self;"> --}}

	@include('landing-page.styles.main')

	</head>
	<body class="
	index-page
	{{-- scrolled --}}
	">
		@include('landing-page.components.header')

		<main class="main">
			@yield('content')
		</main>

		@include('landing-page.components.footer')

		@include('landing-page.scripts.main')
	</body>
</html>
