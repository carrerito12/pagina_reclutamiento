<!DOCTYPE html>
<html>
	
	<head>
		<link href="miestilo.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="estilos/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
			<title>Consulta</title>

	</head>
		
			<style type="text/css">
				.w3-card-4{
					margin-top: 5%;
					margin-left: 25%;
					margin-bottom: 5%;
				}
								
			</style>

		<body>

<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
  <button onclick="w3_close()" class="w3-bar-item w3-large">Cerrar &times;</button>
  <a href="index.php" class="w3-bar-item w3-button">Pagina principal</a>
  <a href="modificacion.php" class="w3-bar-item w3-button">Modificacion</a>
  <a href="borrado.php" class="w3-bar-item w3-button">Borrado</a>
</div>

<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">☰</button>
  <div class="w3-container">
    <h1>Soldados registrados actualmente</h1>
  </div>
</div>

			<?php


			include 'conexionlocal.php';

			// Create connection
			$conn = new mysqli(servername, username, password, dbname);
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			}
			$sql = "SELECT * from abastecimiento";
			$result = $conn->query($sql);
			
			?>
			
			

			<?php

			if ($result->num_rows > 0) {
			    // output data of each row
			    
			    while($row = $result->fetch_assoc()) {
			
			?>   
			       <div class="w3-container">
			       	<div class="w3-card-4" style="width:50%">
			       		 <div class="w3-container w3-center">
			           
			                <strong>Foto de perfil :<br>  <img src="uploads/<?=$row['fotos']?>" alt="fotoperfil" style="width:50%"><br>
			                <strong><p>Nº de identificacion : </strong><?=$row['id_soldado']?><br>
			                <strong>Nombre: </strong><?=$row['nombre']?><br>
			                <strong>Edad: </strong><?=$row['edad']?><br>
			                <strong>Email: </strong><?=$row['email']?><br>
			                <strong>Fecha de nacimiento: </strong><?=$row['fecha_nacimiento']?><br>
			                <strong>Nº de telefono: </strong><?=$row['telefono']?><br>
			                <strong>Fecha de reclutamiento: </strong><?=$row['fecha_reclutamiento']?><br>
			                <strong>¿Antecedentes?: </strong><?=$row['antecedentes']?><br>
			                <strong>Codigo de provincia: </strong><?=$row['cod_provincia']?><br>
			                
			               <!--  <a href="borrarVehiculo.php?idCoche=<?=$row['idCoche']?>">Borrar</a></p> -->
			            
			            </div>
  					</div>
				</div>
			         
				<?php
			    
			    }
			    
			} else {
			    echo "0 results";
			}
			$conn->close();
			    ?>
			    <script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>
			
		</body>
</html>