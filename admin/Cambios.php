<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

		<link rel="stylesheet" href="../CSS/style.css">
		<title>Registros</title>
	
</head>
<body>
	<?php
		include("conexion.php");
		$Nombre = $Apellido_Paterno = $Apellido_Materno = $Correo = $Contrasena = "";
		$db = new Database();
		$query = $db->connect()->prepare('SELECT MAX(id) AS Id FROM clientes');
		$query->execute();
		$row = $query->fetch(PDO::FETCH_ASSOC);
		$numero = $row['Id'];
		$numero++;
	?>


	<div class="container-fluid">
		<div class="row content">
			<div class="col-3 px-0 bg-dark">
				<div class="d-flex flex-column align-items-center px-3 pt-2 text-white min-vh-100">
						<a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
							<span class="fs-5 d-none d-sm-inline">Registro</span>
						</a>						
						<ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
							<li class="nav-item">
								<a href="./Altas.php" class="nav-link align-middle px-0">
									<span class="ms-1 d-none d-sm-inline">Agregar</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="./Cambios.php" class="nav-link align-middle px-0">
									<span class="ms-1 d-none d-sm-inline">Modificar</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="./Consultas.php" class="nav-link align-middle px-0">
									<span class="ms-1 d-none d-sm-inline">Consultar</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="./Bajas.php" class="nav-link align-middle px-0">
									<span class="ms-1 d-none d-sm-inline">Eliminar</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="../index.php" class="nav-link align-middle px-0">
									<span class="ms-1 d-none d-sm-inline">Salir</span>
								</a>
							</li>
						</ul>
				</div>
			</div>

			<div class="container container-fluid login-container col-9">
				<div class="row d-flex justify-content-center">
					<div class="col-8 form-crud-container text-center">
						<form class="text-center" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
							<fieldset  class="text-center"> 
								<legend class=text-center> Modificar usuarios</legend>
									<label class="crud-subtitle" for="Correo">Correo:</label>
									<input type= "text" class="input-crud" name="Correo" id="Correo" value="<?php echo $Correo; ?>">
									<input type= "submit" class="signup-button button-login border-button" name="buscar" id="buscar" value="Buscar">
							<br>


							</fieldset>
						</form>
					</div>
				</div>
				
				<?php
					if (isset($_REQUEST['buscar'])){
					$Correo=isset($_REQUEST['Correo']) ? $_REQUEST['Correo']: null;
					$query=$db->connect()->prepare("select * from clientes where Correo = :Correo");
					$query->setFetchMode(PDO::FETCH_ASSOC);
					$query ->execute(['Correo'=>$Correo]);
					$row = $query ->fetch();
					

					if($query->rowCount()<=0){
						echo "Correo no encontrado";
					}
					elseif($query->rowCount()>=0){
						echo '<form action="" method="post" autocomplete="on">';

						echo '<label class="crud-subtitle">Nombre:</label>';
						echo '<input type="text" class="input-crud" name="Nombre" value="' .$row['Nombre'].'"  size="20"><br/><br/>';


						echo '<label class="crud-subtitle">Apellido_Paterno:</label>';
						echo '<input type="text" class="input-crud" name="Apellido_Paterno"  value="' .$row['Apellido_Paterno'].'" size="20" autofocus><br/><br/>';


						echo '<label class="crud-subtitle">Apellido_Materno:</label>';
						echo '<input type="text" class="input-crud" name="Apellido_Materno"  value="' .$row['Apellido_Materno'].'" size="20" autofocus><br/><br/>';


						echo '<label class="crud-subtitle">correo:</label>';
						echo '<input type="text" class="input-crud" name="Correo" value="' .$row['Correo'].'"><br/><br/>';


						echo '<label class="crud-subtitle">Contraseñ:</label>';
						echo '<input type="password" class="input-crud" name="Contrasena" value="' .$row['Contraseña'].'"><br/><br/>';


						echo '<input type="submit" class="signup-button button-login border-button" name="cambiar" id="cambiar" value="Cambiar">';
						
						echo '</form>';
					}

					}
					if (isset($_REQUEST['cambiar'])) {
						$Nombre = $_POST['Nombre'];
						$Apellido_Paterno = $_POST['Apellido_Paterno'];
						$Apellido_Materno = $_POST['Apellido_Materno'];
						$Correo = $_POST['Correo'];
						$Contrasena = $_POST['Contrasena'];
					
						$sql = "update clientes SET Nombre=?,Apellido_Paterno=?,Apellido_Materno=?,Contraseña=?,Correo=? WHERE Correo=?";
						$stmt = $db->connect()->prepare($sql);
						$stmt->execute([$Nombre, $Apellido_Paterno, $Apellido_Materno, $Contrasena, $Correo, $Correo]);
						echo "Los datos se actualizaron correctamente!!";
					}
					

				?>
			</div>

		</div>
	</div>

		<?php
			if (isset($_POST['Enviar'])) {
					$Nombre = $_POST['Nombre'];
					$Apellido_Paterno = $_POST['Apellido_Paterno'];
					$Apellido_Materno = $_POST['Apellido_Materno'];
					$Correo = $_POST['Correo'];
					$Contrasena = $_POST['Contrasena'];

					// Asumiendo que $db representa la conexión a la base de datos
					$insert = "INSERT INTO clientes (Nombre, Apellido_Paterno, Apellido_Materno, Correo, Contrasena) VALUES (:Nombre, :Apellido_Paterno, :Apellido_Materno, :Correo, :Contrasena)";
					$insertQuery = $db->connect()->prepare($insert);

					// Asignar los valores de los parámetros
					$insertQuery->bindParam(':Nombre', $Nombre, PDO::PARAM_STR, 80);
					$insertQuery->bindParam(':Apellido_Paterno', $Apellido_Paterno, PDO::PARAM_STR, 50);
					$insertQuery->bindParam(':Apellido_Materno', $Apellido_Materno, PDO::PARAM_STR, 50);
					$insertQuery->bindParam(':Correo', $Correo, PDO::PARAM_STR, 120);
					$insertQuery->bindParam(':Contrasena', $Contrasena, PDO::PARAM_STR, 100);

					// Ejecutar la consulta de inserción
					$insertQuery->execute();

					// Verificar si la inserción fue exitosa
					if (!$insertQuery) {
							echo "Error: ", $insertQuery->errorInfo();
					} else {
							echo "Registro agregado!!!";
					}
			}
		?>

</body>
</html>