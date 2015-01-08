<?php 
class Frequentie{
	public function getFrequentieGetallen(){
		$tab = array();
		for ($i = 1; $i <= 40; $i++){
			$tab[$i] = 0;
		}
		for ($i = 0; $i < 100; $i++){
			$getal = rand(1, 40);
			$tab[$getal]++;
		}
		return $tab;
	}
}
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>FrequentieGetallen</title>
</head>

<body>

    	<?php
		$lijst = new Frequentie();
		$tab = $lijst->getFrequentieGetallen();
		for ($i = 1; $i <= 40; $i++){
			?> Getal <?php print($i); ?> werd <?php print ($tab[$i]); ?> keer gegenereerd. <br>
            <?php
		}
		?>
        
</body>
</html>