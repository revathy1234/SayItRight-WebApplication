<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addconference_controller extends CI_Controller {

	public function index() {

		$this->load->view('header3');
		$this->load->view('addconference_view');
		$this->load->view('footer');
		$this->load->view('css_style');
	}

	public function form(){

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->view('header3');
		$this->load->view('css_style');
		$this->load->model('Addconf_model');

                		$data = array(
						'name' => $this->input->post('name'),
						'description' => $this->input->post('desc'),
						'datee' => $this->input->post('datee'),
						'location' => $this->input->post('loc')
						);

						$this->Addconf_model->form_insert($data);
						redirect('Conference_controller/display/uri');
						$this->load->view('addconference_view', $data);
	
                }

    public function uform($id){

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->view('header3');
		$this->load->view('css_style');
		$this->load->model('Addconf_model');
		$data['events']=$this->Addconf_model->getData($id);

		 foreach($data['events'] as $eve) {
     		
    		$arr= array(
     			"email"=>$this->session->userdata('mail'),
     			"name"=>$eve->name,
     			"description"=>$eve->description,
     			"datee"=>$eve->datee,
     			"location"=>$eve->location
     		);

			  $this->Addconf_model->uform_insert($arr);
			  
			  $dataa['events']=$this->Addconf_model->getDataa();
			  //if($queryy) {
				//  $dataa['events'] =  $queryy;
			  //}
			  //$this->load->view('header2');
			  $this->load->view('myconference_view.php', $dataa);
			  $this->load->view('footer');
			  $this->load->view('css_style');
		//redirect('Myconference_controller/display/uri');
		//$this->load->view('conference_view', $data);
	
                }
            }




    public function del(){
    	$id = $this->uri->segment(3);
    	$this->load->model('Deleteconf_model');
    	$this->Deleteconf_model->delete_conf($id);
    	redirect('Conference_controller/display/uri');
			}

	public function udel(){
    	$id = $this->uri->segment(3);
    	$this->load->model('Deleteconf_model');
    	$this->Deleteconf_model->udelete_conf($id);
    	redirect('Conference_controller/display/uri');
			}

}

?>