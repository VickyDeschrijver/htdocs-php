<?php
class oefening{
	public function toonGetallen(){
		$get1 = 18;
		while ($get1 < 50){
			$get1 = $get1 + 2;
			print $get1 . ("<br>") ;
		}
	}
}

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>toonGetallen</title>
</head>

<body>


<?php
	$getal = new oefening;
	print ($getal->toonGetallen());

?>
</body>
</html>