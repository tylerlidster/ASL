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

            <nav class="navbar navbar-inverse"><br><br>

            <div class="container-fluid">
        
            <div class="navbar-header">
                <a class="navbar-brand" href="http://localhost:8888/OUTSIDE/">OUTSIDE</a>
            </div>
        
            </div>
            <br><br>
            </nav>

            <div class="container-fluid">

            <div class="col-xs-3">
        
            </div>

        	<div class="col-xs-3">
            <br><br><br><br><br>
            <?php $this->load->view('users/login_view'); ?>
        	</div>

        	<div class="col-xs-3">
            <br><br><br><br><br>
        	<?php $this->load->view('users/register_view'); ?>
        	</div>

            <div class="col-xs-3">
        
            </div>

        </div>


        </body>

</html>