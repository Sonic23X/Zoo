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


});
