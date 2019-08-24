<?php
class Cart_model extends CI_model{

	function getData(){
  
  $this->db->select("id,name,unit,price");
  $this->db->from('buy');
  $query = $this->db->get();
  return $query->result();

}

function form_insert($data){
		
			$this->db->insert('buyer_info', $data);
		}

}