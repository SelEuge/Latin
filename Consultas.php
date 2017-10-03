<?php 
session_start();
$url = $_SERVER['REQUEST_URI'];
$_SESSION['url_pag'] = $url;

//-------------------------------------------------------------------------//
$msjNombre =''; $msjApellido = '';$msjTelefono ='';$msjMail ='';
$msjAsunto='';$msjMensaje = '';
//------------------------------------------------------------------------//

//------------------------------------------------------------------------//
function esString ($valor){
	$resp = true;
	for($i=0;$i<strlen($valor);$i++){
		if(is_numeric(substr($valor, $i,1))){
			$resp = false;
		}
	}
	return $resp;
}
//------------------------------------------------------------------------//

function comprobar_email($email){
	$mail_correcto = false;
	//compruebo unas cosas primeras
	if ((strlen($email) >= 6) && (substr_count($email,"@") == 1) && (substr($email,0,1) != "@") && (substr($email,strlen($email)-1,1) != "@")){
		if ((!strstr($email,"'")) && (!strstr($email,"\"")) && (!strstr($email,"\\")) && (!strstr($email,"\$")) && (!strstr($email," "))) {
			//miro si tiene caracter .
			if (substr_count($email,".")>= 1){
				//obtengo la terminacion del dominio
				$term_dom = substr(strrchr ($email, '.'),1);
				//compruebo que la terminación del dominio sea correcta
				if (strlen($term_dom)>1 && strlen($term_dom)<5 && (!strstr($term_dom,"@")) ){
					//compruebo que lo de antes del dominio sea correcto
					$antes_dom = substr($email,0,strlen($email) - strlen($term_dom) - 1);
					$caracter_ult = substr($antes_dom,strlen($antes_dom)-1,1);
					if ($caracter_ult != "@" && $caracter_ult != "."){
						$mail_correcto = true;
					}
				}
			}
		}
	}

	return $mail_correcto;
}
//-------------------------------------------------------------------------------------//

if(isset($_POST['Enviar'])){
	$nombre = trim($_POST['nombre']);
	$apellido = trim($_POST['apellido']);
	$email = trim($_POST['email']);
	$telefono = trim($_POST['telefono']);
	$contenido = trim($_POST['contenido']);	

	include ('Conexion.php');
	$error = false;

	if(empty($nombre)){
		$msjNombre = "*Debe escribir su nombre";
		$error=true;
	}else if(!esString($nombre)){
		$msjNombre = "*El nombre no puede contener números";
		$error=true;
	}

	if(empty($apellido)){
		$msjApellido = "*Debe escribir su apellido";
		$error=true;
	}else if(!esString($apellido)){
		$msjApellido = "*El apellido no puede contener números";
		$error=true;
	}
		
	if(empty($email)){
		$msjMail = "*Debe escribir su E-mail";
		$error=true;
	}else if(!comprobar_email($email)){
		$msjMail = "*E-mail incorrecto, verifique el formato";
		$error=true;
	}
	
	if (empty($telefono)){
		$error = true;
		$msjTelefono = "*Debe escribir su teléfono";
	}else if (!is_numeric($telefono)){
		$error = true;
		$msjTelefono = '*El Telefono debe ser numérico';
	}else if ((strlen($telefono) < 6) OR (strlen($telefono) > 11)) {
		$error = true;
		$msjTelefono = '*El Teléfono debe tener como mínimo 6 caracteres y como máximo 15';
	}
	
	if (empty ($contenido)) {
		$error = true;
		$msjMensaje = ' * El mensaje no puede estar vacío';
	}

	//if(empty($direccion)){
	//$msjDir = "Ingrese su direccion";
	//$error=true;
	//}else if(is_numeric($direccion) or strlen($direccion) < 8){
	//	$msjDir = "Sea mas especifico en <br> su direccion por favor";
	//$error=true;
	//}

	if(!$error){
		include ('Conexion.php');	
		$sql = "INSERT INTO consultas (codigo,nombre,apellido,email,telefono,contenido)
		VALUES (NULL,'$nombre','$apellido','$email','$telefono','$contenido')";
		$sentencia = mysql_query($sql) or die('Error: '.mysql_error());
		header("Location: Consultas.php?registrado=true");	
	}//FIN-IF
	
}//FIN-IF
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link href="EstiloIntegrador.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Consultas On Line</title>
</head>
<body>
	  <div id="contenedor"> <!-- Inicio bloque CONTENEDOR -->
	  
	  	   <div id="encabezado"> <!-- Inicio bloque ENCABEZADO -->
	  	     <img alt= "a" src="animacion/LP-Header.jpg">
	  	       <?php include 'FnEncabezado.php';
	  	       	 if ($_SESSION['estado'] == false){
	  	     		Registrarse();
	  	     		}else{
	  	     			Registrado();
	  	     		}  	     		
	  	     ?>
	         <!--FALTA AGREGAR FnEncabezado   -->
	  	   </div> <!-- Fin bloque ENCABEZADO -->
      
     	 
     	   	<div id="menu"><!-- Inicio bloque MENU -->	   
     	      <?php include 'Fn_deLinks.php';
     	      Navegacion();//LLama a la función que contiene el Menú?> 
     	    </div><!-- Fin MENU -->     
      
           <div id="contenido"> <!-- Inicio bloque CONTENIDO -->  
           		 <div id="form_contacto">
           			<fieldset>
           			<legend>Envianos tu mensaje con sugerencias, preguntas y más.<br> ¡Tu opinión es muy valiosa para nosotros!</legend>
           			<?php if (!isset($_GET['registrado'])) {
           				echo "<form action='' method=POST>";
		
						/*************************************** CAMPO NOMBRE ************************************************/
						if(!empty($msjNombre)){ //Si el campo esta vacio
							echo "<input size=50 type=text name=nombre placeholder='Nombre' value=".$nombre."><br>";
							echo "<span>".$msjNombre."</span><br>";
							//unset($msjNombre);
						}else {
							echo "<input size=50 type=text name=nombre placeholder='Nombre' value=".$nombre."><br>";
						};
						/*************************************** CAMPO APELLIDO ************************************************/
						if(!empty($msjApellido)){
							echo "<input size=50 type=text name=apellido placeholder='Apellido' value=".$apellido.">";
							echo "<br><span>".$msjApellido."</span><br>";
						}else{
							echo "<input size=50 type=text name=apellido placeholder='Apellido' value=".$apellido."><br>";
						};
						/*************************************** CAMPO E-MAIL ************************************************/
						if(!empty($msjMail)){
							echo"<input size=50 type=text name=email placeholder='Correo Electrónico' value=".$email.">";
							echo "<br><span>".$msjMail."</span> <br>";
						}else{
							echo"<input size=50 type=text name=email placeholder='Correo Electrónico' value=".$email."> <br>";
						}
						
						/*************************************** CAMPO TELEFONO ************************************************/
						if(!empty($msjTelefono)){
							echo"<input size=50 type=text name=telefono placeholder='Telefono' value=".$telefono.">";
							echo "<br><span>".$msjTelefono."</span> <br>";
						}else{
							echo"<input size=50 type=text name=telefono placeholder='Telefono' value=".$telefono."> <br>";
						}
						/*************************************** CAMPO CONTENIDO************************************************/
						if(!empty($msjMensaje)){
							echo"<input size=50 type=text name=contenido placeholder='Mensaje' value=".$contenido.">";
							echo "<br><span>".$msjMensaje."</span> <br>";
						}else{
                            echo"<input size=50 type=text name=contenido placeholder='Mensaje' value=".$contenido.">";
						}
						/*************************************** CAMPO BOTÓN GUARDAR************************************************/
						echo "<br><input name=Enviar id=btn2 type=submit value='Enviar'>";
						echo"</form>";
						echo"</fieldset>";
				} else{
                      echo" <script>
								alert('¡La consulta se ha grabado con Éxito!');	
			      				 window.location='Consultas.php';				
							</script>";
							 	unset($registrado);
									 	
			}?>				
				     
           		
           		</div> <!--Fin de FORMULARIO -->
      
            </div> <!-- Fin bloque CONTENIDO -->
           
                 
           <div id="pie"> <!-- Inicio bloque PIE -->
             <?php include 'Pie.php';
             Pie();?>	
           </div> <!-- Fin bloque PIE -->  
               		
       </div> <!-- Fin bloque CONTENEDOR --> 
</body>
</html>