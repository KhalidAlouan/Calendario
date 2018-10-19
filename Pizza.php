<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	
	<h1 align="center">Pizza</h1>
	<label>Selecciona los Ingredientes de la Pizza:</label>
	<br>
	<form method="post">
	<?php
	$preu_base=5;
	echo "<input type='checkbox' name='massa' value='massa' checked />Massa";
	echo "<input type='checkbox' name='orenga' value='Orenga' checked />Orenga";
	echo "<input type='checkbox' name='formatge' value='Formatge'/>Formatge";
	echo "<input type='checkbox' name='pernil' value='Pernil dolç'/>Pernil dolç";
	echo "<input type='checkbox' name='bacon' value='Bacon'/>Bacon";
	echo "<br>";
	echo "<br>";
	echo "<label>Precio base de la Pizza: $preu_base €</label>";
	echo"<br>";
	
	if (isset($_POST['massa']) && isset($_POST['orenga']) ) {
		if (isset($_POST['massa'])) {
			$preu_base=$preu_base+0.5;

		}
		if (isset($_POST['orenga'])) {
			$preu_base=$preu_base+0.5;

		}
		if (isset($_POST['formatge'])) {
			$preu_base=$preu_base+0.5;

		}
		if (isset($_POST['pernil'])) {
			$preu_base=$preu_base+0.5;

		}
		if (isset($_POST['bacon'])) {
			$preu_base=$preu_base+0.5;

		}

	}
	else{
		echo "Una pizza necessita sempre la massa i l'orenga";
		isset($_POST['massa'])==true && isset($_POST['orenga'])==true;
		
		
	}

	
	echo"<br>";
	echo "Precio final:".$preu_base."€";
	
	
	?>
	<br>
	<br>
	<br>
	<input type='submit' value='Enviar'>
	</form>
</body>
</html>