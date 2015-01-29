<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Overzicht tafels vermenigvuldiging</title>
</head>

<body>
<table border="1">
	<tbody>
    	<td>
        <?php
		for ($i = 1; $i <= 10; $i++) {
			?> <td><?php print ($i); ?> </td>
        <?php
		} ?>
        </td>
        
        <tr>
        <?php
		for ($i = 1; $i <= 10; $i++) { ?>
        	<tr>
            <td> <?php print ($i); ?> </td>
        	<?php for ($j = 1; $j <= 10; $j++) {
				?>
                <td> <?php print ($i*$j); ?> </td>
        <?php
		}
		?>
        </tr>
        <?php
		}
		?>
    </tbody>
</table>


</body>
</html>