<?php
require_once("film.class.php");
require_once("filmlijst.class.php");
$filmlijst = new filmLijst();
if (isset($_GET["action"]) && $_GET["action"] == "new") {
	$filmlijst->createFilm($_POST["titel"], $_POST["duurtijd"]);
}
if (isset($_GET["action"]) && $_GET["action"] == "delete") {
	$filmlijst->deleteFilm($_GET["id"]);
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head><title>Films</title></head>
	<body>
		<h1>Alle films</h1>
		<?php
		$tab = $filmlijst->getLijst();
		?>
		<ul>
			<?php
			foreach ($tab as $film) {
				?>
				<li>
					<a href="filmbewerken.php?id=<?php print($film->getId());?>">
					<?php print($film->getTitel());?>
					</a>
					(<?php print($film->getDuurtijd());?> min)
					<a href="films.php?action=delete&id=<?php print($film->getId());?>">
								<img src="images/delete.png"></a>
				</li>
				<?php
			}
			?>
		</ul>
		<h1>Film toevoegen</h1>
		<form action="films.php?action=new" method="post">
			Titel:
			<input type="text" name="titel"><br><br>
			Duurtijd:
			<input type="text" name="duurtijd"> minuten<br>
			<input type="submit" value="Toevoegen">
		</form>
	</body>
</html>