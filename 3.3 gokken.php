<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Getal gokken</title>
</head>

<body>

	
    
    Het getal is:
    <?php 
	$get_comp = rand(1, 10);
	if ($get_comp == $_GET["getal"]){
		print ("Het getal is JUIST - ");
		print $get_comp;
	}
	else {
		print ("Het getal is FOUT - ");
		print $get_comp;
	}
	?>

</body>
</html>