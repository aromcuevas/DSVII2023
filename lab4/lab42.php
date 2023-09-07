<?php 
  $n = $_POST['valor'];
    $i=1;
    $nx=1;
    while ($i <= $n)
    {	
      if ($i == $n)
      {
	print ("$i");
      }
      else
      {
	print ("$i * ");
       }
	$nx = $i * $nx;
	$i++;
    }
    print (" = $nx")
?>