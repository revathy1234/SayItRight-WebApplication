<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eventsignup_controller extends CI_Controller {

	public function index() {

		$this->load->view('header');
		$this->load->view('eventsignup_view');
		$this->load->view('footer');
		$this->load->view('css_style');

	}

	public function form(){

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->view('header');
		$this->load->view('css_style');
		
		$this->load->model('Eventsignup_model');


                $this->form_validation->set_rules('firstname', 'Firstname', 'required|regex_match[/^[a-zA-Z]{1,}$/]','Enter only alphabets');
                $this->form_validation->set_rules('lastname', 'Lastname', 'required|alpha',['Enter only alphabets']);
                $this->form_validation->set_rules('emailid','Email','required|regex_match[/^[a-zA-Z0-9\._\-]*[@][a-zA-Z]*[\.][a-z]{2,4}$/]');
                $this->form_validation->set_rules('password', 'Password', 'required|regex_match[/^[a-zA-Z0-9!@#$%^&*()]*$/]|min_length[8]');


                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('eventsignup_view');
                }
                else
                {
                		$data = array(
						'fname' => $this->input->post('firstname'),
						'lname' => $this->input->post('lastname'),
						'mail' => $this->input->post('emailid'),
						'password' => $this->input->post('password')
						);
						$this->Eventsignup_model->form_insert($data);
						$data['message'] = 'Data Inserted Successfully';
						$this->load->view('eventsignup_view', $data);
	
                }
        }

}

?>