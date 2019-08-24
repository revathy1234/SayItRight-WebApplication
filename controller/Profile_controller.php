<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile_controller extends CI_controller{

	public function index(){

		
		//$this->load->view('profile_view');
		
		
		$this->load->model("Profile_model");
		$data["fetch_dat"] = $this->Profile_model->profile_fetch();
		$this->load->view('header2');
		$this->load->view('footer');
		$this->load->view('css_style');
		$this->load->view('profile_view',$data);

		$sname=$this->session->userdata('mail');
	}


}
?>