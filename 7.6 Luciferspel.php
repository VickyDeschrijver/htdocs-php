<?php
session_start();

if ($_GET["reset"] == 1) unset($_SESSION["lucifers"]);
if (!isset ($_SESSION["lucifers"])) $_SESSION["lucifers"] = 7;

$aantal = $_GET["aantal"];
$einde = false;

if (isset($aantal)) {
	if ($_SESSION["lucifers"] - $aantal > 0) {
		$_SESSION["lucifers"] -= $aantal;
	} elseif ($_SESSION["lucifers"] - $aantal == 0) {
		$einde = true;
	}
}



?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>7.5 Luciferspel</title>
</head>

<body>

	<h1> Luciferspel </h1>
    
    <?php 
		if ($einde) { ?>
        <h2> Het spel is afgelopen. </h2>
        <?php
		} else {
			for ($i=1; $i<=$_SESSION["lucifers"]; $i++) {
				?>
                <img src="images/lucifer.png">
                <?php
			} ?>
            <br>
            <br>
            <table>
            	<tr>
                	<td>
                    <form action="7.6 Luciferspel.php?aantal=1" method="post">
                    	<input type="submit" value="Eén lucifer wegnemen">
                    </form>
                    </td>
                    
                    <td>
                    <form action="7.6 Luciferspel.php?aantal=2" method="post">
                    	<input type="submit" value="Twee lucifers wegnemen">
                    </form>
                    </td>
                </tr>
            </table>
            <?php
		}
	?>
    <br> Klik <a href="7.6 Luciferspel.php?reset=1"> Hier </a> om een nieuw spel te beginnen.
    
    


</body>
</html>