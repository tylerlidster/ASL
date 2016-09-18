<h2>Insert Address</h2>

<?php $attributes = array('id' => 'poi_form', 'class' => 'form_horizontal'); ?>

<!--FORM OPEN-->
<?php echo form_open('home/save_poi', $attributes); ?>

<div class="form-group">

<?php echo form_label('Category'); ?>
<br>

<?php

$data = array(
	
	'class' => 'form-control',
	'name' => 'category'

	);
?>

<?php echo form_input($data); ?>

</div>



<div class="form-group">

<?php echo form_label('Name'); ?>
<br>

<?php

$data = array(
	
	'class' => 'form-control',
	'name' => 'name'

	);
?>

<?php echo form_input($data); ?>

</div>



<div class="form-group">

<?php echo form_label('Address'); ?>
<br>

<?php

$data = array(
	
	'class' => 'form-control',
	'name' => 'address'

	);
?>

<?php echo form_input($data); ?>

</div>



<div class="form-group">

<?php echo form_label('City'); ?>
<br>

<?php

$data = array(
	
	'class' => 'form-control',
	'name' => 'city'

	);
?>

<?php echo form_input($data); ?>

</div>


<div class="form-group">

<?php echo form_label('State'); ?>
<br>

<?php

$data = array(
	
	'class' => 'form-control',
	'name' => 'state'

	);
?>

<?php echo form_input($data); ?>

</div>


<div class="form-group">

<?php

$data = array(
	
	'class' => 'btn btn-primary',
	'name' => 'submit',
	'value' => 'Save'

	);
?>

<?php echo form_submit($data); ?>

</div>

<!--FORM CLOSE-->
<?php echo form_close(); ?>