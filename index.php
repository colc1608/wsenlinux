<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MI INDEX</title>
</head>
<body>
	<?php

	print(" <H2>SALARIO DE TRABAJADOR</h2>");

	?>

	<form action="recibirDatos.php" method="post">
	Trabajador<input type="text" name="tra" size="30" /> <br>  <br>
	Años experiencia<input type="text" name="exp" size="10" /> <br>
	tarifa<input type="text" name="tar" size="10" /> <br> 
	horas<input type="text" name="hor" size="10" /> <br> 
	<input type="submit" name="b1" value=" Enviar " />
	</form>
	
</body>
</html>