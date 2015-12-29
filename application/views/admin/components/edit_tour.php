<!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
										Edit Tour
										<small>Edit List</small>
                         <a href="<?php echo site_url()."administrator/tours/list_tours/"; ?>" class="btn btn-app">
                                        <i class="fa fa-edit"></i> List tours
                                    </a>
                                    
                           
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo site_url('administrator/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Add Tour</a></li>
                        
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
				<form action="" method="post" onsubmit="return myFunction()" enctype="multipart/form-data">
				
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Tour Detail</h3>
                                </div><!-- /.box-header -->
                              
                                
                                    <div class="box-body">
																		
																				<div class="form-group">
																					<label for="title">Enter title</label>
																					<input type="text" name="title" id="title" value="<?php echo $data->title;?>" class="form-control" />
																				</div>
																				
																				<div class="form-group">
																					<label for="slug">Enter short description</label>
																					<input type="text" name="slug" id="slug" value="<?php echo $data->slug;?>" class="form-control" />
																				</div>
																				
															<!--					
																				<div class="form-group">
																					<label for="thumb">Enter thumbnail path</label>
																					<input type="text" name="thumb" id="thumb" class="form-control" />
																				</div>
																-->				
																				<div class="form-group">
                                            <label for="exampleInputFile">Thumbnail</label>
                                            <input type="file" id="thumb" name="userfile">
                                            <p class="help-block">Add thumbnail image</p>
                                        </div>
																				
																				<div class="form-group">
																					<label for="isfeatured">Show post on home page?</label>
																						<label class="radio-inline">
																							<input type="radio" name="isfeatured" <?php if($data->isfeatured == 1) echo "checked";?>>Yes
																						</label>
																						<label class="radio-inline">
																							<input type="radio" name="isfeatured" <?php if($data->isfeatured == 0) echo "checked";?>>No
																						</label>
																				</div>
																				
																				<div class="form-group">
																					<label for="ispublished">Publish post after creation</label>
																						<label class="radio-inline">
																							<input type="radio" name="ispublished" <?php if($data->ispublished == 1) echo "checked";?>>Yes
																						</label>
																						<label class="radio-inline">
																							<input type="radio" name="ispublished" <?php if($data->ispublished == 0) echo "checked";?>>No
																						</label>
																				</div>
																				
																				<div class="form-group">
                                          <label>Published Till</label>
																					<div class="input-group">
																								<div class="input-group-addon">
																										<i class="fa fa-calendar"></i>
																								</div>
																								<input type="text" class="form-control" placeholder="yyyy-mm-dd" name="date_unpublish" value = "<?php echo $data->date_unpublish;?>" id="date_unpublish">
																					</div>
                                        </div>
																				
																				<div class="form-group">
																					<label for="region">Select option</label>
																						<select id="region" name="region" class="form-control">
																							<option value=''> Select option </option>
																							<option value="Domestic" selected>Domestic</option>
																							<option value="International">International</option>
																						</select>
																				</div>
																				
																				<div class="form-group">
																					<label for="statePlaceholder">Select option</label></div>
																						<select id="statePlaceholder" name="statePlaceholder" class="form-control">
																							<option>Select State</option>
																							<?php foreach($State_list as $olval){?>
																							<option value="<?php echo $olval->state_id; ?>" <?php if($data->state_id == $olval->state_id ){ echo "selected";}?>><?php echo $olval->display_name; ?></option>
																							<?php }?>
																						</select>
																				</div>
																				
																				
																				<div class="form-group">
																					<label for="content">Write tour here</label></div>
																							<textarea id="content" name="content" class="form-control" rows="20" ><?php echo $data->content;?></textarea>
																				</div>
																				
																				<div class="form-group">
																					<label for="priceDetails">Enter price details of this regular</label>
																					<div class="table-responsive">
																						<table class="table">
																							<tr>
																								<th>Room Type</th>
																								<th>Adults</th>
																								<th>CNB</th>
																								<th>CWB</th>
																								<th>Infant</th>
																							</tr>
																							<tr>
																								<td>Single</td>
																								<td><input type="text" id="regular_adult_single" name="regular_adult_single" value="<?php echo $data->regular_adult_single;?>" class="form-control"></td>
																								<td><input type="text" id="regular_cnb_single" name="regular_cnb_single" value="<?php echo $data->regular_cnb_single;?>" class="form-control"></td>
																								<td><input type="text" id="regular_cwb_single" name="regular_cwb_single" value="<?php echo $data->regular_cwb_single;?>" class="form-control"></td>
																								<td><input type="text" id="regular_inf_single" name="regular_inf_single" value="<?php echo $data->regular_inf_single;?>" class="form-control"></td>
																							</tr>
																							<tr>
																								<td>Double</td>
																								<td><input type="text" id="regular_adult_double" name="regular_adult_double" value="<?php echo $data->regular_adult_double;?>" class="form-control"></td>
																								<td><input type="text" id="regular_cnb_double" name="regular_cnb_double" value="<?php echo $data->regular_cnb_double;?>" class="form-control"></td>
																								<td><input type="text" id="regular_cwb_double" name="regular_cwb_double" value="<?php echo $data->regular_cwb_double;?>" class="form-control"></td>
																								<td><input type="text" id="regular_inf_double" name="regular_inf_double" value="<?php echo $data->regular_inf_double;?>" class="form-control"></td>
																							</tr>
																							<tr>
																								<td>Triple</td>
																								<td><input type="text" id="regular_adult_triple" name="regular_adult_triple" value="<?php echo $data->regular_inf_double;?>" class="form-control"></td>
																								<td><input type="text" id="regular_cnb_triple" name="regular_cnb_triple" value="<?php echo $data->regular_cnb_triple;?>" class="form-control"></td>
																								<td><input type="text" id="regular_cwb_triple" name="regular_cwb_triple" value="<?php echo $data->regular_cwb_triple;?>" class="form-control"></td>
																								<td><input type="text" id="regular_inf_triple" name="regular_inf_triple" value="<?php echo $data->regular_inf_triple;?>" class="form-control"></td>
																							</tr>
																						</table>
																					</div>
																				</div>
																				
																				<div class="form-group">
																					<label for="ispublished">Tour has delux price</label>
																						<label class="radio-inline">
																							<input type="radio" name="HasDelux" <?php if($data->has_delux == 1) echo "checked";?> >Yes
																						</label>
																						<label class="radio-inline">
																							<input type="radio" name="HasDelux" <?php if($data->has_delux == 0) echo "checked";?> >No
																						</label>
																				</div>
																				
																				<div class="form-group">
																					<label for="priceDetails">Enter price details of this delux</label>
																					<div class="table-responsive">
																						<table class="table">
																							<tr>
																								<th>Room Type</th>
																								<th>Adults</th>
																								<th>CNB</th>
																								<th>CWB</th>
																								<th>Infant</th>
																							</tr>
																							<tr>
																								<td>Single</td>
																								<td><input type="text" id="delux_adult_single" name="delux_adult_single" value="<?php echo $data->delux_adult_single;?>" class="form-control"></td>
																								<td><input type="text" id="delux_cnb_single" name="delux_cnb_single" value="<?php echo $data->delux_cnb_single;?>" class="form-control"></td>
																								<td><input type="text" id="delux_cwb_single" name="delux_cwb_single" value="<?php echo $data->delux_cwb_single;?>" class="form-control"></td>
																								<td><input type="text" id="delux_inf_single" name="delux_inf_single" value="<?php echo $data->delux_inf_single;?>" class="form-control"></td>
																							</tr>
																							<tr>
																								<td>Double</td>
																								<td><input type="text" id="delux_adult_double" name="delux_adult_double" value="<?php echo $data->delux_adult_double;?>" class="form-control"></td>
																								<td><input type="text" id="delux_cnb_double" name="delux_cnb_double" value="<?php echo $data->delux_cnb_double;?>" class="form-control"></td>
																								<td><input type="text" id="delux_cwb_double" name="delux_cwb_double" value="<?php echo $data->delux_cwb_double;?>" class="form-control"></td>
																								<td><input type="text" id="delux_inf_double" name="delux_inf_double" value="<?php echo $data->delux_inf_double;?>" class="form-control"></td>
																							</tr>
																							<tr>
																								<td>Triple</td>
																								<td><input type="text" id="delux_adult_triple" name="delux_adult_triple" value="<?php echo $data->delux_adult_triple;?>" class="form-control"></td>
																								<td><input type="text" id="delux_cnb_triple" name="delux_cnb_triple" value="<?php echo $data->delux_cnb_triple;?>" class="form-control"></td>
																								<td><input type="text" id="delux_cwb_triple" name="delux_cwb_triple" value="<?php echo $data->delux_cwb_triple;?>" class="form-control"></td>
																								<td><input type="text" id="delux_inf_triple" name="delux_inf_triple" value="<?php echo $data->delux_inf_triple;?>" class="form-control"></td>
																							</tr>
																						</table>
																					</div>
																				</div>
																				
																			<div class="box-footer ">
                                        <button type="submit" class="btn btn-primary">Update Tour</button>
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
				
				<script src="<?php echo site_url('common/backend/js/plugins/tiny_mce/tiny_mce.js'); ?>" type="text/javascript"></script>
 		 
<script> $.validate(); </script>
<script>
$(document).ready(function(){
	$('#region').change(function(){
			var type = $(this).val();
			$.post('<?php echo site_url();?>site/controller/',{cservice: "LoadState", type:type}, function(raw){
				$('#statePlaceholder').html(raw);
			});
		});
		
	$('#date_unpublish').datepicker({
		format: "yyyy-mm-dd",
    autoclose: true,
    todayHighlight: true
	});
	
});	
	
function myFunction(){
 var pass1 = document.getElementById("pass1").value;
 var pass2 = document.getElementById("pass2").value;
 if(pass1 != pass2)
 {
	alert("Passwords Do not match");
	return false;
  }
}

tinyMCE.init({
 
  mode : "textareas",
	
  // ===========================================
  // Set THEME to ADVANCED
  // ===========================================
	
  theme : "advanced",
	
  // ===========================================
  // INCLUDE the PLUGIN
  // ===========================================
 
  plugins : "jbimages,autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave",
	
  // ===========================================
  // Set LANGUAGE to EN (Otherwise, you have to use plugin's translation file)
  // ===========================================
 
  language : "en",
	 
  theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
  theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
  theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
 
  // ===========================================
  // Put PLUGIN'S BUTTON on the toolbar
  // ===========================================
 
  theme_advanced_buttons4 : "jbimages,|,insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",
	
  theme_advanced_toolbar_location : "top",
  theme_advanced_toolbar_align : "left",
  theme_advanced_statusbar_location : "bottom",
  theme_advanced_resizing : true,
	
  // ===========================================
  // Set RELATIVE_URLS to FALSE (This is required for images to display properly)
  // ===========================================
 
  relative_urls : false
	
});

</script>