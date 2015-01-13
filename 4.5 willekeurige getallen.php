<?php
class getalArrayGenerator {
	public function getArray() {
		$tab = array();
		$getal = rand(1, 100); 
		array_push($tab, $getal);
		while ($getal<=80) {
			$getal = rand(1, 100);
			array_push($tab, $getal);
		}
		return $tab;
	}
}
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>4.5 Getallen tot 80</title>
</head>

<body>
<pre>
	<?php
		$willekeur = new getalArrayGenerator();
		print_r($willekeur->getArray());
	?>
</pre>

</body>
</html>