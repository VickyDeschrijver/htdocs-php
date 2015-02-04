<?php
class filmLijst {
	public function getLijst() {
		$lijst = array();
		$dbh = new PDO("mysql:host=localhost;dbname=cursusphp","root","vdab");
		$resultSet = $dbh->query("select titel, duurtijd from films");
		foreach ($resultSet as $rij) {
			$naam = $rij["titel"] . " ( " . $rij["duurtijd"] . " min) ";
			array_push($lijst, $naam);
		}
		$dbh = null;
		sort($lijst);
		return $lijst;
	}
	public function createModule($titel, $duurtijd) {
		if (is_numeric($duurtijd) && $duurtijd > 0 && !empty($titel)) {
			$dbh = new PDO("mysql:host=localhost;dbname=cursusphp","root","vdab");
			$sql = "insert into films (titel, duurtijd) values ('" . $titel . "', " . $duurtijd . ")";
			$dbh->exec($sql);
			$dbh = null;
		}
		else {
			print "Sorry, u heeft de gegevens niet correct ingegeven. Probeer het opnieuw";
		}
	}
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>9.2 Films</title>
</head>

<body>

<h1> Alle Films </h1>
<?php
$pl = new filmLijst();
$tab = $pl->getLijst();
?>
<ul>
	<?php 
	foreach ($tab as $naam) {
		print("<li>" . $naam . "</li>");
	}
	?>
</ul>

<h1> Film Toevoegen </h1>
	<?php
	$mlijst = new filmLijst();
	$mlijst->createModule($_GET["titel"], $_GET["duurtijd"]);
	?>

<form method="get">

Titel
<input type="text" name="titel"> <br> 
Duurtijd <input type="text" name="duurtijd"> minuten <br>
<input type="submit" value="TOEVOEGEN"> 
</form>
	

</body>
</html>