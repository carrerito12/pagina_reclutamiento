<!DOCTYPE html>
<html>
	
	<head>
		<link href="miestilo.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="w3.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
			<title> </title>

	</head>
		
			<style type="text/css">

				body{
				
				}

			</style>

		<body>
			 <label class="w3-text-teal">codigo de provincia</label>
        
        <select name='codprovincia'> 

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

			<?php



			?>
			
		</body>
</html>