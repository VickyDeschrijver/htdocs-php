<?php
class vergelijking {
	public function getSomIsStriktPositief($getal1, $getal2) {
		$antw = (($getal1 + $getal2) > 0);
		if ($antw == true) return "JA";
		else return "NEE";
	}
	public function getSomIsStriktNegatief($getal1, $getal2, $getal3) {
		$antw = (($getal1 + $getal2 + $getal3) < 0);
		if ($antw == true) return "JA";
		else return "NEE";
	}
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>2.5 Enkel positieve getallen</title>
</head>

<body>

<h1>
	<?php
	$vgl = new vergelijking();
	print "is de som positief? " . ($vgl->getSomIsStriktPositief(10, -15));
	?>
</h1>

<h1>
	<?php
	$vgl = new vergelijking();
	print "is de som negatief? " . ($vgl->getSomIsStriktNegatief(5, -50, 8));
	?>
</h1>

</body>
</html>