<?php
class geheim{
	public function getResultaat() {
		$mijnGetal = 10;
		$mijngetal = $mijnGetal * $mijnGetal;
		return $mijnGetal;
	}
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Oefening op variabelen</title>
</head>

<body>

<h1>
	<?php
	$geheim = new geheim();
	print($geheim->getResultaat());
	?>
</h1>

</body>
</html>