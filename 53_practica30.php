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
		$registros=mysqli_query($conexion,"select count(alu.codigocurso) as cantidad, nombrecur from alumnos as alu inner join cursos as cur on cur.codigo=alu.codigocurso group by alu.codigocurso") or
		die("Problemas en el select:".mysqli_error($conexion));

		$registros2=mysqli_query($conexion,"select nombre from alumnos inner join cursos ON cursos.codigo=alumnos.codigocurso group by alumnos.nombre") or
		die("Problemas en el select:".mysqli_error($conexion));
		//$reg2=mysqli_fetch_array($registros2);

		while ($reg=mysqli_fetch_array($registros))
		{
		//$reg2=mysqli_fetch_array($registros2);
		echo "Nombre del curso: ".$reg['nombrecur']."<br>";
		echo "Cantidad de inscriptos: ".$reg['cantidad']."<br>";
		echo "Nombres: ";
		//echo mysqli_fetch_array($registros2)[0];
		//while($reg2=mysqli_fetch_array($registros2)){
		while($reg['cantidad'] > 0){
			$reg2=mysqli_fetch_array($registros2);
			if($reg['cantidad'] == 1){
				echo $reg2['nombre'];
			}
			else{
				echo $reg2['nombre']." - ";
			}
			$reg['cantidad']--;
		}
		echo "<hr>";
		}
		mysqli_close($conexion);
	?>
</body>
</html>