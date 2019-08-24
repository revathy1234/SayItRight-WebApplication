<?php
class Editevent_model extends CI_model{

		function update_event($id,$data){

			$this->db->where('name', $id);
			$this->db->update('addevent', $data);
}
}