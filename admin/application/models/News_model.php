<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class news_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getData(){
		$this->db->select('*');
		$query = $this->db->get('information');
		return $query->result_array();
	}

	public function insertData($uutien,$tieu_de,$noi_dung,$them_anh)
	{
		$dulieu = array(
			'note' => $uutien, 
			'infor_title' => $tieu_de, 
			'infor_content' => $noi_dung,
			'infor_img' => $them_anh,
		);
		$this->db->insert('information', $dulieu);
		return 1;

	}
	public function deleteDataById($id){
		$this->db->where('infor_id', $id);
		$this->db->delete('information');
		return 1;
	}


}

/* End of file news_models.php */
/* Location: ./application/models/news_models.php */