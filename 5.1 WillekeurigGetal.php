<?php 
session_start();
if (!isset($_SESSION["getal"])){
	$_SESSION["getal"] = rand(1, 100);
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
		print($_SESSION["getal"]);		
		?>
        
</body>
</html>