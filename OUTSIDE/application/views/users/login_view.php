
<h2>Login</h2>

<?php $attributes = array('id' => 'login_form', 'class' => 'form_horizontal'); ?>

<?php if($this->session->flashdata('errors')): ?>

<?php echo $this->session->flashdata('errors'); ?>

<?php endif; ?>


<!--FORM OPEN-->
<?php echo form_open('users/login', $attributes); ?>

<div class="form-group">

<?php echo form_label('Email'); ?>
<br>

<?php

$data = array(
	
	'class' => 'form-control',
	'name' => 'email'

	);
?>

<?php echo form_input($data); ?>

</div>



<div class="form-group">

<?php echo form_label('Password'); ?>
<br>

<?php

$data = array(
	
	'class' => 'form-control',
	'name' => 'password'

	);
?>

<?php echo form_password($data); ?>

</div>



<div class="form-group">

<?php

$data = array(
	
	'class' => 'btn btn-primary',
	'name' => 'submit',
	'value' => 'Login'

	);
?>

<?php echo form_submit($data); ?>

</div>

<!--FORM CLOSE-->
<?php echo form_close(); ?>




