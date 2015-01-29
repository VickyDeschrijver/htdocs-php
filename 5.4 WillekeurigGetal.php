<?php 
session_start();
if (!isset($_SESSION["getal"])){
	$_SESSION["getal"] = rand(1, 100);
}
else {
	if($_SESSION["bezoeken"]>0){
		$rest = $_SESSION["bezoeken"] % 10;
		if($_SESSION["bezoeken"] == 20){
			$_SESSION["bezoeken"] = 0;
			$_SESSION["getal"] = rand(1, 100);}
		
		elseif ($rest == 0) {
			$_SESSION["getal"] = rand(1, 100);}
		}
	}

if (!isset($_SESSION["bezoeken"])){
	$_SESSION["bezoeken"] = 0;
}
else {
	$_SESSION["bezoeken"]++;
	
}
	
?>
	


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Willekeurig Getal Session</title>
</head>

<body>

    	<?php
		print("Willekeurig getal: " . $_SESSION["getal"] . ("<br>"));
		print ("Aantal bezoeken: " . $_SESSION["bezoeken"]);
		?>
        
</body>
</html>