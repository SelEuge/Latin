<?php
function fecha(){
	
	/*FECHA INICIO*/
//CAMPO DE ELECCIÓN DEL DÍA	
	echo "<table>";
	echo "<tr><td><p>Ingrese la fecha a partir de la cual desea listar Ventas</p></td></tr>";
	echo"<br><br>";
					echo"<tr><td><center>";
					echo"<select name=dia>";
					echo"<option value=0>- Día -</option>";
					echo"<option value=1> 1</option>";
					echo"<option value=2> 2</option>";
					echo"<option value=3> 3</option>";
					echo"<option value=4> 4</option>";
					echo"<option value=5> 5</option>";
					echo"<option value=6> 6</option>";
					echo"<option value=7> 7</option>";
					echo"<option value=8> 8</option>";
					echo"<option value=9> 9</option>";
					echo"<option value=10>10</option>";
					echo"<option value=11>11</option>";
					echo"<option value=12>12</option>";
					echo"<option value=13>13</option>";
					echo"<option value=14>14</option>";
					echo"<option value=15>15</option>";
					echo"<option value=16>16</option>";
					echo"<option value=17>17</option>";
					echo"<option value=18>18</option>";
					echo"<option value=19>19</option>";
					echo"<option value=20>21</option>";
					echo"<option value=21>21</option>";
					echo"<option value=22>22</option>";
					echo"<option value=23>23</option>";
					echo"<option value=24>24</option>";
					echo"<option value=25>25</option>";
					echo"<option value=26>26</option>";
					echo"<option value=27>27</option>";
					echo"<option value=28>28</option>";
					echo"<option value=29>29</option>";
					echo"<option value=30>30</option>";
					echo"<option value=31>31</option>";
					echo"</select> ";
							

//CAMPO DE ELECCIÓN DEL MES
					
					echo"<select name=mes>";
					echo"<option value=0>- Mes -</option>";
					echo"<option value=1> 1</option>";
					echo"<option value=2> 2</option>";
					echo"<option value=3> 3</option>";
					echo"<option value=4> 4</option>";
					echo"<option value=5> 5</option>";
					echo"<option value=6> 6</option>";
					echo"<option value=7> 7</option>";
					echo"<option value=8> 8</option>";
					echo"<option value=9> 9</option>";
					echo"<option value=10>10</option>";
					echo"<option value=11>11</option>";
					echo"<option value=12>12</option>";					
					echo"</select> ";
											
 //CAMPO DE ELECCIÓN DEL AÑO
					echo"<select name=anio>";
					echo"<option value=0>- Año-</option>";
					echo"<option value=2015> 2015</option>";
					echo"<option value=2016> 2016</option>";
					echo"<option value=2017> 2017</option>";
					echo"<option value=2018> 2018</option>";
					echo"<option value=2019> 2019</option>";
					echo"<option value=2020> 2020</option>";
					echo"<option value=2021> 2021</option>";
					echo"<option value=2022> 2022</option>";
					echo"<option value=2023> 2023</option>";
					echo"<option value=2024>2024</option>";
					echo"<option value=2025>2025</option>";
					echo"<option value=2026>2026</option>";
					echo"<option value=2027>2027</option>";
					echo"<option value=2028>2028</option>";
					echo"<option value=2029>2029</option>";
					echo"<option value=2030>2030</option>";
					echo"<option value=2031>2031</option>";
					echo"<option value=2032>2032</option>";
					echo"<option value=2033>2033</option>";
					echo"<option value=2034>2034</option>";
					echo"<option value=2035>2035</option>";
					echo"<option value=2036>2036</option>";
					echo"<option value=2037>2037</option>";
					echo"<option value=2038>2038</option>";
					echo"<option value=2039>2039</option>";
					echo"<option value=2040>2040</option>";
					echo"</select> ";
					echo"</center></td></tr>";
					echo"<br><br>";
					
/*FECHA FIN*/
					echo "<tr><td><p>Ingrese la fecha hasta la que desea listar Ventas</p></td></tr>";
					echo"<br><br>";
//CAMPO DE ELECCIÓN DEL DÍA
					echo"<tr><td><center>";
					echo"<select name=dia2>";
					echo"<option value=0>- Día -</option>";
					echo"<option value=1> 1</option>";
					echo"<option value=2> 2</option>";
					echo"<option value=3> 3</option>";
					echo"<option value=4> 4</option>";
					echo"<option value=5> 5</option>";
					echo"<option value=6> 6</option>";
					echo"<option value=7> 7</option>";
					echo"<option value=8> 8</option>";
					echo"<option value=9> 9</option>";
					echo"<option value=10>10</option>";
					echo"<option value=11>11</option>";
					echo"<option value=12>12</option>";
					echo"<option value=13>13</option>";
					echo"<option value=14>14</option>";
					echo"<option value=15>15</option>";
					echo"<option value=16>16</option>";
					echo"<option value=17>17</option>";
					echo"<option value=18>18</option>";
					echo"<option value=19>19</option>";
					echo"<option value=20>21</option>";
					echo"<option value=21>21</option>";
					echo"<option value=22>22</option>";
					echo"<option value=23>23</option>";
					echo"<option value=24>24</option>";
					echo"<option value=25>25</option>";
					echo"<option value=26>26</option>";
					echo"<option value=27>27</option>";
					echo"<option value=28>28</option>";
					echo"<option value=29>29</option>";
					echo"<option value=30>30</option>";
					echo"<option value=31>31</option>";
					echo"</select> ";
	

//CAMPO DE ELECCIÓN DEL MES
					echo"<select name=mes2>";
					echo"<option value=0>- Mes -</option>";
					echo"<option value=1> 1</option>";
					echo"<option value=2> 2</option>";
					echo"<option value=3> 3</option>";
					echo"<option value=4> 4</option>";
					echo"<option value=5> 5</option>";
					echo"<option value=6> 6</option>";
					echo"<option value=7> 7</option>";
					echo"<option value=8> 8</option>";
					echo"<option value=9> 9</option>";
					echo"<option value=10>10</option>";
					echo"<option value=11>11</option>";
					echo"<option value=12>12</option>";						
					echo"</select> ";

//CAMPO DE ELECCIÓN DEL AÑO
					echo"<select name=anio2>";
					echo"<option value=0>- Año-</option>";
					echo"<option value=2015> 2015</option>";
					echo"<option value=2016> 2016</option>";
					echo"<option value=2017> 2017</option>";
					echo"<option value=2018> 2018</option>";
					echo"<option value=2019> 2019</option>";
					echo"<option value=2020> 2020</option>";
					echo"<option value=2021> 2021</option>";
					echo"<option value=2022> 2022</option>";
					echo"<option value=2023> 2023</option>";
					echo"<option value=2024>2024</option>";
					echo"<option value=2025>2025</option>";
					echo"<option value=2026>2026</option>";
					echo"<option value=2027>2027</option>";
					echo"<option value=2028>2028</option>";
					echo"<option value=2029>2029</option>";
					echo"<option value=2030>2030</option>";
					echo"<option value=2031>2031</option>";
					echo"<option value=2032>2032</option>";
					echo"<option value=2033>2033</option>";
					echo"<option value=2034>2034</option>";
					echo"<option value=2035>2035</option>";
					echo"<option value=2036>2036</option>";
					echo"<option value=2037>2037</option>";
					echo"<option value=2038>2038</option>";
					echo"<option value=2039>2039</option>";
					echo"<option value=2040>2040</option>";
					echo"</select> ";
					echo"</td></tr>";
					echo "<tr><td><center><input id=btn2 required=required type=submit value=Consultar name=Consultar><center></td>";
					echo"</tr>";
echo "</table>";
echo"<br><br>";
}


?>