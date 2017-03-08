$(document).ready(function() {
  //Date picker
  $('.datepicker').datepicker({
    dateFormat: 'Y/m/d',
    setDate: new Date(),
    autoclose: true
  });

  //Timepicker
  $(".timepicker").timepicker({
   showInputs: false
  });

  $('#tbldatas').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true,
      "scrollX": true,
      "responsive": true,
      "select": true,
    });

  $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').focus()
  })

});

