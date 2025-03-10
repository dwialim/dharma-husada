<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<!-- Vendor JS Files -->
<script src="{{asset('landing-page/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('landing-page/assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('landing-page/assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('landing-page/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('landing-page/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>

<!-- Main JS File -->
<script src="{{asset('landing-page/assets/js/main.js')}}"></script>

@vite(['resources/js/app.js'])
@vite(['resources/js/landing-page/app.js'])

@stack('scripts')
