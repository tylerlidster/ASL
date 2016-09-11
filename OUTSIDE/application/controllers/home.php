<!--CONTROLLER-->
<?php


class Home extends CI_Controller {

	public function index() {

		$this->load->view('home_view');
	}

	public function logout() {

		$this->session->sess_destroy();
		redirect('users/register');

	}


}





?>
