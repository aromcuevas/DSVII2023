<?php
  session_start();
?>
<HTML LANG="es">
<HEAD>
  <TITLE>Laboratorio 9.2</TITLE>
  <LINK REL="stylesheet" TYPE="text/css" HREF="css/estilo.css">
</HEAD>
<BODY>
<?php
if(isset($_SESSION["usuario_valido"])){
?>
<H1>Consulta de noticias</H1>
<FORM NAME="FormFiltro" METHOD="post" ACTION=#lab92.php">
<BR/>
Filtrar por: <SELECT NAME="campos">
<OPTION VALUE="texto" SELECTED>Descripcion
<OPTION VALUE="titulo">Titulo
<OPTION VALUE="categoria">Categoria
</SELECT>
con el valor
<INPUT TYPE="text" NAME="valor">
<INPUT NAME="ConsultarFiltro" VALUE="Filtrar Datos" TYPE="submit" />
<INPUT NAME="ConsultarTodos" VALUE="Ver todos" TYPE="submit" />
</FORM>

<?php
require_once("class/noticias.php");

$obj_noticia = new noticia();
$noticias = $obj_noticia->consultar_noticias();

if(array_key_exists('ConsultarTodos', $_POST)){
  $obj_noticia = new noticia();
  $noticias_new = $obj_noticia->consultar_noticias();
}

if(array_key_exists('ConsultarFiltro', $_POST)){
  $obj_noticia = new noticia();
  $noticias = $obj_noticia->consultar_noticias_filtro($_REQUEST['campos'],$_REQUEST['valor']);
}

$nfilas=count($noticias);

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