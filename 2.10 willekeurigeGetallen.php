<?php
class GetalArrayGenerator{
	public function getArray(){
		$tab = array();
		for ($i=0; ($i<20); $i++) {
			$willekeurigGetal = rand(-50, 50);
			$tab[$i] = $willekeurigGetal+1;
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
	$arrgen = new GetalArrayGenerator();
	print_r($arrgen->getArray());	
	?>
</pre>

</body>
</html>