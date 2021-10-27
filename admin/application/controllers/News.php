<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class news extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('news_model');
		$test = $this->news_model->getData();
			// var_dump($test);
		$ketqua = array("guiDenView" => $test);
		$this->load->view('showNews_view', $ketqua, FALSE);
	}
	public function showAddNews_views()
	{
		$this->load->view('addNews_view');
	}
	public function addNews()
	{
		$uutien = $this->input->post('uutien');
		$tieu_de = $this->input->post('tieu_de');
		$noi_dung = $this->input->post('noi_dung');
		$them_anh = $this->input->post('them_anh');
		$this->load->model('news_model');
		$dulieu = $this->news_model->insertData($uutien,$tieu_de,$noi_dung,$them_anh);
		if ($dulieu){
			echo 'Insert dữ liệu thành công';
		}else {
			echo 'Thất bại';
		}
	}
	public function ajax_delete($id)
	{
		$this->load->model('news_model');	
		$value = $this->news_model->deleteDataById($id);
		if($value){
			echo 'delete thanfh cong';
		}else{
			echo 'that bai';
		}
	}
}

/* End of file tintuc.php */
/* Location: ./application/controllers/tintuc.php */