<?php
class Oefening {
	public function getSom($getal1, $getal2) {
		$som = $getal1 + $getal2;
		return $som;
	}
	public function getVerschil($getal1, $getal2) {
		$som = $getal1 - $getal2;
		return $som;
	}
	public function getProduct($getal1, $getal2) {
		$som = $getal1 * $getal2;
		return $som;
	}
	public function getQuotient($getal1, $getal2) {
		$som = $getal1 / $getal2;
		return $som;
	}
}
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Getalleninvoer</title>
</head>

<body>
	<h1>
			<?php
			$oef = new Oefening();
			if ($_GET["bewerking"] == 1)
				$resultaat = $oef->getSom($_GET["getal1"], $_GET["getal2"]);
			elseif ($_GET["bewerking"] == 2)
				$resultaat = $oef->getVerschil($_GET["getal1"], $_GET["getal2"]);
			elseif ($_GET["bewerking"] == 3)
				$resultaat = $oef->getProduct($_GET["getal1"], $_GET["getal2"]);
			elseif ($_GET["bewerking"] == 4)
				$resultaat = $oef->getQuotient($_GET["getal1"], $_GET["getal2"]);
			print($resultaat);
			?>
		</h1>
	
</body>
</html>