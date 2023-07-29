<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/x-icon" href="static/favicon/favicon.ico" />
  <meta name="viewport" content="width=device-width" />
  <link rel="apple-touch-icon" sizes="180x180" href="static/favicon/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="static/favicon/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="static/favicon/favicon-16x16.png" />
  <link rel="manifest" href="static/favicon/site.webmanifest" />
  <link rel="mask-icon" href="static/favicon/safari-pinned-tab.svg" color="#5bbad5" />
  <meta name="description" content="Proffesional Cleaning, Professional Care" />
  <meta name="msapplication-TileColor" content="#ffffff" />
  <meta name="theme-color" content="#ffffff" />
  <meta name="apple-mobile-web-app-title" content="Laundry Miss Clean" />
  <meta name="application-name" content="Laundry Miss Clean" />
  <meta property="og:title" content="Laundry Miss Clean" />
  <meta property="og:description" content="Professional Cleaning, Professional Care" />
  <meta property="og:locate" content="es_MX" />
  <meta property="og:site_name" content="Laundry Miss Clean" />
  <link rel="stylesheet" href="/CSS/contact.css">
  <title>Contacto</title>
</head>

<body>

  <?php
    
        include('connection.php');
        $email=$comentario='';
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
        <li><a href="/">Inicio</a></li>
        <li><a href="/about.php">Nosotros</a></li>
        <li><a href="/services.php">Servicios</a></li>
        <li><a href="/contact.php">Contacto</a></li>
      </ul>
    </nav>
  </header>

  <section class='services2' id='home'>
    <div class='servicesblack2'>
      <div class='hero-UXQWqU'>
        <div class='hero-wJaf9Q'>
          <div class='hero-wAoSO'>
            <div class='hero-SdxpLg'>
              <div class='hero-2uaIXJ'>
                <p class='hero-8DOqiB'>
                  Contacto
                </p>
                <footer class="hero-jZ4dyc" aria-label="Breadcrumb">
                  <ul class="hero-cnpPJ0">
                    <li class="hero-Y8ODIA">
                      <a href="/" class="hero-d9thsj">
                        <svg aria-hidden="true" class="hero-tUagi3" fill="currentColor" viewBox="0 0 20 20"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                          </path>
                        </svg>
                        Home
                      </a>
                    </li>
                    <li>
                      <div class="hero-5QRwvy">
                        <svg aria-hidden="true" class="hero-yJp38f" fill="currentColor" viewBox="0 0 20 20"
                          xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                        </svg>
                        <a href="/contact.php" class="hero-UDxkVb">Contacto</a>
                      </div>
                    </li>
                  </ul>
                </footer>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <p class='form-Sj5BZM'>Estamos muy felices de que estes
      aquí. Si deseas obtener más información o deseas adquirir alguno de nuestros servicios, pueden llenar el siguiente
      formulario y nos pondremos en contacto contigo lo más pronto posible.</p>
    <div class='form-BSobHw'>
      <div class='form-duFMUp'>
        <div class='form-nCR9fh'>
          <div class='form-7XrRLk'>
            <img src='/static/folded-clothes.png' alt='Dry Clothes' width="500" />
          </div>
          <div class='form-nZWNfr'>
            <form action='' method='POST' id='form'>
              <div class='form-QxJLq8'>
                <div class='form-YS6wp0'>
                  <label for='' class='form-xx8fss'>
                    Nombre
                  </label>
                  <div class='form-kfH3HC'>
                    <div class='form-fP5KXI'>

                    </div>
                    <input name='name' id='name' type='text' class='form-dEUUcM' />
                  </div>
                </div>
                <div class='form-YS6wp0'>
                  <label for='' class='form-xx8fss'>
                    Apellido
                  </label>
                  <div class='form-kfH3HC'>
                    <div class='form-fP5KXI'>

                    </div>
                    <input name='lastname' id='lastname' type='text' class='form-dEUUcM' />
                  </div>
                </div>
              </div>
              <div class='form-uxzbiw'>
                <div class='form-CgD5rG'>
                  <label for='' class='form-xx8fss'>
                    Teléfono
                  </label>
                  <div class='form-kfH3HC'>
                    <div class='form-fP5KXI'>

                    </div>
                    <input name='user' type='text' class='form-dEUUcM' />
                  </div>
                </div>
              </div>
              <div class='form-uxzbiw'>
                <div class='form-CgD5rG'>
                  <label for='' class='form-xx8fss'>
                    Correo Electrónico
                  </label>
                  <div class='form-kfH3HC'>
                    <div class='form-fP5KXI'>

                    </div>
                    <input name='email' id='email' type='text' class='form-dEUUcM' />
                  </div>
                </div>
              </div>
              <label for='' class='form-xx8fss mb-2'>
                Servicio que desea adquirir
              </label>
              <div class='form-yr2lOX'>
                <div>
                  <input class='sr-only' id='option1' type='radio' tabindex='-1' name='option' />

                  <label for='option1' class='form-dupIZ8' tabindex='0'>
                    <span class='form-2pkr42'>

                      Tintorería
                    </span>
                  </label>
                </div>

                <div>
                  <input class='sr-only' id='option2' type='radio' tabindex='-1' name='option' />

                  <label for='option2' class='form-dupIZ8' tabindex='0'>
                    <span class='form-2pkr42'>

                      Limpieza de cuero
                    </span>
                  </label>
                </div>

                <div>
                  <input class='sr-only' id='option3' type='radio' tabindex='-1' name='option' />

                  <label for='option3' class='form-dupIZ8' tabindex='0'>
                    <span class='form-2pkr42'>

                      Limpieza de alfombras
                    </span>
                  </label>
                </div>
              </div>
              <div class='form-uxzbiw' style="margin-top: 10px;">
                <div class='form-CgD5rG'>
                  <button type='submit' name='registrarse' class='form-LQ6Z5D'>
                    Enviar
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class='footer-9XOR03'>
    <div class='footer-xlE1cw'>
      <div class='footer-YYWlWo'>
        <div class='footer-7GIQa3'>
          <img src='/static/svg/MCL.svg' class='footer-8eXE9L' alt='Laundry Miss Clean Logo' />
        </div>
        <div class='footer-loQjmt'>
          <div>
            <h2 class='footer-oTja34'>
              Servicios
            </h2>
            <ul class='footer-x4jPXX'>
              <li class='footer-bzqNFA'>
                <a href='/services' class='footer-tCldzq'>
                  Lavandería
                </a>
              </li>
              <li class='footer-bzqNFA'>
                <a href='/services' class='footer-tCldzq'>
                  Tintorería
                </a>
              </li>
              <li class='footer-bzqNFA'>
                <a href='/services' class='footer-tCldzq'>
                  Limpieza de Alfombras
                </a>
              </li>
              <li class='footer-bzqNFA'>
                <a href='/services' class='footer-tCldzq'>
                  Limpieza de Cuero
                </a>
              </li>
            </ul>
          </div>
          <div>
            <h2 class='footer-oTja34'>
              Siguenos
            </h2>
            <ul class='footer-x4jPXX'>
              <li class='footer-bzqNFA'>
                <a href='https://www.facebook.com' class='footer-tCldzq '>
                  Facebook
                </a>
              </li>
              <li>
                <a href='https://www.twitter.com' class='footer-tCldzq'>
                  Instagram
                </a>
              </li>
            </ul>
          </div>
          <div>
            <h2 class='footer-oTja34'>
              Legal
            </h2>
            <ul class='footer-x4jPXX'>
              <li class='footer-bzqNFA'>
                <a href='https://missclean-laundry.vercel.app' class='footer-tCldzq'>
                  Politica de Privacidad
                </a>
              </li>
              <li>
                <a href='https://missclean-laundry.vercel.app' class='footer-tCldzq'>
                  Terminos &amp; Condiciones
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <hr class='footer-qnfHB0' />
      <div class='footer-ApYPgx'>
        <a href='https://fabianhmz.dev/' class='footer-wdN3JK' target='_blank' rel='noopener noreferrer'>
          Made with ❤️ by Fabian Herrera
        </a>
        &nbsp; &amp; &nbsp;
        <a class='footer-wdN3JK' href='https://boxode.org/' target='_blank' rel='noopener noreferrer'>
          BoxodeHQ
        </a>
      </div>
    </div>
  </footer>

  <?php
    
    if(isset($_REQUEST['Enviar'])){

        $email=$_POST['email'];
        $comentario=$_POST['comentario'];
        $insert = 'insert into comentarios(email,comentario) values (:email,:comentario)';
        $insert = $db->connect()->prepare($insert);
        $insert->bindParam('email',$email, PDO::PARAM_STR,120);
        $insert->bindParam('comentario',$comentario, PDO::PARAM_STR,350);
        $insert->execute();
        echo 'Registro agregado';
    }

    ?>

</body>

</html>