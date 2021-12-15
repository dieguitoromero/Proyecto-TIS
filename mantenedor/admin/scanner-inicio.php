<html>
  <head>
    <title>QRCode Scanner</title> 
     <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript" src="js/html5-qrcode.min.js"></script>
  </head>
  <body>

    <div class="container">
      <div class="row">

        <div class="col-md-6">
          
          <video id="preview"></video>

        </div>

        <div class="col-md-6">

        <form action="funciones/ingreso.php" method="post" class="form-control">

          <label >SCAN QR CODE</label>
          <input type="text" name="text" id="text" readonyy="" placeholder="scan qrcode" class="form-control"  >
            
        </form>
          
        </div>
      
      </div>
      
    </div>
    
    <script type="text/javascript">
      let scanner = new Instascan.Scanner({
        video: document.getElementById('preview')
      });

      scanner.addListener('scan', function (content) {
        document.getElementById('text').value=content;
        document.forms[0].submit();
      });

      Instascan.Camera.getCameras().then(function (cameras) {
        if (cameras.length > 0) {
          scanner.start(cameras[0]);
        } else {
          console.error('No cameras found.');
        }
      }).catch(function (e) {
        console.error(e);
      });
    </script>
  </body>
</html>