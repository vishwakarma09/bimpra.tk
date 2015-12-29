<?php
class Frontend_Controller extends MY_Controller
{

	function __construct ()
	{
		parent::__construct();	
        session_start();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		 $this->load->library('session');		
		$this->load->helper('sccustom');
		$this->data['meta_title'] = config_item('site_name');
        $this->load->model('Flight_Model_Admin');	
		$this->load->model('Flight_Model_Front');
		$_SESSION['home_links_data']=$this->Flight_Model_Front->home_links_data();
        $data['website']=$this->Flight_Model_Admin->website_manage_details();
	    $_SESSION['admin_details']=$data;	
		$this->form_validation->set_rules('name_valid', 'Name', 'required');
		$this->form_validation->set_rules('email_valid', 'Email', 'required|valid_email');		
	}
}