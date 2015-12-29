<?php
class Login extends Admin_Controller{

    public function __construct(){
        parent::__construct();
		   $this->load->model('Users_Model');
	 }

    function index($msg = NULL) {
			if ($this->Users_Model->isLoggedInAdmin() == TRUE) {
						redirect('administrator/dashboard');
						die();
			}
			
			$gts = $this->input->get('forget', TRUE);
			if($gts == "true"){
				$data['msg'] = $msg;		
				$this->load->view('admin/components/forget_password',$data);
			} else {
				$data['msg'] = $msg;		
				$this->load->view('admin/components/login_form',$data);
			}
	}
    
	 function verifylogin(){
	// override block
	/*	 
		$data = array('userid' => 1, 'isLoggedIn' => true ,'username' => 'username','fname' => 'Khan','mobile' => '23423423', 'email' => 'khan@gmail.com','picture' => '',);
		$this->session->set_userdata('loginData',$data);	
		redirect('administrator/dashboard');
	*/    
		$username = $this->security->xss_clean($this->input->post('username'));
		$password = $this->security->xss_clean($this->input->post('password'));
		
		if($username == "" or $password == ""){
			$this->session->set_flashdata('log_error', 'Please Enter valid login details');
			redirect('administrator');
		}else{
			$this->db->where('email', $username);
			$this->db->where('password', md5($password));
			$query = $this->db->get('users');
			if(!$query){
				$errNo   = $this->db->_error_number();
				$errMess = $this->db->_error_message();
				$this->session->set_flashdata('log_error',  $errNo .' : '.$errMess );
				redirect('administrator');
			}else{
		//num_rows
				if($query->num_rows() == 1)
				{
				$row  = $query->row();
				$data = array(
						'uid'	=>	$row->uid,
						'email'	=>	$row->email,
						'type'	=>	$row->type,
						'first_name'	=>	$row->first_name,
						'last_name'	=>	$row->last_name,
						'isLoggedIn'	=> true
					);
				//$_SESSION['user_data']=$row;
				$this->session->set_userdata('loginData',$data);	
				redirect('administrator/dashboard');
				} else {
					$this->session->set_flashdata('log_error', 'Username or Password doesn\'t matched, Plase try again');
					redirect('administrator');
				}
			}
		}
	}
	 
	public function forget_pass(){
		$this->load->helper('email');
		$this->load->helper('string');
		$this->load->model('Users_Model');
		$email = $this->input->post('email');		

		
		if(!valid_email($email)){			
		$this->session->set_flashdata('log_error', 'Please Enter a Valid Email id.');	
			} else {
				
		if($this->Users_Model->mailexist($email)){
		
		 $userdetails = $this->Users_Model->getDetailByMailId($email);
		 $username = $userdetails->fld_username;
		 $fld_id = $userdetails->fld_id;	
		 $random_Pass = strtolower(random_string());
		 $md_pass = md5($random_Pass);
		 $data = array(
               'fld_password' => $md_pass             
            );
		$chang_pass = $this->Users_Model->updateUser($fld_id, $data);
		if($chang_pass){
			
		$url = site_url('administrator');			
		$msg = "<b>New login details</b> <br /> Username : ".$username." <br /> Password : ".$random_Pass." <br /> Url : <a href='".$url."' title='Click Here'>".$url."</a>";
		$sendmail = send_email($email, $subject = 'Password Change', $message = $msg);
		if($sendmail){
		$this->session->set_flashdata('log_succ', 'Please check your email id, We have sent your login details on your mail Id.');				
		} else {
		$this->session->set_flashdata('log_error', 'There is some error accoured, Please try again');					
			}
		
		}
		 
			}  else {
			$this->session->set_flashdata('log_error', 'Your email Id is not registered.');		
				}	
		
		}
		redirect('administrator/?forget=true');		
		} 
	   
	public function logout(){
	$this->session->sess_destroy('loginData');
	redirect('administrator', 'refresh');
	}
	
	public function change_password(){
	$RequestMethod = $this->input->server('REQUEST_METHOD');
	if($RequestMethod == "POST")
	{
		$username = $this->security->xss_clean($this->input->post('username'));
		$password = $this->security->xss_clean($this->input->post('password'));
		$newpassword=array(
			'fld_password' =>md5($password),
		);
		$this->Users_Model->adminchange_password($newpassword);
	
		$this->session->set_flashdata('success', 'Password has been changed'); 
		redirect('administrator/login/change_password');
	}
	
		$content['admin']=$this->Users_Model->admindetails();
		$content['subview']="change_password";
		$this->load->view('admin/_main_layout', $content);
	}
	
}