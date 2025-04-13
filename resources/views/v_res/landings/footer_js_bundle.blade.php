<!-- Vendor js -->
<script src="{{ asset('template/assets/js/vendor.min.js') }}?v={{ time() }}"></script>

<!-- Daterangepicker js -->
<script src="{{ asset('template/assets/vendor/daterangepicker/moment.min.js') }}?v={{ time() }}"></script>
<script src="{{ asset('template/assets/vendor/daterangepicker/daterangepicker.js') }}?v={{ time() }}"></script>

<!-- Apex Charts js -->
<script src="{{ asset('template/assets/vendor/apexcharts/apexcharts.min.js') }}?v={{ time() }}"></script>

<!-- Vector Map js -->
<script
    src="{{ asset('template/assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}?v={{ time() }}">
</script>
<script
    src="{{ asset('template/assets/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js') }}?v={{ time() }}">
</script>

<!-- Dashboard App js -->
<script src="{{ asset('template/assets/js/pages/dashboard.js') }}?v={{ time() }}"></script>


<!-- App js -->
<script src="{{ asset('template/assets/js/app.min.js') }}?v={{ time() }}"></script>


<!-- Select2 JS -->
<script src="{{ asset('custom/select2/dist/js/select2.min.js') }}?v={{ time() }}"></script>

<!-- Scroll2Top Button Budle -->
@include('v_res.plugins.v_totop_bundle')

<!-- Logo Brand BasedOn Theme -->
@include('v_res.plugins.v_dynamic_logobrand')


