<?php
include("/Users/denis/Documents/withoutAjax/connection.php");
class Employee {
	protected $conn;
	protected $data = array();
	function __construct() {

		$db = new dbObj();
		$connString =  $db->getConnstring();
		$this->conn = $connString;
	}
	
	public function getEmployees() {
		$sql = "SELECT * FROM employee1";
		$queryRecords = pg_query($this->conn, $sql) or die("error to fetch employees data");
		$data = pg_fetch_all($queryRecords);
		return $data;
	}
}
?>