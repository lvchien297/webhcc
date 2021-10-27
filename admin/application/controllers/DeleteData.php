<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class deleteData extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('showData_view');
	}

}

/* End of file deleteData.php */
/* Location: ./application/controllers/deleteData.php */