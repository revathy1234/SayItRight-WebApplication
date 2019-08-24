<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepageindividual_controller extends CI_Controller {

	public function index() {

		$this->load->view('header2');
		$this->load->view('homepage_individual_view');
		$this->load->view('footer');
		$this->load->view('css_style');


	}

}

?>