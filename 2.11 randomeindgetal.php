<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Random Eindgetal</title>
</head>

<body>
		<?php
		$random = rand(100, 200);
		for ($var = 1; $var <= $random; $var++) {
			print($var . " ");
		}
		?>


</body>
</html>

