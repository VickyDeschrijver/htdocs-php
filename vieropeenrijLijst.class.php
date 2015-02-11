<?php
require_once("vieropeenrijClass.php");
class spelLijst {
	private $dbConn;
	private $dbUsername;
	private $dbPassword;
	
	public function __construct() {
		$this->dbConn = "mysql:host=localhost;dbname=cursusphp";
		$this->dbUsername = "root";
		$this->dbPassword = "vdab";
	}
	
	public function getLijst() {
		$lijst = array();
		$dbh = new PDO($this->dbConn, $this->dbUsername, $this->dbPassword);
		$resultSet = $dbh->query("select rijnummer, kolomnummer, status from vieropeenrij_spelbord order by rijnummer");
		foreach ($resultSet as $rij) {
			$spelLijn = new spelLijn($rij["rijnummer"], $rij["kolomnummer"], $rij["status"]);
			array_push($lijst, $spelLijn);
		}
		$dbh = null;
		return $lijst;
	}
	
	public function updateStatus($film) {
		$sql = "update vieropeenrij_spelbord set rijnummer = '" . $spelLijn->getRijnummer() . "', kolomnummer = " . $spelLijn->getKolomnummer() . 
										" where status = " . $spelLijn->getStatus();
		$dbh = new PDO($this->dbConn, $this->dbUsername, $this->dbPassword);
		$dbh->exec($sql);
		$dbh = null;
	}
	
	
}