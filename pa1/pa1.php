<?php
  $valor = $_POST['valor'];
  if ($valor != "")
  {
    if ($valor % 2 == 0 )
    {
      $i=1;
      $j=1;
      $n=$valor;
      $sum = 0;
      echo "<table border=1 width=100 cellspacing=0><tr>";
      while ($j <= $n)
      {
        if ($i == 1 || $i == $n || $j == 1 || $j == $n)
        {
	  $r = rand(1, 100);
	  echo "<td>" .$r. "</td>";
	  $sum = $sum + $r;
        }
	else{
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
      echo "<br/><br/> Suma de los valores del borde de la matriz: " .$sum;
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