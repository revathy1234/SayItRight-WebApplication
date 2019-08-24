<?php
class Buyfromus_model extends CI_model{

	function form_insert($data){

		$this->db->insert('buy',$data);
	}
}