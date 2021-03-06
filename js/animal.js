$(document).ready(function() {

  //Obtener Animales - Tabla
  $.ajax({
    url: '../CRUD/animal/select.php',
    type: 'POST',
    success: function(response)
    {
      $('#tabla').html(response);
    }
  });

  //Obtener Habitads
  $.ajax({
    url: '../CRUD/habitad/select_option.php',
    type: 'POST',
    success: function(response)
    {
      $('#habitad').html(response);
    }
  });

  //eliminar animales
  $.ajax({
    url: '../CRUD/animal/select_option.php',
    type: 'POST',
    success: function(response)
    {
      $('#animales').html(response);
    }
  });

  //nuevo animal
  $('#nuevo_animal').submit(function(event) {

    event.preventDefault();

    var nombre = $('#nombre').val();
    var especie = $('#especie').val();
    var pais = $('#pais').val();
    var estado = $('#estado').val();
    var peso = $('#peso').val();
    var altura = $('#altura').val();
    var dieta = $('#dieta').val();
    var riesgo = $('#riesgo').val();
    var sexo = $('#sexo').val();
    var habitad = $('#habitad').val();

    var datos = "nombre=" + nombre + "&especie=" + especie + "&pais=" + pais + "&estado=" + estado + "&peso=" + peso + "&altura=" + altura
                      + "&dieta=" + dieta + "&riesgo=" + riesgo + "&sexo=" + sexo + "&habitad=" + habitad;

    $.ajax({
      url: '../CRUD/animal/insert.php',
      type: 'POST',
      data: datos,
      success: function(response)
      {
        if(response == "1")
        {
          alert("¡Animal Registrado!");
          $('#nuevo').modal('toggle');
          location.reload();
        }
        else
          console.log(response);
      }
    });


  });

  //borrar
  $('#deletethis').click(function(event) {
    event.preventDefault();

    var id = $('#animales').val();

    $.ajax({
      url: '../CRUD/animal/delete.php',
      type: 'post',
      data: "id=" + id,
      success: function(response)
      {
        var res = response.split('\n');
        if(res[1] == "1")
        {
          alert("Animal eliminado");
          $('#eliminar').modal('toggle');
          $.ajax({
            url: '../CRUD/animal/select.php',
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

//colocar imagen
function set(imagen)
{
  $('#imagen_animal').attr('src', '../images/animal/' + imagen);
}
