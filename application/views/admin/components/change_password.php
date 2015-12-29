  
  <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">       			
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Change Password
                        <small>it change password here</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo site_url('administrator/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="">Change Password</a></li>
                       
                    </ol>
                </section>
<?php
$t=$this->session->userdata('loginData');
?>

                <!-- Main content -->
                <section class="content">
                 <div class="row">
				
				 	<?php $log_s= $this->session->flashdata('success'); ?>
					<?php if(!empty($log_s))
					{
					?>
					   <div class="alert alert-success alert-dismissable">
                                        <i class="fa fa-check"></i>
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <?php echo $this->session->flashdata('success');?>.
                       </div>
					   <?php } ?>
				 <div class="col-md-3"></div>
                        <div class="col-md-5">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <i class="fa fa-key"></i>
                                    <h3 class="box-title">Change Password</h3>
                                </div>
                                <div class="box-body pad table-responsive">
								
								
                                  <form role="form" action="<?php echo site_url("administrator/dashboard/change_password");?>" method="post">

		   
			  
		    <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="pass1" placeholder="Enter Password" id="pass1" value="">
              </div> 
           		  
			  <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" class="form-control" name="pass2" placeholder="Conform Password" id="pass2">
              </div>           
           
   
          <div class="row box-footer" style="margin: 0;">
          <div class="pull-right">
	
            <button type="submit" class="btn btn-primary" onclick="return  myFunction()">Update</button>
            <button type="reset" class="btn btn-danger">Reset </button> 
			
          </div>
		  </div>
      
 	</form>          
                                 
                                </div><!-- /.box -->
                            </div>
                        </div><!-- /.col -->
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
						
<script src="<?php echo site_url('common/backend/js/jquery.min.js'); ?>" type="text/javascript"></script>	
<script>
function myFunction(){
 var pass1 = document.getElementById("pass1").value;
 var pass2 = document.getElementById("pass2").value;
 var username=document.getElementById("username").value;
 if(pass1 != pass2){
	alert("Passwords Do not match");
	return false;
  }
	if(username=="")
	{
		alert("Username Must be filled out");
		return false;
	}
	if(pass1=="")
	{
		alert("Password Must be filled out");
		return false;
	}
}
</script>