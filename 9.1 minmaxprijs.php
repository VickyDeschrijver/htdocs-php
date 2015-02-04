<?php
class moduleLijst {
	public function getLijst() {
		$lijst = array();
		$dbh = new PDO("mysql:host=localhost;dbname=cursusphp","root","vdab");
		$sql = "select naam, prijs from modules where prijs >= " . $_GET["minprijs"] . "and prijs <= " . $_GET["maxprijs"] . "order by prijs";
		$resultSet = $dbh->query($sql);
		foreach ($resultSet as $rij) {
			$module = $rij["naam"] . " ( " . $rij["prijs"] . "€ )";
			array_push($lijst, $module);
		}
		$dbh = null;
		return $lijst;
	}
}


?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>9.1 Min Max Prijs</title>
</head>

<body>

<h1> Zoekresultaat </h1>
<?php
$pl = new moduleLijst();
$tab = $pl->getLijst();
?>

<ul>
	<?php
	foreach ($tab as $module) {
		print("<li>" . $module . "</li>");
	}
	?>
</ul>


</body>
</html>

