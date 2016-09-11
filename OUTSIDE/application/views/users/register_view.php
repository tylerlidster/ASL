



<h2>Create Account</h2>

<?php $attributes = array('id' => 'register_form', 'class' => 'form_horizontal'); ?>

<?php echo validation_errors(); ?>


<!--FORM OPEN-->
<?php echo form_open('users/register', $attributes); ?>


<div class="form-group">

<?php echo form_label('First Name'); ?>
<br>

<?php

$data = array(
	
	'class' => 'form-control',
	'name' => 'first_name'

	);
?>

<?php echo form_input($data); ?>

</div>



<div class="form-group">

<?php echo form_label('Last Name'); ?>
<br>

<?php

$data = array(
	
	'class' => 'form-control',
	'name' => 'last_name'

	);
?>

<?php echo form_input($data); ?>

</div>



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
	'value' => 'Create Account'

	);
?>

<?php echo form_submit($data); ?>

</div>

<!--FORM CLOSE-->
<?php echo form_close(); ?>





