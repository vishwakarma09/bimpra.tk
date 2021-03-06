<!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
										Add State
										<small>Add List</small>
                         <a href="<?php echo site_url()."administrator/states/list_states/"; ?>" class="btn btn-app">
                                        <i class="fa fa-edit"></i> List States
                                    </a>
                                    
                           
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo site_url('administrator/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Add State</a></li>
                        
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
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">State Detail</h3>
                                </div><!-- /.box-header -->
                              
                                
                                    <div class="box-body">
																		
																				<div class="form-group">
																					<label for="title">Enter Name</label>
																					<input type="text" name="display_name" id="display_name" value="" class="form-control" />
																				</div>
																				
																				<div class="form-group">
																					<label for="slug">Enter short description</label>
																					<input type="text" name="slug" id="slug" class="form-control" />
																				</div>
																				
																				<div class="form-group">
																					<label for="ispublished">Publish state after creation</label>
																						<label class="radio-inline">
																							<input type="radio" name="ispublished">Yes
																						</label>
																						<label class="radio-inline">
																							<input type="radio" name="ispublished">No
																						</label>
																				</div>
																				
																				<div class="form-group">
																					<label for="type">Select option</label>
																						<select id="type" name="type" class="form-control">
																							<option value=''>Select option</option>
																							<option value="Domestic">Domestic</option>
																							<option value="International">International</option>
																						</select>
																				</div>
																				
																				<div class="form-group">
																					<label for="content">Write state details here</label></div>
																							<textarea id="content" name="content" class="form-control" rows="20" ></textarea>
																				</div>
																				
																			<div class="box-footer ">
                                        <button type="submit" class="btn btn-primary">Add State</button>
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
				
<script>$.validate();</script>
<script>
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