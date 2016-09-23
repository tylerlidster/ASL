<!DOCTYPE html>
<html lang="en">
	<head>
    	<meta charset="utf-8">
    	<title>OUTSIDE</title>

    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  	</head>

        <body>

        <nav class="navbar navbar-inverse"><br>

        <div class="container-fluid">
        
        <div class="navbar-header">
            <a class="navbar-brand" href="http://localhost:8888/OUTSIDE/">OUTSIDE</a>
        </div>
        
        <ul class="nav navbar-nav pull-right">
            <li><a href="http://localhost:8888/OUTSIDE/home/index" class="btn-lg btn-default" type="button">INSERT</a></li>
        </ul>
        
        </div>
        <br>
        </nav>

       <div class="container">

       	<div class="col-xs-2">

       	</div>

        <div class="col-xs-8">

<h2>Edit</h2>
<br>

<?php $attributes = array('id' => 'poi_form', 'class' => 'form_horizontal'); ?>

<!--FORM OPEN-->
<?php echo form_open('home/edit/' . $interest_data->id . '', $attributes); ?>

<div class="dropdown">
<?php echo form_label('Category'); ?>
<br>

<?php

$data = array(

	'life' => 'LIFE',
	'work' => 'WORK',
	'other' => 'OTHER'

);

?>

<?php echo form_dropdown('category', $data, 'life'); ?>

</div>


<br>
<div class="form-group">

<?php echo form_label('Name'); ?>
<br>

<?php

$data = array(
	
	'class' => 'form-control',
	'name' => 'name',
	'value' => $interest_data->name

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
	'name' => 'address',
	'value' => $interest_data->address

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
	'name' => 'city',
	'value' => $interest_data->city

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
	'name' => 'state',
	'value' => $interest_data->state

	);
?>

<?php echo form_input($data); ?>

</div>


<div class="form-group">

<?php

$data = array(
	
	'class' => 'btn btn-primary',
	'name' => 'submit',
	'value' => 'Update'

	);
?>

<?php echo form_submit($data); ?>

</div>

<!--FORM CLOSE-->
<?php echo form_close(); ?>

	<div class="col-xs-2">

       	</div>

	</div>
	</body>
	</html>