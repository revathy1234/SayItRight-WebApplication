<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editevent_controller extends CI_Controller {

	public function index() {

		$this->load->view('header');
		$this->load->view('editevent_view');
		$this->load->view('footer');
		$this->load->view('css_style');

	}

	public function form(){

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->view('header');
		$this->load->view('css_style');
		$this->load->model('Editevent_model');

			$id= $this->input->post('name');
			$data = array(
			'name' => $this->input->post('name'),
			'description' => $this->input->post('desc'),
			'datee' => $this->input->post('datee'),
			'location' => $this->input->post('loc')
			);


			$this->Editevent_model->update_event($id,$data);
			redirect('Event_controller/display/uri');
			$this->load->view('Editevent_view', $data);
				
			}

}

?>