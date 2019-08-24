<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conference_controller extends CI_Controller {

	public function display() {
			$this->load->model('Conference_model');
			$query = $this->Conference_model->getData();
			$data['events'] = null;

			if($query) {
				  $data['events'] =  $query;
				  $data['username'] =$this->session->userdata('mail');
			  }

			  $this->load->view('header3');
			  $this->load->view('conference_view.php', $data);
			  $this->load->view('footer');
			  $this->load->view('css_style');

			  
			
			 }


}

?>