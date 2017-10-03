<?php  
session_start();
if (($_SESSION['estado'] == false) OR !($_SESSION['rol'] == 'Administrador')){
	header('Location: index.php');
}
$url = $_SERVER['REQUEST_URI'];
$_SESSION['url_pag'] = $url;

if (isset($_POST['Consultar'])) {
	$dia = trim($_POST['dia']);
	$mes = trim($_POST['mes']);
	$anio = trim($_POST['anio']);
	$dia2 = trim($_POST['dia2']);
	$mes2 = trim($_POST['mes2']); 
	$anio2 = trim($_POST['anio2']);
	
	$fechaInicio=$anio.'-'.$mes.'-'.$dia;
	$fechaFin=$anio2.'-'.$mes2.'-'.$dia2;
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link href="EstiloIntegrador.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Inicio</title>
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
	  	   </div> <!-- Fin bloque ENCABEZADO -->
      
     	 
     	   	<div id="menu"><!-- Inicio bloque MENU -->	   
     	      <?php include 'Fn_deLinks.php';
     	      Navegacion();//LLama a la función que contiene el Menú     	    
				?> 
     	    </div><!-- Fin MENU -->     
      
           <div id="contenido"> <!-- Inicio bloque CONTENIDO --> 
           <?php include 'Conexion.php'; // Conectamos con BD?> 
				<?php 
					echo "<form id =formulario action='' method=POST enctype=multipart/form-data>";
													
					include 'FuncionMes.php';
					Fecha();
														
					//echo "<input id=btn2 required=required type=submit value=Consultar name=Consultar><br><br>";
					echo "</form>";
									

					//Filtro para mostrar por fechas las compras
					
					if(isset($_POST['Consultar'])){
						$sql = "SELECT v.nro_venta, u.nombre, v.precio, v.fecha
						FROM ventas v
						INNER JOIN usuarios u ON v.usuario = u.dni
						WHERE v.fecha BETWEEN '".$fechaInicio."' AND '".$fechaFin."'";
						$consulta = mysql_query($sql);
					
					
						echo "Rango de la consulta: ";echo"$fechaInicio"; echo" --- $fechaFin";echo"<br><br><br>";
					
						echo "NroVenta -- Nombre Cliente -- Importe a Pagar -- Fecha de Compra";echo"<br><br>";			
						
						while ($reg=mysql_fetch_array($consulta)){			
						
							echo $reg['nro_venta'].' ------ '.$reg['nombre'].' -------'.$reg['precio'].' -------'.$reg['fecha']. "<br>";
							
						}//FIN-WHILE  	
					
						
					
					}//FIN-IF
					
				?>				
					
					</div> <!-- Fin bloque CONTENIDO -->
           
                 
           <div id="pie"> <!-- Inicio bloque PIE -->
             <?php include 'Pie.php';
             Pie();?>	
           </div> <!-- Fin bloque PIE -->  
               		
       </div> <!-- Fin bloque CONTENEDOR --> 
</body>
</html>
