<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $this->data['my_title']; ?></title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
		<link href="<?php echo site_url(); ?>common/backend/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
         <link href="<?php echo site_url(); ?>common/backend/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
		<link href="<?php echo site_url(); ?>common/backend/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
		<link href="<?php echo site_url(); ?>common/backend/css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
		<link href="<?php echo site_url(); ?>common/backend/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
		<link href="<?php echo site_url(); ?>common/backend/css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
       
        <!-- Daterange picker -->
		<link href="<?php echo site_url(); ?>common/backend/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
		<link href="<?php echo site_url(); ?>common/backend/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
		
		<link href="<?php echo site_url(); ?>common/backend/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo site_url(); ?>common/backend/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="<?php echo site_url(); ?>common/backend/css/bootstrap-datepicker.min.css" type="text/css" />
				
				<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
								<?php
$tw=$this->session->userdata('loginDetail');
?>
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="<?php echo site_url('administrator/dashboard');?>" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
               <?php echo $this->data['my_title']; ?>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle sct_dd" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
			
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                       <li>
                            <a href="<?php echo site_url();?>" class="dropdown-toggle">
                                <i class="fa fa-eye"></i>
                               View Website
                            </a>
                           
                        </li>
					   
                     <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                          
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-cog"></i>
                                Setting
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">Admin Setting</li>
                                    <!-- inner menu: contains the actual data -->
                                      <li><a href="<?php echo site_url("administrator/dashboard/change_password"); ?>"> <i class="fa fa-key"></i> Change password</a></li>								  
																			<li><a href="<?php echo site_url("administrator/dashboard/settings"); ?>"> <i class="fa fa-wrench"></i> Website Setting</a></li>  
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?php if(!empty($this->session->userdata('loginData')->first_name)) echo $this->session->userdata('loginData')->first_name; ?> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">

                                <!-- User image -->
                                <li class="user-header bg-light-blue">
																	<img src="<?php echo site_url('common/backend/img/avatar5.png');?>" class="img-circle" alt="User Image" />
                                    <p>
                                       <?php if(!empty($this->session->userdata('loginData')->first_name)) echo $this->session->userdata('loginData')->first_name; ?>
                                        <!--<small>Member since Nov. 2012</small>--->
                                    </p>
                                </li>
                                <!-- Menu Body -->
                              <!--  <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </li>---->
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="<?php echo site_url("administrator/profile"); ?>" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?php echo site_url("administrator/login/logout"); ?>" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
      <div class="wrapper row-offcanvas row-offcanvas-left">	
  
