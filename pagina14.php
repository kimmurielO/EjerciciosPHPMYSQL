<?php
	if ($_REQUEST['texto'] != "")
		setcookie("nombre",$_REQUEST['texto'],time()+60*60*24*365,"/");
	?>

<html>
<head>
	<title>Problema</title>
</head>
<body>
	Se creó la cookie.
	<br>
	<a href="57_practica34.php">Ir a la otra página</a>
</body>
</html>