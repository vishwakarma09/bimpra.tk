 </div><!-- ./wrapper -->
 <!-- add new calendar event modal -->
<script>
$(function () {
    var url = window.location.pathname; 
	 var activePage = url.substring(url.lastIndexOf('/') + 1);
	    $('.treeview-menu li a').each(function () { 
	     var linkPage = this.href.substring(this.href.lastIndexOf('/') + 1);
            if (activePage == linkPage) { 
                $(this).parent().parent().parent().addClass('active'); 
                $(this).parent().parent().css({"display": "block"}); 
                $(this).parent().css({"font-weight": "bold"}); 
                $(this).css({"color": "black"}); 
            }
        });
		
		 
		
})
</script>   

         <script src="<?php echo site_url('common/backend/js/bhanu_admin.js'); ?>" type="text/javascript"></script>
        <!-- jQuery UI 1.10.3 -->
		<script src="<?php echo site_url('common/backend/js/jquery-ui-1.10.3.min.js'); ?>" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="<?php echo site_url('common/backend/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
        <!-- Morris.js charts -->
		<script src="<?php echo site_url('common/backend/js/raphael-min.js'); ?>" type="text/javascript"></script>
        
		<script src="<?php echo site_url('common/backend/js/plugins/morris/morris.min.js'); ?>" type="text/javascript"></script>
        <!-- Sparkline -->
		<script src="<?php echo site_url('common/backend/js/plugins/sparkline/jquery.sparkline.min.js'); ?>" type="text/javascript"></script>
        <!-- jvectormap -->
	   <script src="<?php echo site_url('common/backend/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'); ?>" type="text/javascript"></script>
	   <script src="<?php echo site_url('common/backend/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'); ?>" type="text/javascript"></script>
        <!-- fullCalendar -->
	   <script src="<?php echo site_url('common/backend/js/plugins/fullcalendar/fullcalendar.min.js'); ?>" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
		<script src="<?php echo site_url('common/backend/js/plugins/jqueryKnob/jquery.knob.js'); ?>" type="text/javascript"></script>
        <!-- daterangepicker -->
		<script src="<?php echo site_url('common/backend/js/plugins/daterangepicker/daterangepicker.js'); ?>" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
		<script src="<?php echo site_url('common/backend/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'); ?>" type="text/javascript"></script>
        <!-- iCheck -->
	    <script src="<?php echo site_url('common/backend/js/plugins/iCheck/icheck.min.js'); ?>" type="text/javascript"></script>
        <!-- AdminLTE App -->
		 <script src="<?php echo site_url('common/backend/js/AdminLTE/app.js'); ?>" type="text/javascript"></script>
        
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	   <script src="<?php echo site_url('common/backend/js/AdminLTE/dashboard.js'); ?>" type="text/javascript"></script>
        <!-- DATA TABES SCRIPT -->
        <script src="<?php echo site_url('common/backend/js/plugins/datatables/jquery.dataTables.js'); ?>" type="text/javascript"></script>
		<script src="<?php echo site_url('common/backend/js/plugins/datatables/dataTables.bootstrap.js'); ?>" type="text/javascript"></script>
      <script src="<?php echo site_url('common/backend/js/jquery.form-validator.min.js'); ?>" type="text/javascript"></script>
      <script src="<?php echo site_url('common/backend/js/bootstrap-datepicker.js'); ?>" type="text/javascript"></script>
			
    </body>
</html>

<div class="modal modal_for_loading_onsubmit fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" style="width: 9%;">
    <div class="modal-content" style="margin-top: 135%;  margin-top: 135%;">
      <div class="text-center"><img src="<?php echo site_url();?>common/frontend/images/load_on_submit_form.gif" /><div>Please Wait</div></div>
    </div>
  </div>
</div>