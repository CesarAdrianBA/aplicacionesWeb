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

    <nav>
        <img src="./src/icon/icon_menu.svg" alt="menu" class="menu">

        <div class="navbar-left">
                    <svg xmlns="http://www.w3.org/2000/svg"  xmlns:xlink="http://www.w3.org/1999/xlink" width="100" zoomAndPan="magnify" viewBox="0 0 375 374.999991" height="50" preserveAspectRatio="xMidYMid meet" version="1.0"><defs><clipPath id="e3959828cd"><path d="M 154 48.316406 L 221 48.316406 L 221 133 L 154 133 Z M 154 48.316406 " clip-rule="nonzero"/></clipPath><clipPath id="7cbbe49450"><path d="M 108 168 L 267 168 L 267 326.566406 L 108 326.566406 Z M 108 168 " clip-rule="nonzero"/></clipPath></defs><path fill="#38b6ff" d="M 152.710938 226.605469 C 159.542969 226.605469 166.425781 228.203125 173.761719 231.488281 C 179.832031 234.210938 185.488281 237.734375 190.957031 241.144531 C 200.976562 247.394531 210.441406 253.296875 220.839844 253.296875 C 228.898438 253.296875 237.386719 249.753906 246.800781 242.464844 L 251.195312 239.058594 C 246.125 209.03125 220 186.160156 188.53125 186.160156 C 158.78125 186.160156 133.804688 206.601562 126.882812 234.210938 C 135.59375 229.105469 144.101562 226.605469 152.710938 226.605469 " fill-opacity="1" fill-rule="nonzero"/><g clip-path="url(#e3959828cd)"><path fill="#004aad" d="M 187.417969 132.136719 C 184.671875 132.136719 182.445312 129.914062 182.445312 127.164062 L 182.445312 105.160156 L 187.417969 105.160156 C 200.324219 105.160156 210.820312 94.660156 210.820312 81.753906 C 210.820312 68.847656 200.324219 58.351562 187.417969 58.351562 C 174.515625 58.351562 164.019531 68.847656 164.019531 81.753906 C 164.019531 84.503906 161.792969 86.726562 159.046875 86.726562 C 156.296875 86.726562 154.070312 84.503906 154.070312 81.753906 C 154.070312 63.363281 169.03125 48.402344 187.417969 48.402344 C 205.804688 48.402344 220.765625 63.363281 220.765625 81.753906 C 220.765625 98.457031 208.429688 112.328125 192.390625 114.738281 L 192.390625 127.164062 C 192.390625 129.914062 190.167969 132.136719 187.417969 132.136719 " fill-opacity="1" fill-rule="nonzero"/></g><path fill="#004aad" d="M 297.878906 212.289062 L 246.136719 212.289062 L 246.136719 201.09375 L 297.878906 201.09375 C 298.488281 201.09375 299.285156 200.871094 299.570312 199.796875 C 299.726562 199.203125 299.714844 198.378906 298.753906 197.824219 L 187.417969 133.535156 L 76.082031 197.824219 C 75.550781 198.132812 74.980469 198.722656 75.265625 199.796875 C 75.425781 200.390625 75.847656 201.09375 76.960938 201.09375 L 126.035156 201.09375 L 126.035156 212.289062 L 76.960938 212.289062 C 71.019531 212.289062 65.996094 208.429688 64.457031 202.691406 C 62.921875 196.953125 65.34375 191.101562 70.488281 188.128906 L 187.417969 120.609375 L 304.347656 188.128906 C 309.492188 191.101562 311.917969 196.953125 310.378906 202.691406 C 308.84375 208.429688 303.816406 212.289062 297.878906 212.289062 " fill-opacity="1" fill-rule="nonzero"/><g clip-path="url(#7cbbe49450)"><path fill="#004aad" d="M 260.554688 247.738281 L 254.960938 247.738281 C 254.960938 257.082031 253.070312 265.953125 249.65625 274.03125 C 244.53125 286.144531 235.960938 296.472656 225.175781 303.757812 C 219.785156 307.398438 213.84375 310.28125 207.503906 312.253906 C 201.164062 314.226562 194.425781 315.289062 187.417969 315.289062 C 178.078125 315.289062 169.207031 313.398438 161.128906 309.980469 C 149.015625 304.859375 138.691406 296.289062 131.410156 285.503906 C 127.765625 280.113281 124.886719 274.171875 122.914062 267.828125 C 120.941406 261.484375 119.878906 254.746094 119.878906 247.738281 C 119.878906 238.398438 121.769531 229.527344 125.183594 221.445312 C 130.304688 209.332031 138.878906 199.007812 149.660156 191.722656 C 155.050781 188.078125 160.992188 185.195312 167.332031 183.222656 C 173.671875 181.25 180.410156 180.1875 187.417969 180.1875 C 196.757812 180.1875 205.628906 182.078125 213.707031 185.496094 C 225.820312 190.617188 236.144531 199.191406 243.429688 209.976562 C 247.070312 215.367188 249.949219 221.308594 251.921875 227.648438 C 253.894531 233.992188 254.960938 240.730469 254.960938 247.738281 L 266.148438 247.738281 C 266.148438 236.882812 263.945312 226.507812 259.960938 217.089844 C 253.980469 202.949219 244.003906 190.9375 231.441406 182.449219 C 225.160156 178.203125 218.230469 174.839844 210.828125 172.535156 C 203.429688 170.234375 195.558594 168.996094 187.417969 168.996094 C 176.5625 168.996094 166.195312 171.199219 156.769531 175.1875 C 142.632812 181.167969 130.625 191.144531 122.136719 203.710938 C 117.894531 209.992188 114.527344 216.925781 112.226562 224.324219 C 109.925781 231.726562 108.6875 239.597656 108.6875 247.738281 C 108.6875 258.59375 110.890625 268.964844 114.875 278.390625 C 120.855469 292.53125 130.832031 304.539062 143.394531 313.03125 C 149.675781 317.273438 156.609375 320.636719 164.007812 322.941406 C 171.40625 325.242188 179.277344 326.480469 187.417969 326.480469 C 198.273438 326.480469 208.644531 324.277344 218.066406 320.289062 C 232.203125 314.308594 244.210938 304.332031 252.699219 291.769531 C 256.941406 285.488281 260.308594 278.554688 262.609375 271.152344 C 264.910156 263.75 266.148438 255.878906 266.148438 247.738281 L 260.554688 247.738281 " fill-opacity="1" fill-rule="nonzero"/></g><path fill="#38b6ff" d="M 187.417969 303.757812 C 172.457031 303.757812 158.390625 297.933594 147.8125 287.351562 C 137.234375 276.769531 131.40625 262.703125 131.40625 247.738281 C 131.40625 244.648438 133.914062 242.144531 137.003906 242.144531 C 140.09375 242.144531 142.597656 244.648438 142.597656 247.738281 C 142.597656 272.457031 162.703125 292.566406 187.417969 292.566406 C 190.507812 292.566406 193.015625 295.070312 193.015625 298.164062 C 193.015625 301.253906 190.507812 303.757812 187.417969 303.757812 " fill-opacity="1" fill-rule="nonzero"/></svg>
            <ul>
                <li>
                    <a href="./index.php">Inicio</a>
                </li>
                <li>
                    <a href="./producto.php">Productos</a>
                </li>
                <li>
                    <a href="./contacto.php">Contacto</a>
                </li>
                <li>
                    <a href="./login.php">Log in</a>
                </li>
            </ul>
        </div>
    </nav>
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