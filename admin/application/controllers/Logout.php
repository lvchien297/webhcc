<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class logout extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		session_destroy();
		redirect('login','refresh');	
	}

}

/* End of file logout.php */
/* Location: ./application/controllers/logout.php */