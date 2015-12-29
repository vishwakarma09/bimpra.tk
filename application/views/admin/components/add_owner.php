<!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Add New Owner
                        
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo site_url('administrator/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Add Owner</a></li>
                        
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                 	<div class="row">
					<?php $log_s= $this->session->flashdata('customer_id'); ?>
					<?php if(!empty($log_s))
					{
					?>
					   <div class="alert alert-success alert-dismissable">
                                        <i class="fa fa-check"></i>
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <?php echo $this->session->flashdata('customer_id');?>.
                       </div>
					   <?php } ?>
				<form action="" method="post" onsubmit="return myFunction()">
				
                        <!-- left column -->
                        <div class="col-md-6">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Owner Detail</h3>
                                </div><!-- /.box-header -->
                              
                                
                                    <div class="box-body">
                                        <div class="form-group">
                                          <label>Name</label>
                                           <input class="form-control" name="name" id="owner_name" placeholder="Enter Staff Member Name"  data-validation="required">
                                            	
                                        </div>
                                       <div class="box-footer ">
                                        <button type="submit" class="btn btn-primary">Add Owner</button>
                            </div>
                                       
                                    </div><!-- /.box-body -->
                            </div><!-- /.box -->

                        </div><!--/.col (left) -->
                        <!-- right column -->
                        <!--/.col (right) -->
								

  </form>						
                    </div>   <!-- /.row -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
		<script src="<?php echo site_url('common/backend/js/jquery.min.js'); ?>" type="text/javascript"></script>	
		 <script src="<?php echo site_url('common/backend/js/jquery.form-validator.min.js'); ?>" type="text/javascript"></script>
 		 
<script> $.validate(); </script>
<script>
function myFunction(){
 var pass1 = document.getElementById("pass1").value;
 var pass2 = document.getElementById("pass2").value;
 if(pass1 != pass2)
 {
	alert("Passwords Do not match");
	return false;
  }
}


</script> 