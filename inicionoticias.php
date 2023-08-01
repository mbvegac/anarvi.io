<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>ANARVI</title>
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="contactform/css/animate.css"  >


  <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>

  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>

<body> 

<div class="container">    
  <?php
    require_once('navmenu.php'); 
  ?>
</div>
</br>
</br>


<div class="container">
  <header class="jumbotron my-4 p-3 mb-2 bg-secondary text-white">
    <h1 class="display-5">NOTICIAS A COMUNIDAD</h1>
    <p class="lead"></p>
    <!--<a href="#" class="btn btn-primary btn-lg">Call to action!</a>-->        
  </header>
</div>

<div class="b-example-divider"></div>

<div class="container">
  <h2 class="blog-post-title">Ultima Noticia</h2>
  <div class="card flex-md-row mb-5 box-shadow h-md-200">
    <div class="card-body d-flex flex-column align-items-start">
      <strong class="d-inline-block mb-0 text-success">Información Importante</strong>
      <h3 class="mb-2">
      <!--<a class="text-dark" href="presentacion.php">Junto a diputada Alejandra Sepúlveda</a>-->
      En comisión investigadora sobre las aseguradoras y cuarto retiro de RV
      </h3>    
      <p>
        Participación del presidente de la asociación en la comisión investigadora. En comisión, la diputada Alejandra Sepúlveda nos 
        solicita copias de pólizas de nuestros asociados, las cuales serán material de análisis por conocedores en la materia.
      </p>
      <div class="mb-1 text-muted">Noviembre 2021</div>   
    </div>        
  </div>
</div><!-- Cierre Container-->


  
<div class="container">
  <h2 class="blog-post-title">Noticias anteriores</h2>
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    <div class="col">
      <div class="card shadow-sm">
      <img class="card-img-right flex-auto d-none d-md-block" src="seccionoticias/imagenes/noticia007.PNG" alt="Card image cap">          
        <div class="card-body">
          <p class="card-text">En comisión investigadora sobre las aseguradoras y cuarto retiro de RV.</p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
              <button type="button" class="btn btn-sm btn-outline-secondary"><a href="seccionoticias/paginas/noticia-007.php">Ver Informativo</a></button>
              
            </div>
            <small class="text-muted">Noviembre 2021</small>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card shadow-sm">
      <img class="card-img-right flex-auto d-none d-md-block" src="seccionoticias/imagenes/noticia006.PNG" alt="Card image cap">

        <div class="card-body">
          <p class="card-text">Reunión telemática, junto a diputada Alejandra Sepúlveda.</p>              

          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-secondary"><a href="seccionoticias/paginas/noticia-006.php">Ver Informativo</a></button>
            </div>
            <small class="text-muted">Noviembre 2021</small>
          </div>
        </div>
      </div>
    </div>
    <div class="col">        
      <div class="card shadow-sm">            
      <img class="card-img-right flex-auto d-none d-md-block" src="imgnes/adulto_mayor.jpg" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Se conforma la primera Asociación Nacional de Rentas Vitalicias.</p>              
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
            <button type="button"  class="btn btn-sm btn-outline-secondary"><a href="preguntasfrecuentes.php">Ver Informativo</a></button>
            </div>
            <small class="text-muted">Julio 2021</small>
          </div>
        </div>
      </div>       
    </div>
  </div>
</div>

<div class="album py-5 bg-light"></div>
<?php   
  require_once('footer.php');	
?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/bootstrap/js/holder.min.js"></script>  

</body>

</html>

