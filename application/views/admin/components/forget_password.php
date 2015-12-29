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
            <div class="header">Forgot Password</div>
           <?php echo form_open('administrator/login/forget_pass'); ?>
                <div class="body bg-gray">
					<?php 
                    $log_err = $this->session->flashdata('log_error'); 
					$log_succ = $this->session->flashdata('log_succ'); 
					
                    if($log_err){ ?>
                        <div class="alert alert-dismissable alert-danger" style="margin-left: 0;">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>Sorry !</strong>  <?php echo $log_err; ?> :)
                        </div>
                    <?php } else if($log_succ){?> 
                    <div class="alert alert-dismissable alert-success" style="margin-left: 0;">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                 	<?php echo $log_succ; ?>
                    </div>                    
                    <?php }?>
                    <div class="form-group">
                        <input type="email" name="password2" class="form-control" placeholder="Email Id" data-validation="email"/>
                    </div>
                </div>
                <div class="footer">                    

                    <button type="submit" class="btn bg-olive btn-block">Send</button>

                    <a href="<?php echo site_url("administrator/"); ?>" class="text-center">Login</a>
                </div>
            </form>

         <!--   <div class="margin text-center">
                <span>Forgot using social networks</span>
                <br/>
                <button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button>
                <button class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></button>
                <button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button>

            </div>------->
        </div>
		
        <!-- jQuery 2.0.2 -->
		<script src="<?php echo site_url('common/backend/js/jquery.min.js'); ?>" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="<?php echo site_url('common/backend/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
		<script src="<?php echo site_url('common/backend/js/jquery.form-validator.min.js'); ?>" type="text/javascript"></script>
		
		<script> $.validate(); </script>	

    </body>
</html>