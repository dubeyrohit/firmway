<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Trophy_controller extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('trophy_model');
	}

	public function index() {

		$data['trophy_shape'] = $this->trophy_model->getShapes();
		$data['metal'] = $this->trophy_model->getmetal();
		$data['element'] = $this->trophy_model->getElement();
 		$this->load->view('trophy/header');
		$this->load->view('trophy/index',$data);
		$this->load->view('trophy/footer');

	}
	public function getResult(){

// following variables holds the given input from user for trophy cost estimator
//

		$data['trophy_shape'] = $this->input->post('shape-list');
		// print_r($data['trophy_shape']);
		$data['trophy_metal'] = $this->input->post('metal-list');
		$data['trophy_element']= $this->input->post('element-list');
		$data['trophy_purity']= $this->input->post('trophy-purity');
		$data['trophy_thickness']= $this->input->post('trophy-thickness');
		$data['trophy_length']= $this->input->post('trophy-length');
		$data['trophy_height']= $this->input->post('trophy-height');
		$data['trophy_width']= $this->input->post('trophy-width');
		$data['trophy_radius']= $this->input->post('trophy-radius');

		$data['metal_cost'] = $this->trophy_model->getMetalCost($data['trophy_metal']);
		// print_r($metal_cost);
		$data['element_cost'] = $this->trophy_model->getElementCost($data['trophy_element']);
		// print_r($element_cost);
		
		$this->load->view('trophy/header');
		$this->load->view('trophy/results',$data);
		$this->load->view('trophy/footer');

	}
}


?>