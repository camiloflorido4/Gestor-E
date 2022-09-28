<div class="content" style="">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-lg-12">
        <!-- carrusel -->
        <div id="carouselExampleSlidesOnly" class="carousel slide holis" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="vistas/img/plantilla/logo.png" class="d-block" width="500" height="300" style="margin: auto;"  alt="...">
            </div>
          </div>
        </div>
        <!--/carrusel --->
        <div class="row" style="padding: 1rem;">
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Modulo de Usuarios</h5>
                <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarPerfil">
                  Nuevo Perfil
                </button>
                <a href="perfil" class="btn btn-primary">Perfil</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Modulo Productos</h5>
                <button class="btn btn-primary" data-toggle="modal" data-target="#ModalAgregarProducto">
                  Nuevo Producto
                </button>
                <a href="productos" class="btn btn-primary">Productos</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--=====================================
MODAL AGREGAR ADMINISTRADOR
======================================-->

<div id="modalAgregarPerfil" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#CAC7C7; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <center>
            <h4 class="modal-title">Agregar Perfil</h4>
          </center>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-user"></i></span>

                <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingresar nombre y Apellidos" required>

              </div>

            </div>





            <!-- ENTRADA PARA EL EMAIL -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>

                <input type="email" class="form-control input-lg" name="nuevoEmail" placeholder="Ingresar Email" id="nuevoEmail" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA CONTRASEÑA -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                <input type="password" class="form-control input-lg" name="nuevoPassword" placeholder="Ingresar contraseña" required>

              </div>

            </div>

            <!-- ENTRADA PARA SELECCIONAR SU PERFIL -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-users"></i></span>

                <select class="form-control input-lg" name="nuevoPerfil">

                  <option value="">Selecionar perfil</option>

                  <option value="administrador">Administrador</option>

                  <option value="editor">Encargado</option>

                </select>

              </div>

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar Perfil</button>

        </div>

        <?php

        $crearPerfil = new ControladorAdministrador();
        $crearPerfil->ctrCrearPerfil();

        ?>

      </form>

    </div>

  </div>

</div>

<!--=====================================
MODAL AGREGAR PRODUCTO
======================================-->


<!-- Modal  CREAR PRODUCTO-->
<div class="modal fade" id="ModalAgregarProducto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <center>
          <h5 class="modal-title" id="exampleModalLabel">Nuevo Producto</h5>
        </center>
      </div>
      <div class="modal-body">
        <form method="post">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Titulo</span>
            </div>
            <input type="text" class="form-control" placeholder="titulo" id="titulo" name="titulo" aria-label="Username" aria-describedby="basic-addon1" id="titulo">
          </div>

          <div class="input-group mb-3">
            <select class="custom-select categoria " id="categoria" name="categoria">
              <option selected>Escoger...</option>
              <?php

              $item  = null;
              $valor = null;

              $categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);

              foreach ($categorias as $key => $value) {

                echo '<option value="' . $value["id"] . '">' . $value["categoria"] . '</option>';
              }

              ?>

            </select>
            <div class="input-group-append">
              <label class="input-group-text" for="inputGroupSelect02">Seleccionar</label>
            </div>
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Descripcion</span>
            </div>
            <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion" aria-label="Username" aria-describedby="basic-addon1">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Detalles</span>
            </div>
            <input type="text" class="form-control" id="detalle" name="detalle" placeholder="Detalles" aria-label="Username" aria-describedby="basic-addon1">
          </div>


          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon3">precio</span>
            </div>
            <input type="number" class="form-control" name="precio" id="precio" aria-describedby="basic-addon3">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary guardarProducto" id="guardarProducto">Guardar</button>
      </div>
    </div>
  </div>
</div>