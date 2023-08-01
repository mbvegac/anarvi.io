<?php

include("conexion.php");
   
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">
  <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">

  <style type="text/css">
   body { background-image: url('imgnes/marmolbakgrownd.png');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;} 
</style>
</head>

<body>
  <?php 
    //carga la plantilla con la header. 
    require_once('navmenu.php');
  ?>  
  <div class="container">

    <header class="jumbotron my-4 p-3 mb-2 bg-secondary text-white">
      <h1 class="display-5">NOTICIAS</h1>
      <p class="lead"></p>
      <!--<a href="#" class="btn btn-primary btn-lg">Call to action!</a>-->
    </header>


<div class="container">
<div class="row">
  <!-- Blog Entries Column -->
  <div class="col-md-8">
    <h1 class="my-4">Noticias Importantes
   </br><small>Jubilados Renta Vitalicia</small>
    </h1>
<?php
$db_table = "noticias order by id DESC";


$total = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM ".$db_table.""));
$query_noticias = mysqli_query($conn,"SELECT * FROM ".$db_table."" ); // Ejecutamos la consulta
$sql = "SELECT noticias.id,noticias.titulo,noticias.fecha,noticias.texto,imagenes.imagen,imagenes.imagen_id FROM noticias JOIN imagenes ON noticias.id_imagen=imagenes.imagen_id";
// $query_noticias = mysqli_query($con,$sql);
$limite = 254; // Número de carácteres a mostrar antes de el "Leer más"

if($total != 0) 
  {   
while($columna = mysqli_fetch_assoc($query_noticias)) // Realizamos un bucle que muestre todas las noticias, utilizando while.
  {
    if ($columna['id_imagen']==0)
        {
          $ruta = "seccionoticias/imagenes/imagen";
        }else{
          $id = $columna['id_imagen'];
          $sql = "SELECT imagen FROM imagenes WHERE $id=imagen_id order by imagen_id DESC";
          $imagen_noticia = mysqli_query($conn,$sql);
          $imagenes = mysqli_fetch_assoc($imagen_noticia);
          $ruta = "seccionoticias/imagenes/" .$imagenes['imagen'];
        };


echo '
    <!-- Blog Post -->
    <div class="card mb-4">
      <img class="card-img-top" src="'.$ruta.'" alt="Card image cap">
      <div class="card-body">
        <h2 class="card-title">'.$columna['titulo'].'</h2>
        <p class="card-text">
        '.substr($columna['texto'], 0, $limite).'
  </p>
        <a target="_blank" href="'.$columna['link_externo'].'" class="btn btn-primary">VER FUENTE DE NOTICIA &rarr;</a>
      </div>
      <div class="card-footer text-muted" >'.$columna['fecha'].'
        Fecha Subida        
      </div>
    </div> '
    ;
                  }}

    else {
                            echo '<a href="../index.html">NO EXISTEN NOTICIAS</a>';
}
?> 

    <!-- Pagination -->
    <ul class="pagination justify-content-center mb-4">
      <li class="page-item">
        <a class="page-link" href="#">&larr; Subir</a>
      </li>
      <li class="page-item disabled">
        <a class="page-link" href="#">Newer &rarr;</a>
      </li>
    </ul>

  </div>

  <!-- Sidebar Widgets Column -->
  <div class="col-md-4">

    <!-- Search Widget -->
   

    <!-- Categories Widget -->
    <div class="card my-4">
      <h5 class="card-header">VIDEOS</h5>
      <div class="card-body">
        <div class="row">
          
            <div class="container">
              <div class="card flex-md-row mb-5 box-shadow h-md-200">
                    <div class="embed-responsive embed-responsive-16by9">
                    <video class="embed-responsive-item" controls >
                    <source src="DocumentosAsociacion\VIDEOS\ComisionCamara.mp4" type="video/mp4">
                    </video>
                  </div>
                  
                </div>
                <div class="mb-1 text-muted">Noviembre 2021</div>   
              </div>  
            </div><!-- Cierre Container-->
          </div>
          
           
          </div>
        </div>
      </div>
    </div>
   
    <!-- Side Widget -->
   



  </div>

</div>
<!-- /.row -->

</div>  

  

   </div>
    

<?php
  require_once('footer.php');	
?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script  type="text/javascript" src="contactform/js/jquery-1.11.2.min.js"></script>
  <script type="text/javascript" src="contactform/js/validator.min.js"></script>
  <script type="text/javascript" src="contactform/js/form-scripts.js"></script>
</body>

</html>            


