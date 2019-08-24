<?php
class Addevent_model extends CI_model{

	function form_insert($data){

		$this->db->insert('addevent',$data);
	}

	function uform_insert($arr){

		$this->db->insert('myconferences',$arr);
	}


	function getData($id){
  
  $this->db->select("name,description,datee,location");
  $this->db->from('conference');
  $this->db->where('name',$id);
  $query = $this->db->get();
  return $query->result();
}


  function getDataa(){

  	$username=$this->session->userdata('mail');
  
  $this->db->select("name,description,datee,location");
  $this->db->from('myconferences');
  $this->db->where('email',$username);
  $query = $this->db->get();
  return $query->result();


function uform_insert($arr){

		$this->db->insert('myevens',$arr);
	}


	function getData($id){
  
  $this->db->select("name,description,datee,location");
  $this->db->from('addevent');
  $this->db->where('name',$id);
  $query = $this->db->get();
  return $query->result();
}


  function getDataa(){

  	$username=$this->session->userdata('mail');
  
  $this->db->select("name,description,datee,location");
  $this->db->from('myevents');
  $this->db->where('email',$username);
  $query = $this->db->get();
  return $query->result();


}


}
}
}
?>