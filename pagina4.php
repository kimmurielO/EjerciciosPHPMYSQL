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
		$registros=mysqli_query($conexion,"select nombre from alumnos
		where mail='$_REQUEST[mail]'") or
		die("Problemas en el select:".mysqli_error($conexion));

		if ($reg=mysqli_fetch_array($registros))
		{
			mysqli_query($conexion,"delete from alumnos where mail='$_REQUEST[mail]'") or
			die("Problemas en el select:".mysqli_error($conexion));
			echo "Se efectuó el borrado del alumno con dicho mail.";
		}
		else
		{
			echo "No existe un alumno con ese mail.";
		}
		mysqli_close($conexion);
	?>
</body>
</html>