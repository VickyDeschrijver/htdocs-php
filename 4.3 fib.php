<?php

class GetalArrayGenerator{
	public function getArray(){
		$fib = array(0, 1);
		for ($i=2; $i<30; $i++) {
			$fib[$i] = $fib[$i-1] + $fib[$i-2];
		}
		return $fib;
	}
}

?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Fibonacchi oef 4.3</title>
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