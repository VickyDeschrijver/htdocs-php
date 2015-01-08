<?php 
class Kalender{
	public function getAantalDagenInMaand(){
		$dagen = array();
		$dagen["januari"] = 31;
		$dagen["februari"] = 28;
		$dagen["maart"] = 31;
		$dagen["april"] = 30;
		$dagen["mei"] = 31;
		return $dagen;
	}
}		
?>
<style>
li{
	list-style-type:none;
}
</style>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Hello World</title>
</head>

<body>

	<ul>
    	<?php
		$kal = new Kalender();
		$tabel = $kal->getAantalDagenInMaand();
		foreach ($tabel as $sleutel=>$waarde){
			print ("<li>");
			print ($sleutel);
			print (" bevat ");
			print ($waarde);
			print (" dagen");
			print ("</li>");
		}
		?>
    </ul>
</body>
</html>