<!-- [Favicon] icon -->
<link rel="icon" href="{{asset('images/rs/logo.png')}}" type="image/x-icon">

<!-- [Google Font] Family -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" id="main-font-link">

<!-- [phosphor Icons] https://phosphoricons.com/ -->
<link rel="stylesheet" href="{{asset('admin-page/assets/fonts/phosphor/duotone/style.css')}}">

<!-- [Tabler Icons] https://tablericons.com -->
<link rel="stylesheet" href="{{asset('admin-page/assets/fonts/tabler-icons.min.css')}}">

<!-- [Feather Icons] https://feathericons.com -->
<link rel="stylesheet" href="{{asset('admin-page/assets/fonts/feather.css')}}">

<!-- [Font Awesome Icons] https://fontawesome.com/icons -->
<link rel="stylesheet" href="{{asset('admin-page/assets/fonts/fontawesome.css')}}">

<!-- [Material Icons] https://fonts.google.com/icons -->
<link rel="stylesheet" href="{{asset('admin-page/assets/fonts/material.css')}}">

<!-- [Template CSS Files] -->
<link rel="stylesheet" href="{{asset('admin-page/assets/css/style.css')}}" id="main-style-link">
{{-- <link rel="stylesheet" href="{{asset('admin-page/assets/css/style-preset.css')}}"> --}}

<link href="{{asset('landing-page/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.bootstrap5.min.css" id="main-style-link">

@vite([
	'resources/css/app.css',
	'resources/css/admin-page/app.css',
])

@stack('styles')
