<html>
<head>
	<title>Problema</title>
</head>
<body>
	<?php if (isset($_COOKIE['nombre'])) echo " <h2>Hola $_COOKIE[nombre]! </h2>"
	?>
	<form action="pagina14.php" method="post">
	Escriba su nombre:<br>
		<input type="text" value="Su nombre" name="texto" required>Nombre<br>
		<input type="submit" value="Crear cookie">
	</form>
</body>
</html>