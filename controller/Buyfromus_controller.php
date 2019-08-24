<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buyfromus_controller extends CI_Controller{

	public function index(){

			$this->load->view('header');
			$this->load->view('buyfromus_view');
			$this->load->view('footer');
			$this->load->view('css_style');

	}

	public function add1(){

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->view('header');
		$this->load->view('css_style');
		$this->load->model('Buyfromus_model');

                		$data = array(
						'id' => "franela1.jpg",
						'name' => "tshirt",
						'price' => "24.99",
						'unit' => "1"
						);

						$this->Buyfromus_model->form_insert($data);
						redirect('Buyfromus_controller/index/uri');
		}

		public function add2(){

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->view('header');
		$this->load->view('css_style');
		$this->load->model('Buyfromus_model');

                		$data = array(
						'id' => "taza1.png",
						'name' => "cup",
						'price' => "24.99",
						'unit' => "1"
						);

						$this->Buyfromus_model->form_insert($data);
						redirect('Buyfromus_controller/index/uri');
		}


		public function add3(){

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->view('header');
		$this->load->view('css_style');
		$this->load->model('Buyfromus_model');

                		$data = array(
						'id' => "franela2.jpg",
						'name' => "tshirt",
						'price' => "24.99",
						'unit' => "1"
						);

						$this->Buyfromus_model->form_insert($data);
						redirect('Buyfromus_controller/index/uri');
		}


		public function add4(){

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->view('header');
		$this->load->view('css_style');
		$this->load->model('Buyfromus_model');

                		$data = array(
						'id' => "taza2.png",
						'name' => "cup",
						'price' => "24.99",
						'unit' => "1"
						);

						$this->Buyfromus_model->form_insert($data);
						redirect('Buyfromus_controller/index/uri');
		}

		public function add5(){

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->view('header');
		$this->load->view('css_style');
		$this->load->model('Buyfromus_model');

                		$data = array(
						'id' => "franela3.jpg",
						'name' => "tshirt",
						'price' => "24.99",
						'unit' => "1"
						);

						$this->Buyfromus_model->form_insert($data);
						redirect('Buyfromus_controller/index/uri');
		}

		public function add6(){

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->view('header');
		$this->load->view('css_style');
		$this->load->model('Buyfromus_model');

                		$data = array(
						'id' => "taza3.png",
						'name' => "tshirt",
						'price' => "24.99",
						'unit' => "1"
						);

						$this->Buyfromus_model->form_insert($data);
						redirect('Buyfromus_controller/index/uri');

		}

		public function final(){
			redirect('Cart_controller/display/uri');
		}
}

?>