<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class showData extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('showData_model');
		$test = $this->showData_model->getData();
			// var_dump($test);
		$ketqua = array("guiDenView" => $test);
		$this->load->view('showData_view', $ketqua, FALSE);
	}

	public function showDataById($id)
	{		
			//load model và gọi hàm getData
		$this->load->model('showData_model');
		$test = $this->showData_model->getDataById($id);

		$ketqua = array("guiDenView" => $test);
		$this->load->view('showData_view', $ketqua, FALSE);
	}

	public function showDetailById($id)
	{
		$this->load->model('showData_model');
		$test = $this->showData_model->getDetailDataById($id);

		$ketqua = array("guiDenView" => $test);
		$this->load->view('showData_view', $ketqua, FALSE);
	}
	public function deleteData($id)
	{
		// var_dump($id);
		$this->load->model('deleteData_model');	
		$this->deleteData_model->deleteDataById($id);
		$this->load->view('header.php');
	}
	
	public function editData($id)
	{
		$this->load->model('editData_model');
		$data = $this->editData_model->editDataById($id);

		$data = array('dataEdit' => $data);
		$this->load->view('editData_view', $data, FALSE);
	}
	
	public function updateData($id)
	{
		// $thuong_hieu = $this->input->post('thuong_hieu');
		$mo_ta = $this->input->post('mo_ta');
		$ma_sp = $this->input->post('ma_sp');
		$gia_tien = $this->input->post('gia_tien');
		// $don_vi ="đ";
		$this->load->model('editData_model');
		$dulieu = $this->editData_model->updateData($ma_sp,$mo_ta,$gia_tien,$id);

		// require("admin_index.php");
	}

	public function ajax_edit()
	{
		$id = $this->input->post('id_product');
		$mo_ta = $this->input->post('mo_ta');
		$ma_sp = $this->input->post('ma_sp');
		$gia_tien = $this->input->post('gia_tien');
		// $don_vi ="đ";
		$this->load->model('editData_model');
		$dulieu = $this->editData_model->updateData($ma_sp,$mo_ta,$gia_tien,$id);
		if($dulieu){
			echo 'edit dữ liệu thành công';
		}else{
			echo 'edit dữ liệu thất bại';
		}
	}

	public function ajax_delete($id)
	{
		//$id = $this->input->post('id_product');
		// var_dump($id);
		$this->load->model('deleteData_model');	
		$value = $this->deleteData_model->deleteDataById($id);
		if($value){
			echo 'delete thanfh cong';
		}else{
			echo 'that bai';
		}
	}

}

/* End of file showData.php */
/* Location: ./application/controllers/showData.php */