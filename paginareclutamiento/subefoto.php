<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
	   <link rel="STYLESHEET" type="text/css" href="ejerbiblio.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Antonio Guerra Aguilar-->
  </head>


<body>
<div class="interiorregistros">
<!-- La función llama a ventana modal, si se elige aceptar enviara lo recopilado por el formulario -->
<script>
function Modal_Elige() {
  if (confirm("Si acepta asociara la foto al libro seleccionado")){
 document.getElementById("subefotos").submit(); 
  }
}
</script>
<!-- El formulario enviara lo seleccionado a la misma pagina, a traves de la funcion-->
<form id='subefotos' name='subefotos' method='post' action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' enctype="multipart/form-data">

 <p>   Suba una imagen asociada al libro:</p>
    <input class="registro" type="file" name="fileToUpload" id="fileToUpload">

</form>




<?php
include 'C:\xampp\htdocs\Carpeta_final\Sistema\conexionlocal.php';

function imprime_opciones($result){
	echo "<label for='isbn'>Seleccina un libro para actualizar o subir la foto:</label><br>";
	if (mysqli_num_rows($result) > 0) {
	echo "<select name='id' form='subefotos' onchange='showCustomer(this.value)'>";//form hace referencia al formulario, como si estuviera dentro
echo "<option value='0'>'Seleccione Libro</option>";
    while($row = mysqli_fetch_assoc($result)) {
	echo "<option value='$row[idlibros]'>".$row[titulo]."</option>";
    }
} else {
    echo "0 results";
}
	echo "</select>";

}
echo "<button onclick='Modal_Elige()'>Asociar imagen </button><br>";
 $TituloErr ="";

$sql = "SELECT idlibros, titulo  FROM libros";  
$result = mysqli_query($con, $sql);

imprime_opciones($result);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["id"])) {
	  $TituloErr = "Se requiere el Titulo";
	  echo "<h2>$TituloErr</h2>";
  } else {
	  
$Directorio = "../img/";
$Ruta_arch = $Directorio . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$TipodeArchivo = strtolower(pathinfo($Ruta_arch,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "El archivo es una imagen - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "El archivo no es una imagen.";
        $uploadOk = 0;
    }
}
// Chequea si existe el archivo
if (file_exists($Ruta_arch)) {
    echo "Ya existe el archivo.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "El archivo pesa mucho.";
    $uploadOk = 0;
}
// Allow certain file formats
if($TipodeArchivo != "jpg" && $TipodeArchivo != "png" && $TipodeArchivo != "jpeg"
&& $TipodeArchivo != "gif" ) {
    echo "Solo se permite extensiones de archivo JPG, JPEG, PNG & GIF.";
    $uploadOk = 0;
}

$Arch_mime=mime_content_type($_FILES["fileToUpload"]["tmp_name"]);
if (($Arch_mime!='image/jpeg') Or ($Arch_mime!='image/gif') Or ($Arch_mime!='image/png')){
	$uploadOk = 0;
	echo "La extension original no está permitida";
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "El archivo no ha sido subido.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $Ruta_arch)) {
		 
		$var=  basename( $_FILES["fileToUpload"]["name"]);
		$id = $_POST["id"];
		$sql = "UPDATE libros SET nomimagen= '$var' where idlibros=$id"; 
		$result = mysqli_query($con, $sql);
        echo "El archivo ". basename( $_FILES["fileToUpload"]["name"]). " ha sido correctamente subido.";
			echo "<h2>El libro con identificador: ".$id ." ha sido modificado</h2>";
    } else {
        echo "Se ha producido un error en la carga del archivo.";
    }
}

  }
}
mysqli_close($con);
?>
</div>
</body>
</html>