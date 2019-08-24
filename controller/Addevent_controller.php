<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addevent_controller extends CI_Controller {

	public function index() {

		$this->load->view('header2');
		$this->load->view('addevent_view');
		$this->load->view('footer');
		$this->load->view('css_style');
	}

	public function form(){

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->view('header');
		$this->load->view('css_style');
		$this->load->model('Addevent_model');

                		$data = array(
						'name' => $this->input->post('name'),
						'description' => $this->input->post('desc'),
						'datee' => $this->input->post('datee'),
						'location' => $this->input->post('loc')
						);

						$this->Addevent_model->form_insert($data);
						redirect('Event_controller/display/uri');
						$this->load->view('addevent_view', $data);
	
                }

    public function udel(){
    	$id = $this->uri->segment(3);
    	$this->load->model('Deleteevent_model');
    	$this->Deleteconf_model->udelete_event($id);
    	redirect('Event_controller/display/uri');
			}


	public function uform($id){

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->view('header');
		$this->load->view('css_style');
		$this->load->model('Addevent_model');
		$data['events']=$this->Addevent_model->getData($id);

		 foreach($data['events'] as $eve) {
     		
    		$arr= array(
     			"email"=>$this->session->userdata('mail'),
     			"name"=>$eve->name,
     			"description"=>$eve->description,
     			"datee"=>$eve->datee,
     			"location"=>$eve->location
     		);

			  $this->Addevent_model->uform_insert($arr);
			  
			  $dataa['events']=$this->Addevent_model->getDataa();
		
			  $this->load->view('myevent_view.php', $dataa);
			  $this->load->view('footer');
			  $this->load->view('css_style');
	
                }
            }




    public function del(){
    	$id = $this->uri->segment(3);
    	$this->load->model('Deleteconf_model');
    	$this->Deleteconf_model->delete_conf($id);
    	redirect('Conference_controller/display/uri');
			}
}

?>