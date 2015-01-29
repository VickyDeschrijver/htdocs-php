<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP is Fantastisch ?!?!?!</title>
</head>

<body>

<p style="text-align:center">
<?php
	for ($i = 1; $i < 7; $i++) { ?>
		<span style="font-size: <?php print($i * 10);?>px"> PHP is fantastisch ?!?!?!?! </span> <br>
    <?php		
	}
?>
<?php
	for ($i = 7; $i >= 0; $i--) { ?>
		<span style="font-size: <?php print($i * 10);?>px"> PHP is fantastisch ?!?!?!?! </span> <br>
	<?php
    }
?>

</p>


</body>
</html>