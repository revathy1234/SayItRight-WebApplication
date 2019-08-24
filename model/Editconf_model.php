<?php
class Editconf_model extends CI_model{

		function update_conf($id,$data){

			$this->db->where('name', $id);
			$this->db->update('conference', $data);
}

}