<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class addData_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function insertData($ma_sp,$them_anh,$mo_ta,$gia_tien,$don_vi,$thuong_hieu){
		$dulieu = array(
			'masp' => $ma_sp, 
			'img_product' => $them_anh, 
			'content_img' => $mo_ta,
			'price' => $gia_tien, 
			'unit'=>$don_vi, 
			'id_con' => $thuong_hieu);
		// return $dulieu;
		$this->db->insert('product', $dulieu);
		return 1;
	}

}

/* End of file addData_model.php */
/* Location: ./application/models/addData_model.php */