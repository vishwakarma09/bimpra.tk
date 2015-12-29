<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<style>
.option_page {
	cursor:pointer;
	border: solid 1px rgb(60, 141, 188);
	margin: 2px;
}
.option_page:hover {
	background-color: yellow;
}
</style>
<script type="text/javascript">
tinymce.init({
        selector: "textarea",
        plugins: [
                "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "table contextmenu directionality emoticons template textcolor paste fullpage textcolor colorpicker textpattern"
        ],

        toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
        toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media code | insertdatetime preview | forecolor backcolor",
        toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft",

        menubar: false,
        toolbar_items_size: 'small',

        style_formats: [
                {title: 'Bold text', inline: 'b'},
                {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                {title: 'Example 1', inline: 'span', classes: 'example1'},
                {title: 'Example 2', inline: 'span', classes: 'example2'},
                {title: 'Table styles'},
                {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
        ],

        templates: [
                {title: 'Test template 1', content: 'Test 1'},
                {title: 'Test template 2', content: 'Test 2'}
        ]
});</script>

            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Add New Banner
                        
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo site_url('administrator/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?php echo site_url('administrator/home/add_new_banner');?>">Add Banner</a></li>
                        
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                 	<div class="row">
						  <div class="col-md-12">
						 
						     <div class="box box-primary">
							 <div class="box-header" style="cursor: move;">
							 <?php if($this->session->flashdata('admin')!="")
		  {?>
		  <div class='alert alert-success' role='alert'><?php echo $this->session->flashdata('admin'); ?></div>
		<?php   } ?>
                   <?php 
				     $unseralize_data=unserialize($result->value);
					 ?>
				   <i class="fa fa-plus-circle"></i>
                                    <h3 class="box-title">Add Banner</h3>
									 
									  <p style="margin:7px;"> 
           <a class="btn btn-primary pull-right" style="color:white;" href="<?php echo site_url('administrator/home/banner_list');?>">
		  <i class="fa fa-arrow-left"></i>&nbsp;&nbsp;
           Go Back (Banner List)
           </a>
		   </p>
                                </div>
								 <form action="<?php echo site_url('administrator/home/edit_banner_submit_data');?>" method="POST" onsubmit="return sct_bhanu_validate_form()" enctype="multipart/form-data">
								   <input type="hidden" name="ref_no" value="<?php echo  rawurlencode($_GET['ref_no']);?>" >
								   <input type="hidden" name="ofgina" value="<?php echo  $_GET['ref_no'];?>">
								    <input type="hidden" name="img_path" value="<?php echo  $unseralize_data['banner_img'];?>">
								    <div class="sct_bhanu_error_msg_div" style="display:none">
									</div>
							        <div class="col-md-12">
									  <div class="col-md-6">
									    <div class="form-group">
                                           <label>Banner Category</label>
										   <select name="sub_category" class="form-control">
										        <option value=<?php echo $result->sub_category;?>><?php echo $result->sub_category;?></option>
												<option value="-----">-------------</option>
										        <option value="main home banner">Main Home Banner</option>
										   </select>
                                        </div>
										</div>
										<div class="col-md-6">
										  <div class="col-md-6">
										<div class="form-group">
                                           <label>Banner (Select image from local computer)</label>
										   <input type="file" name="userfile">
                                        </div>
										</div>
										<div class="col-md-6">
										<img src="<?php echo site_url();?>common/frontend/images/<?php echo $unseralize_data['banner_img'];?>" style="height: 80px;width: 107px;" />
										</div>
										</div>
									</div>
									
									<div class="col-md-12">
									 <div class="col-md-12">
									<div class="form-group">
                                           <label>Text On Banner</label>
                                           <textarea name="banner_text"  style="width:100%"><?php echo $unseralize_data['banner_text'];?></textarea>
                                    </div>
									</div>
									</div>
									<div class="col-md-12">
									<div class="col-md-7">
									<div class="form-group">
                                           <label>Banner Link (Enter a page url Or Select From Page List <i class="fa fa-hand-o-right"></i>)</label>
                                           <input type="text" name="banner_url" class="form-control select_for_page_url_input1">
                                    </div>
									</div>
									
									<div class="col-md-4">
									 <select multiple="multiple" class="select_for_pages1" style="width: 100%;height: 85px;
">
                <?php 
				foreach($result_page as $page_data)
				{?>
                <option class="option_page" value="<?php echo site_url().'fly/other/'.str_replace(' ','_',$page_data->page_title);?>"><?php echo $page_data->page_title;?></option>
                <?php } ?>
              </select>
									</div>
									</div>
									<div class="col-md-12">
	
										<p style="margin:7px;"> 
										<button type="submit" class="btn btn-success pull-right for_pop_over_load_onsubmit">Submit</button>
										</p>
								    </div>
									
							 </div>
						  </form>
						  </div>
                    </div>   <!-- /.row -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
<script>
$(function(){
	$( ".select_for_page_url_input1" ).val("<?php echo $unseralize_data['banner_url'];?>");
})
</script>
