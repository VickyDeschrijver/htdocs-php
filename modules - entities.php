<?php
class module {
	private $id;
	private $naam;
	private $prijs;
	
	public function __construct($id, $naam, $prijs) {
		$this->id = $id;
		$this->naam = $naam;
		$this->prijs = $prijs;
	}
	public function getId() {
		return $this->id;
	}
	public function getNaam() {
		return $this->naam;
	}
	public function getPrijs() {
		return $this->prijs;
	}
}

class moduleLijst {
	public function getLijst() {
		$lijst = array();
		$dbh = new PDO("mysql:host=localhost;dbname=cursusphp","root","vdab");
		$sql = "select id, naam, prijs from modules order by naam";
		$resultSet = $dbh->query($sql);
		foreach ($resultSet as $rij) {
			$module = new Module($rij["id"], $rij["naam"], $rij["prijs"]);
			array_push($lijst, $module);
		}
		$dbh = null;
		return $lijst;
	}
	public function deleteModule($id) {
		$dbh = new PDO("mysql:host=localhost;dbname=cursusphp","root","vdab");
		$sql = "delete from modules where id = " . $id;
		$dbh->exec($sql);
		$dbh = null;
	}
}
$modLijst = new moduleLijst();
if (isset($_GET["action"]) && $_GET["action"] == "verwijder") {
	$modLijst->deleteModule($_GET["id"]);
}





?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Modules - entities</title>
</head>

<body>
<h1> Modules </h1>
<?php 
$tab = $modLijst->getLijst();
?>
<ul>
	<?php
	foreach ($tab as $module) {
		$moduleNaam = $module->getNaam();
		$moduleId = $module->getId();
		print ("<li>" . $moduleNaam . " (<a href=\"modules - entities.php?action=verwijder&id=" . $moduleId . "\">verwijderen </a>) </li>");
	}
	?>	
</ul>



</body>
</html>