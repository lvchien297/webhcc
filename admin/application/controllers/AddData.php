<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class addData extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('addData_LaptopView');
		
	}
	public function insertData_controller()
	{
		$thuong_hieu = $this->input->post('thuong_hieu');
		$mo_ta = $this->input->post('mo_ta');
		$ma_sp = $this->input->post('ma_sp');
		$gia_tien = $this->input->post('gia_tien');
		$them_anh = $this->input->post('them_anh');
		$don_vi ="đ";
		$this->load->model('addData_model');
		$dulieu = $this->addData_model->insertData($ma_sp,$them_anh,$mo_ta,$gia_tien,$don_vi,$thuong_hieu);

	}
	public function showAddData_Laptop(){
		$this->load->view('addData_LaptopView');
	}
	public function showAddData_Phone(){
		$this->load->view('addData_PhoneView');
	}
	public function showAddData_Pk(){
		$this->load->view('addData_PkView');
	}

	public function ajax_add()
	{
		
		$thuong_hieu = $this->input->post('thuong_hieu');
		$mo_ta = $this->input->post('mo_ta');
		$ma_sp = $this->input->post('ma_sp');
		$gia_tien = $this->input->post('gia_tien');
		$them_anh = $this->input->post('them_anh');
		$don_vi ="đ";
		$this->load->model('addData_model');
		$dulieu = $this->addData_model->insertData($ma_sp,$them_anh,$mo_ta,$gia_tien,$don_vi,$thuong_hieu);
		if ($dulieu){
			echo 'Insert dữ liệu thành công';
		}else {
			echo 'Thất bại';
		}
	}

	public function upload()
	{
		if(isset($_POST) && isset($_FILES['file']))
		{
			$duoi = explode('.', $_FILES['file']['name']); // tách chuỗi khi gặp dấu .
			$duoi = $duoi[(count($duoi)-1)];//lấy ra đuôi file
			echo $duoi.'<br>';
			//Kiểm tra xem có phải file ảnh không
			if($duoi === 'jpg' || $duoi === 'png' || $duoi === 'gif'){
				//tiến hành upload
				if(move_uploaded_file($_FILES['file']['tmp_name'], 'img/' . $_FILES['file']['name'])){
					//Nếu thành công
					die('Upload thành công file: '. $_FILES['file']['name']); //in ra thông báo + tên file
				} else{ //nếu k thành công
					die('Có lỗi!'); //in ra thông báo
				}
			} else{ //nếu k phải file ảnh
				die('Chỉ được upload ảnh'); //in ra thông báo
			}
		}
		else{
			die('Lock'); // nếu không phải post method
		}
	}


}

/* End of file addData.php */
/* Location: ./application/controllers/addData.php */