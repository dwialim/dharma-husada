<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>


<!-- [Page Specific JS] start -->
<!-- <script src="admin-page/assets/js/plugins/apexcharts.min.js"></script>
	<script src="admin-page/assets/js/Widgets/visitor-chart.js"></script>
	<script src="admin-page/assets/js/Widgets/income-overview-chart.js"></script>
	<script src="admin-page/assets/js/Widgets/analytics-report-chart.js"></script>
	<script src="admin-page/assets/js/Widgets/sales-report-chart.js"></script> -->
<!-- [Page Specific JS] end -->
<!-- Required Js -->
<script src="{{asset('admin-page/assets/js/plugins/popper.min.js')}}"></script>
<script src="{{asset('admin-page/assets/js/plugins/simplebar.min.js')}}"></script>
<script src="{{asset('admin-page/assets/js/plugins/bootstrap.min.js')}}"></script>
<script src="{{asset('admin-page/assets/js/fonts/custom-font.js')}}"></script>
<script src="{{asset('admin-page/assets/js/fonts/custom-ant-icon.js')}}"></script>
{{-- <script src="{{asset('admin-page/assets/js/plugins/i18next.min.js')}}"></script> --}}
{{-- <script src="{{asset('admin-page/assets/js/plugins/i18nextHttpBackend.min.js')}}"></script> --}}
<script src="{{asset('admin-page/assets/js/pcoded.js')}}"></script>

{{-- Custom theme --}}
<script src="{{asset('admin-page/assets/js/theme.js')}}"></script>

<!-- <script src="admin-page/assets/js/multi-lang.js"></script> -->

<script src="{{asset('admin-page/assets/js/plugins/feather.min.js')}}"></script>

{{-- <script>layout_change('light');</script>
<script>change_box_container('false');</script>
<script>layout_rtl_change('false');</script>
<script>preset_change('preset-1');</script>
<script>font_change('Public-Sans');</script> --}}

@vite(['resources/js/app.js'])

@stack('scripts')
