<?php
class personenlijst {
	public function getLijst() {
		$lijst = array();
		$dbh = new PDO("mysql:host=localhost;dbname=cursusphp","root","vdab");
		$resultSet = $dbh->query("select familienaam, voornaam from personen");
		foreach ($resultSet as $rij) {
			$naam = $rij["familienaam"] . ", " . $rij["voornaam"];
			array_push($lijst, $naam);
		}
		$dbh = null;
		rsort($lijst);
		return $lijst;
	}
}
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Databanken Introductie</title>
</head>

<body>

<?php
$pl = new personenlijst();
$tab = $pl->getLijst();
?>
<ul>
	<?php 
	foreach ($tab as $naam) {
		print("<li>" . $naam . "</li>");
	}
	?>
</ul>


</body>
</html>