<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myevent_controller extends CI_Controller {

	public function index() {

		$this->load->view('header2');
		$this->load->view('myevent_view');
		$this->load->view('footer');
		$this->load->view('css_style');

	}

		public function display() {
			$this->load->model('Conference_model');
			$username=$this->session->userdata('mail');
			$query = $this->Conference_model->mygetDataa($username);
			$data['events'] = null;

			  if($query) {
				  $data['events'] =  $query;
				  $data['username'] =$this->session->userdata('mail');
				}

			  $this->load->view('header3');
			  $this->load->view('myevent_view.php', $data);
			  $this->load->view('footer');
			  $this->load->view('css_style');
			  
			
			 }


    public function del(){
    	$id = $this->uri->segment(3);
    	$this->load->model('Deleteevent_model');
    	$this->Deleteevent_model->delete_event($id);
    	redirect('Event_controller/display/uri');
			}
}

?>