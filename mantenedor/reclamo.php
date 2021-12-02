<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="formulario">
    <input type="hidden" name="folio" id="folio">
    <br>
   <select name="tipo_opinion">
       <option value="Opinión">OPINIÓN</option>
       <option value="Contribucion">CONTRIBUCIÓN</option>
       <option value="Reclamo">RECLAMO</option>
       <option value="Denuncia">DENUNCIA</option>
       <option value="Felicitacion">FELICITACION</option>

   </select> 
   <br>
        <label>INGRESE SU COMENTARIO</label>
        <br>
        <textarea name="parrafo" id="" cols="50" rows="5"></textarea>
        <br>
        <label for="">¿De que  estacionamiento desea hacer comentario?</label>
        <br>
    <select name="tipo_dep">
        <option value="d1">Estacionamiento Edificio Central</option>
        <option value="d1">Estacionamiento Edificio Central</option>
        <option value="d1">Estacionamiento Edificio Central</option>
        <option value="d1">Estacionamiento Edificio Central</option>
        <option value="d1">Estacionamiento Edificio Central</option>
        <option value="d1">Estacionamiento Edificio Central</option>
        <option value="d1">Estacionamiento Edificio Central</option>
        <option value="d1">Estacionamiento Edificio Central</option>
        
    </select>
    <br>
        <input type="file" name="imagen" id="imagen">
        <br>
        <input type="submit" name="enviar">
</div>
</body>
</html>