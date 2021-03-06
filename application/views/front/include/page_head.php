<!DOCTYPE HTML>
<html>
<head>
<title><?php echo $pageTitle; ?></title>
<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
<meta name="keywords" content="Template, html, premium, themeforest" />
<meta name="description" content="Traveler - Premium template for travel companies">
<meta name="author" content="Tsoy">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<BASE href="<?php echo site_url();?>">
<!-- GOOGLE FONTS -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600' rel='stylesheet' type='text/css'>
<!-- /GOOGLE FONTS -->
<link rel="stylesheet" href="<?php echo site_url();?>common/frontend/css/bootstrap.css">
<!-- <link rel="stylesheet" href="css/font-awesome.css"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">
<link rel="stylesheet" href="<?php echo site_url();?>common/frontend/css/icomoon.css">
<link rel="stylesheet" href="<?php echo site_url();?>common/frontend/css/styles.css">

<link rel="stylesheet" href="<?php echo site_url();?>common/frontend/css/mystyles.css">

<script src="<?php echo site_url();?>common/frontend/js/modernizr.js"></script>
<script src="<?php echo site_url();?>common/frontend/js/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="<?php echo site_url();?>common/frontend/css/switcher.css" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo site_url();?>common/frontend/css/schemes/bright-turquoise.css" title="bright-turquoise" media="all" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo site_url();?>common/frontend/css/schemes/turkish-rose.css" title="turkish-rose" media="all" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo site_url();?>common/frontend/css/schemes/salem.css" title="salem" media="all" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo site_url();?>common/frontend/css/schemes/hippie-blue.css" title="hippie-blue" media="all" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo site_url();?>common/frontend/css/schemes/mandy.css" title="mandy" media="all" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo site_url();?>common/frontend/css/schemes/green-smoke.css" title="green-smoke" media="all" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo site_url();?>common/frontend/css/schemes/horizon.css" title="horizon" media="all" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo site_url();?>common/frontend/css/schemes/cerise.css" title="cerise" media="all" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo site_url();?>common/frontend/css/schemes/brick-red.css" title="brick-red" media="all" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo site_url();?>common/frontend/css/schemes/de-york.css" title="de-york" media="all" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo site_url();?>common/frontend/css/schemes/shamrock.css" title="shamrock" media="all" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo site_url();?>common/frontend/css/schemes/studio.css" title="studio" media="all" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo site_url();?>common/frontend/css/schemes/leather.css" title="leather" media="all" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo site_url();?>common/frontend/css/schemes/denim.css" title="denim" media="all" />
<link rel="alternate stylesheet" type="text/css" href="<?php echo site_url();?>common/frontend/css/schemes/scarlet.css" title="scarlet" media="all" />
</head>
<body>
<div class="global-wrap">
  <header >
    <div class="container-fluid">
			<div class="row">
      <div class="col-lg-3"> <a class="logo" href="index.php"> <img src="<?php echo site_url();?>common/frontend/img/bimpra-logo.png" alt="Image Alternative text" title="Image Title" /> </a> </div>
      <div class="col-lg-9">
				<div class="row">
					<div class="col-lg-6 pull-right">
						International Tours +91 9999-630-947 international@bimpra.com<br>
						Domestic Tours +91 9999 264 947 domestic@bimpra.com<br>
						General Inquiry   +91 704 2727 947 info@bimpra.com<br>
					<!--  <a href="https://web.facebook.com/bimpratours/";><i class="fa fa-facebook"></i></a>&nbsp;/bimpratours -->
					</div>
				</div>
					
				<div class="row">
					<div class="col-lg-11 col-sm-12 col-xs-12">
						<div class="nav" >
							<ul class="slimmenu" id="slimmenu">
								<li class="active"><a href="<?php echo site_url();?>">Home</a></li>
								<li><a href="<?php echo site_url();?>tours/domestic">Domestic Tours</a>
											<ul>
												<?php
													foreach($this->bimpra->GetDomesticStates() as $states){
														?>
															<li><a href="<?php echo site_url();?>tours/domestic/<?php echo $states->url_name; ?>"><?php echo $states->display_name; ?></a>
																<ul>
														<?php
																foreach($this->bimpra->GetDomesticMenu($states->state_id) as $menuitem){
																	echo '<li><a href="'.site_url().'tours/domestic/'.$states->url_name . '/' . $menuitem->titleUrl.'">'.$menuitem->title.'</a></li>';
																}
														?>
															</ul>
														</li>	
										<?php	}	?>
											</ul>
										</li>
										<li><a href="<?php echo site_url();?>tours/international">International Tours</a>
											<ul>
												<?php
													foreach($this->bimpra->GetInternationalStates() as $states){
														?>
															<li><a href="<?php echo site_url();?>tours/international/<?php echo $states->url_name; ?>"><?php echo $states->display_name; ?></a>
																<ul>
														<?php
																foreach($this->bimpra->GetInternationalMenu($states->state_id) as $menuitem){
																	echo '<li><a href="'.site_url().'tours/international/'.$states->url_name . '/' . $menuitem->titleUrl.'">'.$menuitem->title.'</a></li>';
																}
														?>
															</ul>
														</li>	
										<?php	}	?>
											</ul>
										</li>
										<li><a href="<?php echo site_url();?>site/pages/about">About</a></li>
										<li><a href="<?php echo site_url();?>site/pages/contact-us">Contact Us</a></li>
									<?php if($loginData = $this->session->userdata('loginData')){ ?>
										<li><a href="<?php echo site_url();?>site/pages/contact-us">My Dashboard</a>
											<ul>
												<li><a href="<?php echo site_url();?>my/Hotel/list">My Hotel status</a></li>
												<li><a href="<?php echo site_url();?>my/Trains/list">My train status</a></li>
												<li><a href="<?php echo site_url();?>my/Airline/list">My Airline status</a></li>
												<li><a href="<?php echo site_url();?>my/Support/list">My support tickets</a></li>
												<li><a href="#" onclick="Logout();">Logout</a></li>
											</ul>
										</li>
									<?php }else{ ?>
										<li><a id="popupLoginBimpra" data-toggle="modal" data-target="#page_head_DivLoginBimpra"> My Account</a></li>
									<?php } ?>
							</ul>
						</div>
					</div> <!-- end navigation column -->
				</div> <!-- end div.row of navigation -->
				
				<div class="row">
					 <?php 
                $tr_msg= $this->session->flashdata('tr_msg');
                $er_msg= $this->session->flashdata('er_msg');
                
                if(!empty($tr_msg))
                {
                ?>
                <div class="alert alert-success alert-dismissable alert1"> <i class="fa fa-check"></i>
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <?php echo $this->session->flashdata('tr_msg');?>. </div>
                <?php } else if(!empty($er_msg)){?>
                <div class="alert alert-danger alert-dismissable alert1"> <i class="fa fa-check"></i>
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <?php echo $this->session->flashdata('er_msg');?>. </div>  
                <?php } ?>	
				</div>
				
			</div> <!-- end col-lg-9 -->
			</div> <!-- end row of container-fluid -->
    </div> <!-- end container-fluid -->
  </header>
	
	<!-- start modal functionality -->	
	
	<!-- login functionality -->
<div class="modal fade" id="page_head_DivLoginBimpra" tabindex="-1" role="dialog" aria-labelledby="page_head_DivLoginBimpra">
<form action="" id="page_head_login_form" role="form" onsubmit="return false;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="page_head_myModalLabel">Login your Bimpra Account</h4>
      </div>
			
    <div class="modal-body">
		
	<div class="row">
		<div class="col-md-12">
			<div class="row">
					<div class="col-md-6">
						<h3>Login with Bimpra Account</h3>
												
						<div id="page_head_divLoginResult"></div>
						
						<div class="form-group">
							<input type="text" id="page_head_login_email" class="form-control" placeholder="Enter email" />
						</div>
						
						<div class="form-group">
							<input type="password" id="page_head_login_password" class="form-control" placeholder="Enter password" />
						</div>
						Don't have account <a id="page_head_popupSignup" class="btn" data-toggle="modal" data-target="#page_head_DivRegisterModal"> Sign Up </a>
						
						<div class="form-group">
							<button class="btn btn-success" id="page_head_submit_login">Login</button>
						</div>

							
					</div>
					<div class="col-md-6">
						
						<h3>Login with Social Account</h3>
					
						<a id="page_head_facebook" class="btn btn-social btn-facebook">
							<span class="fa fa-facebook"></span> Sign in with Facebook
						</a>
						<br>
						<a id="page_head_google" class="btn btn-social btn-google">
							<span class="fa fa-google"></span> Sign in with Google
						</a>
						<br>
					</div>
			</div>
			
		</div>
	</div> <!-- end div.row -->
	<div class="modal-footer">
	<!--	<div class="row">
			<div class="col-sm-6">
				<button type="submit" class="btn btn-success" id="page_head_signupBimpra"> Signup </button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>	
		</div> -->
		
	</div>
	
    </div>
  </div> <!-- end modal content -->
	</div>
</form>
	</div>
	
<!-- signup functionality -->
<div class="modal fade" id="page_head_DivRegisterModal" tabindex="-1" role="dialog" aria-labelledby="page_head_DivRegisterModal">
	<form action="" id="page_head_signup_form" role="form" onsubmit="return page_head_signupUser()">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="page_head_myModalLabel">Sign Up for Bimpra Account</h4>
      </div>
			
    <div class="modal-body">
		
		<div class="row">
			<div class="col-sm-12" id="page_head_divResult">
			</div>
		</div>
		
		<div class="row">
			<div class="form-group col-sm-6">
				<input type="text" class="form-control" id="page_head_first_name" placeholder="Rahul" required>
				<span class="help-block">Required to enter first name here</span>
			</div>	
			<div class="form-group col-sm-6">
				<input type="text" class="form-control" id="page_head_last_name" placeholder="Kumar" required>
				<div class="help-block">Required to enter last name here</div>
			</div>
		</div>
	
		<div class="row">
			<div class="form-group">
				<label for="page_head_email" class="control-label">Email</label>
				<input type="email" class="form-control" id="page_head_email" placeholder="Email" data-error="Bruh, that email address is invalid" required>
				<div class="help-block with-errors"></div>
			</div>
		</div>
	
		<div class="row">
				<div class="form-group col-sm-6">
					<input type="password" data-minlength="6" class="form-control" id="page_head_input_password" placeholder="Password" required>
					<span class="help-block">Minimum of 6 characters</span>
				</div>
				<div class="form-group col-sm-6">
					<input type="password" class="form-control" id="page_head_input_password_confirm" data-match="#page_head_input_password" data-match-error="Passwords don't match. Please check" placeholder="Confirm" required>
					<div class="help-block with-errors"></div>
				</div>
		</div>

		<div class="row">
			<div class="form-group">
						<input type="checkbox" id="page_head_terms" data-error="You must agree to terms and conditions" required>
						I agree with <a id="page_head_popupTermsAndConditions" data-toggle="modal" data-target="#page_head_DivTermsAndConditions"> Terms and Conditions </a>
					<div class="help-block with-errors"></div>
			</div>
		</div>
		
	<div class="modal-footer">
		<div class="row">
			<div class="col-sm-6">
				<button type="submit" class="btn btn-success" id="page_head_signup_user"> Signup </button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
		
	</div>
	
    </div>
  </div>
</div>
</form> <!-- end form -->
</div>

<!-- terms and conditions section -->
<div class="modal fade" id="page_head_DivTermsAndConditions" tabindex="-1" role="dialog" aria-labelledby="page_head_DivTermsAndConditions">
  <div class="modal-dialog" role="document">
	
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="page_head_myModalLabel">Terms and Conditions</h4>
      </div>
      <div class="modal-body">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, est, vero, alias iusto quidem fugit laudantium omnis sunt corporis nobis cumque commodi vel natus eius nemo mollitia aut. Sapiente, rem?
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, libero, voluptatem explicabo optio ad quos architecto laudantium reprehenderit nesciunt ea adipisci quam delectus! Aspernatur, cumque temporibus quas voluptatem impedit nisi.
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, similique, dolor dolores tempore ad officiis veniam cum beatae minima blanditiis veritatis iure quasi assumenda quo labore! Id, molestiae commodi quas.
			</div> <!-- end body container -->
		</div>
		
		<div class="modal-footer">
		<!--	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
		</div>
		
    </div>
</div>
<!-- end modal block -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/hellojs/1.9.8/hello.all.js"></script>

<script>
$(document).ready(function(){
		
			hello.init({

				//	google: '708318909794-k0dkt8v56mkv9l6tt70glo94re6tf4v4.apps.googleusercontent.com',
					google: '1000619172380-ek8lrg3kfpsamrk89avesrjh6plfdt8p.apps.googleusercontent.com',
				//	facebook: '578888838925286'
					facebook: '1110044212339856'
					}, {
							 redirect_uri: 'http://bimpra.tk/checkout/',
							 scope:'email'
			});	
			
 $("#page_head_google").click(function(){    
 hello('google').login().then(function() {
	// alert('You are signed in to google');

	hello('google').api('/me').then(function(r) {
		page_head_SocialLogin(r, 'google');
		 }, function(e) {
			alert('Whoops! ' + e.error.message);
	 });
 }, function(e) {
	alert('Signin error: ' + e.error.message);
 });
});

$("#page_head_facebook").click(function(){    
	hello('facebook').login().then(function() {
	// alert('You are signed in to google');

	 hello('facebook').api('/me').then(function(r) {
				page_head_SocialLogin(r, 'facebook');
		 }, function(e) {
			alert('Whoops! ' + e.error.message);
	 });
 }, function(e) {
	alert('Signin error: ' + e.error.message);
 });
});


$('#page_head_submit_login').click(function(){
	page_head_submit_login();
});

$('#page_head_signup_user').click(function(){
	page_head_signup_user();
});

});

function page_head_submit_login(){
	var email = $('#page_head_login_email').val();
	var password = $('#page_head_login_password').val();
	
	$.post('<?php echo base_url(); ?>' + 'index.php/site/controller/', {cservice : "submitLogin" , email : email, password : password}, function(raw){
		if($.trim(raw).substr(0,5)=='ERROR'){
			var panel = '<div class="panel panel-danger">';
					panel += '<div class="panel-heading">FAILURE</div>';
					panel += '<div class="panel-body">'+raw+'. Please check email and password </div>';
					panel += '</div>';
					$('#page_head_divLoginResult').html(panel);
			return false;
		}else{
			var panel = '<div class="panel panel-success">';
					panel += '<div class="panel-heading">SUCCESS</div>';
					panel += '<div class="panel-body">'+raw+'. Please wait while you are logged in. </div>';
					panel += '</div>';
					$('#page_head_divLoginResult').html(panel);
					setTimeout(function(){
						location.reload();
					},2000);
		}
	});
}

function page_head_SocialLogin(request, platform){
		$.post('<?php echo base_url(); ?>' + 'index.php/site/controller/', {cservice : "SocialLogin" , request : request, platform	:	platform}, function(raw){
		if(raw.substr(0,5)=='ERROR'){
			var panel = '<div class="panel panel-danger">';
					panel += '<div class="panel-heading">FAILURE</div>';
					panel += '<div class="panel-body">'+raw+'. Please check email and password </div>';
					panel += '</div>';
					$('#page_head_divLoginResult').html(panel);
			return false;
		}else{
			var panel = '<div class="panel panel-success">';
					panel += '<div class="panel-heading">SUCCESS</div>';
					panel += '<div class="panel-body">'+raw+'. Please wait while you are logged in. </div>';
					panel += '</div>';
					$('#page_head_divLoginResult').html(panel);
			setTimeout(function(){
						location.reload();
					},2000);
		}
	});
}

function page_head_signupUser(){
  var pass1 = $('#page_head_input_password').val();
  var pass2 = $('#page_head_input_password_confirm').val();
  
  if($.trim(pass1) != $.trim(pass2)){
    alert('Passwords do not match');
  }else{
		var request = {
			first_name	:	$('#page_head_first_name').val(),
			last_name		:	$('#page_head_last_name').val(),
			email				:	$('#page_head_email').val(),
			password		:	$('#page_head_input_password').val()
		};
		
		$.post('<?php echo base_url(); ?>' + 'index.php/site/controller/',{cservice: 'signupUser', request	: request}, function(raw){
			if(raw.substr(0,5)=='ERROR'){
				$('#page_head_divResult').html(raw);
				$('#page_head_divResult').css('background-color','green');
				setTimeout(function(){
						$('#page_head_DivRegisterModal').modal('hide');
					},2000);
			}else{
				var data = $.parseJSON(raw);
				if(data.status=='SUCCESS'){
					var panel = '<div class="panel panel-success">';
					panel += '<div class="panel-heading">SUCCESS</div>';
					panel += '<div class="panel-body">'+data.data+'. Please login with same details now. </div>';
					panel += '</div>';
					$('#page_head_divResult').html(panel);
					setTimeout(function(){
						$('#page_head_DivRegisterModal').modal('hide');
					},2000);
				}else{
					var panel = '<div class="panel panel-danger">';
					panel += '<div class="panel-heading">FAILURE</div>';
					panel += '<div class="panel-body">'+data.data+'. Please check the email ID you are using. </div>';
					panel += '</div>';
					$('#page_head_divResult').html(panel);
				}
			}
		});
	}
  return false;
}

function Logout(){
	$.post('<?php echo base_url(); ?>' + 'index.php/site/controller/',{cservice: 'logout'}, function(raw){
			if(raw.substr(0,5)=='ERROR'){
				alert('ERROR logging out');
			}else{
				location.reload();
			}
		});
}
</script>

