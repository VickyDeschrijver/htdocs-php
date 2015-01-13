<?php
class oefening{
	public function getSom($getal1, $getal2) {
		$som = $getal1 + $getal2;
		return $som;
	}
	public function getMin($getal1, $getal2) {
		$som = $getal1 - $getal2;
		return $som;
	}
	public function getMaal ($getal1, $getal2) {
		$som = $getal1 * $getal2;
		return $som;
	}
	public function getDiv ($getal1, $getal2) {
		$som = $getal1 / $getal2;
		return $som;
	}
}
?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>3.1 getallenKiezen</title>
</head>

<body>
<h1>
	<?php
	$bewerk = new oefening;
	if ($_GET["bewerking"] == 1)
		$resultaat = $bewerk->getSom($_GET["getal1"], $_GET["getal2"]);
	elseif ($_GET["bewerking"] == 2)
		$resultaat = $bewerk->getMin($_GET["getal1"], $_GET["getal2"]); 
	elseif ($_GET["bewerking"] == 3)
		$resultaat = $bewerk->getMaal($_GET["getal1"], $_GET["getal2"]);
	elseif ($_GET["bewerking"] == 4)
		$resultaat = $bewerk->getDiv($_GET["getal1"], $_GET["getal2"]);
		
	print $resultaat;
	
	?>
    
</h1>
</body>
</html>