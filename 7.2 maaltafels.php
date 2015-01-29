<?php
$grondtal = $_GET["grondtal"];
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Vermenigvuldiging van het getal <?php print $grondtal; ?></title>
</head>

<body>

<table>
	<thead>
    	<tr >
    	<th colspan="2"> De tafel van het getal <?php print $grondtal; ?> </th>
        </tr>
    </thead>
    <tbody>
    	<?php
		for ($i = 1; $i <= 10; $i++) { ?>
        <tr> 
        	<td style="text-align:right;">
            <?php print ($i);?> maal <?php print ($grondtal); ?>
        </td>
        <td>
        <?php 
		print (" is  " . $i * $grondtal);
		?>
        </td>
        </tr>
        <?php
		}
		?>
     </tbody>
</table>

<br>

<a href="7.2 maaltafelsform.php" style="text-decoration:none; color:#13CCEB;"> Nieuw getal ingeven </a>




</body>
</html>