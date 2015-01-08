<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Fibonacci</title>
</head>

<body>
		<?php
		$getal1 = 0;
		$getal2 = 1;
		print ($getal1 . " " . ("<br>"));
		while ($getal2 < 5000) {
			print($getal1 . " " . ("<br>"));
			$oudGetal1 = $getal1;
			$getal1 = $getal2;
			$getal2 = $oudGetal1 + $getal1;
		}
		
		?>


</body>
</html>

