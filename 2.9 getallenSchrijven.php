<?php
class oefening {
	public function schrijfGetal() {
		$getal = 0;
		switch($getal) {
			case ($getal == "1"):
			print ("één");
			break;
			
			case ($getal == "2"):
			print ("twee");
			break;
			
			case ($getal == "3"):
			print ("drie");
			break;
			
			case ($getal == "4"):
			print ("vier");
			break;
			
			case ($getal == "5"):
			print ("vijf");
			break;
			
			case ($getal == "1984"):
			print ("Het beste jaar ooit!!!!");
			break;
			
			default:
			print $getal;
			break;
		}
	}
}

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Getallen schrijven</title>
</head>

<body>

<?php
	$getGetal = new oefening();
	print ($getGetal->schrijfGetal(1984));
?>

</body>
</html>