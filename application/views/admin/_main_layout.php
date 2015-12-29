<?php $this->load->view('admin/include/page_head');?>

<?php $this->load->view('admin/include/navigation');?>
<!-- jQuery 2.0.2 -->
<script src="<?php echo site_url('common/backend/js/jquery.min.js'); ?>" type="text/javascript"></script>

<?php $this->load->view('admin/components/'. $subview);?>

<?php $this->load->view('admin/include/page_foot');
?>