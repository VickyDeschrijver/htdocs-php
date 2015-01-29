<?php
class thermometer {
	private $temp;
	
	public function __construct($temp) {
		$this->temp = $temp;
	}
	
	public function verhoog($aantalGraden) {
		$this->temp += $aantalGraden;
	}
	
	public function verlaag($aantalGraden) {
		$this->temp -= $aantalGraden;
	}
	
	public function getTemp() {
		return $this->temp;
	}
}



?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>8.1 Thermometer</title>
</head>

<body>

<h1>
			<?php
			$therm = new Thermometer(25);
			$therm->verhoog(20);
			print($therm->getTemp() . "<br>");
			$therm->verlaag(5);
			print($therm->getTemp() . "<br>");
			$therm->verlaag(846);
			print($therm->getTemp() . "<br>");
			?>
		</h1>









</body>
</html>