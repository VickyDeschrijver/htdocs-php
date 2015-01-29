<?php

class persoon {
	private $voornaam;
	private $familienaam;
	
	public function getVollNaam() {
		return $this->familienaam  . ", " . $this->voornaam;
	}
	
	public function setVoornaam($voornaam) {
		$this->voornaam = $voornaam;
	}
	
	public function setFamilienaam($familienaam) {
		$this->familienaam = $familienaam;
	}
	
}

class cursist extends persoon {
	private $aantalCursussen;
}

class medewerker extends persoon {
	private $aantalCursisten;
}





$cursist = new cursist();
$medewerker = new medewerker();
$cursist->setFamilienaam("Peeters");
$cursist->setVoornaam("Jan");
$medewerker->setFamilienaam("Janssens");
$medewerker->setVoornaam("Tom");

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>N8.4 cursisten en medewerkers</title>
</head>

<body>

<h1> Namen </h1>
<ul>
			<li><?php print($cursist->getVollNaam());?></li>
			<li><?php print($medewerker->getVollNaam());?></li>
</ul>


</body>
</html>