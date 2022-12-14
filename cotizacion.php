<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotización</title>
    <!--Icono pmi-->
    <link rel="icon" href="img/logo.png">

    <!--css bootstrap-->
    <link href="css/bootstrap/bootstrap.min.css"  rel="stylesheet">
    <link href="css/bootstrap/bootstrap-reboot.min.css" rel="stylesheet">
    <link href="css/bootstrap/bootstrap-utilities.min.css" rel="stylesheet">
    <link href="css/bootstrap/bootstrap-grid.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    
    
    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&family=Roboto&display=swap" rel="stylesheet"> 

    <script src="https://kit.fontawesome.com/52ca9d6645.js" crossorigin="anonymous"></script>

    <!--css general-->
    <link href="css/estilos.css" rel="stylesheet">
</head>
<body>

        <section class="back-gray-cotizador">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 ">
                <h1 class="text-center mb-5 seccion-cotizador text-uppercase">Cotización</h1>
              </div>
              <div class="col-lg-6">


<!-- Display contact form -->
<form method="post" action="/php/enviar.php" >
	<div class="form-group">
		<label for="nombre">Nombre</label>
		<input type="text" class="form-control" name='nombre' id="nombre" placeholder="nombre...">
	</div>
	<div class="form-group">
		<label for="email">Email</label>
		<input type="email" class="form-control" name='email' id="email" placeholder="email...">
	</div>
	<div class="form-group">
		<label for="exampleTextarea">Mensaje</label>
		<textarea class="form-control" name='mensaje' id="mensaje" rows="3"></textarea>
	</div>
	<div class="form-group">
		<input type="checkbox" required> Acepto la política de privacidad.
	</div>
	<button class="btn btn-primary" type="submit">Enviar</button>
</form>
                <!--Apartado de formulario en el action va el correo al que le llega la informacion -->
                  <!--<form action="https://formsubmit.co/e.gomez.mendoza@outlook.com" method="POST">-->
                    <!--<form method="post" action="/enviar.php" enctype="multipart/form-data">
                      <div class="mb-3 col-sm-12">
                        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre completo" aria-label="nombre">
                      </div>
                      <div class="mb-3 col-sm-12">
                        <input type="text" name="empresa" id="empresa" class="form-control" placeholder="Empresa" aria-label="empresa">
                      </div>
                      <div class="mb-3 col-sm-12">
                        <input type="tel" name="numero" id="numero" class="form-control" placeholder="Número de teléfono" aria-label="empresa">
                      </div>
                      <div class="mb-3 col-sm-12">
                        <input type="email" name="email" id="email" class="form-control" placeholder="correo electronico" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
                      </div>
                      <div class="mb-3 col-sm-12">
                        <textarea class="form-control" name="mensaje" id="mensaje " placeholder="Detalles del proyecto" rows="3"></textarea>
                      </div>
                      <div class="mb-3 col-sm-12">
                        <input class="form-control" name="file" type="file" id="formFileMultiple" multiple>
                      </div>
                      
                      <div class="d-grid gap-2 col-6 mx-auto mt-5 mb-5">
                        <button type="submit" class="btn btn-secondary">Enviar</button>
                      </div>
                      <input type="hidden" name="_next" value="http://127.0.0.1:5500/index.html"> 
                      <input type="hidden" name="_captcha" value="false">
                    </form>-->
                    <!--<a class="btn btn-primary" href="mailto:juan.palomeque.m96@gmail.com">Enviar correo cotización</a>-->












                    
              </div>
              <div class="col-lg-6">
                <!--<div class="img-cotizador"></div>-->
                <img src="img/cotizacion.jfif" class="img-responsive img-cotizador" width="100%">
              </div>
            </div>
          </div>
        </section>
        
        <footer>
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <h1 class="text-center mt-5 mb-5 titulo-footer text-uppercase">Contactanos</h1>
              </div>
              <div class="col-lg-6 col-sm-6">
                  <h3 class="text-center mb-5">Ubicación</h3>
                  <div class="text-center mb-5">
                    <iframe class="caja-mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3730.8804715113733!2d-100.45168070153517!3d20.755638230209705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfa8a392f33318d7f!2zMjDCsDQ1JzIwLjAiTiAxMDDCsDI3JzAwLjAiVw!5e0!3m2!1ses-419!2smx!4v1654546160505!5m2!1ses-419!2smx" width="450" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
                  
              </div>
              <div class="col-lg-6 col-sm-6">
                  <h3 class="text-center mb-5">Redes Sociales</h3>
                  <div class="ubicacion">
                      <p class="text-center"><i class="bi bi-geo-alt-fill iconos-contacto"></i></p>
                      <H4>PMI</H4>
                      <P>Av hercules 301C, parque insdustrial poligono empresarial
                          Queretaro, Queretaro
                      </P>
                  </div>
                  <div class="telefono">
                      <p class="text-center"><i class="bi bi-telephone-fill iconos-contacto"></i></p>
                      <p>442 746 9707</p>
                  </div>
                  <div class="email">
                      <p class="text-center"><i class="bi bi-envelope-fill iconos-contacto"></i></p>
                      <p>administración@ihp.com</p>
                  </div>
                  <div class="redes-sociales">
                      <ul class="links-redes">
                          <li><a href="#"><i class="bi bi-whatsapp"></i></a></i></li>
                          <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                          <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                      </ul>
                  </div>
              </div>
              <section class="footer-derechos">
                  <div class="col-lg-12">
                      <p class="derechos ">Todos los derechos reservados <span class="copyright ">© Prototype Manufacturing INC 2022</span></p>
                  </div>
              </section>
              
            </div>
          </div>
        </footer>
</body>

<!--
<script src="js/bootstrap/bootstrap.min.js"></script>
<script src="js/bootstrap/bootstrap.bundle.min.js"></script>
<script src="/js/bootstrap/bootstrap.esm.min.js"></script>-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</html>
