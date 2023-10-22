<?php
  session_start();
?>
<HTML LANG="es">
<HEAD>
  <TITLE>Laboratorio 11.1</TITLE>
  <LINK REL="stylesheet" TYPE="text/css" HREF="css/estilo.css">
</HEAD>
<BODY>
<?php
if(isset($_SESSION["usuario_valido"])){
?>
<H1>Consulta de noticias</H1>
<?php
require_once("class/noticias.php");

$obj_noticia = new noticia();
$noticias = $obj_noticia->consultar_noticias();

$nfilas=count($noticias);

print ("Mostrando noticas 1 a $nfilas de un total de 5. [Anterior | Siguiente ] <br/><br/>");

if ($nfilas > 0){
  print ("<table>\n");
  print ("<tr>\n");
  print ("<th>Titulo</th>\n");
  print ("<th>Texto</th>\n");
  print ("<th>Categoria</th>\n");
  print ("<th>Fecha</th>\n");
  print ("<th>Imagen</th>\n");
  print ("</tr>\n");

  foreach ($noticias as $resultado){
    print ("<tr>\n"); 
    print ("<td>" . $resultado['titulo'] . "</td>\n");
    print ("<td>" . $resultado['texto'] . "</td>\n");
    print ("<td>" . $resultado['categoria'] . "</td>\n");
    print ("<td>" . date("j/n/Y",strtotime($resultado['fecha'])) . "</td>\n");

    if ($resultado['imagen'] != ""){
      print ("<td><a target='_blank' href='img/" . $resultado['imagen']  . 
      "'><img border='0' src='img/iconotexto.gif'></a></td>\n");
    }
    else{       
      print ("<td>&nbsp;</td>\n");
    }
    print ("</tr>\n");
  }
  print ("</table>\n");
}
else{
  print ("No hay noticias disponibles");
}
print ("<p>[ <a href='login.php'>Menu principal</a> ]</p>\n");
}
else{
  print ("<br><br>\n");
  print ("<p align='center'>Acceso no autorizado</p>\n");
  print ("<p align='center'>[ <a href='login.php' target='_top'>Conectar</a> ]</p>\n");
}
?>
</BODY>
</HTML>