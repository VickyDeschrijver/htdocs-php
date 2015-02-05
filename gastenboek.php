<?php
require_once("bericht.class.php");
require_once("gastenboek.class.php");

$gb = new gastenboek();
if ($_GET["action"] == "create") {
	$auteur = $_POST["auteur"];
	$boodschap = $_POST["boodschap"];
	if (!empty($auteur) && !empty($boodschap)) {
		$gb->createBericht($auteur, $boodschap);
	}
}
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Gastenboek</title>
</head>

<body>
	<h2> Berichten </h2>
    
    <?php 
	$berichten = $gb->getAlleBerichten();
	?>
    
    <ul>
    	<?php
		foreach ($berichten as $bericht) {
			?>
            <strong> Auteur </strong><?php print($bericht->getAuteur());?>
            <br> <em>
            <?php 
			print($bericht->getBoodschap());?>
            </em> 
            <hr>
            <?php
		}
		?>
    </ul>
    
    <h2> Bericht toevoegen </h2>
    <form method="post" action="gastenboek.php?action=create">
    	<p> <strong> Auteur </strong> <input type="text" name="auteur"> </p>
        <p> <strong> Boodschap </strong> <br>
        <textarea name="boodschap" cols="50" rows="4"> </textarea> </p>
        <input type="submit" value="Verzenden"> 
    </form>
    
    
</body>
</html>