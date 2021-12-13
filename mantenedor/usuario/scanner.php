<!DOCTYPE html>
<html lang="en">
<head>

    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Ingreso</title>


</head>
<body>

  <div class="container">
    
    <div class="row">
        <div class="col-md-6">
            <video id="preview" width="100%"></video>
        </div>

        <div class="col-md-6">
            <label>SCAN QR CODE</label>
            <input type="text" name="text" id=" " readonny-"" placeholder= "scan qecode" class="form-control">
        </div>

   </div>

  </div>

  <script>

      let scanner = new Instascan.Scanner({ video: document.getElementById('preview')});
      Instascan.Camera.getCameras().then(function(cameras){
          if(cameras.length > 0){
              scanner.start(cameras[0]);
          } else {
                  alert('no cameras found');
              }
          }).catch(function(e){
            console.error(e);
        });

        scanner.addListener('scan',function(c){

            document.getElementById('text').value=c;
        });
      


  </script>
    
</body>
</html>