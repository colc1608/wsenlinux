<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>recibiendo datos...</title>
</head>
<body>
<?php

	//recibiendo los datos por POST
	$trabajador=$_POST['tra'];
	$experiencia=$_POST['exp'];
	$tarifa=$_POST['tar'];
	$horas=$_POST['hor'];

	//variable adicional
	$bono=0; 
	$total=0;
	$seguro=0;

	//comienza la logica del ejercicio
	if($experiencia>5)
		$bono=50;
	else if($experiencia>10)
		$bono=100;
	else if($experiencia>15)
		$bono=150;

	$total=$bono+($tarifa*$horas);
	$seguro = $total-($total*0.20);

	//Impresion de datos
	 echo("El trabajador <strong> ".$trabajador." </strong> tiene la siguiente informacion <br><br>");
	 echo("su bono por experiencia es $bono <br>");
	 echo("su sueldo normal es".$tarifa*$horas." <br>");
	 echo("El sueldo seria $total <br>");
	 echo("Sueldo NETO con descuento de AFP $seguro <br>");

?>

</body>
</html>

