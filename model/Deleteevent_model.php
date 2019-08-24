<?php
class Deleteevent_model extends CI_Model{

		function delete_event($id){

			$this->db->where('datee', $id);
			$this->db->delete('addevent');

		}

		function udelete_event($id){

			$this->db->where('datee', $id);
			$this->db->delete('myevents');

		}

}
?> 