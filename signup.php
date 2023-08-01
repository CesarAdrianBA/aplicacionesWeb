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
    
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Sign Up</title>
</head>
<body>

    <?php
        
        include('connection.php');
        $nombre=$correo=$nivel=$password='';
        $db=new Database();

    ?>

    <header class="header">
        <nav>
        <div class="logo">
            <img src="static/svg/MCL.svg" alt="Miss Laundry Logo" width="100">
        </div>
        <input type="checkbox" id="menu-toggle">
        <label for="menu-toggle" class="menu-icon">&#9776;</label>
        <ul class="menu">
            <li><a href="./index.php">Inicio</a></li>
            <li><a href="./about.php">Nosotros</a></li>
            <li><a href="./services.php">Servicios</a></li>
            <li><a href="./index.php#comments">Contacto</a></li>
        </ul>
        </nav>
    </header>

    <div class="login">
        <div class="form-container">

            <h1 class="title">Registro</h1>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" class="form" method="POST" autocomplete="on">
            
                <div>
                    <label for="nombre" class="name">Nombre</label>
                    <input type="text" id="name" name="nombre" placeholder="*Cesar" class="input input-name">
    
                    <label for="email" class="email">Correo</label>
                    <input type="text" id="email" name="correo" placeholder="example@platzi.com" class="input input-email">

                    <label for="nivel" class="nivel">nivel</label>
                    <input type="number" id="nivel" name="nivel" placeholder="0" class="input input-nivel">
    
                    <label for="password" class="password">Contraseña</label>
                    <input type="password" id="password" name="password" placeholder="**********" class="input input-password">
                </div>
                

                <input type="submit" value="Crear" name="Crear" class="primary-button login-button">
            </form>
        </div>
    </div>

    <?php
    
    
    if(isset($_REQUEST['Crear'])){

        print $nombre;

        $nombre=$_POST['nombre'];
        $correo=$_POST['correo'];
        $nivel=$_POST['nivel'];
        $password=$_POST['password'];

        
        $query=$db->connect()->prepare('select correo from usuarios where correo = :correo');
        $query->execute(['correo'=>$correo]);
        $row=$query->fetch(PDO::FETCH_NUM);
        if($query->rowCount()<=0){

            $insert = 'insert into usuarios(nombre,correo,nivel,password) values (:nombre,:correo,:nivel,:password)';
            $insert = $db->connect()->prepare($insert);
            $insert->bindParam('nombre',$nombre, PDO::PARAM_STR,255);
            $insert->bindParam('correo',$correo, PDO::PARAM_STR,255);
            $insert->bindParam('nivel',$nivel, PDO::PARAM_STR);
            $insert->bindParam('password',$password, PDO::PARAM_STR,255);
            $insert->execute();
            echo 'Registro agregado';

        }else if($query->rowCount()>0){
            echo "EL CORREO YA EXISTE!!!!";
        }
    }

    ?>


</body>
</html>