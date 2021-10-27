<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class order_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getDataOrder()
	{
		$this->db->select('*');
		$data = $this->db->get('orders');
		return $data->result_array();
	}

	public function deleteOrderById($id)
	{
		$this->db->where('id_orders', $id);
		$this->db->delete('orders');
	}
	public function updateNameOrderById($id_Order,$ten)
	{
		$dulieu = array(
			'name_user' => $ten,
		);
		$this->db->where('id_orders', $id_Order);
		$this->db->update('orders',$dulieu);
	}
	public function updatePhoneOrderById($id_Order,$phone)
	{
		$dulieu = array(
			'phone' => $phone,
		);
		$this->db->where('id_orders', $id_Order);
		$this->db->update('orders',$dulieu);
	}
	public function updateDcOrderById($id_Order,$diachi)
	{
		$dulieu = array(
			'address_order' => $diachi,
		);
		$this->db->where('id_orders', $id_Order);
		$this->db->update('orders',$dulieu);
	}

}

/* End of file order_model.php */
/* Location: ./application/models/order_model.php */