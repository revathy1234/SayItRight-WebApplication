<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage_controller extends CI_Controller {

	public function index() {

		$this->load->view('header');
		$this->load->view('homepage_view');
		$this->load->view('footer');
		$this->load->view('css_style');

		

	}

}

?>