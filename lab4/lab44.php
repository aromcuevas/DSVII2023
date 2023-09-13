<?php
  $valor = $_POST['valor'];
  if ($valor != "")
  {
    if ($valor % 2 == 0 )
    {
      $numeros[] = $valor;
      print_r($numeros);
      header('lab44.html');
    }
    else
    {
      echo "Introduzca un valor par.";
    }
  }
  else
  {
    echo "Favor coloque el valor";
  }
?>