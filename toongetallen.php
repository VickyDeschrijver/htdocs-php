<?php 
require_once("getallenreeksmaker.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Getallenreeks</title>
<style>
.getreeks{
	float:left;}
</style>
</head>

<body>

	<?php
	$getReeks = new getallenReeksMaker();
	$tabel = $getReeks->getReeks();
	?>
    <table border="1">
    	<tbody >
        	<tr>
			<?php
			foreach ($tabel as $getal) {
				?>
                
                	<td>
                    <?php print($getal);?>
                    </td>
                
            	<?php 
			}
			?>
            </tr>
        </tbody>
    </table>

</body>
</html>