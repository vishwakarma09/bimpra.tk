<style>
.no-print {
	display:none !important;
}
</style>
<!-- Left side column. contains the logo and sidebar -->

<aside class="left-side sidebar-offcanvas sct_aj"> 
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar"> 
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
			<!--
			<?php
				 //if(!empty($this->session->userdata('loginData')->first_name)){ ?>
					<img src="<?php echo site_url().'/uploadsimage/users/'.$_SESSION['user_data']->profile_pic;?>" class="img-circle" alt="User Image" />
			<?php //} else { ?>
					<img src="<?php echo site_url('common/backend/img/avatar5.png');?>" class="img-circle" alt="User Image" />
       <?php //} ?>
			 -->   
					<img src="<?php echo site_url('common/backend/img/avatar5.png');?>" class="img-circle" alt="User Image" />
      </div>
      <div class="pull-left info">
        <p>Hello, <?php if(!empty($this->session->userdata('loginData')->first_name)) echo $this->session->userdata('loginData')->first_name; ?></p>
        <a href=""><i class="fa fa-circle text-success"></i> Online</a> </div>
    </div>
    <!-- search form --> 
    <!-- <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>---> 
    <!-- /.search form --> 
    <!-- sidebar menu: : style can be found in sidebar.less -->
	<ul class="sidebar-menu">
      <li class="admin_li"> <a href="<?php echo site_url('administrator/dashboard');?>"> <i class="fa fa-dashboard"></i> <span>Dashboard</span> </a> </li>
		
      <li class="treeview"> <a href="#"> <i class="fa fa-home"></i> <span> Tours Management </span> <i class="fa fa-angle-left pull-right"></i> </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo site_url('administrator/tours/list_tours');?>"><i class="fa fa-angle-double-right"></i>Tours List</a></li>
		   <li><a href="<?php echo site_url('administrator/tours/add_tour');?>"><i class="fa fa-angle-double-right"></i>Add Tour</a></li>
		 
        </ul>
      </li>
			
			<li class="treeview"> <a href="#"> <i class="fa fa-home"></i> <span> States Management </span> <i class="fa fa-angle-left pull-right"></i> </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo site_url('administrator/states/list_states');?>"><i class="fa fa-angle-double-right"></i>States List</a></li>
		   <li><a href="<?php echo site_url('administrator/states/add_state');?>"><i class="fa fa-angle-double-right"></i>Add State</a></li>
		 
        </ul>
      </li>
      
      <li class="treeview"> <a href="#"> <i class="fa fa-home"></i> <span>User Management</span> <i class="fa fa-angle-left pull-right"></i> </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo site_url('administrator/pages');?>"><i class="fa fa-angle-double-right"></i>Users List</a></li>
		   <li><a href="<?php echo site_url('administrator/pages/add_page');?>"><i class="fa fa-angle-double-right"></i>Add User</a></li>
		 
        </ul>
      </li>
			
    </ul>
  </section>
  <!-- /.sidebar --> 
</aside>
