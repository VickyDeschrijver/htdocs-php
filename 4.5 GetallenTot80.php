<?php
class GetalArrayGenerator{
	public function getArray(){
		$tab = array();
		$getal = rand(1, 100);
		array_push($tab,$getal);
		while ($getal <= 80){
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
<title>getallen tot 80</title>
</head>

<body>

<pre>
	<?php 
	$getal = new GetalArrayGenerator;
	print_r($getal->getArray());
	?>
</pre>

</body>
</html>