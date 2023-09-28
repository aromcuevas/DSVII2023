<?php 
if(!empty($_POST))
{
  include('class_lib.php');

  $n = $_POST['valor'];
  $numero = new Numeros($n);
  $factorial=$numero->operar();
  
  echo "<br/> El factorial de ". $n . " es ". $factorial . ".";
}
else
{
?>

<!DOCTYPE html>
<html>
<head>
  <title>Laboratorio 8.2</title>
  <meta charset=UTF-8">
</head>
<body>
  <form name="formularioDatos" method="post" action="lab82.php">
    <h4> CALCULO DEL FACTORIAL DE UN NUMERO EN POO</h4>
    Introduzca un numero para calcular su factorial: 
    <input type="text" name="valor" value="">
    <br/> <br/>
    <input value="Calcular" type="submit" />
  </form>
</body>
</html>

<?php
}
?>