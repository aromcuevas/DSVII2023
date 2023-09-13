<?php
if (is_uploaded_file ($_FILES['nombre_archivo_cliente']['tmp_name']))
{
  $nombreDirectorio = "archivos/";
  $nombrearchivo = $_FILES['nombre_archivo_cliente']['name'];
  $nombreCompleto = $nombreDirectorio . $nombrearchivo;
  $pesoArchivo = $_FILES['nombre_archivo_cliente']['size'];
  $tipoArchivo = $_FILES['nombre_archivo_cliente']['type'];

  if($pesoArchivo <= 1000000){
    if($tipoArchivo == "image/jpg" || $tipoArchivo == "image/jpeg" || $tipoArchivo == "image/gif" || $tipoArchivo == "image/png"){
      if (is_file($nombreCompleto))
      {
      	$idUnico = time();
      	$nombrearchivo = $idUnico . "-" . $nombrearchivo;
      	  echo "Archivo repetido, se cambiara el nombre a $nombrearchivo <br><br>";
      }

      move_uploaded_file ($_FILES['nombre_archivo_cliente']['tmp_name'],
      $nombreDirectorio . $nombrearchivo);

      echo "El archivo se ha subido satisfactoriamente al directorio $nombreDirectorio <br>";
    }
    else
      echo "El formato de archivo no es válido "; 
  }
  else
    echo "El peso de archivo excede a 1MB "; 
}
else
  echo "No se ha podido subir el archivo <br>";
?>