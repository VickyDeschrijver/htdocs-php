<?php
interface Omvang {
	public function getGrootte();
}

class Persoon implements Omvang {
	private $lengte;
	public function __construct($lengte) {
		$this->lengte = $lengte;
	}
	
	public function getGrootte() {
		return $this->lengte;
	}
}

class oppervlakte implements Omvang {
	private $breedte;
	private $lengte;
	
	public function __construct($breedte, $lengte) {
		$this->breedte = $breedte;
		$this->lengte = $lengte;
	}
	
	public function getGrootte() {
		return $this->lengte * $this->breedte;
	}
}

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Interfaces</title>
</head>

<body>

<h1>
	<?php
	$p = new Persoon(190);
	print("lengte persoon: " . $p->getGrootte() . "<br>");
	$o = new oppervlakte(20,30);
	print("oppervlakte: " . $o->getGrootte());
	?>
</h1>

</body>
</html>