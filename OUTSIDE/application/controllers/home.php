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



	public function display($interest_id) {

	$data['interest_data'] = $this->account_model->get_interest($interest_id);

	$data['main_view'] = 'interests/display';

	$this->load->view('interests/display', $data);

	}






	public function save_poi() {

	$this->account_model->create_poi();

	redirect('home/index');


	}

	public function delete($interest_id) {

	$this->account_model->delete_interest($interest_id);


	}


	public function edit($interest_id) {

	$this->form_validation->set_rules('name', 'Name', 'trim|required');


	if($this->form_validation->run() == FALSE) {

	$data['interest_data'] = $this->account_model->get_interest_info($interest_id);

	$data['main_view'] = 'interests/edit_interest';

	$this->load->view('interests/edit_interest', $data);

	} else {
		
		$data = array(

			'name' 			=> $this->input->post('name'),
			'address' 		=> $this->input->post('address'),
			'city' 			=> $this->input->post('city'),
			'state' 		=> $this->input->post('state')

			);


		if($this->account_model->edit_interest($interest_id, $data)) {

			redirect('home/index');

		}
	}


}



}







?>
