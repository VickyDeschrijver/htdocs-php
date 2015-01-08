<?php 
class rekenmachine {
	// berekent kwadraat van een meegegeven getal
	public function getKwadraat ($getal) {
		$kwad = $getal * $getal;
		return $kwad;
	}
	
	// berekent de som van twee getallen
	public function getSom($getal1, $getal2) {
		$resultaat = $getal1 + $getal2;
		return $resultaat;
	}
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Rekenmachine</title>
</head>

<body>

<h1> 
	<?php
	$reken = new rekenmachine();
	print "Het kwadraat van 5 = " . ($reken->getKwadraat(5));
	?>
</h1>
<h1>
	<?php 
	print "65 + 8 = " . ($reken->getSom(65, 8)); ?> <br> <?php
	print "34 + 55 = " . ($reken->getSom(34, 55));
	?>
</h1>




</body>
</html>