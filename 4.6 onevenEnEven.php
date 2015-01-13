<?php
class GetalArrayGenerator{
	public function getArrayOdd(){
		$tab = array();
		$getal = 1;
		array_push($tab,$getal);
		while ($getal < 49){
			$getal = $getal+2;
			array_push($tab, $getal);
		}
		return $tab;
	}
	public function getArrayEven(){
		$tab = array();
		$getal = 0;
		array_push($tab,$getal);
		while ($getal < 50){
			$getal = $getal+2;
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
<title>Oneven en Even</title>
</head>

<body>

<pre>
	<?php 
	$getal = new GetalArrayGenerator;
	print_r($getal->getArrayOdd());
	print_r($getal->getArrayEven());
	?>
    
</pre>

</body>
</html>