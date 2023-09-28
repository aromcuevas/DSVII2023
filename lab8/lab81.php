<?php

if(isset($_POST['valor']))
{
  $valor = $_POST['valor'];
  if ($valor != ""){
    include('class_lib.php');

    $v = $_POST['valor'];
    $venta = new Ventas($v);
    $respuesta=$venta->calcular();
  
    echo "$respuesta";
  }
  else
  {
    echo "Favor coloque el valor";
  }
}
else
{
?>

<!DOCTYPE html>
<html>
<head>
  <title>Laboratorio 8.1</title>
  <meta charset=UTF-8">
</head>
<body>
  <form name="formularioDatos" method="post" action="lab81.php">
    <h4> CALCULO DEL DESEMPEÑO DE VENTAS EN POO</h4>
    Introduzca el valor de desempeño de ventas, un porcentaje entre 0 y 100: 
    <input type="text" name="valor" value="">
    <br/> <br/>
    <input value="Enviar" type="submit" />
  </form>
</body>
</html>

<?php
}
?>