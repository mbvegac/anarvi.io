<?php
include("conexion.php");

define('SITE_KEY', '');
define('SECRET_KEY', '');


if($_POST){
    function getCaptcha($SecretKey){
        $Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".SECRET_KEY."&response={$SecretKey}");
        $Return = json_decode($Response);
        return $Return;
    }
    $Return = getCaptcha($_POST['g-recaptcha-response']);
    //var_dump($Return);
    if($Return->success == true && $Return->score > 0.5){
       
	$txtNombres = $_POST['txtNombres'];
	$txtApellidos = $_POST['txtApellidos'];
    $txtRut = $_POST['txtRut'];
    $txtEmail = $_POST['txtEmail'];  
    $txtAseguradora = $_POST['txtAseguradora'];
	$txtCumple = $_POST['txtCumple'];
	$txtEstadoCivil = $_POST['txtEstadoCivil'];
	$txtDireccion = $_POST['txtDireccion'];
	$txtRegion = $_POST['txtRegion'];
	$txtComuna = $_POST['txtComuna'];
	$txtTelefono = $_POST['txtTelefono'];
	$txtNroPoliza = $_POST['txtNroPoliza'];
	$txtProfOficio = $_POST['txtProfOficio'];
	$fIngreso = date("Y-m-d H:i:s");	 //date ('Y-m-d H:i:s', $phptime);
	$esSocio = 0;
	
	// Configuración envío correo
	$nombre= $txtNombres. " " .$txtApellidos;
	$asunto = "Incorporación a la Asociación Jubilados Renta Vitalicia";

	
	 
	$cuerpoMensaje.= 'Estimado(a) : ' .$nombre." \n";
	$cuerpoMensaje.= ''. "\n";
	$cuerpoMensaje.= 'Estas a un paso de pertenecer a la asociación, sigue las siguientes instrucciones referente al pago de inscripción :  '." \n";
	$cuerpoMensaje.= ''. "\n";
	$cuerpoMensaje.= 'Responder al siguiente correo electrónico: tesoreria@jubiladosrv.cl indicando su nombre y rut, adjuntando comprobante de transferencia o deposito. '. "\n"; 
	$cuerpoMensaje.= ''. "\n"; 
	$cuerpoMensaje.= 'Datos de transferencia o deposito : '. "\n"; 
	$cuerpoMensaje.= ''. "\n";
	$cuerpoMensaje.= 'Nombre : Asociación Nacional de Jubilados Pensionados de Rentas Vitalicia'. "\n";
	$cuerpoMensaje.= 'Entidad Bancaria : Banco del Estado'. "\n";
	$cuerpoMensaje.= 'Rut : 65204736-K'. "\n";
	$cuerpoMensaje.= 'Tipo cuenta :  Vista '. "\n";
	$cuerpoMensaje.= 'Número de cuenta : 38172474834'. "\n";
	$cuerpoMensaje.= 'Correo : tesoreria@jubiladosrv.cl'. "\n";
	$cuerpoMensaje.= ''. "\n";
	$cuerpoMensaje.= 'El monto a tranferir es de $3.000.- pesos, que corresponde a su cuota de incorporación.'. "\n";
	$cuerpoMensaje.= ''. "\n"; 
	$cuerpoMensaje.= ''. "\n"; 
	$cuerpoMensaje.= 'Una vez comprobado el pago de inscripción, se procederá a notificar con una bienvenida, la incorporación a la asociación.'. " \n";
	$cuerpoMensaje.= 'Saluda atentamente.'. " \n";
	$cuerpoMensaje.= ''. "\n"; 
	$cuerpoMensaje.= 'Equipo Jubilados Rentas Vitalicia.'. "\n";
	$cuerpoMensaje.= 'https://www.jubiladosrv.cl.';


	$emailTo = $txtEmail;
	$headers = array(
		'From' => 'tesoreria@jubiladosrv.cl',
		'Reply-To' => 'tesoreria@jubiladosrv.cl',
		'X-Mailer' => 'PHP/' . phpversion()
	);
	$from = "tesoreria@jubiladosrv.cl";


	$Sql=("select * from socios where SOC_RUT= '".$txtRut."' ");
	

			$result = mysqli_query($conn, $Sql);
			$n_reg	= mysqli_num_rows(mysqli_query($conn, $Sql));
			$row = mysqli_fetch_array($result);

			if ($n_reg > 0) {
				$socId = $row['SOC_ID'];
				header("Location: inscripcion.php?vars=1");	

			}else {
				//Aqui colocas el c贸digo que tu deseas realizar cuando el dato NO existe en la base de datos	
				$Sql="INSERT INTO socios (ASE_ID,SOC_NOMBRES,SOC_APELLIDOS,SOC_FECHA_NACIMIENTO,SOC_RUT,SOC_EMAIL,REGION, CIUDAD, ESTADO_CIVIL, DIRECCION, PROF_OFICIO, FECHA_INGRESO,TELEFONO,NRO_POLIZA,socio)  
				values ('$txtAseguradora','".$txtNombres."','".$txtApellidos."','".$txtCumple."','".$txtRut."','".$txtEmail."','".$txtRegion."','".$txtComuna."','".$txtEstadoCivil."','".$txtDireccion."','".$txtProfOficio."','".$fIngreso."','".$txtTelefono."','".$txtNroPoliza."',".$esSocio.") "; 
				
				if (mysqli_query($conn, $Sql)) {
					 
					mail($emailTo, $asunto, $cuerpoMensaje, $headers);
					
					header("Location: inscripcion.php?vars=2");
				} else {
						echo "Error: " . $Sql . "<br>" . mysqli_error($conn);
				}
			}
	
	mysqli_close($conn);
    }else{
        echo "You are a Robot!!";
    }
}









	
//}

?>
