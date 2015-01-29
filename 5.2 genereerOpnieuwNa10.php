<?php
session_start();
class oefening {
	public function genereerGetal () {
		if (!isset ($_SESSION["getal"])) {
			$_SESSION["getal"] = rand(1,100);
		}
	}
}
	

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<h1> 
<?php
	
	print ($_SESSION["getal"]);
?>
</h1>
</body>
</html>