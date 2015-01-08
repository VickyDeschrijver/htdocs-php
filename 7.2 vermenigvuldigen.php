<?php
$grondtal = $_GET["grondtal"];
?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> De tafel van <?php print($grondtal);?> </title>
</head>

<body>

<table border="1">
	<thead>
    	<tr>
        <th colspan="2"> De tafel van <?php print($grondtal);?> </th>
        </tr>
    </thead>
    <tbody>
    	<?php
		for ($i = 1; $i <= 10; $i++){
			?>
            <tr>
            	<td style="text-align:right;">
                	<?php print($i);?> maal <?php print($grondtal);?> 
                </td>
                <td> <?php print($i*$grondtal);?> </td>
            </tr>
            <?php
		}
		?>
    </tbody>
</table>

<a href="7.2 vermenigvuldigeninvoer.php"> Pagina vernieuwen </a>


</body>
</html>
