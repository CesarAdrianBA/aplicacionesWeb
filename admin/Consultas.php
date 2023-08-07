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
									<span class="ms-1 d-none d-sm-inline">Agregar Usuario</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="./Cambios.php" class="nav-link align-middle px-0">
									<span class="ms-1 d-none d-sm-inline">Modificar Usuario</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="./Consultas.php" class="nav-link align-middle px-0">
									<span class="ms-1 d-none d-sm-inline">Consultar Usuario</span>
								</a>
							</li>
							<li class="nav-item">
								<a href="./Bajas.php" class="nav-link align-middle px-0">
									<span class="ms-1 d-none d-sm-inline">Eliminar Usuario</span>
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

			<div class="content col-9">
      <h1 class="text-center"> Consulta de Registro</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" autocomplete="on">
        <fieldset class="text-center"><legend>Datos de consultas</legend>
        <label for="correo"> Correo a consultar:</label>
        <input type="texto" name="correo" id="correo">
        <input type="submit" name="consultar" id="consultar" value="Consultar Correo">
        <input type="submit" name="todo" id="todo" value="Mostrar todos los registros">
    </fieldset>
    </form>
        <?php
         include("conexion.php");
         $db=new Database();
         if(isset($_REQUEST['consultar'])){
             $correo=isset($_REQUEST['correo']) ? $_REQUEST['correo'] : null;
             $query=$db->connect()->prepare('select * from clientes where correo = :correo');
             $query->setFetchMode(PDO::FETCH_ASSOC);
             $query->execute(['correo'=>$correo]);
             $row =$query->fetch();

             if($query->rowCount()<=0){
                 echo "<h4>Correo no encontrado</h4>";}
                 else if ($query->rowCount()>0){
              
                 print"<h5>Registro encontrado: </h5>";
                 print"<hr>";
                 print"<table>";

                 print"<tr>";
                     print"<th>id: </th>";
                     print"<th>".$row['Id']."</th>";
                 print"</tr>";

                 
                 print"<tr>";
                     print"<th>nombre: </th>";
                     print"<th>".$row['Nombre']."</th>";
                 print"</tr>";
                 
                 print"<tr>";
                     print"<th>Apellido Paterno: </th>";
                     print"<th>".$row['Apellido_Paterno']."</th>";
                 print"</tr>";

                 
                 print"<tr>";
                     print"<th>Apellido_Materno: </th>";
                     print"<th>".$row['Apellido_Materno']."</th>";
                 print"</tr>";
                 
                 print"<tr>";
                     print"<th>correo: </th>";
                     print"<th>".$row['Correo']."</th>";
                 print"</tr>";
                 
                 print"<tr>";
                     print"<th>Contraseña: </th>";
                     print"<th>".$row['Contraseña']."</th>";
                 print"</tr>";


                 print"</table>";
                 print "<hr/>";
             }//rowCount
         }//button buscar
         if(isset($_REQUEST['todo'])){
            $query = $db->connect()->prepare('select*from clientes');
            $query->setFetchMode(PDO::FETCH_ASSOC);
            $query->execute();
            if($query->rowCount()<0){
                print "NO HAY INFORMACION DISPONIBLE";
            }
            else if ($query->rowCount()>=0){
                print "<br/><br/><hr/>";
                print "USUARIOS REGISTRADOS";
                print "<br/><br/><hr/><hr/>";
                print "<table>";
                print "<tr>";
                print "<th>ID</th>";
                print "<th>Nombre</th>";
                print "<th>Apellido Paterno</th>";
                print "<th>Apellido Materno</th>";
                print "<th>Correo<th>";
                print "<th>Contraseña<th>";
                print "</tr>";
                while($row = $query-> fetch()){
                print "<tr>";
                print "<td>" .$row ['Id']. "</td>";
                print "<td>" .$row ['Nombre']. "</td>";
                print "<td>" .$row ['Apellido_Paterno']. "</td>";
                print "<td>" .$row ['Apellido_Materno']. "</td>";
                print "<td>" .$row ['Correo']. "</td>";
                print "<td>" .$row ['Contraseña']. "</td>";
                print "</tr>";
            
            }
                print "</table>";
            }
         }
         ?>
			</div>


		</div>
	</div>


</body>
</html>
