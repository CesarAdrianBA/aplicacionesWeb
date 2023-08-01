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
    <title>Log in</title>
</head>
<body>

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

    <div class="login container container-fluid login-container">
      <div class="form-container">
        <img src="./src/Logo/logo_yard_sale.svg" alt="logo" class="logo">
  
        <form action="/" class="form">
          <label for="email" class="label">Email</label>
          <input type="text" id="email" placeholder="Correo@example.cm" class="input input-email">
  
          <label for="password" class="label">Password</label>
          <input type="password" id="password" placeholder="*********" class="input input-password">
  
          <input type="submit" value="Log in" class="primary-button login-button">
          <a href="/">Olvide mi Contraseña</a>
        </form>
  
        <a href="./signup.php"><button class="secondary-button signup-button">Sign up</button></a>
      </div>
    </div>
  </body>
</html>