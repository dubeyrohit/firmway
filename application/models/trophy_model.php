<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Trophy_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}    
	public function getShapes()
	{

		$col = array('id','shape');
		$shape_list = $this->db->select($col)->from('shape')->get();

		return $shape_list->result();
	}
	public function getMetal()
	{

		$col = array('id','metal');
		$metal_list = $this->db->select($col)->from('metal')->get();

		return $metal_list->result();
	}
	public function getElement()
	{

		$col = array('id','element');
		$element_list = $this->db->select($col)->from('element')->get();

		return $element_list->result();
	}
	public function getMetalCost($metal_cost){

		$metal_cost_query = $this
							->db
							->select('cost')
							->from('metal')
							->where(['metal' => $metal_cost])->get();
		return $metal_cost_query->result();
	}
	public function getElementCost($element_cost){
		$element_cost_query = $this
							  ->db
							  ->select('cost')
							  ->from('element')
							  ->where(['element' => $element_cost])
							  ->get();
		return $element_cost_query->result();
	}
	// public function getTotalCost()
	// {

	// }
}


?>