<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/animal.css">
    <link rel="stylesheet" href="../css/form.css">

    <script type="text/javascript" src="../bootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="../bootstrap/js/popper.min.js"></script>
    <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../font/fontawesome-all.min.js"></script>
    <script type="text/javascript" src="../js/animal.js"></script>

    <title>Animales</title>
  </head>
  <body>

    <center>
      <p class="title"><a id="x" href="../index.php"><span aria-hidden="true">&times;</span></a>Animales registrados</p>
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
          <a class="btn btn-primary form-control" data-toggle="modal"  href="#nuevo">Nuevo animal</a>
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
          <a class="btn btn-primary form-control" data-toggle="modal"  href="#eliminar">Eliminar animal</a>
        </div>

    </div>

    </div>

    <!-- Modales -->

    <div class="modal fade" id="nuevo" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Nuevo animal</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form id="nuevo_animal">
            <div class="modal-body">

                <div class="form-group">
                  <label for="nombre" class="col-sm-2 control-label etiqueta">Nombre</label>
                  <input type="text" class="form-control col-sm-8 texto" id="nombre" name="nombre" placeholder="Nombre" required maxlength="120">
                </div>

                <div class="form-group">
                  <label for="especie" class="col-sm-2 control-label etiqueta">Especie</label>
                  <input type="text" class="form-control col-sm-8 texto" id="especie" name="expecie" placeholder="Especie" required maxlength="120">
                </div>

                <div class="form-group">
                  <label for="pais" class="col-sm-2 control-label etiqueta">País de Origen</label>
                  <input type="text" class="form-control  col-sm-8 texto" id="pais" name="pais" placeholder="País de Origen" required maxlength="120">
                </div>
                <br>

                <div class="form-group">
                  <label for="estado" class="col-sm-2 control-label etiqueta2">Estado</label>
                  <select class="form-control col-sm-4" id="estado" name="estado" required>
                    <option value="Vivo" selected>Vivo</option>
                    <option value="Muerto">Muerto</option>
                    <option value="Desconocido">Desconocido</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="peso" class="col-sm-2 control-label etiqueta">Peso</label>
                  <input type="number" class="form-control col-sm-4 texto" id="peso" name="peso" placeholder="Peso del animal" required maxlength="4">
                </div>

                <div class="form-group">
                  <label for="altura" class="col-sm-2 control-label etiqueta">Altura</label>
                  <input type="number" class="form-control col-sm-4 texto" id="altura" name="altura" placeholder="Altura del animal" required maxlength="4">
                </div>

                <div class="form-group">
                  <label for="dieta" class="col-sm-2 control-label etiqueta">Dieta</label>
                  <input type="text" class="form-control col-sm-4 texto" id="dieta" name="dieta" placeholder="Dieta del animal" required>
                </div>

                <div class="form-group">
                  <label for="riesgo" class="col-sm-2 control-label etiqueta">Riesgo</label>
                  <select class="form-control col-sm-4 texto" id="riesgo" name="riesgo" required>
                    <option value="Bajo" selected>Bajo</option>
                    <option value="Medio">Medio</option>
                    <option value="Alto">Alto</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="sexo" class="col-sm-2 control-label etiqueta">Sexo</label>
                  <select class="form-control col-sm-4 texto" id="sexo" name="sexo" required>
                    <option value="Macho" selected>Macho</option>
                    <option value="Hembra">Hembra</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="Habitad" class="col-sm-2 control-label etiqueta">Habitad</label>
                  <select class="form-control col-sm-4 texto" id="habitad" name="habitad">

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
            <h5 class="modal-title">Eliminar animal</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">

            <center>

              <div class="form-group">
                <label for="animales" class="col-sm-3 control-label etiqueta2">Seleccione a un animal</label>
                <select class="form-control col-sm-4" id="animales" name="animales" required>

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

    <div class="modal fade" id="IMG" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Imagen del animal</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <center>
              <img id="imagen_animal" src="" alt="Foto" style="width: 300px; height: 300px;">
            </center>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>

        </div>
      </div>
    </div>

  </body>
</html>
