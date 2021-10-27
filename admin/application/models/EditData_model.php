<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class editData_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function editDataById($id_product)
	{
		$query = $this->db->query("SELECT * FROM `product` CROSS JOIN `menucon` WHERE `product`.`id_con` = `menucon`.`id_con` AND 
			`product`.`id_product` = $id_product");
		return $query->result_array();
	}
	public function updateData($ma_sp,$mo_ta,$gia_tien,$id_product)
	{
		$dulieu = array(
			'masp' => $ma_sp,  
			'content_img' => $mo_ta,
			'price' => $gia_tien
		);
		// return $dulieu;
		$this->db->where('id_product',$id_product);
		$this->db->update('product',$dulieu);
		return 1;
	}

}

/* End of file editData_model.php */
/* Location: ./application/models/editData_model.php */