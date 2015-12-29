<link rel="stylesheet" href="https://raw.githubusercontent.com/lipis/bootstrap-social/gh-pages/bootstrap-social.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/hellojs/1.9.8/hello.all.js"></script>
	<style>
	.alert-error {
    background-color: #f2dede;
    border-color: #eed3d7;
    color: #b94a48;
	}
	.alert-success {
    background-color: #dff0d8;
    border-color: #d6e9c6;
    color: #468847;
	}
	
		
	</style>
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
			
 $("#google").click(function(){    
 hello('google').login().then(function() {
	// alert('You are signed in to google');

	 hello('google').api('/me').then(function(r) {
			console.log(r);
	/*		alert("name: "+r.displayName);
			alert("Gender: "+r.gender);
			alert("Email: "+r.email);
			alert("Id: "+r.id);
	*/		SocialLogin(r, 'google');

		 }, function(e) {
			alert('Whoops! ' + e.error.message);
	 });
 }, function(e) {
	alert('Signin error: ' + e.error.message);
 });
});

$("#facebook").click(function(){    
	hello('facebook').login().then(function() {
	// alert('You are signed in to google');

	 hello('facebook').api('/me').then(function(r) {
				console.log(r);
	/*	 alert("name: "+r.first_name + ' ' + r.last_name);
			alert("Gender: "+r.gender);
			alert("Email: "+r.email);
			alert("Id: "+r.id);
	*/		SocialLogin(r, 'facebook');

		 }, function(e) {
			alert('Whoops! ' + e.error.message);
	 });
 }, function(e) {
	alert('Signin error: ' + e.error.message);
 });
});

/*
$('#popupSignup').click(function(){
	$('#DivRegisterModal').modal();
});
*/

$('#submitBimpra').click(function(){
	submitLogin();
});

});

function submitLogin(){
	var email = $('#email').val();
	var password = $('#password').val();
	
	$.post('<?php echo base_url(); ?>' + 'index.php/checkout/controller/', {cservice : "submitLogin" , email : email, password : password}, function(raw){
		if($.trim(raw).substr(0,5)=='ERROR'){
			var panel = '<div class="panel panel-danger">';
					panel += '<div class="panel-heading">FAILURE</div>';
					panel += '<div class="panel-body">'+raw+'. Please check email and password </div>';
					panel += '</div>';
					$('#divLoginResult').html(panel);
			return false;
		}else{
			var panel = '<div class="panel panel-success">';
					panel += '<div class="panel-heading">SUCCESS</div>';
					panel += '<div class="panel-body">'+raw+'. Please wait while you are redirected to payment gateway. </div>';
					panel += '</div>';
					$('#divLoginResult').html(panel);
			$('#paymentContainer').html(raw);
			$('#paymentForm').submit();
		}
	});
}

function SocialLogin(request, platform){
	$.post('<?php echo base_url(); ?>' + 'index.php/checkout/controller/', {cservice : "SocialLogin" , request : request, platform	:	platform}, function(raw){
		if(raw.substr(0,5)=='ERROR'){
			alert(raw);
			return false;
		}else{
			$('#paymentContainer').html(raw);
			$('#paymentForm').submit();
		}
	});
}

function signupUser(){
  var pass1 = $('#inputPassword').val();
  var pass2 = $('#inputPasswordConfirm').val();
  
  if($.trim(pass1) != $.trim(pass2)){
    alert('Passwords do not match');
  }else{
		var request = {
			first_name	:	$('#first_name').val(),
			last_name		:	$('#last_name').val(),
			email				:	$('#inputEmail').val(),
			password		:	$('#password').val()
		};
		
		$.post('<?php echo base_url(); ?>' + 'index.php/site/controller/',{cservice: 'signupUser', request	: request}, function(raw){
			if(raw.substr(0,5)=='ERROR'){
				$('#divResult').html(raw);
				$('#divResult').css('background-color','green');
				setTimeout(function(){
						$('#DivRegisterModal').modal('hide');
					},2000);
			}else{
				var data = $.parseJSON(raw);
				if(data.status=='SUCCESS'){
					var panel = '<div class="panel panel-success">';
					panel += '<div class="panel-heading">SUCCESS</div>';
					panel += '<div class="panel-body">'+data.data+'. Please login with same details now. </div>';
					panel += '</div>';
					$('#divResult').html(panel);
					setTimeout(function(){
						$('#DivRegisterModal').modal('hide');
					},2000);
				}else{
					var panel = '<div class="panel panel-danger">';
					panel += '<div class="panel-heading">FAILURE</div>';
					panel += '<div class="panel-body">'+data.data+'. Please check the email ID you are using. </div>';
					panel += '</div>';
					$('#divResult').html(panel);
				}
			}
		});
	}
  return false;
}
</script>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h3><?php echo $cart['service'];?> of <?php echo $cart['data']->title; ?></h3>
			<br>
			<h4>Details:</h4></br>
				<h5>	
				Adults:	<?php echo $cart['n_ac'];?><br>
				Child (with bed):<?php echo $cart['n_cwb'];?><br>
				Child (no bed):<?php echo $cart['n_cnb'];?><br>
				Infant:<?php echo $cart['n_ic'];?><br>
				Total amount:<?php echo number_format($cart['amount'],2);?><br>
				</h5>
			</br>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
					<div class="col-md-6">
						<h3>Login with Bimpra Account</h3>
												
						<div id="divLoginResult"></div>
						
						<div class="form-group">
							<input type="text" id="email" class="form-control" placeholder="Enter email" />
						</div>
						
						<div class="form-group">
							<input type="password" id="password" class="form-control" placeholder="Enter password" />
						</div>
						Don't have account <a id="popupSignup" data-toggle="modal" data-target="#DivRegisterModal"> Sign Up </a>
						
						<div class="form-group">
							<button class="btn btn-success" id="submitBimpra">Login</button>
						</div>

							
					</div>
					<div class="col-md-6">
						
						<h3>Login with Social Account</h3>
					
						<a id="facebook" class="btn btn-social btn-facebook">
							<span class="fa fa-facebook"></span> Sign in with Facebook
						</a>
						<br>
						<a id="google" class="btn btn-social btn-google">
							<span class="fa fa-google"></span> Sign in with Google
						</a>
						<br>
					</div>
			</div>
			
		</div>
	</div>
</div>


<div class="container-fluid">
	<div class="row">
		<div class="col-md-12" id="paymentContainer" style="display:none;">
			<!-- paymentContainer -->	
		</div>
	</div>
</div>


<div class="modal fade" id="DivRegisterModal" tabindex="-1" role="dialog" aria-labelledby="DivRegisterModal">
	<form action="" id="submitForm" role="form" onsubmit="return signupUser()">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Sign Up for Bimpra Account</h4>
      </div>
			
    <div class="modal-body">
		
		<div class="row">
			<div class="col-sm-12" id="divResult">
			</div>
		</div>
		
		<div class="row">
			<div class="form-group col-sm-6">
				<input type="text" class="form-control" id="first_name" placeholder="Rahul" required>
				<span class="help-block">Required to enter first name here</span>
			</div>	
			<div class="form-group col-sm-6">
				<input type="text" class="form-control" id="last_name" placeholder="Kumar" required>
				<div class="help-block">Required to enter last name here</div>
			</div>
		</div>
	
		<div class="row">
			<div class="form-group">
				<label for="inputEmail" class="control-label">Email</label>
				<input type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Bruh, that email address is invalid" required>
				<div class="help-block with-errors"></div>
			</div>
		</div>
	
		<div class="row">
				<div class="form-group col-sm-6">
					<input type="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" required>
					<span class="help-block">Minimum of 6 characters</span>
				</div>
				<div class="form-group col-sm-6">
					<input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Passwords don't match. Please check" placeholder="Confirm" required>
					<div class="help-block with-errors"></div>
				</div>
		</div>

		<div class="row">
			<div class="form-group">
						<input type="checkbox" id="terms" data-error="You must agree to terms and conditions" required>
						I agree with <a id="popupTermsAndConditions" data-toggle="modal" data-target="#DivTermsAndConditions"> Terms and Conditions </a>
					<div class="help-block with-errors"></div>
			</div>
		</div>
		
	<div class="modal-footer">
		<div class="row">
			<div class="col-sm-6">
				<button type="submit" class="btn btn-success" id="signupBimpra"> Signup </button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>	
		</div>
		
	</div>
	
    </div>
  </div>
</div>
</form> <!-- end form -->
</div>

<div class="modal fade" id="DivTermsAndConditions" tabindex="-1" role="dialog" aria-labelledby="DivTermsAndConditions">
  <div class="modal-dialog" role="document">
	
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Terms and Conditions</h4>
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