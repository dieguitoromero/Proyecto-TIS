<html>

<head>
  <title>QRCode Scanner</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script type="text/javascript" src="js/html5-qrcode.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="index2.php"><img style="height:50px;" src="../imagenes/logo_horizontal_color_sinfondo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-md-end me-5" id="navbarNav">
        <ul class="navbar-nav ">
          <nav aria-label="breadcrumb me-5 ">
            <ol class="breadcrumb ">
              <li class="breadcrumb-item mt-2"><a href="index2.php">Administrador</a></li>
              <li class="breadcrumb-item active mt-2">Scanear Codigo Qr</li>
            </ol>
          </nav>

          <li class="nav-item ms-5">
            <a class="btn btn-danger" href="js/salir.php">Cerrar sesion</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="row justifity-content-center text-center mt-5">
      <h2 class="mb-5">Escanee el codigo para registrar la entrada</h2>
      <video id="preview" width='400' height='300'></video>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-6">
            <form action="funciones/ingreso.php" method="POST" class="form-control text-center mt-3">
              <label>SCAN QR CODE</label>
              <input type="text" name="text" id="text" readonyy="" placeholder="scan qrcode" class="form-control">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>



  <script type="text/javascript">
    let scanner = new Instascan.Scanner({
      video: document.getElementById('preview')
    });

    scanner.addListener('scan', function(content) {
      document.getElementById('text').value = content;
      document.forms[0].submit();
    });

    Instascan.Camera.getCameras().then(function(cameras) {
      if (cameras.length > 0) {
        scanner.start(cameras[0]);
      } else {
        console.error('No cameras found.');
      }
    }).catch(function(e) {
      console.error(e);
    });
  </script>
</body>

</html>