<?php
//Acc_sub_head Controller
class Acc_sub_head extends BaseController
{
	public function __construct(){
		parent::__construct();
		Auth::check();
	}
	
	public function index()
	{
		$data = $this->model->twotable('acc_sub_head', 'acc_report_type');
		$data2 = $this->model->fetch('acc_group_head');
		$data3 = $this->model->fetch('acc_report_type');
		$this->view->admin('acc_sub_head/index', $data, $data2, $data3);
	}

	public function all()
	{
		$data = $this->model->twotable('acc_sub_head', 'acc_report_type');
		$data2 = $this->model->fetch('acc_group_head');
		$data3 = $this->model->fetch('acc_report_type');
		$this->view->admin('acc_sub_head/index', $data, $data2, $data3);
	}
	
	public function save()
	{
		$data = $this->model->save();
		if ( $data == 'SUCCESS' ) {
			$this->redirect('all');
		}else{
			$this->redirect('all');
		}
	}
	
	function update(){
		$data = $this->model->update();

		if ( $data == 'SUCCESS' ) {
			$this->redirect('all');
		}else{
			$this->redirect('all');
		}
	}

}