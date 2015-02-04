<?php
require_once("module.class.php");
require_once("moduleLijst.class.php");

if ($_GET["action"] == "verwerk") {
	$module = new module($_GET["id"], $_POST["naam"], $_POST["prijs"]);
	$modLijst = new moduleLijst();
	$modLijst->updateModule($module);
	$updated = true;
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Modules </title>
</head>

<body>

<h1> Module bewerken </h1>
	<?php 
	if($updated) print("record bijgewerkt!");
	$modLijst = new moduleLijst();
	$module = $modLijst->getModuleById($_GET["id"]);
	?>
    
    <form action="modulebewerken.php?actin=verwerk&id=<?php print($_GET["id"]);?>" method="post">
    	Naam:
        <input type="text" name="naam" value="<?php print($module->getNaam()); ?>"> <br> <br>
        Prijs: 
        <input type="text" name="prijs" value="<?php print($module->getPrijs()); ?>"> euro <br>
        <input type="submit" value="opslaan">
     </form>
     <br>
     <a href="overzicht.php"> Terug naar overzicht </a>
        

</body>
</html>