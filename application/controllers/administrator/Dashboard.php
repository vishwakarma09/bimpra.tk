<?php
class Dashboard extends Admin_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Users_Model');
		$this->load->model('Common_Model');
	}

	public function index() {
		//$content['count']=$this->Users_Model->get_count_admin_dashboard();
		$content['subview'] =  "dashboard";
		$this->load->view('admin/_main_layout', $content);	
	}
	
	public function settings(){
		$RequestMethod = $this->input->server('REQUEST_METHOD');
		if($RequestMethod == "POST"){
		$data=array(
			'company_name'=>$this->input->post('company_name'),
			'company_address'=>$this->input->post('company_address'),
			'company_phone'=>$this->input->post('company_phone'),
			'company_mobile'=>$this->input->post('company_mobile'),
			'customer_care_no'=>$this->input->post('customer_care_no'),
			'customer_care_email'=>$this->input->post('customer_care_email'),
			'facebook_link'=>$this->input->post('facebook_link'),
			'twitter_link'=>$this->input->post('twitter_link'),
			'google_plus_link'=>$this->input->post('google_plus_link'),
			'youtube_link'=>$this->input->post('youtube_link'),
			'printrest_link'=>$this->input->post('printrest_link'),
			'sms_username'=>$this->input->post('sms_username'),
			'sms_password'=>$this->input->post('sms_password'),
			'sms_sende_id'=>$this->input->post('sms_sende_id'),
			'email_s_id'=>$this->input->post('email_s_id'),
			'email_s_password'=>$this->input->post('email_s_password'),
			'forget_password_setting_template'=>$this->input->post('forget_password_setting_template'),
			'forget_contact_no_setting_template'=>$this->input->post('forget_contact_no_setting_template'),
			'google_analytics'=>$this->input->post('google_analytics'),
			'google_map'=>$this->input->post('google_map'),
			'google_verification_code'=>$this->input->post('google_verification_code'),
			'live_chat'=>$this->input->post('live_chat'),
			'seo_title'=>$this->input->post('seo_title'),
			'seo_keyword'=>$this->input->post('seo_keyword'),
			'seo_description'=>$this->input->post('seo_description'),
			'tds'=>$this->input->post('tds'),
			'book_api_offline'=>$this->input->post('book_api_offline')
			
		);
	
			$this->Common_Model->update_data('settings',$data,'id',1);
			$success="Updated  Successfully";
			$this->session->set_flashdata('log_sucess',  $success  );
			redirect(site_url().'administrator/dashboard/settings');
		}
		$content['detail']=$this->Common_Model->get_data('settings');
	//	print_r($content); die();
		$content['subview'] =  "website_settings";
    $this->load->view('admin/_main_layout', $content);
	}

		public function change_password(){
			$RequestMethod = $this->input->server('REQUEST_METHOD');
			if($RequestMethod == "POST"){
				$newPassword = $this->input->post('pass2');
				$loginData = $this->session->userdata('loginData');
				$updateArray = array(
					'password'	=>	md5($newPassword)	
				);
			//	print_r($updateArray);
			//	print_r($loginData);
				
				$this->Common_Model->update_data('users', $updateArray, 'uid', $loginData['uid']);
				$this->session->set_flashdata('success' ,"Password updated successfully");
			}
			$content['subview']="change_password";
			$this->load->view('admin/_main_layout', $content);
		}
		
		public function profile()
		{
      $RequestMethod = $this->input->server('REQUEST_METHOD');
		    if($RequestMethod == "POST")
			 {
			 if($_FILES['userfile']['error']>0)
		      {
			
			   $path=$this->input->post('image');
		
		      }
		     else
		      {
		
		       $image_data=$this->Flight_Model_Admin->do_upload();
		
		       $path=$image_data['file_name'];
	
		      }
			 
			
			$uid=$this->input->post('uid');
			 $data=array(
			 'fld_name'=>$this
			 ->input->post('name_u'),
	         'mobile_no'=>$this->input->post('mobile_no'),
	         'fld_email_id'=>$this->input->post('email_id'),
             'profile_pic'=>$path,
			 );
			 
		$data1 = array( 'userid' => $this->input->post('uid'), 'is_logedin' => true ,'username' => $this->input->post('username'),'fname' => $this->input->post('name_u'),'mobile' => $this->input->post('mobile_no'),'email' =>$this->input->post('email_id'), 'picture' =>$path,);		

		
	 $this->Flight_Model_Admin->admin_manage_profile($uid,$data);	
	 $this->session->set_flashdata('log_sucess', 'Profile Successfully Updated'  );
	 $this->session->set_userdata('loginDetail',$data1);
	 redirect(site_url().'administrator/dashboard/profile');
			 }
	$content['subview'] = "profile";
    $this->load->view('admin/_main_layout', $content);	
}
    
	
public function quick_mail()
{

   $RequestMethod = $this->input->server('REQUEST_METHOD');
		    if($RequestMethod == "POST")
			 {
			$subject= $this->input->post('subject');
			$msg= $this->input->post('msg');
            email_send($this->input->post('emailto'),$subject,$msg);
	   $this->session->set_flashdata('log_sucess', 'Email Successfully Send'  );
	   redirect(site_url().'administrator/dashboard');
             }
}	

/*public function homepage_banner()
{	
	    $content['subview'] =  "homepage_banner";
		$this->load->view('admin/_main_layout', $content);
}	
	
public function add_banner()
{	
	    $content['subview'] =  "add_banner";
		$this->load->view('admin/_main_layout', $content);
}*/


 public function banner_list()
   {		

		$result_link = $this->Common_Model->get_data('banner_data');
		
		$content['result_banner'] =  $result_link;
	    $content['subview'] =  "menu_banner/banner_list";
		$this->load->view('admin/_main_layout', $content);
   }
   public function add_new_banner()
   {
	     $result_page=$this->Flight_Model_Admin->page_list();
		 $content['result_page'] =  $result_page;
	     $content['subview'] =  "menu_banner/add_banner";
		 $this->load->view('admin/_main_layout', $content);
   }
   public function add_banner_submit_data()
   { 
		$config['upload_path'] = 'common/frontend/images/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
		   $error = array('error' => $this->upload->display_errors());
		   $this->session->set_flashdata('admin',$this->upload->display_errors());
	       redirect('administrator/home/add_new_banner');
			
		}
		else
		{
		    $data = array('upload_data' => $this->upload->data());
		
		} 
		$banner_data=array(
		"banner_text" => $_POST['banner_text'],
		"banner_url" => $_POST['banner_url'],
		"banner_img" => $data['upload_data']['file_name'],
		);
		$seri_data=serialize($banner_data);
		$data=array(
		'category' => "banner",
		'sub_category' =>  $_POST['sub_category'],
		'key' => "1",
		'value' => $seri_data,
		); 
		$this->Flight_Model_Admin->insert_banner($data);
		$this->session->set_flashdata('admin','Banner has been successfully insert');
	    redirect('administrator/home/banner_list');
   }
   
   public function banner_status()
   {
	     $msg = $_GET['ref_no'];
		$username=$this->session->userdata('loginDetail');
		$key = $username['username'];
		$encrypted_string = $this->encrypt->decode($msg, $key);
		$data=array(
		'key' => $_GET['status'],
		);
		$this->Flight_Model_Admin->edit_banner_submit($data,$encrypted_string);
		$this->session->set_flashdata('admin','Banner is successfully Updated');
		 redirect('administrator/home/banner_list');
   }
   public function delete_banner()
   {
	     $msg = $_GET['ref_no'];
		$username=$this->session->userdata('loginDetail');
		$key = $username['username'];
		$encrypted_string = $this->encrypt->decode($msg, $key);
		$this->Flight_Model_Admin->delete_banner($encrypted_string);
		$this->session->set_flashdata('admin','Banner is successfully deleted');
		 redirect('administrator/home/banner_list');
   }
   public function edit_banner()
   {
	
	    $msg = $_GET['ref_no'];
		$username=$this->session->userdata('loginDetail');
		$key = $username['username'];
		$encrypted_string = $this->encrypt->decode($msg, $key);
		$result=$this->Flight_Model_Admin->banner_data_id($encrypted_string);
		$result_page=$this->Flight_Model_Admin->page_list();
		 $content['result_page'] =  $result_page;
		$content['result'] =  $result[0];
	    $content['subview'] =  "menu_banner/edit_banner";
		$this->load->view('admin/_main_layout', $content);
	  
   }
   public function edit_banner_submit_data()
   {
	   if($_FILES['userfile']['error']>0)
		{
			$path=$_POST['img_path'];
		}
		else
		{
		
		   $config['upload_path'] = 'common/frontend/images/';
		   $config['allowed_types'] = 'gif|jpg|png';
		   $this->load->library('upload', $config);

		    if ( ! $this->upload->do_upload())
		       {
		        $error = array('error' => $this->upload->display_errors());
		        $this->session->set_flashdata('admin',$this->upload->display_errors());
	            redirect('administrator/home/edit_banner?ref_no='.$_POST['ref_no']);
			
		       }
		    else
		      {
		       $data = array('upload_data' => $this->upload->data());
		       $path=$data['upload_data']['file_name'];
		      } 
		}
		
		$banner_data=array(
		"banner_text" => $_POST['banner_text'],
		"banner_url" => $_POST['banner_url'],
		"banner_img" => $path,
		);
		$seri_data=serialize($banner_data);
		$data=array(
		'category' => "banner",
		'sub_category' =>  $_POST['sub_category'],
		'key' => "1",
		'value' => $seri_data,
		); 
		$msg =$_POST['ofgina'];
		$username=$this->session->userdata('loginDetail');
		$key = $username['username'];
		$encrypted_string = $this->encrypt->decode($msg, $key);
		$this->Flight_Model_Admin->update_banner($data,$encrypted_string);
		$this->session->set_flashdata('admin','Banner has been successfully Updated');
	    redirect('administrator/home/banner_list');   
   } 
}