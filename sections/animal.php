<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/animal.css">

    <script type="text/javascript" src="../bootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="../bootstrap/js/popper.min.js"></script>
    <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../font/fontawesome-all.min.js"></script>
    <script type="text/javascript" src="../js/animal.js"></script>

    <title>Animales</title>
  </head>
  <body>

    <center>
      <p class="title">Animales registrados</p>
    </center>

    <center>
      <div id="tabla" class="table-responsive">

      </div>
    </center>

    <center>
      <p class="title2">Opciones</p>
    </center>

    <div class="target">

        <div class="icon">
          <span class="fas fa-plus"></span>
        </div>

        <div class="info">
          <center>
            <p class="title3">Nuevo</p>
          </center>
          <a class="btn btn-primary form-control" href="">Nuevo animal</a>
        </div>

    </div>

    <div class="target">

        <div class="icon">
          <span class="fas fa-edit"></span>
        </div>

        <div class="info">
          <center>
            <p class="title3">Actualizar</p>
          </center>
          <a class="btn btn-primary form-control" href="">Editar animal</a>
        </div>

    </div>

    <div class="target">

        <div class="icon">
          <span class="fas fa-times-circle"></span>
        </div>

        <div class="info">
          <center>
            <p class="title3">Eliminar</p>
          </center>
          <a class="btn btn-primary form-control" href="#eliminar" data-toggle="modal">Eliminar animal</a>
        </div>

    </div>

    <!-- Modales -->

     <div class="modal fade" id="eliminar" role="dialog">
       <div class="modal-dialog" role="document">
         <div class="modal-content">
           <div class="modal-header">
             <h5 class="modal-title">Eliminar</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <div class="modal-body">



           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
           </div>
         </div>
       </div>
     </div>


  </body>
</html>
