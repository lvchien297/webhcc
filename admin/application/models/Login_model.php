<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function checkLoginByUserName()
	{
		$this->db->select('*');
		$account = $this->db->get('admins');
		return $account->result_array();
	}

}

/* End of file login_model.php */
/* Location: ./application/models/login_model.php */