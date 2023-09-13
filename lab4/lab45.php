<?php
  $valor = $_POST['valor'];
  if ($valor != "")
  {
    if ($valor % 2 == 0 )
    {
      $i=1;
      $j=1;
      $n=$valor;
      echo "<table border=1 cellspacing=0><tr>";
      while ($j <= $n)
      {
        if ($i == $j)
        {
	  echo "<td>1</td>";
        }
        else
        {
	  echo "<td>0</td>";
        }
        if ($i == $n)
	{
	  $i=0;
          $j++;
	  echo "<tr/>";
	}
	$i++;
      }
      echo "</table>";
    }
    else
    {
      echo "Introduzca un valor par.";
    }
  }
  else
  {
    echo "Favor coloque el valor.";
  }
?>