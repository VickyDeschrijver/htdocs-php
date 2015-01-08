<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Random Eindgetal</title>
</head>

<body>
		<?php
		$getal = rand(1, 1000);
		while ($getal < 600){
			print ($getal . ", ");
			$getal = rand(1, 1000);
		}
		print ($getal);
		
		?>


</body>
</html>

