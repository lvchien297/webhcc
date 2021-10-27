<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class showData_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getData()
	{
		$query = $this->db->query('SELECT * FROM `product` CROSS JOIN `menucon` WHERE 
			`product`.`id_con` = `menucon`.`id_con`');
		return $query->result_array();
	}
	public function getDataById($id_cha)
	{
		$query = $this->db->query("SELECT * FROM `product` CROSS JOIN `menucon` WHERE `product`.`id_con` = `menucon`.`id_con` AND `menucon`.`id_cha`= $id_cha");
		return $query->result_array();
	}
	public function getDetailDataById($id_con)
	{
		$query = $this->db->query("SELECT * FROM `product` CROSS JOIN `menucon` WHERE `product`.`id_con` = `menucon`.`id_con` AND `menucon`.`id_con`= $id_con");
		return $query->result_array();
	}


}

/* End of file showData_model.php */
/* Location: ./application/models/showData_model.php */