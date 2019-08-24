<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contactus_controller extends CI_Controller{

	public function index(){

		$this->load->view('header');
		$this->load->view('css_style');
		$this->load->view('footer');
		$this->load->view('contactus_view');
		
}
	public function form(){

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->view('header');
		$this->load->view('css_style');
		$this->load->view('footer');
		$this->load->model('Contactus_model');


                $this->form_validation->set_rules('firstname', 'Firstname', 'required|regex_match[/^[a-zA-Z]{1,}$/]','Enter only alphabets');
                $this->form_validation->set_rules('lastname', 'Lastname', 'required|alpha',['Enter only alphabets']);
                $this->form_validation->set_rules('telephone', 'Phone number', 'required|exact_length[10]|numeric',['Enter 10 digit phone number']);
                $this->form_validation->set_rules('messg', 'Message', 'required|min_length[5]',['Enter atleast 5 characters']);


                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('contactus_view');
                }
                else
                {
                		$data = array(
						'fname' => $this->input->post('firstname'),
						'lname' => $this->input->post('lastname'),
						'telnum' => $this->input->post('telephone'),
						'msg' => $this->input->post('messg')
						);
						$this->Contactus_model->form_insert($data);
						$data['message'] = 'Data Inserted Successfully';
						$this->load->view('contactus_view', $data);
	
                }
        }


	}
?>