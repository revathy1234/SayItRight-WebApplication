<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Individualsignup_controller extends CI_Controller {

	public function index() {

		$this->load->view('header');
		$this->load->view('individualsignup_view');
		$this->load->view('footer');
		$this->load->view('css_style');

	}


	public function form(){

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->view('header');
		$this->load->view('css_style');
		//$this->load->view('footer');
		$this->load->model('Individualsignup_model');


                $this->form_validation->set_rules('firstname', 'Firstname', 'required|regex_match[/^[a-zA-Z]{1,}$/]');
                $this->form_validation->set_rules('lastname', 'Lastname', 'required|alpha');
                $this->form_validation->set_rules('placework', 'Place of work', 'required|regex_match[/^[a-zA-Z]{1,}$/]');
                $this->form_validation->set_rules('schoolname', 'Schoolname', 'required|regex_match[/^[a-zA-Z]{1,}$/]');
                $this->form_validation->set_rules('emailid','Email','required|regex_match[/^[a-zA-Z0-9\._\-]*[@][a-zA-Z]*[\.][a-z]{2,4}$/]');
                $this->form_validation->set_rules('password', 'Password', 'required|regex_match[/^[a-zA-Z0-9!@#$%^&*()]*$/]|min_length[8]');


                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('individualsignup_view');
                }
                else
                {
                		$data = array(
						'fname' => $this->input->post('firstname'),
						'lname' => $this->input->post('lastname'),
						'workplace' => $this->input->post('placework'),
						'school' => $this->input->post('schoolname'),
						'mail' => $this->input->post('emailid'),
						'password' => $this->input->post('password')
						);
						$this->Individualsignup_model->form_insert($data);
						$data['message'] = 'Data Inserted Successfully';
						$this->load->view('individualsignup_view', $data);
	
                }
        }

}

?>