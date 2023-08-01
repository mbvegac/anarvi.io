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
      <link rel="stylesheet" href="contactform/css/style.css">
      <!-- responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- awesome fontfamily -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout inner_page">
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
      <!-- about -->

       <!-- contact -->
       <div class="contact">
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
      
   
      <!-- end about -->
      <!-- footer -->
      <include src="footer.html"></include> 
      
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!--<script src="js/custom.js"></script>-->
      <script type="text/javascript" src="contactform/js/validator.min.js"></script>
      <script type="text/javascript" src="contactform/js/form-scripts.js"></script> 
   </body>
</html>