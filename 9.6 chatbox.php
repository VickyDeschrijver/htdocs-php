<?php
session_start();
class bericht {
	private $dbConn;
	private $dbUsername;
	private $dbPassword;
	
	public function __construct() {
		$this->dbConn = "mysql:host=localhost;dbname=cursusphp";
		$this->dbUsername = "root";
		$this->dbPassword = "vdab";
	}
	
	public function getNickname() {
		return $this->nickname;
	}
	
	public function getBoodschap() {
		return $this->boodschap;
	}
}

class berichtLijst {
	private $dbConn;
	private $dbUsername;
	private $dbPassword;
	
	public function __construct() {
		$this->dbConn = "mysql:host=localhost;dbname=cursusphp";
		$this->dbUsername = "root";
		$this->dbPassword = "vdab";
	}
	
	public function getAlleBerichten() {
		$lijst = array();
		$sql = "select id, nickname, boodschap from chatberichten order by datum desc";
		$dbh = new PDO($this->dbConn, $this->dbUsername, $this->dbPassword);
		$resultSet = $dbh->query($sql);
		foreach ($resultSet as $rij) {
			$bericht = new bericht($rij["id"], $rij["nickname"], $rij["boodschap"]);
			array_push($lijst, $bericht);
		}
		$dbh = null;
		return $lijst;
	}
	
	public function createBericht($nickname, $boodschap) {
		if (!empty($boodschap)) {
			$dbh = new PDO($this->dbConn, $this->dbUsername, $this->dbPassword);
			$datum = date("Y-m-d H:i:s");
			$sql = "insert into chatberichten (nickname, boodschap, datum) values ('" . $nickname . "', '" . $boodschap . "' , '" . $datum . "')";
			$dbh->exec($sql);
			$dbh=null;
		}
	}
}

$berichtLijst = new berichtLijst();

if (!isset($_SESSION["nickname"])) {
	$getal = rand(111, 999);
	$_SESSION["nickname"] = "p" . $getal;
}

if ($_GET["action"] == "add") {
	$berichtLijst->createBericht($_SESSION["nickname"], $_POST["txtBoodschap"]);
}
$berichten = $berichtLijst->getAlleBerichten();

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>9.6 Chatbox</title>
</head>
<style> 
	table {
		border-collapse:border;
	}
	td {
		vertical-align:top;
	}
</style>

<body>

	<table style="width:500px;">
    	<tbody> 
        	<?php
			foreach ($berichten as $bericht) {
				?>
                <tr> 
                <td style="width:150px;">
                	<?php print($bericht->getNickname()); ?>
                </td>
                <td>
                	<?php print($bericht->getBoodschap()); ?>
                </td>
                </tr>
                <?php
			}
			?>
        </tbody>
    </table>
    <br>
    <br>
    <form method="post" action="9.6 chatbox.php?action=add">
    Bericht: <br>
    <textarea name="txtBoodschap" cols="60" rows="3"> </textarea> <br>
    <input type="submit" value="verstuur">
    </form>

</body>
</html>