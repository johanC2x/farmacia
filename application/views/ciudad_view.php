

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
 <script type="text/javascript">
 $(document).ready(function() {
 $("#provincia").change(function() {
 $("#provincia option:selected").each(function() {
 provincia = $('#provincia').val();
 $.post("http://localhost/posint/public/ciudad/llena_localidades", {
 provincia : provincia
 }, function(datos) {
 $("#localidad").html(datos);
 });
 });
 })
 });
 </script>
</head>
<body>
 <select name="provincia" id="provincia">
 	  <option value="">Selecciona tu Poblacion</option>
 <?php 
 foreach($provincias as $fila)
 {
 ?>
 <option value="<?=$fila -> idprovincia ?>"><?=$fila -> provincia ?></option>
 <?php
 }
 ?> 
 </select>
 
 <select name="localidad" id="localidad">
     <option value="">Selecciona tu provincía</option>
    </select>
</body>
</html>