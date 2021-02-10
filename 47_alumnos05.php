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
		mysqli_query($conexion,"delete from alumnos") or
		die("Problemas en el select:".mysqli_error($conexion));
		echo "Se efectuó el borrado de todos los alumnos.";
		mysqli_close($conexion);
	?>
</body>
</html>