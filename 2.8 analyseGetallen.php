<?php
class oefening {
	public function getAnalyse($getal1, $getal2) {
		if ($getal1 > $getal2) {
			print "Het eerste getal is groter dan het tweede";
		} elseif ($getal1 == $getal2) {
			print "Het eerste getal is gelijk aan het tweede";
		} else {
			print "Het eerste getal is NIET groter dan het tweede";
		}
	}
}
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Analyse van getallen</title>
</head>

<body>

<h1>
	<?php
	$oef = new oefening();
	print($oef->getAnalyse (7, 2));
	?>
</h1>

</body>
</html>