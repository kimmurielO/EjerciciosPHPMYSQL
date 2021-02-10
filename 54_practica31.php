<html>
<head>
	<title>Problema</title>
</head>
<body>

	<?php
		$conexion=mysqli_connect("localhost","root","") or
		die("Problemas en la conexion");
		mysqli_select_db($conexion,"phpfacil") or
		die("Problemas en la selección de la base de datos");
		$registros=mysqli_query($conexion,"select codigo, nombrecur from cursos") or
		die("Problemas en el select:".mysqli_error($conexion));
		while($reg=mysqli_fetch_array($registros)){
	?>
	<A href="pagina11.php?curso=<?php echo $reg[0]; ?>"> <?php echo $reg[1]; ?> </A> <br>
	<?php
		}
	?>
</body>
</html>