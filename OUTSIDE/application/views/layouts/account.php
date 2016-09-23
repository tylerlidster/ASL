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
            <li><?php $this->load->view('users/logout_view'); ?></li>
        </ul>
        
        </div>
        <br>
        </nav>

        <div class="container">


            <div class="col-xs-4">

            <?php $this->load->view('interests/poi'); ?>            

            </div>


        	<div class="col-xs-8">

            <?php $this->load->view('interests/poi_view'); ?>

        	</div>


        </div>


        </body>

</html>