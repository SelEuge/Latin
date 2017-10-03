<?php 
session_start();
$url = $_SERVER['REQUEST_URI'];
$_SESSION['url_pag'] = $url;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link href="EstiloIntegrador.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Quienes somos</title>
</head>
<body>
	  <div id="contenedor"> <!-- Inicio bloque CONTENEDOR -->
	  
	  	   <div id="encabezado"> <!-- Inicio bloque ENCABEZADO -->
     	    <img alt="c" src="animacion/LP-Header.jpg">
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
     	   	  Navegacion();//LLama a la funci�n que contiene el Men�?> 
     	    </div><!-- Fin MENU -->     
      
           <div id="contenido"> <!-- Inicio bloque CONTENIDO -->
           <div id="quienes" >
           <p><font>Quienes Somos y como surgi� LP</font> </p><br><br>
           					<p><u>Una Fuerza Centr�fuga- El Fundador Martin Cohen</u><br><br>
							Es una historia que se centra en los feroces ritmos latinos que pulsaban a trav�s 
							de los centros nocturnos de jazz en Nueva York en la d�cada de los a�os 50 y en un 
							ingeniero mec�nico del Bronx de nombre Martin Cohen.<br><br>
							En 1956, Cohen lleg� por accidente al famoso Birdland de Nueva York y escuch� el 
							candente jazz latino de Cal Tjader. La m�sica atrap� a Cohen, y �ste se convirti� 
							en un visitante habitual durante las descargas de los lunes por la noche, que presentaban 
							a percusionistas como C�ndido y Jos� Mangual.<br><br>
							"Mangual ten�a una imagen- era simplemente su cuerpo al inclinarse hacia adelante. 
							Le debo mucho a �l por la inspiraci�n que me dio al observarlo dominar su instrumento. 
							Hasta ese momento, no exist�a un ejemplo a seguir que ejemplificara la grandeza.
							Eso es lo que vi en Mangual y eso es lo que yo quer�a ser -alguien que tuviera ese 
							dominio sobre algo".<br><br>
							Era el principio de la atracci�n que Cohen tendr�a toda la vida por la m�sica y la cultura 
							tra�das a Estados Unidos por personas como Jos� Mangual y la Orquesta de Machito, Tito Puente y Chino Pozo.           
          				    <br><br><u>La Idea Comienza a Resonar</u><br><br>
          				    Cohen se convirti� en un estudiante de la escena latina de los a�os 60 y quer�a obtener su propio juego de bongoes.
          				    A causa del embargo comercial con Cuba que impuso el gobierno, Cohen descubri� r�pidamente lo dif�cil que era 
          				    conseguir buenos instrumentos en Estados Unidos. Entonces, decidi� poner en pr�ctica sus conocimientos de ingenier�a
          				    para construir un buen par de bongoes. Tom� fotograf�as de los bongoes de Johnny Pacheco y, experimentando,
          				    cre� su primer prototipo.<br><br>
          				    "�se fue el principio de mi aprendizaje", dice Martin. "No sab�a nada de las m�quinas ni del trabajo con la madera y el metal.
          				    El primer vaso de bong� fue cortado un viernes y para el lunes ya med�a un cuarto de pulgada menos. 
          				    No sab�a que se trataba de madera h�meda y que ten�a que secarse primero".<br><br>
          				    Al poco tiempo, Cohen ya estaba entregando bongoes y campanas a los m�sicos, solicitando comentarios 
          				    y usando los centros nocturnos como laboratorios de investigaci�n y desarrollo. 
          				    "Realic� mi investigaci�n m�s importante en los clubes de baile del sur del Bronx.
          				    De ah� me iba a los centros nocturnos que abr�an a las 6:00 a.m. (conocidos como after-hours).
          				    Ten�a toda una relaci�n amorosa con la m�sica latina".<br><br>
          				    �se fue el principio de una tradici�n en LP, donde las necesidades de la ejecuci�n musical tienen prioridad.<br><br>
          				    <u>Esferas de Influencia</u><br><br>
          				    Carlos "Patato" Valdez fue una influencia inicial en el mundo musical de Martin. Patato le dio forma a 
          				    la comprensi�n de Cohen sobre las necesidades de la comunidad afrocubana. 
          				    En ese momento, Cohen era la �nica persona no-latina presente en las ceremonias religiosas 
          				    que se llevaban a cabo en el departamento de Patato en el Bronx. 
          				    "Era un honor que no tomaba a la ligera", dice Cohen.<br><br>
          				    La compa��a comenz� lentamente. Cohen obtuvo un contrato para fabricar campanas para 
          				    Rogers Drums y vend�a bongoes a consignaci�n.Fabric� un par de claves para Charlie Palmieri. 
          				    Dise�� bloques de madera e hizo efectos de sonido para Carroll Sound -una pistola de juguete,
          				    un yunque y el Flex-A-Tone.<br><br>
          				    Pero fueron dos prominentes bateristas de la televisi�n quienes ayudaron a ampliar el enfoque de Cohen del sal�n de baile al estudio de grabaci�n. Se reuni� con Specs Powell, el baterista del Ed Sullivan Show y m�sico de planta de los estudios de la CBS. Cohen recuerda "Me dijo que me saliera de los salones de baile latinos y que entrara a los estudios de grabaci�n, donde estaba el verdadero dinero. Tambi�n me pidi� que le fabricara un par de bongoes y los montara en un atril. Entonces fabriqu� mi primer atril para bongoes." Cohen dise�o un sistema de montaje que no requer�a de hoyos en los vasos de los bongoes, manteniendo as� un tono puro.
						    <br><br><u>Un �xito Patente</u><br><br>
							Powell le present� a Cohen a Rob Rosengarden, el baterista del Tonight Show. Rosengarden le pregunt� a Cohen que si pod�a dise�ar un instrumento que recreara el sonido distintivo de la mand�bula con dientes casta�eando. Cohen accedi� e invent� la versi�n moderna de la mand�bula, llamada Vibra-Slap; fue la primera patente de la compa��a.
						    <br><br>Rosengarden tambi�n le pidi� a Cohen que fabricara una cabasa que durara, a diferencia de las cabasas fr�giles de la �poca. Usando un material texturizado que not� en las parees de un elevador, Martin enroll� un pedazo del material formando un cilindro, lo envolvi� con una cadena de cuentas y lo mont� en una manija. Esto se convirti� en el Afuche/Cabasa de LP, la patente m�s exitosa de la compa��a.  
						    <br><br><u>La Compa��a Toma Forma</u><br><br>
							La innovaci�n siempre ha sido parte de la historia de LP. Al crear sus exitosas patentes, Martin Cohen recreaba con tecnolog�a moderna y durable los sonidos que hab�an sido creados originalmente con instrumentos fr�giles y dif�ciles de conseguir. Cohen fue uno de los primeros dise�adores en construir congas de fibra de vidrio, las cuales se convirtieron en favoritas de las bandas de los salones de baile gracias al alto volumen que produc�an.
						    <br><br>Martin Cohen logr� introducir sus instrumentos latinos tradicionales a contextos no-latinos. En agosto de 1964, Cohen trabaj� por �ltima vez para otra compa��a y fund� oficialmente Latin Percussion. Su primer taller estaba en su s�tano. Las soldaduras de gas se realizaban en una cochera separada que no ten�a calefacci�n. Adem�s de soldador, Martin se desempe�aba como fot�grafo, escritor de material promocional, investigador de mercado, vendedor y encargado de limpieza.
							"Me levantaba bastante temprano y me iba a dormir muy tarde".
					        <br><br>Su vida de negocios y su vida social comenzaron a sobreponerse casi completamente, incluso involucrando a su familia, cuyos miembros han participado en puestos importantes de la compa��a. Mariyln Cohen estuvo al frente de la divisi�n de exportaci�n; sus hijos Wayne y Andrea se desempe�aron en varios cargos durante a�os. 	       
							<br><br>En la d�cada de los 70's, Cohen construy� un estudio de grabaci�n y lanz� una serie de LPs educativos, otra idea innovadora. "Siento una gran satisfacci�n cuando percusionistas puertorrique�os me dicen que aprendieron a tocar con mis discos".
							<br><br><u>M�sicos de todos los C�rculos</u><br><br>
							Desde un principio, LP ha dependido de los m�sicos como gu�as. El primer artista exclusivo de la compa��a fue Wille Bobo. Otro artista exclusivo de la primera �poca, "El Rey" Tito Puente, record� que Martin Cohen "siempre consultaba con nosotros, tratando de hacer lo correcto para obtener el mejor sonido pero con ingenier�a moderna. Nunca se 'comercializ�'". Dizzy Gillespie y Carlos Santana son dos amigos de la compa��a desde hace muchos a�os, y aunque sus instrumentos principales no son de percusi�n, su amor por la percusi�n y su apasionado apoyo de LP han sido muy importantes. Hoy en d�a, LP tiene m�s de 500 artistasexclusivos de alto nivel quienes tambi�n son los mejores percusionistas del mundo.
							<br><br>Durante muchos a�os, LP produjo tambores y campanas en Estados Unidos. Sin embargo, a principios de los 80's, Cohen llev� a cabo un cambio que le permitir�a a la compa��a seguir compitiendo en el mercado de la �poca. Transfiri� la principal planta productora de la empresa a Tailandia, manteniendo las oficinas corporativas en Estados Unidos. Martin Cohen a�n tiene mucha pasi�n por el negocio. Le encanta estar con m�sicos, escuchando lo que opinan de un instrumento.			
							<br><br>La dedicaci�n de Cohen no ha pasado desapercibida. En mayo de 1996, la contribuci�n de Martin a las artes de la percusi�n fue reconocida con un premio entregado por la revista Modern Drummer. Durante su temporada 1996-97, el Museo Metropolitano de Arte de Nueva York present� una exhibici�n llamada "Ritmos Duraderos: Instrumentos Musicales Africanos y las Am�ricas", la cual presentaba 13 productos de LP que mostraban versiones modernas de instrumentos antiguos.
							<br><br><u>El Efecto Expansivo</u><br><br>
							El p�blico parece estar alcanzando la pasi�n de Martin Cohen por la percusi�n. Al igual que en culturas africanas donde la m�sica y el baile son parte integral de la vida diaria, los c�rculos de percusi�n se�alan un incremento en el uso vocacional de la percusi�n en Estados Unidos. "Muchas personas con trabajos "de oficina" llegan a su casa y s�lo quieren tocar unos bongoes por puro gusto. Creo que la terapia musical a trav�s de la percusi�n es muy importante, " dice Cohen. Para satisfacer la creciente demanda, Latin Percussion ha llevado sus productos a los mercados de regalos y juguetes.
							<br><br>La compa��a que empez� en la cochera de Cohen tiene ahora un equipo completo de investigaci�n, dise�o y desarrollo que se dedica a lanzar nuevos productos continuamente. El compromiso de Cohen desde un principio ha sido autenticidad en el sonido con originalidad en el dise�o.			
							<br><br><u>La revoluci�n contin�a -Investigaci�n y Desarrollo</u><br><br>
							Aunque los productos de	Latin Percussion son imitados a menudo, nadie ha podido igualar los aspectos musicales ni la integridad del producto. �Por qu�? Porque cada nuevo producto de LP est� dise�ado, controlado, fabricado como prototipo y probado por el mejor equipo de Investigaci�n y Desarrollo de la industria. El Director de Desarrollo de Productos, Ray Enhoffer, el Gerente Asistente de Desarrollo de Productos, Richard Simons y el dise�ador/creador de modelos Andy Krol, contribuyen con habilidades �nicas que complementan el trabajo de los dem�s. Juntos desarrollan, refinan, innovan y crean nuevos instrumentos de percusi�n que obtienen incontables patentes.
							<br><br>LP tiene una vasta lista de artistas exclusivos en la cual se re�nen los mejores percusionistas del mundo que tocan nuestros instrumentos. El equipo de Investigaci�n y Desarrollo de LP trabaja muy de cerca con estos artistas para generar ideas de productos. Los artistas nos ofrecen comentarios constantes que nos permiten refinar y mejorar productos existentes continuamente, dando como resultado los mejores productos del mercado para los percusionistas. Cada nuevo producto de Latin Percussion es dise�ado y probado en nuestras instalaciones. El dise�o inicial nunca es comprometido o limitado por procesos actuales. A menudo retamos a nuestras m�ltiples f�bricas a desarrollar procesos de manufactura que sean nuevos. Trabajamos muy de cerca con �stas para garantizar que el producto le haga justicia a la intenci�n original, tanto musical como mec�nicamente, una vez que llegue a manos de los artistas.
							<br><br><u>La historia le da la vuelta al c�rculo</u><br><br>
							La misi�n corporativa de LP se enfoca en proveer instrumentos de percusi�n con una alta calidad de mano de obra y un sonido aut�ntico. Por esto, no es sorprendente que una parte importante de esta misi�n sea ofrecer la m�s amplia selecci�n de instrumentos.
						    <br><br>Hoy en d�a, los instrumentos de Latin Percussion pueden encontrarse en todo tipo de m�sica siendo ejecutados por los profesionales m�s sobresalientes de la industria. Pueden encontrarse en c�rculos de percusi�n, ejecutados por personas de todo tipo. Hace mucho tiempo que ya no hace falta volar a Cuba para comprar un buen par de congas. 		
				 			<br><br>LP ha crecido con las condiciones cambiantes del mercado y ahora, con el apoyo de KMC Music, su nuevo due�o, LP es una organizaci�n mucho m�s grande de lo que fue hace 40 a�os. Sin embargo, a�n existe una constante, que es la pasi�n de LP por proveerle a los percusionistas profesionales los instrumentos y los sonidos que necesitan. Por eso nos conocen como El C�rculo Exclusivo. 
							<br><br>Lo que comenz� hace cuatro d�cadas con un simple par de bongoes ha evolucionado para convertirse en la colecci�n m�s completa de instrumentos de percusi�n disponibles hoy en d�a. Esta colecci�n de productos se divide en siete marcas: LP, LP Matador, LP Aspire, CP, World Beat, LP Music Collection, y LP RhythMix, cada una con su prop�sito propio de satisfacer las necesidades de diferentes tipos de m�sicos.
							<br><br><u>Este extenso y diverso grupo de productos se encuentra dentro de este Cat�logo de Latin Percussion.</u><br><br>
							LP provee los instrumentos de m�s alta calidad para nuestros clientes, sean m�sicos principiantes o profesionales y para todos los m�sicos de niveles intermedios. Nuestros productos innovadores y �nicos han hecho y mantenido a Latin Percussion como el l�der del mercado de las percusiones.
							
				</p>
           	</div>
           </div> <!-- Fin bloque CONTENIDO -->
           
           <div id="pie"> <!-- Inicio bloque PIE -->
           	 <?php include 'Pie.php';
           	 Pie();?>	
           </div> <!-- Fin bloque PIE -->          
           		
       </div> <!-- Fin bloque CONTENEDOR -->
</body>
</html>