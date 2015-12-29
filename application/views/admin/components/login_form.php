<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $this->data['meta_title']; ?></title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		<!-- bootstrap 3.0.2 -->
        <link href="<?php echo site_url(); ?>common/backend/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo site_url(); ?>common/backend/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo site_url(); ?>common/backend/css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg-black">

        <div class="form-box" id="login-box">
            <div class="header">Welcome To <?php echo $this->data['my_title']; ?></div>
           	<?php echo form_open('administrator/login/verifylogin'); ?>
                <div class="body bg-gray">
					    <?php 
		   $log_err = $this->session->flashdata('log_error'); 
		    if($log_err){ 
		   ?>
            <div class="alert alert-dismissable alert-danger" style="margin-left: 0;">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>Sorry !</strong>  <?php echo $log_err; ?> :).
            </div>
           <?php } ?> 
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="User ID"  data-validation="required" data-validation-error-msg="Please Enter User Id"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password"  data-validation-error-msg="Please Enter Password" data-validation="required"/>
                    </div>          
                    <div class="form-group">
                        <input type="checkbox" name="remember_me"/> Remember me
                    </div>
                </div>
                <div class="footer">                                                               
                    <button type="submit" class="btn bg-olive btn-block">Sign me in</button>  
                    
                    <p><a href="<?php echo site_url("administrator/?forget=true"); ?>">I forgot my password</a></p>
                    
                 <!---   <a href="register.html" class="text-center">Register a new membership</a>--->
                </div>
            </form>

       <!--     <div class="margin text-center">
                <span>Sign in using social networks</span>
                <br/>
             <a href="https://www.facebook.com/" class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></a>
             <a href="https://twitter.com/" class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></a>
              <a href="https://plus.google.com/" class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></a>

            </div>---->
        </div>


        <!-- jQuery 2.0.2 -->
		<script src="<?php echo site_url('common/backend/js/jquery.min.js'); ?>" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="<?php echo site_url('common/backend/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
		<script src="<?php echo site_url('common/backend/js/jquery.form-validator.min.js'); ?>" type="text/javascript"></script>

        <script> $.validate(); </script>		
    
    </body>
</html>