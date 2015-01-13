<?php
class arrayGenerator{
	public function getArray() {
		$tab = array();
		for ($i = 0; $i < 50; $i++) {
			$getal = $getal + $i;
			$tab[$i] = $getal;
		}
		return $tab;
	}
}
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<pre>
	<?php
		$generat = new arrayGenerator();
		print_r($generat->getArray());
	?>
</pre>



</body>
</html>