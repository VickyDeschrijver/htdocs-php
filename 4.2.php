<?php

class GetalArrayGenerator{
	public function getArray(){
		$tab = array();
		for ($i=0; $i<50; $i++) {
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
<title>50 getallen oef4.2</title>
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