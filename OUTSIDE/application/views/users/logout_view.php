
<?php echo form_open('users/logout'); ?>

<?php 

	$data = array(

		'class'=> 'btn-lg btn-default',
		'name'=> 'submit',
		'value'=> 'Logout'

		);

?>

<?php echo form_submit($data); ?>

<?php echo form_close(); ?>





