<?php include("login.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Analytics Dashboard - This is an example dashboard created using build-in elements and components.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="./custom.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="./main.css" rel="stylesheet">    
</head>

<body>
  	
  	<div class="navbar navbar-default navbar-fixed-top">
  	
  		<div class="container">
  		
  			<div class="navbar-header">
  			
  				<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
  				
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  					
  				</button>
  				
  				<a class="navbar-brand">Secret Diary</a>
  			
  			</div>
  			
  			<div class="collapse navbar-collapse">
  			
  				<form class="navbar-form navbar-right" method="post">
  				
  					<div class="form-group">
  						<input type="email" name="loginemail" placeholder="Email" class="form-control" value="<?php echo addslashes($_POST['loginemail']); ?>"/>
  					</div>
  					
  					<div class="form-group">
  						<input type="password" name="loginpassword" placeholder="Password" class="form-control" value="<?php echo addslashes($_POST['loginpassword']); ?>" />
  					</div>
  				
  					<input type="submit" name="submit" class="btn btn-success" value="login" >
  					
  				</form>
  				
  			</div>
  		
  		</div>
  	
  	</div>
  	
  	<div class="container contentContainer" id="topContainer">
  	
  		<div class="row">
  			
  			<div class="col-md-6 col-md-offset-3" id="topRow">
  			
  				<h1 class="marginTop white">Secret Diary</h1>
  				
  				<p class="lead">Your own private diary, with you wherever you go.</p>
				
				<?php
				
					if ($error) {
					
						echo '<div class="alert alert-danger">'.addslashes($error).'</div>';
						
					};
					
					if ($message) {
					
						echo '<div class="alert alert-success">'.addslashes($message).'</div>';
						
					};
				
				?>
  				
  				<p class="bold white">Interested? Sign Up Below!</p>
  				
  				<form method="get">
  					
  					<div class="form-group">
  					
  						<label for="email" class="white">Email Address</label>
  						
  						<input type="email" name="email" class="form-control" placeholder="Your email" value="<?php echo addslashes($_POST['email']); ?>" />
  					
  					</div>
  					
  					<div class="form-group">
  					
  						<label for="password" class="white">Password</label>
  						
  						<input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo addslashes($_POST['password']); ?>" />
  					
  					</div>
  					
  						<input type="submit" name="submit" value="Sign Up" class="btn btn-success btn-lg marginTop">
  				
  				</form>
  			
  			</div>
  		
  		</div>
  	
  	</div>
  	
  	
  	
  	<script>
  		
  		$(".contentContainer").css("min-height",$(window).height());
  		
  	</script>
  </body>
</html>













 