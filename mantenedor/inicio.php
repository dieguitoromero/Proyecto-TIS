<section class="container px-4 py-5 my-5 " id="featured-3">
  
    <h1 class="pb-2 border-bottom text-center">Mantenedores</h1><br>
    <!-- nombre usuario -->
    <p class="text-center fs-5">
      
      Bienvenido <?php echo $row['Nombre_usuario'] ?>
    
    </p>

    <div class="row ">

      <div class="feature col-6 mt-5 border-dark">
        <div class="d-block   bg-gradient col-2 rounded-3" style="height: 50px;">
          
          <span class="material-icons fs-1 ">
            directions_car
          </span>

        </div>
        
        <h2>Vehiculos</h2>
        <p>Encontraras el registro completo de los vehiculos registrados en la UCSC</p>
        <div class="d-grid gap-2 d-md-block">
          <button class="btn btn-danger col-9" onclick="location.href = 'registros_vehiculos.php'" type="button">Ver</button>
        </div>
      </div>


      <div class="feature col-6 mt-5 border-dark">
        <div class="d-block   bg-gradient col-2 rounded-3" style="height: 50px;">
          <span class="material-icons fs-1 ">
            account_circle
          </span>
        </div>

        <h2>Usuarios</h2>
        
        <p>Encontraras el registro completo de los usuarios registrados en la UCSC</p>
        <div class="d-grid gap-2 d-md-block">
          <button class="btn btn-danger col-9" onclick="location.href = 'registros_usuarios.php'" type="button">Ver</button>
        </div>
      </div>

      <div class="feature col-6 mt-5 border-dark">
        
      <div class="d-block   bg-gradient col-2 rounded-3" style="height: 50px;">
          <span class="material-icons fs-1">
            remove_red_eye
          </span>
      </div>
      
        <h2>Registro ingreso</h2>
        <p>Encontraras el registro completo de los ingresos registrados en la UCSC</p>
        <div class="d-grid gap-2 d-md-block">
          <button class="btn btn-danger col-9" onclick="location.href = 'registros_ingreso.php'" type="button">Ver</button>
        </div>
        </div>

        <div class="feature col-6 mt-5 border-dark">
          <div class="d-block   bg-gradient col-2 rounded-3" style="height: 50px;">
            <span class="material-icons fs-1 ">
              bar_chart
            </span>
          </div>
          <h2>Visualizar Estadisticas</h2>
          <p>Encontraras el registro estadistico completo de entrada y salidas</p>
          <div class="d-grid gap-2 d-md-block">
            <button class="btn btn-danger col-9" onclick="location.href = 'estadisticas.php'" type="button">Ver</button>
          </div>
        </div>


      </div>
  </section>
