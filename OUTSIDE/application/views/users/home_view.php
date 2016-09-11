<?php if($this->session->userdata('logged_in')): ?>

<h2>Logout</h2>

<?php echo form_open('users/logout'); ?>

<?php 

	$data = array(

		'class'=> 'btn btn-primary',
		'name'=> 'submit',
		'value'=> 'Logout'

		);

?>

<?php echo form_submit($data); ?>

<?php echo form_close(); ?>


<?php endif; ?>




