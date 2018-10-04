<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="calendario.css">
<head>
    <title> Calendario </title>
  <style type="text/css">
  	#tabla{
  		color: blue;
  	}
  	
  </style>
</head>
<body>
    <h1> Calendario </h1>
    
    <?php
  	echo"<table id='tabla' border='2px' height='20%' width='35%'";
    $dias = array('Lunes','Martes','Miercoles','Jueves','Viernes','Sábado','Domingo');
   
       
    $filas = 6;
    $columnas = 7;
    $cont=1;

    $dia=getdate();

    
        for ($i = 0; $i <= $filas; $i++) {
            echo "<tr> $dias[$i] \n";
            for ($j = 1; $j <= $columnas; $j++) {
            	if ($cont<=30) {
            		echo "\t<td>$cont</td>\n";
            		$cont=$cont+1;
            		
            	}elseif ($cont>30) {
            		break;
            	}elseif ($dia==$cont) {
            		echo"El dia de hoy es $cont";
            	}

             	
            }
            echo "</tr>";
        }
     echo"</table>";
    ?>
</body>
</html>