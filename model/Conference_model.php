<?php
class Conference_model extends CI_model {

	function getData(){
  
  $this->db->select("name,description,datee,location");
  $this->db->from('conference');
  $query = $this->db->get();
  return $query->result();

 }

 function mygetData($username){
  
  $this->db->select("name,description,datee,location");
  $this->db->from('myconferences');
  $this->db->where('email',$username);
  $query = $this->db->get();
  return $query->result();

 }

 function mygetDataa($username){
  
  $this->db->select("name,description,datee,location");
  $this->db->from('myevents');
  $this->db->where('email',$username);
  $query = $this->db->get();
  return $query->result();

 }
}
?>