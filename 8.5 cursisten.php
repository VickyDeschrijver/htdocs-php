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
	
	public function __construct($familienaam, $voornaam, $aantalCursussen) {
		parent::setFamilienaam($familienaam);
		parent::setVoornaam($voornaam);
		$this->aantalCursussen = $aantalCursussen;
	}
	
	public function getAantalCursussen() {
		return $this->aantalCursussen;
	}
	
	public function setAantalCursussen($aantalCursussen) {
		$this->aantalCursussen = $aantalCursussen;
	}
}

class medewerker extends persoon {
	private $aantalCursisten;
	
	public function __construct($familienaam, $voornaam, $aantalCursisten) {
		parent::setFamilienaam($familienaam);
		parent::setVoornaam($voornaam);
		$this->aantalCursisten = $aantalCursisten;
	}
	
	public function getAantalCursisten() {
		return $this->aantalCursisten;
	}
	
	public function setAantalCursisten($aantalCursisten) {
		$this->aantalCursisten = $aantalCursisten;
	}
}





$cursist = new cursist("Peeters", "Jan", 3);
$medewerker = new medewerker("Janssens", "Tom", 8);


?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>8.5 cursisten en medewerkers</title>
</head>

<body>

<h1> Namen </h1>
<ul> 
	<li> <?php print($cursist->getVollNaam() . " volgt " . $cursist->getAantalCursussen() . " cursus(sen)");?> </li>
    <li> <?php print($medewerker->getVollNaam() . " begeleidt " . $medewerker->getAantalCursisten() . " cursist(en).");?> </li>
</ul>


</body>
</html>