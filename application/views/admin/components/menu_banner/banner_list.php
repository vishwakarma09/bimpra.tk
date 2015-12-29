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
    <h1>Banners List</h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo site_url('administrator/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?php echo site_url('administrator/home/banner_list');?>">Banners List</a></li>
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
		 
            <h3 class="box-title">Banner List</h3>
			<a href="<?php echo site_url('administrator/home/add_new_banner');?>" class="btn btn-primary btn-lg pull-right" style="  margin: 12px 68px -8px 0px; color:white;">Add New Banner</a>
          </div>
          
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
                  <th>Category</th>
                  <th>URL</th>
				  <th>Text On Banner</th>
				  <th>Image</th>
				  <th>Status</th>
                  <th>Action</th>
                  
             </tr>
             </thead>
              <tbody>
            <?php 
			$i=1;
			foreach($result_banner as $val)
			{
			$msg = $val->id;$username=$this->session->userdata('loginDetail');$key = $username['username'];$encrypted_string = rawurlencode($this->encrypt->encode($msg, $key)); 
            $encrypted_string1 = $this->encrypt->encode($msg, $key);
            $banner_data_serialize=unserialize($val->value);
            //print_r($banner_data_serialize);			
				?>
             <tr>
                  <td><?php echo $i;?></td>
                  <td><?php echo $val->sub_category;?></td>
				  <td><a target="_blank" href="<?php echo $banner_data_serialize['banner_url'];?>"><?php echo $banner_data_serialize['banner_url'];?></a></td>
				  <td><?php echo $banner_data_serialize['banner_text'];?></td>
				  <td><img src="<?php echo site_url();?>common/frontend/images/<?php echo $banner_data_serialize['banner_img'];?>" style="height: 80px;width: 107px;" /></td>
				   <td><?php if($val->key==1){?><a href="<?php echo site_url('administrator/home/banner_status?status=0&ref_no='.$encrypted_string);?>" class='btn btn-success for_pop_over_load_onsubmit'>Active</a><?php } else{?><a href="<?php echo site_url('administrator/home/banner_status?status=1&ref_no='.$encrypted_string);?>" class='btn btn-danger for_pop_over_load_onsubmit'>Inactive</a><?php }?></td>
				  <td>
                   <a href="<?php echo site_url('administrator/home/edit_banner?ref_no='.$encrypted_string);?>" class="btn btn-primary for_pop_over_load_onsubmit"><i class="fa fa-pencil-square-o"></i>&nbsp; Edit</a>
				  <a href="<?php echo site_url('administrator/home/delete_banner?ref_no='.$encrypted_string);?>" class="btn btn-danger for_pop_over_load_onsubmit" onclick="return confirm('Are you confirm to Delete banner')"><i class="fa fa-eraser"></i>&nbsp; Delete</a></td>
				 
                  
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
