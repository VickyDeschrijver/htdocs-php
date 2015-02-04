<?php
class moduleLijst {
	public function createModule($naam, $prijs) {
		$dbh = new PDO("mysql:host=localhost;dbname=cursusphp","root","vdab");
		$sql = "insert into modules (naam, prijs) values ('" . $naam . "', " . $prijs . ")";
		$dbh->exec($sql);
		$laatsteId = $dbh->lastInsertId();
		print($laatsteId);
		$dbh = null;
	}
}
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Modules - Toevoegen</title>
</head>

<body>

<h1> Module Toevoegen </h1>
	<?php
	$mlijst = new moduleLijst();
	$mlijst->createModule("access", 85.0);
	?>
</body>
</html>

