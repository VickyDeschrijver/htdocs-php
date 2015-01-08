<?php 
require_once("greetinggenerator.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Hello World</title>
</head>

<body>

	<h1>
    	<?php
		$gg = new greetingGenerator();
		print($gg->getGreeting());
		?>
    </h1>

</body>
</html>