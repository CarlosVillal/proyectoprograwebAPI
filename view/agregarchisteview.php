<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="assets/images/x.png" rel="icon">
    <title>Chuck Norris y datos random</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
<!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->
  </head>

<body>
  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="#" class="logo">
                          Área de chistes
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li><a href="menuview.php">Volver al menú principal</a></li>
                          <li><a href="../index.php">Cerrar seción</a></li>
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
    <img src="assets/images/aaa.gif" alt="Chuck GIF" width="500" height="500" />


      <div class="video-overlay header-text">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="caption">
              <h6>"¡Agrega un chiste pero que sea bueno!"</h6>
           
          
          </div>
              </div>
            </div>
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->

  <section class="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          
            <div class="item">
            <form action="../business/agregarchisteaction.php" method="POST">
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Escribe tu chiste ingenioso aquí y se guardará en chistes de usuarios</label>
    <textarea class="form-control" id="chistetexto" name="chistetexto" rows="3" style="height: 100px;"></textarea>
    <button type="submit" name="insertar" id="insertar" class="btn btn-primary btn-lg" style="margin-top: 10px; padding: 15px 30px;">Agregar chiste</button>
  </div>
</form>

     
            </div>
            
        </div>
      </div>
    </div>
  </section>

  <section class="upcoming-meetings" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
          </div>
        </div>
      </div>
    </div>
  </section>

    <div class="upcoming-meetings" id="meetings">

    </div>
  </section>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="../view/assets/js/funcionplantilla.js"></script>
</body>

</body>

<?php

if(isset($_GET['mensaje']) && $_GET['mensaje'] == "1"){
    ?><script>
	Swal.fire({
		icon: 'success',
		title: 'ÉXITO',
		text: 'Su chiste se registró con éxito!'
	  })
	</script><?php
	
}else if(isset($_GET['mensaje']) && $_GET['mensaje'] == "2"){
    ?><script>
	Swal.fire({
		icon: 'error',
		title: 'Ocurrio un error',
		text: 'No se pudo registra el chiste!'
	  })
	</script><?php
}

?>

</html>