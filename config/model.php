<?php
//Main Model
class Model
{
	
	function __construct()
	{
		$this->db = new Database();
	}
	
	public function fetchmenu(){
		$stmt = $this->db->prepare("SELECT * FROM `modules` ORDER BY `modules_id` DESC");
		$stmt->execute();
		$data = $stmt->fetchAll();
		return $data;
	}

	public function twotable($table1, $table2)
	{
		$stmt = $this->db->prepare("SELECT ".$table1.".*, ".$table2.".* FROM ".$table1.", ".$table2." WHERE ".$table1.".".$table1."_report_type=".$table2.".".$table2."_id ORDER BY ".$table1."_id ASC");
		$stmt->execute();
		$data = $stmt->fetchAll();
		return $data;
	}

	public function findProfile($table, $compare, $value){
		$exp = substr($value, -64);
		$value = substr($exp, 32);
		$stmt = $this->db->prepare("SELECT * FROM `$table` WHERE `$compare`='$value'");
		$stmt->execute();
		$data = $stmt->fetchAll();
		return $data;
	}

	public function findProfilephoto($table, $compare, $value, $return){
		$exp = substr($value, -64);
		$value = substr($exp, 32);
		$stmt = $this->db->prepare("SELECT `$return` FROM `$table` WHERE `$compare`='$value'");
		$stmt->execute();
		$data = $stmt->fetchAll();
		return $data;
	}

	public function fetch($table){
		
		$stmt = $this->db->prepare("SELECT * FROM `$table` ");

		$stmt->execute();
		$data = $stmt->fetchAll();
		return $data;
	}

	public function validate($value1,$value2,$value3){
		empty_check();
		email_check();
		length_check();
	}

	public function empty_check(){
		
	}

	public function email_check(){
		
	}

	public function length_check(){
		
	}

}