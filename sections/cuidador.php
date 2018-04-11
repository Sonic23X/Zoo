<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/cuidador.css">
    <link rel="stylesheet" href="../css/form.css">

    <script type="text/javascript" src="../bootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="../bootstrap/js/popper.min.js"></script>
    <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../font/fontawesome-all.min.js"></script>
    <script type="text/javascript" src="../js/cuidador.js"></script>

    <title>Cuiadores</title>
  </head>
  <body>

    <center>
      <p class="title"><a id="x" href="../index.php"><span aria-hidden="true">&times;</span></a>Cuidadores registrados</p>
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
          <a class="btn btn-primary form-control" data-toggle="modal"  href="#nuevo">Nuevo cuidador</a>
        </div>

    </div>

    <div class="target">

        <div class="icon">
          <span class="fas fa-times"></span>
        </div>

        <div class="info">
          <center>
            <p class="title3">Eliminar</p>
          </center>
          <a class="btn btn-primary form-control" data-toggle="modal"  href="#eliminar">Eliminar Cuidador</a>
        </div>

    </div>

    </div>

    <!-- Modales -->

    <div class="modal fade" id="nuevo" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Nuevo cuidador</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form id="nuevo_cuidador">
            <div class="modal-body">

                <div class="form-group">
                  <label for="nombre" class="col-sm-2 control-label etiqueta">Nombre</label>
                  <input type="text" class="form-control col-sm-8 texto" id="nombre" name="nombre" placeholder="Nombre" required maxlength="120">
                </div>

                <div class="form-group">
                  <label for="apellido" class="col-sm-2 control-label etiqueta">Apellidos</label>
                  <input type="text" class="form-control col-sm-8 texto" id="apellido" name="apellido" placeholder="Apellidos" required maxlength="120">
                </div>

                <div class="form-group">
                  <label for="nacionalidad" class="col-sm-2 control-label etiqueta">Nacionalidad</label>
                  <input type="text" class="form-control  col-sm-8 texto" id="nacionalidad" name="nacionalidad" placeholder="Nacionalidad" required maxlength="120">
                </div>

                <div class="form-group">
                  <label for="telefono" class="col-sm-2 control-label etiqueta">Telefono</label>
                  <input type="number" class="form-control col-sm-4 texto" id="telefono" name="telefono" placeholder="Telefono" required maxlength="10">
                </div>

                <div class="form-group">
                  <label for="status" class="col-sm-2 control-label etiqueta">Estado</label>
                  <select class="form-control col-sm-4 texto" id="status" name="status" required>
                    <option value="Activo" selected>Activo</option>
                    <option value="Baja">Baja</option>
                  </select>
                </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="modal fade" id="eliminar" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Eliminar cuidador</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">

            <center>

              <div class="form-group">
                <label for="person" class="col-sm-3 control-label etiqueta2">Seleccione a un animal</label>
                <select class="form-control col-sm-4" id="person" name="person" required>

                </select>
              </div>

            </center>

          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary" id="deletethis">Eliminar</button>
          </div>

        </div>
      </div>
    </div>

  </body>
</html>
