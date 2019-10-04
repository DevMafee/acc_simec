<?php
//Acc_group_head Controller
class Acc_group_head extends BaseController
{
	public function __construct(){
		parent::__construct();
		Auth::check();
	}
	
	public function index()
	{
		$data = $this->model->twotable('acc_group_head', 'acc_report_type');
		$data2 = $this->model->fetch('acc_report_type');
		$this->view->admin('acc_group_head/index', $data, $data2);
	}
	
	public function all()
	{
		$data = $this->model->twotable('acc_group_head', 'acc_report_type');
		$data2 = $this->model->fetch('acc_report_type');
		$this->view->admin('acc_group_head/index', $data, $data2);
	}
	
	public function save()
	{
		$data = $this->model->save('acc_group_head');
		if ( $data == 'SUCCESS' ) {
			$this->redirect('all');
		}else{
			$this->redirect('all');
		}
	}
	
	function update(){
		$data = $this->model->update('acc_group_head');
		if ( $data == 'SUCCESS' ) {
			$this->redirect('all');
		}else{
			$this->redirect('all');
		}
	}

}