<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<!-- Required Js -->
<script src="{{asset('admin-page/assets/js/plugins/popper.min.js')}}"></script>
<script src="{{asset('admin-page/assets/js/plugins/simplebar.min.js')}}"></script>
<script src="{{asset('admin-page/assets/js/plugins/bootstrap.min.js')}}"></script>
<script src="{{asset('admin-page/assets/js/fonts/custom-font.js')}}"></script>
<script src="{{asset('admin-page/assets/js/fonts/custom-ant-icon.js')}}"></script>
<script src="{{asset('admin-page/assets/js/pcoded.js')}}"></script>

{{-- Custom theme --}}
<script src="{{asset('admin-page/assets/js/theme.js')}}"></script>

<script src="{{asset('admin-page/assets/js/plugins/feather.min.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@vite(['resources/js/app.js'])
@vite(['resources/js/admin-page/app.js'])

@stack('scripts')
