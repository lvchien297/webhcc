<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		// echo "hi";
		$this->load->view('login_view');
	}
	public function checkLogin()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->load->model('login_model');
		$data = $this->login_model->checkLoginByUserName();
		foreach ($data as $key => $value) {
			$name_admin = $value["nickname_admin"];
			$password_admin = $value["password_admin"];
			if($username == $name_admin && $password == $password_admin){
				$adminAccount = array(
					'name' => $name_admin,
					'pass' => $password_admin,
				);

				$this->session->set_userdata($adminAccount);

				redirect('Welcome','refresh');
			}else{
				redirect('login','refresh');
			}
		}
		
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */