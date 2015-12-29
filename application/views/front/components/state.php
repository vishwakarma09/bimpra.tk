	<script src="<?php echo site_url('common/backend/js/jquery.min.js'); ?>" type="text/javascript"></script>	
	<script src="<?php echo site_url('common/backend/js/jquery.form-validator.min.js'); ?>" type="text/javascript"></script>
	
	<script src="<?php echo site_url('common/backend/js/plugins/tiny_mce/tiny_mce.js'); ?>" type="text/javascript"></script>

<script> $.validate(); </script>

<div class="clearfix">
			<div class="container-fluid" style="padding:0 30px;">
			<!--			<div class="row">
							<div class="col-md-12">
								<h3 style="text-align:center;"><?php echo $title;?></h3>
							</div>
						</div>
       -->     
						<!--
						<div class="row">
							<div class="col-md-12">
								<center>
									<textarea style="width:80%" rows="50"><?php echo $content;?></textarea>
								</center>
							</div>
						</div>
						-->
						<div class="row">
							<div class="col-md-12">
								<?php echo $content; ?>	
							</div>	
						</div>
			</div>
			
			<br><br>
			
			
</div>
<br><br>