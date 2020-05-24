<?php
if(isset($_POST['submit'])){
	$nombre = $_POST['nombre'];
	$edad = $_POST['edad'];
	$correo = $_POST['email'];
}


?>
<!DOCTYPE html>
<html>
	
	<head>
		<link href="miestilo.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="estilos/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
			<title>Ingresos</title>

	</head>
	
	<style>
	.w3-allerta {
  	font-family: "Allerta Stencil";
  	opacity: 1000%;
  	color: black;
  	background-color: black;
	}
	.estilosformulario{
		margin-top: 10%;
	}
	.error{
		background-color: red;
		color: white;
		font-size: 12px;
		padding: 15px;
		border-radius: 25px;	
		z-index: 30; 
		position: absolute;
		margin-top: -800px;
		left: 600px;
		margin-right: -500px;
		border-style: solid;
	}
	.segundotitulo{
		margin-top: 20%;
		background-color: black;
		border-radius: 20px;
		padding: 5px;
		color: white;
	}

		
</style>


		<body>

			<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-card" style="width:25%;right:0;background-color:#D1ECEC;">
  <h3 class="w3-bar-item">Menu</h3>
  <a href="consulta.php" class="w3-bar-item w3-button">Consulta</a>
  <a href="modificacion.php" class="w3-bar-item w3-button">Modificacion</a>
  <a href="borrado.php" class="w3-bar-item w3-button">Borrado</a>
</div>



			 <div class="w3-display-container">



			 	<img src="estilos/imagenes/fondo-ingreso.jpg" class="w3-opacity" style="width:100%">
			 	<div class="w3-display-topmiddle w3-container w3-xxlarge w3-text-grey w3-margin-top"><p><div class="segundotitulo">¡Únete a nosotros y cambia tu vida!</div></p></div>
			 	<div class="w3-display-left w3-container">
					   <div class="estilosformulario">
					 
					  <p><a href="index.php"><button class="w3-button w3-block w3-black">Limpiar la pagina</button></a></p>

					  <form action="index.php" method="POST" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin" enctype="multipart/form-data" autocomplete="on">
					

					<h2 class="w3-center">Formulario de ingreso</h2>
					 
					<div class="w3-row w3-section">
					  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
					    <div class="w3-rest">Nombre
					      <input class="w3-input w3-border" name="nombre" type="text" placeholder="Nombre y apellidos" required>

					    </div>
					</div>

					<div class="w3-row w3-section">
					  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-question-circle"></i></div>
					    <div class="w3-rest">Edad
					      <input class="w3-input w3-border" name="edad" type="number" placeholder="Edad" required>
					    </div>
					</div>

					<div class="w3-row w3-section">
					  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
					    <div class="w3-rest">Email
					      <input class="w3-input w3-border" name="email" type="email" placeholder="Email" required>
					    </div>
					</div>

					<div class="w3-row w3-section">
					  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-birthday-cake"></i></div>
					    <div class="w3-rest">Fecha de nacimiento
					      <input class="w3-input w3-border" name="fecha_nacimiento" type="date" placeholder="Fecha de nacimiento" required>
					    </div>
					</div>

					<div class="w3-row w3-section">
					  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
					    <div class="w3-rest">Telefono
					      <input class="w3-input w3-border" name="telefono" type="text" pattern="[0-9]{9}" title="Introduce un numero de telefono valido" placeholder="Telefono" required>
					    </div>
					</div>
					
					<div class="w3-row w3-section">
					  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-calendar-o"></i></div>
					    <div class="w3-rest">Fecha de servicio militar
					      <input class="w3-input w3-border" name="fecha_reclutamiento" type="date" placeholder="Fecha de reclutamiento">
					    </div>
					</div>

					<div class="w3-row w3-section">
					  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-photo"></i></div>
					    <div class="w3-rest">Foto de perfil
					     
					      <div class="interiorregistros">
							
							<!-- El formulario enviara lo seleccionado a la misma pagina, a traves de la funcion-->

							 <p>   Sube una imagen tuya para ponerla de perfil:</p>
							   <input type="file" name="fileToUpload" id="fileToUpload" required>
					    </div>
					</div>

					<div class="w3-row w3-section">
					  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
					    <div class="w3-rest">¿Antecedentes penales?<p></p>
					   
						  <input class="w3-radio" type="radio" id="si" name="antecedentes" value="si" checked>
						  <label for="si">Si</label></p>
						  <p>
						  <input class="w3-radio" type="radio" id="no" name="antecedentes" value="no">
						  <label for="no">No</label></p>
						  
					    </div>
					</div>

					<div class="w3-row w3-section">
					  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-desktop"></i></div>
					    <div class="w3-rest">Provincia</div>
 
        
        <select name='codigoprovincia'> 

            <?php

                  include('conexionlocal.php');

                  // Create connection
                  $conn = mysqli_connect(servername, username, password, dbname); 
                  
                  $consulta = "SELECT * FROM provincias";
                  $resultado = mysqli_query($conn, $consulta) or die(mysqli_error($conn));

                  foreach ($resultado as $opciones) {
                        # code...
                        echo "<option value=" . $opciones['id_provincia'] . ">" .$opciones['Nombre'] . "</option>"; 
                  }
            
            ?>
         </select>

					</div>

					<input type="submit" value="Registrarse" class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding">
					

					</form>
					<?php

						include 'validaciones.php';

					?>
					</div>

				</div>

			 </div>	
			 	
			<div class="w3-container w3-black w3-center w3-allerta">
				
				<div class="w3-display-topmiddle w3-container w3-xxlarge w3-text-black"><p>FICHA DE RECLUTAMIENTO</p></div>
			
			</div>


		</body>
</html>