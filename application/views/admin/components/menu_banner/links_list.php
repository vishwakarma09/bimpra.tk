<!-- Right side column. Contains the navbar and content of the page -->
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
<aside class="right-side"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>All Link/URL List</small> </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo site_url('administrator/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?php echo site_url('administrator/home/links_list');?>">Link/URL list</a></li>
    </ol>
  </section>
  <div id="PopOverModel" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog"> </div>
  </div>
  <!-- Main content -->
  <section class="content">
    <div class="row">
   
      <div class="col-xs-12">
        <div class="box"> 
          <div class="box-header">
		 
            <h3 class="box-title">Link/URL  List</h3>
			<a data-toggle="modal" data-target=".for_add_link" class="btn btn-primary btn-lg pull-right" style="  margin: 12px 68px -8px 0px; color:white;">Add New Link/URL</a>
          </div>
          <?php 
		  //echo "<pre>";
		  //echo print_r($result);
		  //echo "<pre>";
		  ?>
          <!-- /.box-header -->
		  <?php if($this->session->flashdata('admin')!="")
		  {?>
		  <div class='alert alert-success alert_remove' role='alert'><?php echo $this->session->flashdata('admin'); ?></div>
		<?php   } ?>
          <div class="box-body table-responsive">
            <table id="example1" class="table table-bordered">
            <thead>
              <tr>
                  <th>Sr.No</th>
                  <th>Title</th>
                  <th>URL</th>
				  <th>Category</th>
                  <th>Action</th>
                  
             </tr>
             </thead>
              <tbody>
            <?php 
			$i=1;
			foreach($result_link as $val)
			{
			$msg = $val->id;$username=$this->session->userdata('loginDetail');$key = $username['username'];$encrypted_string = rawurlencode($this->encrypt->encode($msg, $key)); 
            $encrypted_string1 = $this->encrypt->encode($msg, $key); 		
				?>
             <tr>
                  <td><?php echo $i;?></td>
                  <td><?php echo $val->key;?></td>
				   <td><a target="_blank" href="<?php echo $val->value;?>"><?php echo $val->value;?></a></td>
				  <td><?php echo $val->sub_category;?></td>
				  <td>
                    <a class="btn btn-primary edit_link" id11="<?php echo $encrypted_string1;?>" key="<?php echo $val->key;?>" value1="<?php echo $val->value;?>" sub_cate="<?php echo $val->sub_category;?>"><i class="fa fa-pencil-square-o"></i>&nbsp; Edit</a>
				  <a href="<?php echo site_url('administrator/home/delete_link?ref_no='.$encrypted_string);?>" class="btn btn-danger" onclick="return confirm('Are you confirm to Delete Link')"><i class="fa fa-eraser"></i>&nbsp; Delete</a></td>
                  
             </tr>
			<?php
            $i++;
			} ?> 
             </tbody>
          </table>        
          </div>
          <!-- /.box-body --> 
        </div>
        <!-- /.box --> 
      </div>
    </div>
  </section>
  <!-- /.content --> 
</aside>
<!-- /.right-side --> 

<!-- page script --> 
<script type="text/javascript">
            $(function() {
                $("#example1").dataTable();
               
            });
        </script> 
<div class="modal fade bs-example-modal-sm for_add_link" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
       <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          <h4 class="modal-title" id="mySmallModalLabel">Add New Link<a class="anchorjs-link" href="#mySmallModalLabel"><span class="anchorjs-icon"></span></a></h4>
        </div>
        <div class="modal-body" style="height: 387px;">
                 <form action="<?php echo site_url('administrator/home/add_url');?>" method="POST" onsubmit="return sct_bhanu_validate_form()">
          <div class="sct_bhanu_error_msg_div" style="display:none"> </div>
          <div class="col-md-12">
            <div class="col-md-6">
              <div class="form-group">
                <label>Name/Title</label>
                <input class="form-control sct_bhanu_validation" sct_bhanu_error_msg="Please enter Link Text"  name="key" placeholder="Enter Link text">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Category</label>
                <select name="sub_category" class="form-control">
                  <option value="Header Menu">Header Menu</option>
                  <option value="Footer - Quick Link">Footer - Quick Link</option>
                  <option value="Footer - Travel Tools">Footer - Travel Tools</option>
                  <option value="Footer - Legal">Footer - Legal</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="col-md-6">
              <div class="form-group">
                <label>Link/URL (Enter Static Or Select From Page List <i class="fa fa-hand-o-right"></i>)</label>
                <input class="form-control sct_bhanu_validation select_for_page_url_input" sct_bhanu_error_msg="Please enter or select URL"  name="url" placeholder="Please enter or select url">
              </div>
            </div>
            <div class="col-md-6">
              <select name="garden" multiple="multiple" class="select_for_pages" style="width: 100%;height: 85px;
">
                <?php 
				foreach($result_page as $page_data)
				{?>
                <option class="option_page" value="<?php echo site_url().'fly/other/'.str_replace(' ','_',$page_data->page_title);?>"><?php echo $page_data->page_title;?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <p style="margin-top:20px;">
            <button type="submit" style="margin-top:15px; margin-right:15px;" class="btn btn-success pull-right">Submit</button>
          </p>
        </form>
        </div>
    </div>
  </div>
</div>
<div class="modal fade bs-example-modal-sm for_edit_link" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
       <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          <h4 class="modal-title" id="mySmallModalLabel">Edit Link<a class="anchorjs-link" href="#mySmallModalLabel"><span class="anchorjs-icon"></span></a></h4>
        </div>
        <div class="modal-body" style="height: 387px;">
                 <form action="<?php echo site_url('administrator/home/edit_url');?>" method="POST">
          <div class="col-md-12">
            <div class="col-md-6">
              <div class="form-group">
                <label>Name/Title</label>
                <input class="form-control key" sct_bhanu_error_msg="Please enter Link Text"  name="key" placeholder="Enter Link text">
				<input type="hidden" name="ref_id" class="ref_id">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Category</label>
                <select name="sub_category" class="form-control">
				  <option value="Header Menu" class="sub_category">Header Menu</option>
				  <option value="------">-------------</option>
                  <option value="Header Menu">Header Menu</option>
                  <option value="Footer - Quick Link">Footer - Quick Link</option>
                  <option value="Footer - Travel Tools">Footer - Travel Tools</option>
                  <option value="Footer - Legal">Footer - Legal</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="col-md-6">
              <div class="form-group">
                <label>Link/URL (Enter Static Or Select From Page List <i class="fa fa-hand-o-right"></i>)</label>
                <input class="form-control select_for_page_url_input1 url" sct_bhanu_error_msg="Please enter or select URL"  name="url" placeholder="Please enter or select url">
              </div>
            </div>
            <div class="col-md-6">
              <select name="garden" multiple="multiple" class="select_for_pages1" style="width: 100%;height: 85px;
">
                <?php 
				foreach($result_page as $page_data)
				{?>
                <option class="option_page" value="<?php echo site_url().'fly/other/'.str_replace(' ','_',$page_data->page_title);?>"><?php echo $page_data->page_title;?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <p style="margin-top:20px;">
            <button type="submit" style="margin-top:15px; margin-right:15px;" class="btn btn-success pull-right">Submit</button>
          </p>
        </form>
        </div>
    </div>
  </div>
</div>

