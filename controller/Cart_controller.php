<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cart_controller extends CI_Controller{

	public function index(){

		$this->load->view('header');
		$this->load->view('cart_view');
		$this->load->view('footer');
		$this->load->view('css_style');
	}


	public function form(){

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->view('header');
		$this->load->view('css_style');
		$this->load->view('footer');
		$this->load->model('Cart_model');

				$this->form_validation->set_rules('emailid','Email','required|regex_match[/^[a-zA-Z0-9\._\-]*[@][a-zA-Z]*[\.][a-z]{2,4}$/]');
                $this->form_validation->set_rules('firstname', 'Firstname', 'required|alpha');
                $this->form_validation->set_rules('lastname', 'Lastname', 'required|alpha');
                $this->form_validation->set_rules('address', 'Address', 'required|min_length[5]');
                $this->form_validation->set_rules('apt', 'Apartment no', 'required|min_length[1]|numeric');
                $this->form_validation->set_rules('zip', 'Postal code', 'required|exact_length[5]|numeric');
                

                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('cart_view');
                }
                else
                {
                		$data = array(
                		'email' => $this->input->post('emailid'),
						'fname' => $this->input->post('firstname'),
						'lname' => $this->input->post('lastname'),
						'address' => $this->input->post('address'),
						'apt'=>$this->input->post('apt'),
						'zipcode'=>$this->input->post('zip')
						);
						$this->Cart_model->form_insert($data);
						$data['message'] = 'Data Inserted Successfully';
						redirect('Cart_controller/display/uri');
						$this->load->view('cart_view', $data);
	
                }
        }

        public function display(){
				$this->load->model('Cart_model');
				$query = $this->Cart_model->getData();
				$data['events'] = null;

			if($query) {
				  $data['events'] =  $query;
			  }
			 
			  $this->load->view('header2');
			  $this->load->view('cart_view.php', $data);
			  $this->load->view('footer');
			  $this->load->view('css_style');
			
			 }
        
}


?>
