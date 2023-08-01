<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>ANARVI</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">

      <script src="js/htmlincludejs.js"></script>
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      
      <!-- responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- awesome fontfamily -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>         
         <include src="header.html"></include>           
      </header>
      <!-- end header -->
      <!-- start slider section -->
      <div id="top_section" class=" banner_main">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <!--<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>-->
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container-fluid">
                              <div class="carousel-caption relative">
                                 <div class="bluid">
                                    <h1><strong> ANARVI </strong></h1>
                                    <p><strong>ASOCIACIÓN NACIONAL DE PENSIONADOS JUBILADOS DE RENTAS VILTALICIAS </strong> 
                                    </p>
                                   
                                    <a class="read_more" href="inscripcion.php">Registrate en la Asociación </a><a class="read_more" href="contact.php">Contacto </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!--<div class="carousel-item">
                           <div class="container-fluid">
                              <div class="carousel-caption relative">
                                 <div class="bluid">
                                    <h1>Creative  <br>Work Idea </h1>
                                    <p>There are many variations of passages of Lorem Ipsum <br>available, but the majority have suffered alteration
                                    </p>
                                    <a class="read_more" href="about.html">About Company </a><a class="read_more" href="contact.html">Contact </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container-fluid">
                              <div class="carousel-caption relative">
                                 <div class="bluid">
                                    <h1>Creative  <br>Work Idea </h1>
                                    <p>There are many variations of passages of Lorem Ipsum <br>available, but the majority have suffered alteration
                                    </p>
                                    <a class="read_more" href="about.html">About Company </a><a class="read_more" href="contact.html">Contact </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container-fluid">
                              <div class="carousel-caption relative">
                                 <div class="bluid">
                                    <h1>Creative  <br>Work Idea </h1>
                                    <p>There are many variations of passages of Lorem Ipsum <br>available, but the majority have suffered alteration
                                    </p>
                                    <a class="read_more" href="about.html">About Company </a><a class="read_more" href="contact.html">Contact </a>
                                 </div>
                              </div>
                           </div>
                        </div>-->
                     </div>
                     <!--<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <i class="fa fa-angle-left" aria-hidden="true"></i>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <i class="fa fa-angle-right" aria-hidden="true"></i>
                     <span class="sr-only">Next</span>
                     </a>-->
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end slider section -->

      <!-- we_do -->
      <div class="we_do">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center">
                     <h2>QUIENES SOMOS </h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="card flex-md-row mb-4 box-shadow h-md-250">
                  <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-success">Informativo</strong>
                    <h3 class="mb-0">
                    <a class="text-dark" href="presentacion.php">¿QUIENES SOMOS?</a>
                    <p>Hace unos meses un pequeño grupo de jubilados pensionados por renta vitalicia de 
                    una misma aseguradora, contactamos al estudio jurídico....</p>             
                    </h3>
                      <div class="mb-1 text-muted">Febrero 2021</div>              
                      <a href="presentacion.php">Continuar Leyendo</a>
                      </div>
                      <img class="card-img-right flex-auto d-none d-md-block" src="imgnes/LOGO250x250_black.png" alt="Card image cap">
                  </div>
                </div>  
            </div>
         </div>
      </div>
      <!-- end we_do -->


      <!-- contact -->
      <div class="we_do">
        <div class="container">
           <div class="row ">
              <div class="col-md-8 offset-md-2">
                <div class="titlepage text_align_center">
                    <h2>ESCRIBENOS</h2>
                 </div> 
                  
                     <?php
                     require_once('contactform/bootstrapform.html');
                     ?>  
                  
                  </div>
            </div>
          </div>
      </div>    
      <!-- contact -->
      

      
      <!-- footer -->
      <include src="footer.html"></include> 
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script type="text/javascript" src="js/custom.js"></script>
      <script type="text/javascript" src="contactform/js/validator.min.js"></script>
      <script type="text/javascript" src="contactform/js/form-scripts.js"></script> 
     
         
   </body>
</html>