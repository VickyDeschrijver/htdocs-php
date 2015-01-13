<?php
class oefening {
	public function generator () {
		$tab = array();
		for ($i = 1; $i <= 20; $i++) {
			$random = rand(-50, 50);
			$tab[$i] = $random;
		}
		return $tab;
	}
}

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>4.1 getallen tussen -50 en 50</title>
</head>

<body>

<pre>
<?php
	$arrgen = new oefening();
	print_r($arrgen->generator());
?>
</pre>

</body>
</html>