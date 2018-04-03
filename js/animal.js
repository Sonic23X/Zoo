$(document).ready(function() {

  //Obtener Animales
  $.ajax({
    url: '../CRUD/animal/select.php',
    type: 'POST',
    success: function(response)
    {
      $('#tabla').html(response);
    }
  });


  $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  });

});
