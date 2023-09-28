<html>
<head>
 <title>laboratorio 8.3</title>
</head>
<body>
<?php 

include('class_lib.php');

$ele = array(2,4,6,8,10,12,14,16,18,21,19,17,15,13,11,9,7,5,3,1);

$numero = new Numeros2($ele);
$elementos=$numero->buscar_elemento();
$indice=$numero->buscar_indice();

echo "<br/> El valor del elemento mayor es: ".$elementos.", y su posición es: ".$indice.".";

?>
</body>
</html>