<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event_controller extends CI_Controller {

	public function display() {
			$this->load->model('Event_model');
			$query = $this->Event_model->getData();
			$data['events'] = null;

			if($query) {
				  $data['events'] =  $query;
			  }
			 
			  $this->load->view('header2');
			  $this->load->view('event_view.php', $data);
			  $this->load->view('footer');
			  $this->load->view('css_style');
			
			 }


}

?>