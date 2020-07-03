<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
     <!-- FONT AWESONME 5 -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
     <!-- estilos personalizados-->
    <link rel="stylesheet" href="css/estilo.css">

    <title>IMPORTCAR</title>
     <style>
      .bg-dark{
        transition: all 1s ease;
      }
    </style>
  </head>
  <body>

    <!-- barra de navegacion -->
      <nav id="menu" class="navbar navbar-expand-lg navbar-dark fixed-top" style="background: #0000004f;">
        <div class="fixed-top"></div>
          <a class="navbar-brand" href="#">
            <img src="img/13.jpeg" width="30" height="30" class="d-inline-block align-top" alt="">
          </a>
          <a class="navbar-brand" href="http://instragram.com/importcar_repuestos"> IMPORTCAR</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto ">
              <li class="nav-item active">
                <a class="nav-link" href="inicio.php">Inicio <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Nosotros</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Registro
                </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="login.php"><i class="fas fa-user-shield"></i>    Login</a>
                  </div>
                <li class="nav-item">
                <a class="nav-link" href="contactos.php">Contactos</a>
              </li>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    
    <!-- foto de la empresa  -->
    <div class="container">
          <div class="col-12">
            <img src="img/14.jpg" alt="">
          </div>
    </div>

    <!-- barra de navegacion -->
    <section id="">
        <div class="container">
          <h2 class="text-center p-4 text-success">¿Quiénes somos?</h2>
          <div class="row">
            <div class="col-sm-6"><img src="img/161.jpg" alt="" class="img-fluid rounded"></div>
            <div class="col-sm-6"><img src="img/171.jpg" width="620" alt="" class="img-fluid rounded"></div>  
            <p class="text-md-center col-md-6">Somos una empresa dedicada a atender las necesidades de repuestos y 
              servicios en el mercado automotor a través del mejor equipo humano, brindando 
              un excelente servicio de venta, post venta y mantenimiento a nuestros clientes.
              Somos distribuidores de repuestos originales y alternativos de calidad a precios competitivos.</p>
            <p class="text-center col-md-6"> Ser la mejor empresa importadora y comercializadora de repuestos automotrices en el país, brindando un excelente servicio en venta y post-venta, generando 
            valor agregado para nuestros clientes y la sociedad.</p>
          </div> 
          
         </div>        
    </section>

    <!-- barra del footer -->
     <footer id="footer">
     <div class="container">
       <div class="row">
         <div class="col-sm-3">
           <p>2020 <i class="far fa-copyright"></i>Creado por IMPORTCAR</p>
           <p>Desarrollo <a target="_blank" href="http://facebook.com/JohannLarrea"><i class="fab fa-facebook"> facebook</i></a></p>
         </div>

         <div class="col-sm-3">
           <ul class="list-unstyled">
             <li><a href="">Inicio</a></li>
             <li><a href="inicio.php#empresa">Acerca de</a></li>
             <li><a href="inicio.php#acerca-de">IMPORTCAR Automotríz</a></li>
             <li><a href="contactos.php#contactenos">Contáctenos</a></li>
           </ul>
         </div>

         <div class="col-sm-3">
           <ul class="list-unstyled">
             <li><a target="_blank" href="http://facebook.com/IMPORTCAR"><i class="fab fa-facebook"> facebook</i></a></li>
             <li><a target="_blank" href="http://instragram.com/importcar_repuestos"><i class="fab fa-instagram"> Instragram</i></a></li>
             <li><a target="_blank"href=""><i class="fab fa-youtube"> Youtube</i></a></li>
           </ul>
         </div>

          <div class="col-sm-3">
             <h6>Visítanos</h6>
             <p><i class="far fa-clock"></i> De Lunes a Viernes: 9:00am - 7:00pm.</p>
             <p><i class="far fa-clock"></i> Sábado: 8:00am - 5:00pm.</p>
         </div>
       </div>
     </div>
   </footer>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

     <script>
      $(window).scroll(function(){
        if ($("#menu").offset().top > 500) {
          $("#menu").addClass("bg-dark");
        }else{
          $("#menu").removeClass("bg-dark");
        } 
      });
    </script>
  </body>
</html>