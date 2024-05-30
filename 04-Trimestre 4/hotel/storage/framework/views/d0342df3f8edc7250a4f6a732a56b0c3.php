<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YADA</title>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family-Montserrat:ital,wght@0,100..900;1,100..900&display-swap" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0"
    />
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>
    <article class="cover">
        
	<main class="menu-scroll">
        <div class="container__menu">
            <div class="menu">
                <i class="fas fa-bars" id="btn_menu"></i>
                    <div id="back_menu"></div>
        <nav id="nav">
			<ul>
				<li><a href="index.html">Inicio</a></li>
				<li><a href="#">Nosotros</a></li>
                <li><a href="habitaciones.html">Habitaciones</a></li>       
                <li><a href="Tienda.html">Tienda</a></li>
				<li><a href="#">Portafolio</a></li>
				<li><button id="btn-abrir-popup" class="btn-abrir-popup">Contactanos</button></li>
			</ul>

            <div class="profile-dropdown">
                <div onclick="toggle()" class="profile-dropdown-btn">
                  <div class="profile-img">
                    <i class="fa-solid fa-circle"></i>
                  </div>
        
                  <span
                    >Usuario
                    <i class="fa-solid fa-angle-down"></i>
                  </span>
                </div>
        
                <ol class="profile-dropdown-list">
                  <li class="profile-dropdown-list-item">
                    <a href="#">
                      <i class="fa-regular fa-user"></i>
                      Editar Perfil
                    </a>
                  </li>
        
                  <li class="profile-dropdown-list-item">
                    <a href="perfil.html">
                      <i class="fa-regular fa-envelope"></i>
                      Ver Perfil
                    </a>
                  </li>
        
                  <li class="profile-dropdown-list-item">
                    <a href="#">
                      <i class="fa-solid fa-sliders"></i>
                      Servicios
                    </a>
                  </li>
        
                  <li class="profile-dropdown-list-item">
                    <a href="#">
                      <i class="fa-regular fa-circle-question"></i>
                      Ayuda
                    </a>
                  </li>
                  <hr />
        
                  <li class="profile-dropdown-list-item">
                    <a href="#">
                      <i class="fa-solid fa-arrow-right-from-bracket"></i>
                      Cerrar Sesion
                    </a>
                  </li>
                </ol>
              </div>
		</nav>
    </div>
</div>

<div class="overlay" id="overlay">
    <div class="popup" id="popup">
        <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
        <h3>Contactanos</h3>
        <form action="">
            <div class="contenedor-inputs">
                <input type="text" placeholder="Nombre" required>
                <input type="email" placeholder="Correo" required>
                <textarea  placeholder="Dejanos tu Mensaje" required></textarea>
            </div>
            <input type="submit" class="btn-submit" value="Enviar">
        </form>
</div>
</div>
    </main>
        <section class="textos-header">
            <marquee><h1>Tu refujio de lujo en cada viaje</h1></marquee>
        
        <div class="wave" style="height: 150px; overflow: hidden; ">
            <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="fill: #fff;"></path>
            </svg>
        </div>
    </article>


    <main>
        <section class="contenedor sobre-nosotros">
            <div class="container">
                <h2 class="titulo">Portafolio</h2>
                <div class="full-width container-category">
                    <a href="#!" id="categori-1">
                        <i class="fa-solid fa-hotel" aria-hidden="true"></i>
                        <span>Hospedaje</span>
                    </a>
                    <a href="#!" id="categori-2">
                        <i class="fa-solid fa-cart-shopping" aria-hidden="true"></i>
                        <span>Tienda online</span>
                    </a>
                    <a href="#!" id="categori-3">
                        <i class="fa-solid fa-person-swimming" aria-hidden="true"></i>
                        <span>Piscina</span>
                    </a>
                    <a href="#!" id="categori-4">
                        <i class="fa-solid fa-ranking-star"></i>
                        <span>Suit</span>
                    </a>
                    <a href="#!" id="categori-5">
                        <i class="fa-solid fa-user-large"></i>                        <span>Cuenta</span>
                    </a>
                    <a href="#!" id="categori-6">
                        <i class="fa-regular fa-calendar-check"></i>
                        <span>Garantias</span>
                    </a>
                </div>
            </div>
        </section>
        <section class="contenedor sobre-nosotros" style="background-color: #F5F5F5">
            <div class="contenedor-sobre-nosotros">
                <img src="img/smartphone.png" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                    <h3>¡Llévanos siempre contigo!</h3>
                    <p>Escribe tu numero de celular y descarga nuestra app gratis</p>
                    <form class="form-inline">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Escribe tu número móvil" required="">
                        </div>
                            <select class="form-control form-position">
                                  <option>Android</option>
                                  <option>iPhone</option>
                            </select>
                        <button type="submit" class="btn-dowland">DESCARGAR APP</button>
                    </form>
                </div>
            </div>
        </section>

        <h2 class="titulo">Reseñas</h2>
        <div class="context">
            <div class="slider-wrapper">
              <button id="prev-slide" class="slide-button material-symbols-rounded">
                chevron_left
              </button>
              <ul class="image-list">
                <div class="card">
                    <div class="content">
                        <span></span>
                        <div class="img">
                            <img src="img/face1.jpg" alt="">
                        </div>
                        <h4>Sofia Rodriguez</h4>
                        <p>Mi estancia en este hotel fue simplemente espectacular. Desde el momento en que entré por la puerta, fui recibido con una calidez y atención que hicieron que me sintiera como en casa de inmediato. </p>
                    </div>
                </div>

                <div class="card">
                  <div class="content">
                      <span></span>
                      <div class="img">
                          <img src="img/face1.jpg" alt="">
                      </div>
                      <h4>Roberto Matinez</h4>
                      <p>Mi estancia en este hotel fue simplemente maravillosa. Desde el momento en que llegué, me sentí como si estuviera en un oasis de lujo y confort.</p>
                  </div>
              </div>
              <div class="card">
                <div class="content">
                    <span></span>
                    <div class="img">
                        <img src="img/face1.jpg" alt="">
                    </div>
                    <h4>Alexander Johnson</h4>
                    <p>Este hotel superó todas mis expectativas. Desde el momento en que entré, me sentí transportado a un mundo de serenidad y comodidad. Las habitaciones eran espaciosas y lujosas, con todas las comodidades que uno podría desear.</p>
                </div>
            </div>
            <div class="card">
              <div class="content">
                  <span></span>
                  <div class="img">
                      <img src="img/face1.jpg" alt="">
                  </div>
                  <h4>Mia Patel</h4>
                  <p>Descubrir este hotel fue como encontrar un tesoro escondido. Desde el momento en que llegué, me sentí bienvenido y cuidado por el personal increíblemente atento. La habitación era elegante y confortable, me encanto.</p>
              </div>
          </div>
          <div class="card">
            <div class="content">
                <span></span>
                <div class="img">
                    <img src="img/face1.jpg" alt="">
                </div>
                <h4>Lucas Nguyen</h4>
                <p>Desde el momento en que llegué, me quedé impresionado por la elegancia y el servicio impecable. Las habitaciones eran verdaderos santuarios de lujo, con vistas impresionantes y comodidades de primera clase.</p>
            </div>
        </div>

        <div class="card">
          <div class="content">
              <span></span>
              <div class="img">
                  <img src="img/face1.jpg" alt="">
              </div>
              <h4>Isabella Smith</h4>
              <p>Este hotel es simplemente encantador. Desde el momento en que entré, me sentí transportado a un mundo de serenidad y paz. Las habitaciones eran elegantes y acogedoras, con todas las comodidades necesarias para una estancia confortable.</p>
          </div>
      </div>
      <div class="card">
        <div class="content">
            <span></span>
            <div class="img">
                <img src="img/face1.jpg" alt="">
            </div>
            <h4>Elijah Brown</h4>
            <p>Este hotel superó todas mis expectativas. Desde el momento en que llegué, fui recibido con una cálida bienvenida y un servicio excepcional. Las habitaciones eran espaciosas y elegantemente decoradas, con vistas impresionantes de la ciudad. </p>
        </div>
    </div>

    <div class="card">
      <div class="content">
          <span></span>
          <div class="img">
              <img src="img/face1.jpg" alt="">
          </div>
          <h4>Roberto Matinez</h4>
          <p>Mi estancia en este hotel fue absolutamente maravillosa. Desde el momento en que llegué, me sentí como si estuviera en un paraíso de lujo y comodidad. Las habitaciones eran amplias y lujosas, con todas las comodidades modernas que uno podría desear.</p>
      </div>


              </ul>
              <button id="next-slide" class="slide-button material-symbols-rounded">
                chevron_right
              </button>
            </div>
            <div class="slider-scrollbar">
              <div class="scrollbar-track">
                <div class="scrollbar-thumb"></div>
              </div>
            </div>
          </div>


          <div class="Dashboard">
            <div class="contenido-info">
                <div class="cards">
                    <div class="card-chack">
                        <div class="box">
                            <h1>2194</h1>
                            <h3>huespedes</h3>
                        </div>
                        <div class="icon-case">
                            <img src="students.png" alt="">
                        </div>
                    </div>
                    <div class="card-chack">
                        <div class="box">
                            <h1>53</h1>
                            <h3>Empleados</h3>
                        </div>
                        <div class="icon-case">
                            <img src="teachers.png" alt="">
                        </div>
                    </div>
                    <div class="card-chack">
                        <div class="box">
                            <h1>5</h1>
                            <h3>Localidades</h3>
                        </div>
                        <div class="icon-case">
                            <img src="schools.png" alt="">
                        </div>
                    </div>
                    <div class="card-chack">
                        <div class="box">
                            <h1>35000000</h1>
                            <h3>Ganancias</h3>
                        </div>
                        <div class="icon-case">
                            <img src="income.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="content-2">
                    <div class="recent-payments">
                        <div class="title">
                            <h2>Reservas recientes</h2>
                            <a href="#" class="btn">Visualizar</a>
                        </div>
                        <table>
                            <tr>
                                <th>Nombre</th>
                                <th>Fecha</th>
                                <th>Cantidad</th>
                                <th>Opcion</th>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>22/07/2023</td>
                                <td>$120</td>
                                <td><a href="#" class="btn">Visualizar</a></td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>22/07/2023</td>
                                <td>$120</td>
                                <td><a href="#" class="btn">Visualizar</a></td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>22/07/2023</td>
                                <td>$120</td>
                                <td><a href="#" class="btn">Visualizar</a></td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>22/07/2023</td>
                                <td>$120</td>
                                <td><a href="#" class="btn">Visualizar</a></td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>22/07&2023</td>
                                <td>$120</td>
                                <td><a href="#" class="btn">Visualizar</a></td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>22/07/2023</td>
                                <td>$120</td>
                                <td><a href="#" class="btn">Visualizar</a></td>
                            </tr>
                        </table>
                    </div>
                    <div class="new-students">
                        <div class="title">
                            <h2>Nuevos huespedes</h2>
                            <a href="#" class="btn">Visualizar</a>
                        </div>
                        <table>
                            <tr>
                                <th>Perfil</th>
                                <th>Nombre</th>
                                <th>opcion</th>
                            </tr>
                            <tr>
                                <td><img src="img/face2.jpg" alt=""></td>
                                <td>John Steve Doe</td>
                                <td><img src="" alt=""></td>
                            </tr>
                            <tr>
                                <td><img src="img/face2.jpg" alt=""></td>
                                <td>John Steve Doe</td>
                                <td><img src="info.png" alt=""></td>
                            </tr>
                            <tr>
                                <td><img src="img/face2.jpg" alt=""></td>
                                <td>John Steve Doe</td>
                                <td><img src="info.png" alt=""></td>
                            </tr>
                            <tr>
                                <td><img src="img/face2.jpg" alt=""></td>
                                <td>John Steve Doe</td>
                                <td><img src="info.png" alt=""></td>
                            </tr>
                        </table>
                    </div>
                
</main>
       
    
    <footer class="footer-distributed">
        <div class="footer-left">
            <h3>YADA</h3>
            <p class="footer-links">
                <a href="#">Inicio</a>
                |
                <a href="#">Sobre Nosotros</a>
                |
                <a href="#">Contactanos</a>
                |
                <a href="#">Redes sociales</a>
            </p>

            <p class="footer-company-name">Copyright © 2024 <strong>YADA</strong> Todos los derechos reservados</p>
        </div>

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p>Carrera 63 B #45-56 Sur</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+53 300 123 454 01</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:sagar00001.co@gmail.com">YADA2024@misena.edu.co</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>Sobre la empresa</span>
                <strong>YADA</strong> Es un hotel enfocado en ser único para sus huéspedes y ofrecer servicios de lujo como tienda virtual, tipos de habitación, etc
            </p>
            <div class="footer-icons">
               <a href="#" class="icon-facebook"><i class="fa fa-facebook"></i></a>
               <a href="#" class="icon-instagram"><i class="fa fa-instagram"></i></a>
                <a href="#" class="icon-twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="icon-youtube"><i class="fa fa-youtube"></i></a>
            </div>
        </div>
    </footer>

    <script src="js/main.js"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\hotel\resources\views/welcome.blade.php ENDPATH**/ ?>