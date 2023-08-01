
<?php
  include_once('validarut.php');
      define('SITE_KEY', '6LeAoEEdAAAAAMjjn1vQ6uBDcg7qFFrhIGll3Rtf');
      define('SECRET_KEY', '6LeAoEEdAAAAAFO5UJ_VwC1pvJsNNHYvlMr7erRO');
?>
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
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
      <!--[endif]-->     
      <script src="https://www.google.com/recaptcha/api.js?render=6LeAoEEdAAAAAMjjn1vQ6uBDcg7qFFrhIGll3Rtf"></script>
   </head>
   <!-- body -->
   <body >
      <!-- loader 
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="" /></div>
      </div> -->
      <!-- end loader -->
      <!-- header -->
      <header>         
         <include src="header.html"></include>           
      </header>
      </br>
      </br>
      </br>

      <!-- end header -->
      <!-- we_do -->
      <div class="we_do">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <div class="titlepage text_align_center">
                    <h2>PRE INSCRIPCIÓN </h2>
                 </div>
              </div> 
           </div>
           <?php      
               if (isset($_GET['vars'])) {    
               $id = (int) $_GET['vars'];    
               if($id == 1){
               
            ?> 
               <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>ERROR DE REGISTRO!</strong> El rut ingresado ya se encuentra registrado, favor intente nuevamente.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                  </button>
               </div>
            
            <?php

                  }elseif($id==2){
                  ?> 
                  <div class="alert alert-primary" role="alert">
                  <strong>LISTO! </strong> Ingreso de datos satisfactorio. En unos minutos te llegará un correo con los pasos a seguir.!
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
                  <?php

                  }else{

                  }
                  
               }
            ?>
           <div class="alert alert-dismissible alert-info">        
               <h5>Ingresa los datos solicitados, posteriormente te llegará un correo con los pasos a seguir.</h5>
            </div>
           <form id="form-inscripcion" method="post" action="inscripcion_accion.php">
           <div class="form-group">
               <div class="form-row">
                  <div class="form-group col-md-6">
                     <strong><label for="inputPassword4">Nombres</label></strong>
                     <input type="text" maxlength="50" class="form-control" name="txtNombres" required placeholder="Nombres">
                  </div>
                  <div class="form-group col-md-6">
                  <strong><label for="inputPassword4">Apellidos</label></strong>
                     <input type="text" maxlength="50" class="form-control" name="txtApellidos" required placeholder="Apellidos">
                  </div>
                  <div class="form-group col-md-6">
                  <strong><label>Rut</label></strong>
                     <input type="text" maxlength="10" class="form-control" name="txtRut" required oninput="checkRut(this)"  placeholder="EJ. 11123123-1">
                  </div>
                  <div class="form-group col-md-6">
                  <strong><label>Fecha de Nacimiento</label></strong>
                     <input type="date" class="form-control" min="1930-01-01" name="txtCumple" maxlength="10" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
                     <span class="validity"></span>
                  </div>
                  <div class="form-group col-md-6">
                  <strong><label for="inputEmail">Email</label>  </strong>        
                     <input type="email" class="form-control" maxlength="50" required name="txtEmail" placeholder="name@example.com">
                  </div>  
                  <div class="form-group col-md-6">
                  <strong><label for="inputNroMovil">Número Móvil</label> </strong>         
                     <input type="txtTelefono" maxlength="20" class="form-control" required name="txtTelefono" placeholder="+56 9 78737445">
                  </div>

                  <div class="form-group col-md-6">
                  <strong><label for="inputNroPoliza">N° Póliza</label></strong>          
                     <input type="txtNroPoliza" maxlength="30" class="form-control" required name="txtNroPoliza" >
                  </div>      

                  <div class="form-group col-md-6">
                  <strong><label for="inputNroMovil">Estado Civil</label></strong>          
                     <select name="txtEstadoCivil" required class="form-control" >           
                        <option id = "1">Soltero</option>
                        <option>Casado</option>
                        <option>Viuda(o)</option>
                        <option>Otro</option>
                     </select> 
                  </div>                 

                  <div class="form-group col-md-6">
                  <strong><label for="inputNroPoliza">Profesión u Oficio</label></strong>          
                     <input type="txtProfOficio" maxlength="100" class="form-control" required name="txtProfOficio" >
                  </div>   
                  <div class="form-group col-md-6">
                  <strong><label for="inputNroPoliza">Dirección</label></strong>          
                     <input type="txtDireccion" maxlength="100"  class="form-control" required name="txtDireccion" >
                  </div>                  
               </div>
               </div>

               <div class="form-group">
               <div class="form-row"> 
                  <div class="form-group col-md-6">
                     <strong><label for="inputState">Región</label></strong>            
                     <select name="txtRegion" required class="form-control" id="regiones"></select>           
                  </div>        
                  <div class="form-group col-md-6">
                     <strong><label for="inputState">Comuna</label></strong>    
                     <select name="txtComuna" required class="form-control" id="comunas"></select>             
                  </div>  
               </div>        
               </div>

               <div class="form-group">
                  <div class="form-row">           
                     <div class="form-group col-md-4">
                     <strong><label for="inputState">Aseguradora</label></strong>
                     <select name="txtAseguradora" required class="form-control" id="aseguradoras">
                        <option value="" required selected>Seleccione...</option>
                        <?php								
                           include("conexion.php");
                           
                           $Sql='SELECT ASE_ID, ASE_NOMBRE FROM aseguradora ORDER BY ASE_NOMBRE ASC ';
                           $result = mysqli_query($conn, $Sql);

                           while ($row = mysqli_fetch_array($result)) {
                           if($txtIdCliente == $row['ASE_ID']){
                              echo '<option VALUE='.$row['ASE_ID'].' selected>'.$row['ASE_NOMBRE'].'</option>';
                           }else{
                              echo '<option VALUE='.$row['ASE_ID'].'>' .$row['ASE_NOMBRE']. '</option>';	
                           }											
                           }
                           mysqli_close($conn);
                           ?>
                     </select>
                     </div> 
                  </div>
               </div> 


               <div class="form-check">
               <input type="checkbox" class="form-check-input" id="chkDeclaraEstatutos" required>
               <label class="form-check-label" for="exampleCheck1"><strong>Usted declara haber leido los estatutos que rigen esta asociación.</strong> 
               <a target="_blank" href="downloader/estatutos.pdf"><strong>Revisar Estatutos pinchando aquí</strong> </a> </label>
               </div>  
               <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" /><br >
               <!--<button type="submit" class="g-recaptcha" data-sitekey="6Ldk1IIeAAAAAAoX3i5VHh5fqaCoa_u-xPfkrsML" data-callback='onSubmit' data-action='submit'>REGISTRAR DATOS</button>-->
               <!--<button type="submit" id="entrar" class="btn btn-primary btn-lg btn-block" value="Guardar" name="guardar">Entrar</button>-->
               <!--<button type="submit" class="g-recaptcha" data-sitekey="6Ldk1IIeAAAAAAoX3i5VHh5fqaCoa_u-xPfkrsML" data-callback='onSubmit' data-action='submit' id="guardar"  value="Guardar" name="guardar">REGISTRAR DATOS</button>-->

               <input type="submit" class="btn btn-primary btn-lg btn-block" value="REGISTRARSE">
      
                  
                  
              
           </form>
      </div>  
   </div>
     
<!-- end we_do -->
    
    





<!-- footer -->
 
  <?php
    require_once('footer.html'); 
  ?>

<!-- end footer -->

        
      <!-- Javascript files-->
      <script>
      grecaptcha.ready(function() {
      grecaptcha.execute('<?php echo SITE_KEY; ?>', {action: 'homepage'})
      .then(function(token) {
      //console.log(token);
      document.getElementById('g-recaptcha-response').value=token;
      });
      });
      </script>
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script  type="text/javascript" src="contactform/js/jquery-1.11.2.min.js"></script>
      <script type="text/javascript" src="contactform/js/validator.min.js"></script>
      <script type="text/javascript" src="js/jquery.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
      <script type="text/javascript" src="js/jquery-3.0.0.min.js"></script>
      <!--<script src="js/custom.js"></script>-->
      <script type="text/javascript" src="js/regciu.js"></script>
      <script type="text/javascript" src="js/validarRUT.js"></script>
      
   </body>
</html>