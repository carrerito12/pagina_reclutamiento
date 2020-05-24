<?php

						if (isset($_POST['nombre'])) {

							$nombre = $_POST['nombre'];
							$edad = $_POST['edad'];
							$email = $_POST['email'];
							$fecha_nacimiento = $_POST['fecha_nacimiento'];
							$telefono = $_POST['telefono'];
							$fecha_reclutamiento = $_POST['fecha_reclutamiento'];
							$antecedentes = $_POST['antecedentes'];

							$campos = array();

							if($nombre == ""){
								array_push($campos, "El campo nombre no puede estar vacio");
							}

							if ($edad == "" || $edad < 18) {
								array_push($campos, "No puedes ser menor de 18 años para alistarte o dejar este campo vacio");
							}

							if ($email == "" || strpos($email, "@") === false) {
								array_push($campos, "Ingresa un correo electronico valido");
							}

							if ($antecedentes == "" || $antecedentes == "si"){
								array_push($campos, "Si tiene antecedentes penales no puede ingresar");
							}
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
							function validar_fecha_espanol($fecha_reclutamiento){
							$valores = explode('/', $fecha);
							if(count($valores) == 3 && checkdate($valores[1], $valores[0], $valores[2])){
								return true;
						    }
							return false;
						}


							if (count($campos) > 0) {
								echo "<div class='error'>";
								for($i = 0; $i < count($campos); $i++){
									echo "<p>" . $campos[$i] . "</p>" ;
								}

							}else{

							// echo "<div class='done'";
							include 'nuevoregistro.php';
							// echo "</div>";

							}
							echo "</div>";
						}

					?>
