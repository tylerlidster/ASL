
<?php echo form_open('home/logout'); ?>

<?php 

	$data = array(

		'class'=> 'btn btn-primary',
		'name'=> 'submit',
		'value'=> 'Logout'

		);

?>

<?php echo form_submit($data); ?>

<?php echo form_close(); ?>





