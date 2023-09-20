<!DOCTYPE html>
<html>
<head>
  <title>Laboratorio 4.4</title>
  <meta charset=UTF-8">
</head>
<h4> ARREGLO CON NUMEROS PARES </h4>
<body>
<?php 
session_start();
if(!$_POST)
{ 
  include ("lab44.html");
}
else if(isset($_POST['valor']))
{
  $valor = $_POST['valor'];
  if ($valor != "")
  {
    if ($valor % 2 == 0 )
    {
      if (isset($_SESSION['numeros'])){
      	$numeros = $_SESSION['numeros'];
      }
      $numeros[] = $valor;
      $_SESSION['numeros'] = $numeros;
      include ("lab44.html");
      foreach ($numeros as $numero){
	print "$numero ";
      }
    }
    else
    {
      include ("lab44.html");
      echo "Introduzca un valor par.";
    }
  }
  else
  {
    include ("lab44.html");
    echo "Favor coloque el valor.";
  }
}
?>
</body>
</html>