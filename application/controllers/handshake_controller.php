<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Handshake_controller extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {

		$this->load->view('handshake/header');
		$this->load->view('handshake/index');
		$this->load->view('handshake/footer');

	}

	public function Result()
	{
		$this->load->view('handshake/header');
		$this->load->view('handshake/results');
		$this->load->view('handshake/footer');

	}
}


?>