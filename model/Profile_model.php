<?php 

class Profile_model extends CI_model{

	public function profile_fetch(){

		$sname=$this->session->userdata('mail');
		$this->db->where('mail',$sname);
		$query=$this->db->get('individual');
		return $query;

	}
}

?>