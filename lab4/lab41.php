<?php
  $valor = $_POST['valor'];
  if ($valor != "")
  {
    if ($valor >= 80 )
    {
      echo "Las ventas superan el 80% <br/> <img src='green.png'>";
    }
    else if ($valor >= 50 )
    {
      echo "Las ventas están entre 50% y 79% <br/> <img src='yellow.png'>";
    }
    else
    {
      echo "Las ventas no superan el 50% <br/> <img src='red.png'>";
    }
  }
  else
  {
    echo "Favor coloque el valor";
  }
 ?>