<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Miss Clean Laundry</title>
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
  <link rel="stylesheet" href="./CSS/style.css" />
</head>

<body>

<!--conexion a base de datos-->
  <?php
      
      include('connection.php');
      $email=$comentario='';
      $db=new Database();

  ?>
<!-- /conexion a base de datos  -->

  <header class="header">
    <nav>
      <div class="logo">
        <img src="./static/svg/MCL.svg" alt="Miss Laundry Logo" width="100">
      </div>
      <input type="checkbox" id="menu-toggle">
      <label for="menu-toggle" class="menu-icon">&#9776;</label>
      <ul class="menu">
        <li><a href="./index.php">Inicio</a></li>
        <li><a href="./about.php">Nosotros</a></li>
        <li><a href="./services.php">Servicios</a></li>
        <li><a href="./index.php#comments">Contacto</a></li>
        <li><a href="./login.php">Log in</a></li>
      </ul>
    </nav>
  </header>

  <section class='laundry' id='home'>
    <div class='laundry-black'>
      <div class='laundry-Ch6Q9i'>
        <div class='laundry-spn2H2'>
          <div class='laundry-AWKiao'>
            <div class='laundry-T63LFq'>
              <div class='laundry-ps4EEI'>
                <p class='primary-title'>
                  Limpieza profesional.
                  <span class='secondary-title'>Cuidado personalizado.</span>
                  <span class='subtitle'>Hacemos que tus prendas luzcan increíbles.</span>
                </p>
                <div class='border-button'>
                  <a href="/about" class='about-link link link--arrowed'>
                    Saber más
                    <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                      viewBox="0 0 32 32">
                      <g fill="none" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"
                        stroke-miterlimit="10">
                        <path class="arrow-icon--arrow" d="M16.14 9.93L22.21 16l-6.07 6.07M8.23 16h13.98"></path>
                      </g>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class='feel'>
      <div class='feel-hero'>
        <div class='feel-05RGdi'>
          <div class='feel-2wVgT6'>
            <div class='feel-OIhezP'>
              <h3 class='feel-VNYeC6'>
                Sientete cómodo con nosotros.
              </h3>
              <p class='feel-AvFNg5'>
                Está en la dirección correcta para una limpieza profesional.
                Siempre utilizamos las últimas tecnologías y métodos de
                limpieza y producimos las soluciones más actualizadas para
                manchas o telas sensibles.
              </p>
              <img class='divider' src='./static/divider.png' alt='Divider' />
              <div class='feel-by7lvK'>
                <img class='five-stars' src='./static/svg/five-stars.svg' alt='Customer' width={50} height={50} />
                <div class='feel-B61sTw'>
                  <h4 class='feel-tgVP4P'>
                    100% de satisfacción
                  </h4>
                  <p class='feel-A6EdiW'>
                    No solo limpiamos por ti, nos preocupamos por ti. Sacamos
                    lo mejor de cada servicio.
                  </p>
                </div>
              </div>
              <div class='feel-43huuL'>
                <img class='five-stars' src='./static/svg/medal.svg' alt='Medal' width={50} height={50} />
                <div class='feel-B61sTw'>
                  <h4 class='feel-tgVP4P'>
                    Mejor Calidad
                  </h4>
                  <p class='feel-A6EdiW'>
                    Trabajamos con máquinas de última tecnología. Estamos
                    encantados de proporcionarle ropa impecable.
                  </p>
                </div>
              </div>
              <div class='feel-Y0XDT2'>
                <a href='/about' class='feel-9V3X5c'>
                  Conocenos
                </a>
              </div>
            </div>
          </div>
          <div class='feel-1hiVHl'>
            <div class='feel-KP0v5x'>
              <div class='feel-nojBNA'>
                <img class='dry-clothes' src='./static/dry-clothes.png' alt='Tech' width={600} height={600} />
                <div class='feel-fbEFIA'></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class='services' id='services'>
    <div class='services-black'>
      <div class='services-YWo4aP'>
        <div class='services-U6do2C'>
          <img class='dry-cleaner' src='./static/dry-cleaner.png' alt='' />
          <div class='services-zv3zck'>
            <h5 class='services-QUx37W'>
              Tintoreria
            </h5>
            <p class='services-FdadvS'>
              Servicio confiable y de calidad para el cuidado de tus prendas. Ya
              sea que necesites limpiar un traje elegante, un vestido delicado o
              cualquier otro artículo.
            </p>
            <a href='/services' class='services-tEY3fd link link--arrowedd'>
              Saber más
              <svg aria-hidden='true' class='services-I9zo7F arrow-icon' fill='currentColor' viewBox='0 0 20 20'
                xmlns='http://www.w3.org/2000/svg'>
                <path fill-rule='evenodd'
                  d='M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z'
                  clip-rule='evenodd'></path>
              </svg>
            </a>
          </div>
        </div>
        <div class='services-U6do2C'>
          <img class='dry-cleaner' src='./static/carpet-washer.png' alt='' />
          <div class='services-zv3zck'>
            <h5 class='services-QUx37W'>
              Limpieza de Alfombras
            </h5>
            <p class='services-FdadvS'>
              Nuestro servicio de limpieza de alfombras está diseñado para
              revitalizar y restaurar la belleza de tus alfombras, brindándoles un
              aspecto fresco y limpio.
            </p>
            <a href='/services' class='services-tEY3fd link link--arrowedd'>
              Saber más
              <svg aria-hidden='true' class='services-I9zo7F arrow-icon' fill='currentColor' viewBox='0 0 20 20'
                xmlns='http://www.w3.org/2000/svg'>
                <path fill-rule='evenodd'
                  d='M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z'
                  clip-rule='evenodd'></path>
              </svg>
            </a>
          </div>
        </div>
        <div class='services-U6do2C'>
          <img class='dry-cleaner' src='./static/leather_cleaning.png' alt='' />
          <div class='services-zv3zck'>
            <h5 class='services-QUx37W'>
              Limpieza de Cuero
            </h5>
            <p class='services-FdadvS'>
              Nuestro servicio de limpieza de cuero ofrece una solución
              especializada para mantener tus artículos de cuero en óptimas
              condiciones y conservar su belleza a lo largo del tiempo.
            </p>
            <a href='/services' class='services-tEY3fd link link--arrowedd'>
              Saber más
              <svg aria-hidden='true' class='services-I9zo7F arrow-icon' fill='currentColor' viewBox='0 0 20 20'
                xmlns='http://www.w3.org/2000/svg'>
                <path fill-rule='evenodd'
                  d='M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z'
                  clip-rule='evenodd'></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class='testimonials-vkQGOr'>
      <h2 class='testimonials-xBSyUX'>
        ¿Qué dicen nuestros clientes?
      </h2>
      <p class='testimonials-fDJnJt'>
        Lee algunas opiniones de nuestros clientes satisfechos.
      </p>
      <div class='testimonials-cwPWLZ'>
        <blockquote class='testimonials-alixmL'>
          <div class='testimonials-FA3Pe7'>
            <img alt='Customer'
              src='https://images.unsplash.com/photo-1491349174775-aaafddd81942?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=987&q=80'
              class='testimonials-Ed9AdK' />

            <div>
              <div class='testimonials-C4pwI'>
                <svg xmlns='http://www.w3.org/2000/svg' class='testimonials-mZhFn4' viewBox='0 0 20 20'
                  fill='currentColor'>
                  <path
                    d='M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z' />
                </svg>
                <svg xmlns='http://www.w3.org/2000/svg' class='testimonials-mZhFn4' viewBox='0 0 20 20'
                  fill='currentColor'>
                  <path
                    d='M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z' />
                </svg>
                <svg xmlns='http://www.w3.org/2000/svg' class='testimonials-mZhFn4' viewBox='0 0 20 20'
                  fill='currentColor'>
                  <path
                    d='M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z' />
                </svg>
                <svg xmlns='http://www.w3.org/2000/svg' class='testimonials-mZhFn4' viewBox='0 0 20 20'
                  fill='currentColor'>
                  <path
                    d='M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z' />
                </svg>
                <svg xmlns='http://www.w3.org/2000/svg' class='testimonials-mZhFn4' viewBox='0 0 20 20'
                  fill='currentColor'>
                  <path
                    d='M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z' />
                </svg>
              </div>

              <p class='testimonials-VolLNk'>
                Toa Heftiba
              </p>
            </div>
          </div>

          <p class='testimonials-JtgXCc'>
            Si buscas una empresa de tintorería, estás en el lugar adecuado.
            Todo es perfecto, brindan un servicio oportuno.
          </p>
        </blockquote>

        <blockquote class='testimonials-alixmL'>
          <div class='testimonials-FA3Pe7'>
            <img alt='Customer'
              src='https://images.unsplash.com/photo-1544723795-3fb6469f5b39?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=989&q=80'
              class='testimonials-Ed9AdK' />

            <div>
              <div class='testimonials-C4pwI'>
                <svg xmlns='http://www.w3.org/2000/svg' class='testimonials-mZhFn4' viewBox='0 0 20 20'
                  fill='currentColor'>
                  <path
                    d='M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z' />
                </svg>
                <svg xmlns='http://www.w3.org/2000/svg' class='testimonials-mZhFn4' viewBox='0 0 20 20'
                  fill='currentColor'>
                  <path
                    d='M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z' />
                </svg>
                <svg xmlns='http://www.w3.org/2000/svg' class='testimonials-mZhFn4' viewBox='0 0 20 20'
                  fill='currentColor'>
                  <path
                    d='M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z' />
                </svg>
                <svg xmlns='http://www.w3.org/2000/svg' class='testimonials-mZhFn4' viewBox='0 0 20 20'
                  fill='currentColor'>
                  <path
                    d='M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z' />
                </svg>
                <svg xmlns='http://www.w3.org/2000/svg' class='testimonials-mZhFn4' viewBox='0 0 20 20'
                  fill='currentColor'>
                  <path
                    d='M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z' />
                </svg>
              </div>

              <p class='testimonials-VolLNk'>
                Naim Ahmed
              </p>
            </div>
          </div>

          <p class='testimonials-JtgXCc'>
            Un equipo amable y trabajador. Es la única empresa con la que
            trabajo para mis necesidades de limpieza. Gracias. Son muy
            profesionales.
          </p>
        </blockquote>

        <blockquote class='testimonials-alixmL'>
          <div class='testimonials-FA3Pe7'>
            <img alt='Customer'
              src='https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=987&q=80'
              class='testimonials-Ed9AdK' />

            <div>
              <div class='testimonials-C4pwI'>
                <svg xmlns='http://www.w3.org/2000/svg' class='testimonials-mZhFn4' viewBox='0 0 20 20'
                  fill='currentColor'>
                  <path
                    d='M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z' />
                </svg>
                <svg xmlns='http://www.w3.org/2000/svg' class='testimonials-mZhFn4' viewBox='0 0 20 20'
                  fill='currentColor'>
                  <path
                    d='M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z' />
                </svg>
                <svg xmlns='http://www.w3.org/2000/svg' class='testimonials-mZhFn4' viewBox='0 0 20 20'
                  fill='currentColor'>
                  <path
                    d='M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z' />
                </svg>
                <svg xmlns='http://www.w3.org/2000/svg' class='testimonials-mZhFn4' viewBox='0 0 20 20'
                  fill='currentColor'>
                  <path
                    d='M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z' />
                </svg>
                <svg xmlns='http://www.w3.org/2000/svg' class='testimonials-mZhFn4' viewBox='0 0 20 20'
                  fill='currentColor'>
                  <path
                    d='M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z' />
                </svg>
              </div>

              <p class='testimonials-VolLNk'>
                Olga Zabegina
              </p>
            </div>
          </div>

          <p class='testimonials-JtgXCc'>
            Tengo que usar trajes todo el tiempo en mi lugar de trabajo. El
            servicio de tintorería que ofrecen es de calidad y es la opción
            que siempre elijo. Estoy muy satisfecho.
          </p>
        </blockquote>
      </div>
    </div>
  </section>

  <section id='comments' class='comments-form'>
    <div class='comments-HSwBTR'>
      <div class='comments-2IIacT'>
        <h2 class='comments-udiASG'>
          ¡Contactanos!
        </h2>
        <p class='comments-lMq3mt'>
          Estamos interesados como fue el trato que recibiste
        </p>
        <p class='comments-nd8ckV'>
          y si tienes alguna duda o sugerencia, no dudes en contactarnos
        </p>
      </div>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST" autocomplete="on">
        <div class='comments-cumbBQ'>
          <div class='comments-LXFm0f'>
            <div class='comments-6xJFPJ'>
              <div class='comments-RwbXJ4'>
                <label for='email' class='comments-daCavu'>
                  Email
                </label>
                <input required type='email' for="email" name='email' class='comments-Gdedzz' />
              </div>
            </div>
            <div class='comments-zJoLgJ'>
              <div class='comments-RwbXJ4'>
                <label for='message' class='comments-daCavu'>
                  Mensaje
                </label>
                <textarea required name='comentario' for="comentario" class='comments-Gdedzz2'></textarea>
              </div>
            </div>
            <div class='comments-zJoLgJ'>
              <button type='submit' name='Enviar' value='Enviar' class='comments-MvRVvw'>
                Enviar Mensaje
              </button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>

  <footer class='footer-9XOR03'>
    <div class='footer-xlE1cw'>
      <div class='footer-YYWlWo'>
        <div class='footer-7GIQa3'>
          <img src='./static/svg/MCL.svg' class='footer-8eXE9L' alt='Laundry Miss Clean Logo' />
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