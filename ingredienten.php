<?php
class IngredientenArrayGenerator {
	public function getIngredienten() {
		$ing = array();
		array_push($ing, "bloem");
		array_push($ing, "zout");
		array_push($ing, "suiker");
		array_push($ing, "gist");
		array_push($ing, "water");
		$ing[] = "plantaardig vet";
		return $ing;
	}
}

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ingredienten</title>
</head>

<body>

<pre>
	<?php 
	$ingredienten = new IngredientenArrayGenerator();
	print_r($ingredienten->getIngredienten());
	?>
</pre>

</body>
</html>