<?php
class SeizoenenArrayGenerator {
	public function getseizoenen() {
		$ing = array();
		array_push($ing, "zomer");
		array_push($ing, "lente");
		array_push($ing, "herfst");
		array_push($ing, "winter");
		return $ing;
	}
}

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Seizoenen</title>
</head>

<body>

<pre>
	<?php 
	$seiz = new SeizoenenArrayGenerator;
	print_r($seiz->getseizoenen());
	?>
</pre>

</body>
</html>