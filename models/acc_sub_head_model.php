<?php
//Acc_sub_head Models
class Acc_sub_head_Model extends Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	public function save()
	{
		$acc_sub_head_code = $_POST['acc_sub_head_code'];
		$acc_sub_head_title = $_POST['acc_sub_head_title'];
		$acc_sub_head_add_less = $_POST['acc_sub_head_add_less'];
		$acc_sub_head_group = $_POST['acc_sub_head_group'];
		$acc_sub_head_report_type = $_POST['acc_sub_head_report_type'];
		$stmt = $this->db->prepare("INSERT INTO `acc_sub_head`( `acc_sub_head_code`, `acc_sub_head_title`, `acc_sub_head_add_less`, `acc_sub_head_group`, `acc_sub_head_report_type` ) VALUES ('$acc_sub_head_code', '$acc_sub_head_title', '$acc_sub_head_add_less', '$acc_sub_head_group', '$acc_sub_head_report_type')");
		if ( $stmt->execute() === TRUE ) {
			return 'SUCCESS';
		}else{
			return 'FAILED';
		}
	}

	public function update($table)
	{
		$acc_sub_head_id = $_POST['acc_sub_head_id'];
		$acc_sub_head_code = $_POST['acc_sub_head_code'];
		$acc_sub_head_title = $_POST['acc_sub_head_title'];
		$acc_sub_head_add_less = $_POST['acc_sub_head_add_less'];
		$acc_sub_head_group = $_POST['acc_sub_head_group'];
		$acc_sub_head_report_type = $_POST['acc_sub_head_report_type'];
		$stmt = $this->db->prepare("UPDATE $table SET acc_sub_head_code='$acc_sub_head_code', acc_sub_head_title='$acc_sub_head_title', acc_sub_head_add_less='$acc_sub_head_add_less', acc_sub_head_group='$acc_sub_head_group', acc_sub_head_report_type='$acc_sub_head_report_type' WHERE acc_sub_head_id=$acc_sub_head_id");
		if ( $stmt->execute() === TRUE ){
			return 'SUCCESS';
		}else{
			return 'FAILED';
		}
	}
	
}