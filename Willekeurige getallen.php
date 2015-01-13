<?php
class getalArrayGenerator {
	public function getArray() {
		$tab = array();
		for ($i=1; $i<=100; $i++) {
			$willekeurigGetal = rand(1, 1000); 
			$tab[$i] = $willekeurigGetal;
		}
		return $tab;
	}
}

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Willekeurige getallen</title>
</head>

<body>

<pre> 
	<?php
		$arrgen = new getalArrayGenerator();
		print_r($arrgen->getArray());

	?>
</pre>

</body>
</html>