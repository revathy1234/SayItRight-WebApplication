<?php
class Event_model extends CI_model {

	function getData(){
  
  $this->db->select("name,description,datee,location");
  $this->db->from('addevent');
  $query = $this->db->get();
  return $query->result();

 }
}
?>