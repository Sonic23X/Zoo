$(document).ready(function() {

  $('#animal').click(function(event) {
    $(location).attr('href','sections/animal.php');
  });

  $('#cuidador').click(function(event) {
    $(location).attr('href','sections/cuidador.php');
  });

  $('#home').click(function(event) {
    $(location).attr('href','sections/habitad.php');
  });

  $('#medico').click(function(event) {
    $(location).attr('href','sections/veterinario.php');
  });

  $('#consulta').click(function(event) {
    $(location).attr('href','sections/revision.php');
  });

});

//redireccionamiento hacia otros archivos mediante JQuery
