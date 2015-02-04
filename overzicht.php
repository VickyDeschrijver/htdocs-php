<?php
require_once("module.class.php");
require_once("moduleLijst.class.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Modules</title>
</head>

<body>

<h1> Modules </h1>
	<?php
	$modLijst = new moduleLijst();
	$tab = $modLijst->getLijst();
	?>
    
    <ul> 
    	<?php
		foreach ($tab as $module) {
			$moduleNaam = $module->getNaam();
			$moduleId = $module->getId();
			
			print ("<li>" . $moduleNaam . " (<a href=\"modulebewerken.php?id=" . $moduleId . "\"> Bewerken </a>) </li>");
		}
		?>
    </ul>

</body>
</html>