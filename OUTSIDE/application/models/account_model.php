<?php



class Account_model extends CI_Model {

	public function create_poi() {
 
		$data = array(

			'category' 		=> $this->input->post('category'),
			'name' 			=> $this->input->post('name'),
			'address' 		=> $this->input->post('address'),
			'city' 			=> $this->input->post('city'),
			'state' 		=> $this->input->post('state')

			);


		$insert_data = $this->db->insert('poi', $data);
		return $insert_data;

	}






	public function get_interests() {

		$query = $this->db->get('poi');

		return $query->result();

	}




















}
?>