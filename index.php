<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>The first page!</title> 

	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <!-- Bootstrap -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
  </head>

  <body>
<!-- HEADER -->
    <div class="panel panel-heading">
    	<h2 class="welcome-text">
    	<?php 
    		if ($_POST["fstnm"] != ""){
    			echo "Привет, " . $_POST["fstnm"] ." ". $_POST["lstnm"];
    			$hiden = 'hidden=""';
    		}
    		else {echo "Hello World!";}
    	?>
    	</h2>
    </div>

<!-- CONTENT -->
    <div class="row">
    	<div class="col-md-3"></div>
    	<div class="panel col-md-6" <?php print($hiden)?>><!-- "<?php print($hiden)?>"> -->
    		<p><br/></p>
			
			<form class="form-horizontal" action= "index.php" method="POST">
			  	<div class="form-group">
			    	<label for="inputName" class="col-sm-2 control-label">Name</label>
			    	<div class="col-sm-8">
			      		<input type="text" class="form-control" id="inputName" name="fstnm" placeholder="...">
			    	</div>
			  	</div>
			  	<div class="form-group">
			    	<label for="inputLastname" class="col-sm-2 control-label">Lastname</label>
			    	<div class="col-sm-8">
			      		<input type="text" class="form-control" id="inputLastname" name="lstnm" placeholder="...">
			    	</div>
			  	</div>
			  	<div class="form-group">
			    	<label for="inputbirthday" class="col-sm-2 control-label">Birthday</label>
			    	<div class="col-sm-4">
			    		<div class='input-group date' >
			       			<input type="date" class="form-control" id="inputbirthday" name="birthday" placeholder="...">
			    		</div>
			    	</div>
			  	</div>

	  			<div class="form-group">
	    			<div class="col-sm-offset-4 col-sm-4">
	    				<button type="submit" class="btn btn-primary btn-block">Sign in</button>
	    			</div>
	  			</div>
			</form>
		</div>
	</div>

  </body>
</html>