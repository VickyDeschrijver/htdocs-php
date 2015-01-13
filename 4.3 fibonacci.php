<?php
class arrayGenerator{
	public function getArray() {
		$fib = array(0, 1);
		for ($i = 2; $i < 30; $i++) {
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