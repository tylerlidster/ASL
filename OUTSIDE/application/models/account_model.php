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

	public function get_interest($id) {

		$this->db->where('id', $id);
		$query = $this->db->get('poi');

		return $query->result();

	}




	public function get_interests() {

		$query = $this->db->get('poi');

		return $query->result();

	}

	public function delete_interest($interest_id) {

	$this->db->where('id', $interest_id);
	$this->db->delete('poi');

	}

	public function get_interest_info($interest_id) {

		$this->db->where('id', $interest_id);

		$get_data = $this->db->get('poi');

		return $get_data->row();		

	}

	public function edit_interest($interest_id, $data) {

		$this->db->where('id', $interest_id);
		$query = $this->db->update('poi', $data);

		return true;

	}



























}
?>