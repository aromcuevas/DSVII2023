<?php
if(array_key_exists('enviar', $_POST)){
  $expire=time()+60*5;
  setcookie("user", $_REQUEST['visitante'] , $expire);
  header("Refres:0");
}
?>
<html lang="es">
<head>
  <title>Laboratorio 13</title>
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
<h1>Creaci�n de Cookies</h1>
<h2>La cookie "User" tendr� solo 5 minutos de duraci�n</h2>
<?php
if(isset($_COOKIE["user"])){
  print("<br/>Hola <b>".$_COOKIE["user"]."</b> gracias por visitar nuestro sitio web<br/>");
}else{
?>
<form name="formcookie" method="post" action="lab132.php">
<br/>Hola, primera vez que te vemos por nuestro sitio web �C�mo te llamas?
<input type="text" name="visitante">
<input name="enviar" value="Gracias por intentificate" type="submit" /><br/>
<?php
}
?>
<br/><a href="lab133.php">Continuar...</a>
</body>
</html>