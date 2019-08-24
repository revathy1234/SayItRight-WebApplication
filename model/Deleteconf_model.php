<?php
class Deleteconf_model extends CI_Model{

		function delete_conf($id){

			$this->db->where('datee', $id);
			$this->db->delete('conference');

		}

		function udelete_conf($id){

			$this->db->where('datee', $id);
			$this->db->delete('myconferences');

		}

}
?> 