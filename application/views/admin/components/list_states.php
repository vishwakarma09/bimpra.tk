		<!-- Right side column. Contains the navbar and content of the page -->
      <script src="<?php echo site_url('common/backend/js/jquery.min.js'); ?>" type="text/javascript"></script>
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
										List States
                        <small>States List</small>
                         <a href="<?php echo site_url()."administrator/states/add_state/"; ?>" class="btn btn-app">
                                        <i class="fa fa-edit"></i> Add State
                                    </a>
                                    
                           
                    </h1>
                   
                    <ol class="breadcrumb">
                      <li><a href="<?php echo site_url('administrator/dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">States/Add state</a></li>
                       
                    </ol>
                </section>
<div id="PopOverModel" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      
    </div>
</div>
                <!-- Main content -->
                <section class="content">
                 <div class="row">
                        <?php 
                $tr_msg= $this->session->flashdata('tr_msg');
                $er_msg= $this->session->flashdata('er_msg');
                
                if(!empty($tr_msg))
                {
                ?>
                <div class="alert alert-success alert-dismissable alert1"> <i class="fa fa-check"></i>
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <?php echo $this->session->flashdata('tr_msg');?>. </div>
                <?php } else if(!empty($er_msg)){?>
                <div class="alert alert-danger alert-dismissable alert1"> <i class="fa fa-check"></i>
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <?php echo $this->session->flashdata('er_msg');?>. </div>  
                <?php } ?>
                        
                        <div class="col-xs-12">                         
                            <div class="box">
                            
                                <div class="box-header">
                                    <h3 class="box-title">Tour States</h3>                                    
                                </div><!-- /.box-header -->
                                
                                
                                <div class="box-body table-responsive">
                                
                                
                                    <table id="example1" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Type</th>
                                                <th>Display Name</th>
                                                <th>Url Name</th>
																								<th>Is Published</th>
																								<th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                  							       <?php
			
				  foreach($State_list as  $row)
				  {
				    ?>      
																			<tr>
																						<td><?php echo $row->state_id; ?></td>
																						<td><?php echo $row->type; ?>	</td>
																						<td><?php echo $row->display_name; ?></td>
																						<td><?php echo $row->url_name; ?></td>
																						<td><?php echo $row->ispublished; ?></td>
																						<td><div class="dropdown">
																						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
																						Actions <span class="caret"></span>
																						</a>
																						<ul class="dropdown-menu">
																							<li><a href="<?php echo site_url()."administrator/states/edit_state/".$row->state_id; ?>"> Edit</a></li>                                      
																							<li><a href="<?php echo site_url()."administrator/states/delete_state/".$row->state_id; ?>"> Delete</a></li>                   
																						</ul>
																						</div></td>
																			</tr>
										       
                                            <?php } ?>
                                        </tbody>
                               
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
		
		
        <!-- page script -->
	<script type="text/javascript">
			$(function() {
					$("#example1").dataTable();
			});
	</script>	