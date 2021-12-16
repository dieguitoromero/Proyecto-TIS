<?php require 'header.php'?>
<section class="container px-4 py-5 my-5" id="featured-3">
  <div class="container p-4">
    <div class="row">
      <div class="col-md-4 mx-auto">
        <div class="card card-body text-center">
          <h2 class="mb-5">Registrar</h2>
          <form action="../funciones/add_administrador.php" method="POST">
            <div class="form-group mb-2">
              <input type="text" name='run' value="" class="form-control" placeholder="Run usuario">
            </div>
            <div class="form-group mb-2">
              <input type="text" name='nombre' value="" class="form-control" placeholder="Nombre completo">
            </div>
            <div class="form-group mb-2">
              <input type="email" name='correo' value="" class="form-control" placeholder="Correo electronico">
            </div>
            <div class="form-group mb-2">
                <select class="form-control" name="tipo_usuario" id="sel1">
                  <option selected>Tipo de cargo</option>
                  <option>Estudiante</option>
                  <option>Funcionario</option>
                  <option>Currier</option>
                </select>
              </div>
              <div class="form-group mb-2">
                <select class="form-control" name="administrador" id="sel1">
                  <option selected>Tipo de Usuario</option>
                  <option>Administrador</option>
                  <option>Usuario</option>
                </select>
              </div>
              <div class="form-group mb-2">
              <input type="password" name='contraseña' value="" class="form-control" placeholder="Contraseña">
            </div>
            <button class="btn btn-danger col-12" type='submit'>
              Registar
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>