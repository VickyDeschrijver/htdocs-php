<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>2.1</title>
</head>

<body>

<?php
	$getal1 = 20;
	$getal2 = 30;
	print("VOOR" . ("<br>"));
	print("getal 1: " . $getal1 .("<br>"));
	print("getal 2: " . $getal2 .("<br>"));
	
	$temp = $getal1;
	$getal1 = $getal2;
	$getal2 = $temp;
	print("NA" . ("<br>"));
	print("getal 1: " . $getal1 .("<br>"));
	print("getal 2: " . $getal2);
?>

</body>
</html>