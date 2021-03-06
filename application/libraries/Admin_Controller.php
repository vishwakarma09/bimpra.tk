<?php
class Admin_Controller extends MY_Controller
{
	function __construct ()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('Users_Model');
		$this->data['meta_title'] = 'Admin panel : Bimpra Tours and Travels';
		$this->data['my_title'] = "Bimpra";
		$exception_uris = array(
					'administrator',
					'administrator/login/verifylogin',
					'administrator/login/forget_pass',
					'administrator/login/logout'
				);
				if ($this->Users_Model->isLoggedInAdmin() != FALSE)
				{
					$tt=$this->session->userdata('loginData');
					$this->db->where('email', $tt['email']);
					$query = $this->db->get('users');
					$_SESSION['user_data'] = $query->row();
				}
				
				if (in_array(uri_string(), $exception_uris) == FALSE)
				{
					if ($this->Users_Model->isLoggedInAdmin() == FALSE)
					{
			      redirect('administrator/');
					} 
			}
	}

	function index(){}
}