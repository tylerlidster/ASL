<!--CONTROLLER-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function __construct() {
	parent::__construct();


	if(!$this->session->userdata('logged_in')) {

		redirect('users/index');

		}
	}

	public function index() {  


	$data['interests'] = $this->account_model->get_interests();


	$data['main_view'] = 'interests/poi_view';

	$this->load->view('layouts/account', $data);	

	}


	public function save_poi() {

	$this->account_model->create_poi();

	redirect('home/index');


	}































}





?>
