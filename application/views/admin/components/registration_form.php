<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
   <link href="<?php echo site_url('common/css/local.css.css'); ?>" rel="stylesheet">
    <link href="<?php echo site_url('common/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <style type="text/css">
	body {
			background-color:#e7e7e7 !important;
		`}
   .form-signin input[type="text"] {
	  margin-bottom: -1px;
	  border-bottom-left-radius: 0;
	  border-bottom-right-radius: 0;
	}

	.form-signin .middle {
	  margin-bottom: -1px;
	  border-top-left-radius: 0;
	  border-top-right-radius: 0;
	  border-bottom-left-radius: 0;
	  border-bottom-right-radius: 0;
	}

	.form-signin .bottom {
	  margin-bottom: 10px;
	  border-top-left-radius: 0;
	  border-top-right-radius: 0;
	}
	.form-signin .form-control {
	  position: relative;
	  font-size: 16px;
	  height: auto;
	  padding: 10px;
	  -webkit-box-sizing: border-box;
	     -moz-box-sizing: border-box;
	          box-sizing: border-box;
	}
    </style>
	 <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="container">
	<div style="margin-top:40px;" class="row">
		<div class="col-md-4 col-md-offset-4">
			<h3 style="color:dimgray;">Register</h3>

			
						
			<hr class="colorgraph">
			<form class="form-signin" role="form" accept-charset="UTF-8" action="" method="POST">				<fieldset>
					<input type="text" name="username" placeholder="Username" class="form-control">			    	
                    <input type="text" name="email" placeholder="E-mail" class="form-control middle">			    	
                    <input type="password" value="" name="password" placeholder="Password" class="form-control middle">			    	
                    <input type="password" value="" name="password_confirmation" placeholder="Confirm Password" class="form-control bottom">			
                      <input type="submit" value="Register" class="btn btn-lg btn-primary btn-block">				    
				    
				  	<br>
				  	<p class="text-center"><a href="login.html">Already have an account?</a></p>
			  	</fieldset>
		  	</form>		</div>
  	</div>
</div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php echo site_url('common/js/bootstrap.min.js'); ?>"></script>
  </body>
</html>