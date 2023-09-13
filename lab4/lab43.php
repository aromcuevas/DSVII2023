<html>
<head>
 <title>laboratorio 4.3</title>
</head>
<body>
<?php 
$elementos = array(2,4,6,8,10,12,14,16,18,21,19,17,15,13,11,9,7,5,3,1);
$valor = 0;
$i = 0;

foreach($elementos as $elemento){
    print "$elemento ";
    if ($elemento >= $valor)
    {
      $valor = $elemento;
      $x = $i;
    }
    $i++;
}

echo "<br/><br/> El valor del elemento mayor es: ".$elementos["$x"].", y su posición es: ".$x.".";
?>
</body>
</html>