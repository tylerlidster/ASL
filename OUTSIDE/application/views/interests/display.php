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

		<div class="col-xs-12">

			<br><br><br>

<ul class="text-uppercase">
		
		<?php foreach($interest_data as $interest): ?>

	

		<li class="list-group-item"><h4>Category</h4><br><?php echo $interest->category; ?></li>

		<li class="list-group-item"><h4>Name</h4><br><?php echo $interest->name; ?></li>

		<li class="list-group-item"><h4>Address</h4><br><?php echo $interest->address; ?></li>

		<li class="list-group-item"><h4>City</h4><br><?php echo $interest->city; ?></li>

		<li class="list-group-item"><h4>State</h4><br><?php echo $interest->state; ?></li>

<br>

		<a href="http://localhost:8888/OUTSIDE/home/edit/<?php echo $interest->id; ?>" class="btn-lg btn-primary" type="button">Edit</a>

		<a href="http://localhost:8888/OUTSIDE/home/delete/<?php echo $interest->id; ?>" class="btn-lg btn-primary" type="button">Delete</a>

		<?php endforeach; ?>

</ul>

  	</div>
    </div>

	</body>
</html>