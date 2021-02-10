<html>
<head>
	<title>Problema</title>
</head>
<body>
	<?php
		echo "<h1>Listado del curso $_REQUEST[curso] </h1>";

		$conexion=mysqli_connect("localhost","root","") or
		die("Problemas en la conexion");
		mysqli_select_db($conexion,"phpfacil") or
		die("Problemas en la selección de la base de datos");
		$registros=mysqli_query($conexion,"select nombre from alumnos where codigocurso=$_REQUEST[curso]") or
		die("Problemas en el select:".mysqli_error($conexion));

		echo "<h4>Nombre de los alumnos:</h4>";
		while ($reg=mysqli_fetch_array($registros))
		{
			echo $reg['nombre']."<br>";
		}
	?>
</body>
</html>