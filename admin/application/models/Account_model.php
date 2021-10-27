<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class account_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getUser(){
		$this->db->select('*');
		$user = $this->db->get('users');
		return $user->result_array();
	}
	public function deleteUserById($id)
	{
		$this->db->where('id_user', $id);
		$this->db->delete('users');
	}

}

/* End of file account_model.php */
/* Location: ./application/models/account_model.php */