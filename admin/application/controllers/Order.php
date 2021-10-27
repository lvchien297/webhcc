<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class order extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('order_model');
		$orderData = $this->order_model->getDataOrder();		
		$orderData = array("guiDenOrder_view" => $orderData);
		$this->load->view('order_view', $orderData, FALSE);
	}
	public function deleteOrder($id)
	{
		$this->load->model('order_model');
		$this->order_model->deleteOrderById($id);
	}
	public function updateDataNameOrder()
	{
		$ten = $this->input->post('tenUpdate');
		$id_Order = $this->input->post('idOrder');
		$this->load->model('order_model');
		$this->order_model->UpdateNameOrderById($id_Order,$ten);
	}
	public function updateDataPhoneOrder()
	{
		$sdt = $this->input->post('tenUpdate');
		$id_Order = $this->input->post('idOrder');
		$this->load->model('order_model');
		$this->order_model->UpdatePhoneOrderById($id_Order,$sdt);
	}
	public function updateDataDcOrder()
	{
		$diachi = $this->input->post('tenUpdate');
		$id_Order = $this->input->post('idOrder');
		$this->load->model('order_model');
		$this->order_model->UpdateDcOrderById($id_Order,$diachi);
	}
}

/* End of file order.php */
/* Location: ./application/controllers/order.php */