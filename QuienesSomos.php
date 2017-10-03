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
     	   	  Navegacion();//LLama a la función que contiene el Menú?> 
     	    </div><!-- Fin MENU -->     
      
           <div id="contenido"> <!-- Inicio bloque CONTENIDO -->
           <div id="quienes" >
           <p><font>Quienes Somos y como surgió LP</font> </p><br><br>
           					<p><u>Una Fuerza Centrífuga- El Fundador Martin Cohen</u><br><br>
							Es una historia que se centra en los feroces ritmos latinos que pulsaban a través 
							de los centros nocturnos de jazz en Nueva York en la década de los años 50 y en un 
							ingeniero mecánico del Bronx de nombre Martin Cohen.<br><br>
							En 1956, Cohen llegó por accidente al famoso Birdland de Nueva York y escuchó el 
							candente jazz latino de Cal Tjader. La música atrapó a Cohen, y éste se convirtió 
							en un visitante habitual durante las descargas de los lunes por la noche, que presentaban 
							a percusionistas como Cándido y José Mangual.<br><br>
							"Mangual tenía una imagen- era simplemente su cuerpo al inclinarse hacia adelante. 
							Le debo mucho a él por la inspiración que me dio al observarlo dominar su instrumento. 
							Hasta ese momento, no existía un ejemplo a seguir que ejemplificara la grandeza.
							Eso es lo que vi en Mangual y eso es lo que yo quería ser -alguien que tuviera ese 
							dominio sobre algo".<br><br>
							Era el principio de la atracción que Cohen tendría toda la vida por la música y la cultura 
							traídas a Estados Unidos por personas como José Mangual y la Orquesta de Machito, Tito Puente y Chino Pozo.           
          				    <br><br><u>La Idea Comienza a Resonar</u><br><br>
          				    Cohen se convirtió en un estudiante de la escena latina de los años 60 y quería obtener su propio juego de bongoes.
          				    A causa del embargo comercial con Cuba que impuso el gobierno, Cohen descubrió rápidamente lo difícil que era 
          				    conseguir buenos instrumentos en Estados Unidos. Entonces, decidió poner en práctica sus conocimientos de ingeniería
          				    para construir un buen par de bongoes. Tomó fotografías de los bongoes de Johnny Pacheco y, experimentando,
          				    creó su primer prototipo.<br><br>
          				    "Ése fue el principio de mi aprendizaje", dice Martin. "No sabía nada de las máquinas ni del trabajo con la madera y el metal.
          				    El primer vaso de bongó fue cortado un viernes y para el lunes ya medía un cuarto de pulgada menos. 
          				    No sabía que se trataba de madera húmeda y que tenía que secarse primero".<br><br>
          				    Al poco tiempo, Cohen ya estaba entregando bongoes y campanas a los músicos, solicitando comentarios 
          				    y usando los centros nocturnos como laboratorios de investigación y desarrollo. 
          				    "Realicé mi investigación más importante en los clubes de baile del sur del Bronx.
          				    De ahí me iba a los centros nocturnos que abrían a las 6:00 a.m. (conocidos como after-hours).
          				    Tenía toda una relación amorosa con la música latina".<br><br>
          				    Ése fue el principio de una tradición en LP, donde las necesidades de la ejecución musical tienen prioridad.<br><br>
          				    <u>Esferas de Influencia</u><br><br>
          				    Carlos "Patato" Valdez fue una influencia inicial en el mundo musical de Martin. Patato le dio forma a 
          				    la comprensión de Cohen sobre las necesidades de la comunidad afrocubana. 
          				    En ese momento, Cohen era la única persona no-latina presente en las ceremonias religiosas 
          				    que se llevaban a cabo en el departamento de Patato en el Bronx. 
          				    "Era un honor que no tomaba a la ligera", dice Cohen.<br><br>
          				    La compañía comenzó lentamente. Cohen obtuvo un contrato para fabricar campanas para 
          				    Rogers Drums y vendía bongoes a consignación.Fabricó un par de claves para Charlie Palmieri. 
          				    Diseñó bloques de madera e hizo efectos de sonido para Carroll Sound -una pistola de juguete,
          				    un yunque y el Flex-A-Tone.<br><br>
          				    Pero fueron dos prominentes bateristas de la televisión quienes ayudaron a ampliar el enfoque de Cohen del salón de baile al estudio de grabación. Se reunió con Specs Powell, el baterista del Ed Sullivan Show y músico de planta de los estudios de la CBS. Cohen recuerda "Me dijo que me saliera de los salones de baile latinos y que entrara a los estudios de grabación, donde estaba el verdadero dinero. También me pidió que le fabricara un par de bongoes y los montara en un atril. Entonces fabriqué mi primer atril para bongoes." Cohen diseño un sistema de montaje que no requería de hoyos en los vasos de los bongoes, manteniendo así un tono puro.
						    <br><br><u>Un Éxito Patente</u><br><br>
							Powell le presentó a Cohen a Rob Rosengarden, el baterista del Tonight Show. Rosengarden le preguntó a Cohen que si podía diseñar un instrumento que recreara el sonido distintivo de la mandíbula con dientes castañeando. Cohen accedió e inventó la versión moderna de la mandíbula, llamada Vibra-Slap; fue la primera patente de la compañía.
						    <br><br>Rosengarden también le pidió a Cohen que fabricara una cabasa que durara, a diferencia de las cabasas frágiles de la época. Usando un material texturizado que notó en las parees de un elevador, Martin enrolló un pedazo del material formando un cilindro, lo envolvió con una cadena de cuentas y lo montó en una manija. Esto se convirtió en el Afuche/Cabasa de LP, la patente más exitosa de la compañía.  
						    <br><br><u>La Compañía Toma Forma</u><br><br>
							La innovación siempre ha sido parte de la historia de LP. Al crear sus exitosas patentes, Martin Cohen recreaba con tecnología moderna y durable los sonidos que habían sido creados originalmente con instrumentos frágiles y difíciles de conseguir. Cohen fue uno de los primeros diseñadores en construir congas de fibra de vidrio, las cuales se convirtieron en favoritas de las bandas de los salones de baile gracias al alto volumen que producían.
						    <br><br>Martin Cohen logró introducir sus instrumentos latinos tradicionales a contextos no-latinos. En agosto de 1964, Cohen trabajó por última vez para otra compañía y fundó oficialmente Latin Percussion. Su primer taller estaba en su sótano. Las soldaduras de gas se realizaban en una cochera separada que no tenía calefacción. Además de soldador, Martin se desempeñaba como fotógrafo, escritor de material promocional, investigador de mercado, vendedor y encargado de limpieza.
							"Me levantaba bastante temprano y me iba a dormir muy tarde".
					        <br><br>Su vida de negocios y su vida social comenzaron a sobreponerse casi completamente, incluso involucrando a su familia, cuyos miembros han participado en puestos importantes de la compañía. Mariyln Cohen estuvo al frente de la división de exportación; sus hijos Wayne y Andrea se desempeñaron en varios cargos durante años. 	       
							<br><br>En la década de los 70's, Cohen construyó un estudio de grabación y lanzó una serie de LPs educativos, otra idea innovadora. "Siento una gran satisfacción cuando percusionistas puertorriqueños me dicen que aprendieron a tocar con mis discos".
							<br><br><u>Músicos de todos los Círculos</u><br><br>
							Desde un principio, LP ha dependido de los músicos como guías. El primer artista exclusivo de la compañía fue Wille Bobo. Otro artista exclusivo de la primera época, "El Rey" Tito Puente, recordó que Martin Cohen "siempre consultaba con nosotros, tratando de hacer lo correcto para obtener el mejor sonido pero con ingeniería moderna. Nunca se 'comercializó'". Dizzy Gillespie y Carlos Santana son dos amigos de la compañía desde hace muchos años, y aunque sus instrumentos principales no son de percusión, su amor por la percusión y su apasionado apoyo de LP han sido muy importantes. Hoy en día, LP tiene más de 500 artistasexclusivos de alto nivel quienes también son los mejores percusionistas del mundo.
							<br><br>Durante muchos años, LP produjo tambores y campanas en Estados Unidos. Sin embargo, a principios de los 80's, Cohen llevó a cabo un cambio que le permitiría a la compañía seguir compitiendo en el mercado de la época. Transfirió la principal planta productora de la empresa a Tailandia, manteniendo las oficinas corporativas en Estados Unidos. Martin Cohen aún tiene mucha pasión por el negocio. Le encanta estar con músicos, escuchando lo que opinan de un instrumento.			
							<br><br>La dedicación de Cohen no ha pasado desapercibida. En mayo de 1996, la contribución de Martin a las artes de la percusión fue reconocida con un premio entregado por la revista Modern Drummer. Durante su temporada 1996-97, el Museo Metropolitano de Arte de Nueva York presentó una exhibición llamada "Ritmos Duraderos: Instrumentos Musicales Africanos y las Américas", la cual presentaba 13 productos de LP que mostraban versiones modernas de instrumentos antiguos.
							<br><br><u>El Efecto Expansivo</u><br><br>
							El público parece estar alcanzando la pasión de Martin Cohen por la percusión. Al igual que en culturas africanas donde la música y el baile son parte integral de la vida diaria, los círculos de percusión señalan un incremento en el uso vocacional de la percusión en Estados Unidos. "Muchas personas con trabajos "de oficina" llegan a su casa y sólo quieren tocar unos bongoes por puro gusto. Creo que la terapia musical a través de la percusión es muy importante, " dice Cohen. Para satisfacer la creciente demanda, Latin Percussion ha llevado sus productos a los mercados de regalos y juguetes.
							<br><br>La compañía que empezó en la cochera de Cohen tiene ahora un equipo completo de investigación, diseño y desarrollo que se dedica a lanzar nuevos productos continuamente. El compromiso de Cohen desde un principio ha sido autenticidad en el sonido con originalidad en el diseño.			
							<br><br><u>La revolución continúa -Investigación y Desarrollo</u><br><br>
							Aunque los productos de	Latin Percussion son imitados a menudo, nadie ha podido igualar los aspectos musicales ni la integridad del producto. ¿Por qué? Porque cada nuevo producto de LP está diseñado, controlado, fabricado como prototipo y probado por el mejor equipo de Investigación y Desarrollo de la industria. El Director de Desarrollo de Productos, Ray Enhoffer, el Gerente Asistente de Desarrollo de Productos, Richard Simons y el diseñador/creador de modelos Andy Krol, contribuyen con habilidades únicas que complementan el trabajo de los demás. Juntos desarrollan, refinan, innovan y crean nuevos instrumentos de percusión que obtienen incontables patentes.
							<br><br>LP tiene una vasta lista de artistas exclusivos en la cual se reúnen los mejores percusionistas del mundo que tocan nuestros instrumentos. El equipo de Investigación y Desarrollo de LP trabaja muy de cerca con estos artistas para generar ideas de productos. Los artistas nos ofrecen comentarios constantes que nos permiten refinar y mejorar productos existentes continuamente, dando como resultado los mejores productos del mercado para los percusionistas. Cada nuevo producto de Latin Percussion es diseñado y probado en nuestras instalaciones. El diseño inicial nunca es comprometido o limitado por procesos actuales. A menudo retamos a nuestras múltiples fábricas a desarrollar procesos de manufactura que sean nuevos. Trabajamos muy de cerca con éstas para garantizar que el producto le haga justicia a la intención original, tanto musical como mecánicamente, una vez que llegue a manos de los artistas.
							<br><br><u>La historia le da la vuelta al círculo</u><br><br>
							La misión corporativa de LP se enfoca en proveer instrumentos de percusión con una alta calidad de mano de obra y un sonido auténtico. Por esto, no es sorprendente que una parte importante de esta misión sea ofrecer la más amplia selección de instrumentos.
						    <br><br>Hoy en día, los instrumentos de Latin Percussion pueden encontrarse en todo tipo de música siendo ejecutados por los profesionales más sobresalientes de la industria. Pueden encontrarse en círculos de percusión, ejecutados por personas de todo tipo. Hace mucho tiempo que ya no hace falta volar a Cuba para comprar un buen par de congas. 		
				 			<br><br>LP ha crecido con las condiciones cambiantes del mercado y ahora, con el apoyo de KMC Music, su nuevo dueño, LP es una organización mucho más grande de lo que fue hace 40 años. Sin embargo, aún existe una constante, que es la pasión de LP por proveerle a los percusionistas profesionales los instrumentos y los sonidos que necesitan. Por eso nos conocen como El Círculo Exclusivo. 
							<br><br>Lo que comenzó hace cuatro décadas con un simple par de bongoes ha evolucionado para convertirse en la colección más completa de instrumentos de percusión disponibles hoy en día. Esta colección de productos se divide en siete marcas: LP, LP Matador, LP Aspire, CP, World Beat, LP Music Collection, y LP RhythMix, cada una con su propósito propio de satisfacer las necesidades de diferentes tipos de músicos.
							<br><br><u>Este extenso y diverso grupo de productos se encuentra dentro de este Catálogo de Latin Percussion.</u><br><br>
							LP provee los instrumentos de más alta calidad para nuestros clientes, sean músicos principiantes o profesionales y para todos los músicos de niveles intermedios. Nuestros productos innovadores y únicos han hecho y mantenido a Latin Percussion como el líder del mercado de las percusiones.
							
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