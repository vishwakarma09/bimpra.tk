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

<h1>Add New Link/URL</small> </h1>
<ol class="breadcrumb">
  <li><a href="<?php echo site_url('administrator/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
  <li><a href="<?php echo site_url('administrator/home/add_url');?>">Add Link/URL</a></li>
</ol>
</section>
<div id="PopOverModel" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog"> </div>
</div>
<!-- Main content -->
<section class="content">
  <div class="row">
   <div class="col-md-2">
   </div>
    <div class="col-md-8">
      <div class="box">
        <p style="margin:7px;"> <a class="btn btn-primary pull-right" style="color:white;" href="<?php echo site_url('administrator/home/pages');?>"> <i class="fa fa-arrow-left"></i>&nbsp;&nbsp;
          Go Back (Links List) </a> </p>
        <form action="<?php echo site_url('administrator/home/create_page');?>" method="POST" onsubmit="return sct_bhanu_validate_form()">
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
                  <option value="header_menu">Header Menu</option>
                  <option value="footer_quick_link">Footer - Quick Link</option>
                  <option value="footer_travel_tool">Footer - Travel Tools</option>
                  <option value="footer_legal">Footer - Legal</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="col-md-6">
              <div class="form-group">
                <label>Link/URL (Enter Static Or Select From Page List <i class="fa fa-hand-o-right"></i>)</label>
                <input class="form-control sct_bhanu_validation" sct_bhanu_error_msg="Please enter or select URL"  name="url" placeholder="Please enter or select url">
              </div>
            </div>
            <div class="col-md-6">
              <select name="garden" multiple="multiple" style="width: 100%;height: 85px;
">
                <option class="option_page">Flowers</option>
                <option class="option_page">Flowers</option>
                <option class="option_page">Flowers</option>
                <option class="option_page">Flowers</option>
                <option class="option_page">Flowers</option>
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
