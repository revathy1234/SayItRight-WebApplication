<?php
class Individualsignup_model extends CI_model{

	function form_insert($data){

		$this->db->insert('individual',$data);
	}
}