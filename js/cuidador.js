$(document).ready(function() {

  //Obtener Cuidadores - Tabla
  $.ajax({
    url: '../CRUD/cuidador/select.php',
    type: 'POST',
    success: function(response)
    {
      $('#tabla').html(response);
    }
  });

  //Obtener cuidadores
  $.ajax({
    url: '../CRUD/cuidador/select_option.php',
    type: 'POST',
    success: function(response)
    {
      $('#person').html(response);
    }
  });

  //eliminar cuidador
  $.ajax({
    url: '../CRUD/animal/select_option.php',
    type: 'POST',
    success: function(response)
    {
      $('#animales').html(response);
    }
  });

  //nuevo cuidador
  $('#nuevo_cuidador').submit(function(event) {

    event.preventDefault();

    var nombre = $('#nombre').val();
    var apellidos = $('#apellido').val();
    var nacionalidad = $('#nacionalidad').val();
    var telefono = $('#telefono').val();
    var estado = $('#status').val();

    var datos = "nombre=" + nombre + "&apellidos=" + apellidos + "&nacionalidad=" + nacionalidad +
    "&telefono=" + telefono + "&estado=" + estado;

    alert(datos);

    $.ajax({
      url: '../CRUD/cuidador/insert.php',
      type: 'POST',
      data: datos,
      success: function(response)
      {
        if(response == "1")
        {
          alert("Cuidador Registrado!");
          $('#nuevo').modal('toggle');

          $.ajax({
            url: '../CRUD/cuidador/select.php',
            type: 'POST',
            success: function(response)
            {
              $('#tabla').html(response);
            }
          });
        }
        else
          console.log(response);
          alert(response);
      }
    });
    

  });

  //borrar
  $('#deletethis').click(function(event) {
    event.preventDefault();

    var id = $('#person').val();

    $.ajax({
      url: '../CRUD/cuidador/delete.php',
      type: 'post',
      data: "id=" + id,
      success: function(response)
      {
        var res = response.split('\n');
        if(res[1] == "1")
        {
          alert("Cuidador eliminado");
          $('#eliminar').modal('toggle');

          $.ajax({
            url: '../CRUD/cuidador/select.php',
            type: 'POST',
            success: function(response)
            {
              $('#tabla').html(response);
            }
          });
        }
        else
        {
          alert(response);
          $('#eliminar').modal('toggle');
        }
      }
    });

  });

});
