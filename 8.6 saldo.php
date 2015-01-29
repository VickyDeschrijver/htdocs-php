<?php
class rekening {
	private static $intrest = 0.03;
	private $rekeningnr;
	private $saldo;
	
	public function __construct ($rekeningnr) {
		$this->rekeningnr = $rekeningnr;
		$this->saldo = 0;
	}
	public function getSaldo () {
		return $this->saldo;
	}
	public function stort($bedrag) {
		$this->saldo = $this->saldo + $bedrag;
	}
	public function voerIntrestDoor () {
		$this->saldo = $this->saldo + ($this->saldo * self::$intrest);
	}
}

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>8.6 Saldo berekenen</title>
</head>

<body>

<h1>
	<?php
	$rek = new Rekening("091-0122401-16");
	print ("Het saldo is: " . $rek->getSaldo() . "<br>");
	$rek->stort(1875);
	print ("Het saldo is: " . $rek->getSaldo() . "<br>");
	$rek->voerIntrestDoor();
	print ("Het saldo is: " . $rek->getSaldo() . "<br>");
	?>
</h1>
</body>
</html>