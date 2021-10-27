<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class account extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
	}
	public function accountUser()
	{
		$this->load->model('account_model');
		$data =$this->account_model->getUser();
		$data = array("guiDenView" => $data);
		// echo '<pre>';
		$this->load->view('user_view', $data, FALSE);
	}
	public function deleteUser($id)
	{
		$this->load->model('account_model');
		$this->account_model->deleteUserById($id);
	}
}

/* End of file account.php */
/* Location: ./application/controllers/account.php */