<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Gebruikersinvoer</title>
</head>

<body>
	<h1>
    	Goeiemorgen,
        <?php
		print ($_GET["naam"]);
		?>
        . Het is vandaag
        <?php
		print ($_GET["dag"]);
		?>
    </h1>
</body>
</html>