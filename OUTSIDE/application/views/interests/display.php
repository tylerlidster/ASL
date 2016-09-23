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

		<table class="table table-hover">
    	
    	<thead>
      		<tr>
        		<th>CATGEORY</th>
        		<th>NAME</th>
        		<th>ADDRESS</th>
        		<th>CITY</th>
        		<th>STATE</th>
        		<th></th>
        		<th></th>
      		</tr>
    	</thead>
    	
    	<tbody class="text-uppercase">

		<?php foreach($interest_data as $interest): ?>

		<tr>

		<?php echo "<td>" . $interest->category . "</td>"; ?>

		<?php echo "<td>" . $interest->name . "</td>"; ?>

		<?php echo "<td>" . $interest->address . "</td>"; ?>

		<?php echo "<td>" . $interest->city . "</td>"; ?>

		<?php echo "<td>" . $interest->state . "</td>"; ?>

		<td><a href="http://localhost:8888/OUTSIDE/home/edit/<?php echo $interest->id; ?>" class="btn-xs btn-primary" type="button">Edit</a></td>

		<td><a href="http://localhost:8888/OUTSIDE/home/delete/<?php echo $interest->id; ?>" class="btn-xs btn-primary" type="button">Delete</a></td>

		</tr>

		<?php endforeach; ?>

		</tbody>
  		</table>

  	</div>
    </div>

	</body>
</html>