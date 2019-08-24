<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editconference_controller extends CI_Controller {

	public function index() {

		$this->load->view('header2');
		$this->load->view('editconference_view');
		$this->load->view('footer');
		$this->load->view('css_style');

	}

	public function formput(){
			$this->load->model('Editconf_model');
			$id= $this->input->post('name');
			$data = array(
			'name' => $this->input->post('name'),
			'description' => $this->input->post('desc'),
			'datee' => $this->input->post('datee'),
			'location' => $this->input->post('loc')
			);
			
			$this->Editconf_model->update_conf($id,$data);
			redirect('Conference_controller/display/uri');
			$this->load->view('editconference_view', $data);
				
			}

}

?>