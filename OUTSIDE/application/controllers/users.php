<!--CONTROLLER-->
<?php


class Users extends CI_Controller {


	public function register() {


		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');


		if($this->form_validation->run() == FALSE) {

		$data = 'users/registration_view';

		$this->load->view('layouts/main', $data);

		} else {

			$this->user_model->create_user();

				redirect('home/index');
			
		}	



	}



	public function login() {


		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if($this->form_validation->run() == FALSE) {

			$data = array(

				'errors' => validation_errors()

				);

			$this->session->set_flashdata($data);

			redirect('users/register');

		} else {

		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user_id = $this->user_model->login_user($email,$password);

		if($user_id) {

			$user_data = array(

				'user_id' => $user_id,
				'email' => $email,
				'logged_in' => true

				);

		$this->session->set_userdata($user_data);

		redirect('home/index');

		}

	}
		

	}



	public function logout() {

		$this->session->sess_destroy();
		redirect('users/register');


	}

}
?>