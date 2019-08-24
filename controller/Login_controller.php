<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {

	public function index() {

		$this->load->view('header');
		$this->load->view('login_view');
		$this->load->view('footer');
		$this->load->view('css_style');

	}


	/*public function validate() {

		if (isset($_POST['mail'])) {
	
				$user = $_POST['mail'];
				$pass = $_POST['password'];
				
			    $mysqli = new mysqli('localhost','root','','revathy') or die("unable to connect");

			    $select ="SELECT * FROM individual where mail = '$user' and password = '$pass'";


			    $result = mysqli_query($mysqli,$select);
			    $rows = mysqli_fetch_assoc($result);

			    if (mysqli_num_rows($result)==1) {
			    	session_start();
			    	$_SESSION["email"]=$user;
			    	redirect('Homepageindividual_controller/index/uri');
			    }
			    else{
			    	echo "wrong username";
			    	echo mysqli_num_rows($result);
			    	echo $user;
			    	redirect('Login_controller/index/uri');
			    	echo $rows['mail'];
			    }


			}


		$this->load->view('header');
		$this->load->view('footer');
		$this->load->view('css_style');



	}*/

	function login_validation(){
			$this->load->library('form_validation');
			$this->form_validation->set_rules('mail','Username','required');
			$this->form_validation->set_rules('password','Password','required');

			if($this->form_validation->run())
			{		
				echo "entered validation";
					$username=$this->input->post('mail');
					$password=$this->input->post('password');

					$this->load->model('Login_model');
					if($this->Login_model->can_login($username,$password)){
						echo"setting session";
							$session_data=array(
								'mail' => $username
							);

							$this->session->set_userdata($session_data);
							//redirect('Login_controller/enter/uri');
							redirect('Homepageindividual_controller/index/uri');
							echo "hi";
							$sname = $this->session->userdata('username');
							echo $sname;
					}
					else
					{
						echo"invalid";
						$this->session->set_flashdata('error','Invalid username and password');
						redirect('Login_controller/index/uri');

					}

			}
			else
			{
				echo"invalid1";
				$this->index();
			}
	}

	function enter(){
		echo "entered enter";
		if($this->session->userdata('username')!='')
		{
			redirect('Homepageindividual_controller/index/uri');
			//echo '<h2>'.$this->session->userdata('username').'</h2';
		}
		else
		{
			redirect('Login_controller/index/uri');
		}
	}
}

?>