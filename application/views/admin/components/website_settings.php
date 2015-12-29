<!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Setting
                        <small>Preview of Admin Website Setting</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo site_url('administrator/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?php echo site_url('administrator/setting');?>">Setting</a></li>
                        
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                 	<div class="row">
					<?php $log_s= $this->session->flashdata('log_sucess'); ?>
					<?php if(!empty($log_s))
					{
					?>
					   <div class="alert alert-success alert-dismissable">
                                        <i class="fa fa-check"></i>
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <?php echo $this->session->flashdata('log_sucess');?>.
                       </div>
					   <?php } ?>
				<form action="<?php echo site_url("administrator/dashboard/settings");?>" method="post">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- Custom Tabs -->
                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab_1" data-toggle="tab">Company Settings</a></li>
                                    <li class=""><a href="#tab_2" data-toggle="tab">Social Media Settings</a></li>
                                    <li class=""><a href="#tab_3" data-toggle="tab">SMS Settings</a></li>
                                    <li class=""><a href="#tab_4" data-toggle="tab">Email Settings</a></li>
                                    <li class=""><a href="#tab_5" data-toggle="tab">Statics Settings</a></li>
                                    <li class=""><a href="#tab_6" data-toggle="tab">Meta Info Settings</a></li>
                                    <li class=""><a href="#tab_7" data-toggle="tab">Other Settings</a></li>
                            
                                  
                                </ul>
                                <div class="tab-content">
								
                                    <div class="tab-pane active" id="tab_1">
									
									<div class="col-md-6" style="float: inherit;">
                                        <div class="form-group">
                                            <label>Company Name</label>
                                            <input type="text" class="form-control" placeholder="Company Name" name="company_name" value="<?php echo $detail[0]->company_name;?>">
                                        </div>

										<div class="form-group">
                                            <label>Company Address</label>
                                            <input type="text" class="form-control" placeholder="Company Address" name="company_address" value="<?php echo $detail[0]->company_address;?>">
                                        </div>
										
										<div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="text" class="form-control" placeholder="Phone Number" name="company_phone" value="<?php echo $detail[0]->company_phone;?>">
                                        </div>
										
										<div class="form-group">
                                            <label>Mobile Number</label>
                                            <input type="text" class="form-control" placeholder="Mobile Number" name="company_mobile" value="<?php echo $detail[0]->company_mobile;?>">
                                        </div>
										
										<div class="form-group">
                                            <label>Customer Care No.</label>
                                            <input type="text" class="form-control" placeholder="Customer Care no." name="customer_care_no" value="<?php echo $detail[0]->customer_care_no;?>">
                                        </div>
										
										<div class="form-group">
                                            <label>Customer Care Email</label>
                                            <input type="email" class="form-control" placeholder="Customer Care Email" name="customer_care_email" value="<?php echo $detail[0]->customer_care_email;?>">
                                        </div>
										
                                   
                                   </div>
								   
								
								   
								 
                                    </div><!-- /.tab-pane -->
                                    <div class="tab-pane" id="tab_2">
									
									<div class="col-md-6" style="float: inherit;">
                                        <div class="form-group">
                                            <label>Facebook</label>
                                            <input type="text" class="form-control" placeholder="Facebook link" name="facebook_link" value="<?php echo $detail[0]->facebook_link;?>">
                                        </div>
										
										<div class="form-group">
                                            <label>Twitter</label>
                                            <input type="text" class="form-control" placeholder="Twitter Link" name="twitter_link" value="<?php echo $detail[0]->twitter_link;?>">
                                        </div>
										
										<div class="form-group">
                                            <label>Google+</label>
                                            <input type="text" class="form-control" placeholder="Google+ link" name="google_plus_link" value="<?php echo $detail[0]->google_plus_link;?>">
                                        </div>
										
										<div class="form-group">
                                            <label>Youtube</label>
                                            <input type="text" class="form-control" placeholder="Youtube link" name="youtube_link" value="<?php echo $detail[0]->youtube_link;?>">
                                        </div>
										
								   <!--<div class="form-group">
                                            <label>Pinterest</label>
                                            <input type="text" class="form-control" placeholder="Pinterest link" name="printrest_link" value="<?php echo $detail[0]->printrest_link;?>">
                                        </div>-->
							
							            </div>
                                    </div><!-- /.tab-pane -->

									<div class="tab-pane" id="tab_3">
									<div class="col-md-6" style="float: inherit;">
									
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control" placeholder="Username" name="sms_username" value="<?php echo $detail[0]->sms_username;?>">
                                        </div>
										
										<div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" placeholder="Password" name="sms_password" value="<?php echo $detail[0]->sms_password;?>">
                                        </div>
										
										<div class="form-group">
                                            <label>Sender ID</label>
                                            <input type="text" class="form-control" placeholder="Sender ID" name="sms_sender_id" value="<?php echo $detail[0]->sms_sende_id;?>">
                                        </div>
									
							
							            </div>
									
                                    </div><!-- /.tab-pane -->
									
									<div class="tab-pane" id="tab_4">
                                  <div class="col-md-6" style="float: inherit;">
									<p class="text-aqua">Main Email configuration</p>
                                        <div class="form-group">
                                            <label>Email ID</label>
                                            <input type="email" class="form-control" placeholder="Email Id" name="email_s_id" value="<?php echo $detail[0]->email_s_id;?>" >
                                        </div>
										
										<div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" placeholder="Password" name="email_s_password" value="<?php echo $detail[0]->email_s_password;?>">
                                        </div>

										<p class="text-aqua">Password Recovery Mail configuration</p>
								  
								   <div class="form-group">
                                            <label>Email ID</label>
                                            <input type="email" class="form-control" placeholder="Email Id" name="forget_password_setting_template" value="<?php echo $detail[0]->forget_password_setting_template;?>" >
                                   </div>
										
										<div class="form-group">
                                            <label>Contact Number</label>
                                            <input type="text" class="form-control" placeholder="Contact Number" name="forget_contact_no_setting_template" value="<?php echo $detail[0]->forget_contact_no_setting_template;?>">
                                        </div>
								  
							            </div>
                                    </div><!-- /.tab-pane -->
									
									<div class="tab-pane" id="tab_5">
                                    <div class="col-md-6" style="float: inherit;">
									
                                        <div class="form-group">
                                            <label>Google Analytics Code</label>
                                            <textarea class="form-control" rows="3" placeholder="Enter ..." name="google_analytics_code"value="<?php echo $detail[0]->google_analytics;?>"><?php echo $detail[0]->google_analytics;?></textarea>
                                        </div>
										
										<div class="form-group">
                                            <label>Google Map</label>
                                            <textarea class="form-control" rows="3" placeholder="Enter ..." name="google_map" value="<?php echo $detail[0]->google_map;?>"><?php echo $detail[0]->google_map;?></textarea>
                                        </div>

										<div class="form-group">
                                            <label>Google Verification Code</label>
                                            <textarea class="form-control" rows="3" placeholder="Enter ..." name="google_verification" value="<?php echo $detail[0]->google_verification_code;?>"><?php echo $detail[0]->google_verification_code;?></textarea>
                                        </div>
										
										<div class="form-group">
                                            <label>Live Chat</label>
                                            <textarea class="form-control" rows="3" placeholder="Enter ..." name="live_chat" value="<?php echo $detail[0]->live_chat;?>"><?php echo $detail[0]->live_chat;?></textarea>
                                        </div>
							
							            </div>
                                    </div><!-- /.tab-pane -->
									
									<div class="tab-pane" id="tab_6">
									
									     <div class="col-md-6" style="float: inherit;">
									
                                        <div class="form-group">
                                            <label>Meta Title</label>
                                            <input type="text" class="form-control" placeholder="Title" name="seo_title" value="<?php echo $detail[0]->seo_title;?>">
                                        </div>
										
										<div class="form-group">
                                            <label>Meta Keyword</label>
                                            <input type="text" class="form-control" placeholder="Keyword" name="seo_keyword" value="<?php echo $detail[0]->seo_keyword;?>">
                                        </div>
										
										<div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" rows="3" placeholder="Enter ..." name="seo_description"value="<?php echo $detail[0]->seo_description;?>"><?php echo $detail[0]->seo_description;?></textarea>
                                        </div>
							
							            </div>
                                    
                                    </div><!-- /.tab-pane -->
									
									<div class="tab-pane" id="tab_7">
									<div class="col-md-6" style="float: inherit;">
									
<div class="form-group">
 <label>TDS</label>
  <div class="input-group">
  <input type="text" class="form-control" placeholder="TDS" name="tds" value="<?php echo $detail[0]->tds;?>">
  <span class="input-group-addon">%</span>
  </div>
</div>
                                    <div class="form-group">
									  <label>
									  Booking Option
									  </label>
									  </br>
											<label style="font-weight: 200;">
                                            <input <?php if($detail[0]->book_api_offline=="1"){echo "checked";}?> class="form-control" style="height: 21px;" type="radio" value="1" name="book_api_offline">Book by API
                                            </label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;											
                                            <label style="font-weight: 200;">											
											<input class="form-control" <?php if($detail[0]->book_api_offline=="0"){echo "checked";}?> style="height: 21px;" type="radio" value="0" name="book_api_offline">Book Off-line
											</label>
                                        </div>
									</div>
									</div>
                                </div><!-- /.tab-content -->
                            </div><!-- nav-tabs-custom -->
                        </div><!--/.col (left) -->
						
    
			<div class="box-footer pull-right" style="margin-right: 16px;">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>		

  </form>						
                    </div>   <!-- /.row -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
		<script src="<?php echo site_url('common/backend/js/jquery.min.js'); ?>" type="text/javascript"></script>	
		 <script src="<?php echo site_url('common/backend/js/jquery.form-validator.min.js'); ?>" type="text/javascript"></script>
<script> $.validate(); </script>