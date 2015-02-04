<?php
class moduleLijst {
	public function deleteModule($id) {
		$dbh = new PDO("mysql:host=localhost;dbname=cursusphp","root","vdab");
		$sql = "delete from modules where id = " . $id;
		$dbh->exec($sql);
		$dbh = null;
	}
}
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Modules - DELETE</title>
</head>

<body>

<h1> Module Verwijderen </h1>
<?php
$mlijst = new moduleLijst();
$mlijst->deleteModule(12);
?>



</body>
</html>