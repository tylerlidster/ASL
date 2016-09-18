<?php



class User_model extends CI_Model {

	

	public function create_user() {

		$data = array(

			'first_name' 	=> $this->input->post('first_name'),
			'last_name' 	=> $this->input->post('last_name'),
			'email' 		=> $this->input->post('email'),
			'password' 		=> $this->input->post('password')

			);


		$insert_data = $this->db->insert('users', $data);

		return $insert_data;
	}








	public function login_user($email, $password) {

	$this->db->where('email', $email);
	$this->db->where('password', $password);

	$result = $this->db->get('users');

		if($result->num_rows() == 1) {

			return $result->row(0)->id;

		} else {

			redirect('');

		}

	}

}



?>