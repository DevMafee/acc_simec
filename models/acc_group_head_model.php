<?php
//Acc_group_head Models
class Acc_group_head_Model extends Model
{
	function __construct()
	{
		parent::__construct();
	}

	public function save($table)
	{
		$acc_group_head_code = $_POST['acc_group_head_code'];
		$acc_group_head_title = $_POST['acc_group_head_title'];
		$acc_group_head_report_type = $_POST['acc_group_head_report_type'];
		$stmt = $this->db->prepare("INSERT INTO `acc_group_head`( `acc_group_head_code`, `acc_group_head_title`, `acc_group_head_report_type` ) VALUES ('$acc_group_head_code', '$acc_group_head_title', '$acc_group_head_report_type')");
		if ( $stmt->execute() === TRUE ) {
			return 'SUCCESS';
		}else{
			return 'FAILED';
		}
	}

	public function update($table)
	{
		$acc_group_head_id = $_POST['acc_group_head_id'];
		$acc_group_head_code = $_POST['acc_group_head_code'];
		$acc_group_head_title = $_POST['acc_group_head_title'];
		$acc_group_head_report_type = $_POST['acc_group_head_report_type'];
		$acc_group_head_status = $_POST['acc_group_head_status'];
		$stmt = $this->db->prepare("UPDATE $table SET acc_group_head_code='$acc_group_head_code', acc_group_head_title='$acc_group_head_title', acc_group_head_report_type='$acc_group_head_report_type', acc_group_head_status='$acc_group_head_status' WHERE acc_group_head_id=$acc_group_head_id");
		if ( $stmt->execute() === TRUE ){
			return 'SUCCESS';
		}else{
			return 'FAILED';
		}
	}
	
}