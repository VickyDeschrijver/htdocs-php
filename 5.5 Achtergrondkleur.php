<?php
$achtergrondkleur = "white";
	if (isset($_POST["kleur"])) {
		setcookie("achtergrondkleur", $_POST["kleur"], time() + 24 * 3600);
		$achtergrondkleur = $_POST["kleur"];
	} elseif (isset($_COOKIE["achtergrondkleur"])) {
		$achtergrondkleur = $_COOKIE["achtergrondkleur"];
	}



?>




<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Achtergrondkleur</title>
<style>
body{
	background-color:<?php print ($achtergrondkleur);?>;
}
a{
	text-decoration:none;
	font-weight:bold;
}

</style>

</head>

<body>

	<Form action="5.5 Achtergrondkleur.php" method="post">
    	Kies uw favoriete achtergrondkleur
        <select name="kleur">
        	<option value="red"> Rood </option>
            <option value="green"> Groen </option>
            <option value="blue"> Blauw </option>
            <option value="darkseagreen"> Donker Zeegroen </option>
            <option value="yellow"> Geel </option>
        </select>
        <input type="submit" value="Ik heb gekozen!">
    </Form>
    
    <a href="5.5 Achtergrondkleur.php"> Pagina vernieuwen </a>


</body>
</html>