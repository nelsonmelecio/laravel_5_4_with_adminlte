<!-- REQUIRED JS SCRIPTS -->

<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->
<script src="{{ asset('/js/app.js') }}" type="text/javascript"></script>




<!-- // this is only temporary - need to learn Laravel Mix -->
<style>
  .form-control {
    color: #000000 !important;
  }
</style>

<!-- bootstrap datepicker -->
<link rel="stylesheet" href="{{ asset('/plugins/datepicker/datepicker3.css') }}">
<!-- Bootstrap time Picker -->
<link rel="stylesheet" href="{{ asset('/plugins/timepicker/bootstrap-timepicker.min.css') }}">
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('/plugins/datatables/dataTables.bootstrap.css') }}">


<script src="{{ asset('/plugins/datepicker/bootstrap-datepicker.js') }}" type="text/javascript"></script>
<!-- bootstrap time picker -->
<script src="{{ asset('/plugins/timepicker/bootstrap-timepicker.min.js') }}" type="text/javascript"></script>
<!-- DataTables -->
<script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js') }}"></script>

<script src="{{ asset('/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>

<script src="{{ asset('/js/nelson-custom.js') }}" type="text/javascript"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
<script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};


</script>
