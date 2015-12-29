<?php 
class Users_Model extends MY_Model {
	
	public function __construct()
  {
			parent::__construct();
			$this->gallery_path = realpath(APPPATH . '../uploadsimage');
			$this->gallery_path_url = base_url().'uploadsimage/';
  }
    
	public function login(){
		$email = $this->security->xss_clean($this->input->post('email'));
		$password = $this->security->xss_clean($this->input->post('password'));

		$where = array('email'=>$email, 'password'=>md5($password));
		$Oresult = $this->Common_Model->get_data_multiple_where('users', '*', $where);
		
		if(count($Oresult) == 1){
			$loginData = array(
				'uid'	=>	$Oresult[0]->uid,
				'email'	=>	$Oresult[0]->email,
				'first_name'	=>	$Oresult[0]->first_name,
				'last_name'	=>	$Oresult[0]->last_name,
				'isLoggedIn'	=> true
			);
		
			$this->session->set_userdata('loginData', $loginData);
			return $Oresult[0]->uid;
		}else{
			return NULL;
		}
	}
	
	public function SocialLogin($email, $platform){
		$where = array('email'=>$email, 'social_platform'=>$platform);
		$Oresult = $this->Common_Model->get_data_multiple_where('users', '*', $where);
		
		if(count($Oresult) == 1){
			$loginData = array(
				'uid'	=>	$Oresult[0]->uid,
				'email'	=>	$Oresult[0]->email,
				'first_name'	=>	$Oresult[0]->first_name,
				'last_name'	=>	$Oresult[0]->last_name,
				'type'	=>	$Oresult[0]->type,
				'isLoggedIn'	=> true
			);
			$this->session->set_userdata('loginData', $loginData);
			return $Oresult[0]->uid;
		}
		return false;
	}
	
	public function SocialRegister($request, $platform){
		if($platform == 'facebook'){
				$email 			=	$request['email'];
				$first_name	=	$request['first_name'];
				$last_name	=	$request['last_name'];
				$social_platform	=	'facebook';
			}else if($platform == 'google'){
				$email 			=	$request['emails'][0]['value'];
				$first_name	=	$request['first_name'];
				$last_name	=	$request['last_name'];
				$social_platform	=	'google';
			}else{
				return false;
			}
			
			$data	=	array(
				'first_name'	=>	$first_name,
				'last_name'		=>	$last_name,
				'type'				=>	3,
				'email'				=>	$email,
				'lactive'			=>	true,
				'dcreated'		=>	date('Y-m-d'),
				'via_social'	=>	true,
				'social_platform'	=>	$social_platform
			);
			
			$this->Common_Model->insert_data('users', $data);
			return true;
	}
	
	public function SocialLoginOrRegister(){
		$request = $this->input->post('request');
		$platform = $this->input->post('platform');
		$email	=	$request['email'];

		if($uid = $this->SocialLogin($email, $platform)){
			return $uid;
		}else{
			$this->SocialRegister($request, $platform);
			return $this->SocialLogin($email, $platform);
		}
	}
	
	
	public function getLoginData(){
		$loginData = $this->session->userdata('loginData');
		return $loginData;
	}
		
		
	public function isLoggedInAdmin(){
		$loginData = $this->session->userdata('loginData');
		if($loginData['isLoggedIn'] == true && $loginData['type'] == 1){
			return true;
		} else {
			return false;
		}	
	}
	
	public function isLoggedInStaff(){
		$loginData = $this->session->userdata('loginData');
		if($loginData['isLoggedIn'] == true && $loginData['type'] == 2){
			return true;
		} else {
			return false;
		}	
	}
	
	public function isLoggedInCustomer(){
		$loginData = $this->session->userdata('loginData');
		if($loginData['isLoggedIn'] == true && $loginData['type'] == 3){
			return true;
		} else {
			return false;
		}
	}
	
	public function getDetailByMailId($mail){
		$this->db->where('fld_email_id',$mail); 
		$query = $this->db->get('tbl_users');
		$row  = $query->row();
		return $row;
		}
		
		public function customer_getDetailByMailId($mail){
		$this->db->where('email_id',$mail); 
		$query = $this->db->get('registration');
		$row  = $query->row();
		return $row;
		}	
		
	public function mailexist($mail){
		$this->db->where('fld_email_id', $mail);
       	$query = $this->db->get('tbl_users');
		if($query->num_rows == 1){
			return true;
			} else {
				return false;
				}
		}
		
	public function updateUser($id, $data){
		$this->db->where('fld_id', $id);
		$this->db->update('tbl_users', $data); 	
		return true;	
		}
		
		
    public function register1($data1)
	{   $id = $_SESSION['customer_id'];
		$this->db->insert('registration',$data1);
		
		
		}			
	

		public function userlogin($email , $password){
		
		
		$this->db->where('email_id', $email);
        $this->db->where('password',$password);

       	$query = $this->db->get('registration');
		
	if($query->num_rows == 1)
        {
			$row  = $query->row();
			$data = array( 'userid' => $row->id, 'validated' => true );
			$dd['id']=$row->id;
			$dd['name']=$row->first_name.' '.$row->last_name;
			return $dd;
        } 
		else {
			return NULL;
			}
		}
		
		public function flight_booking_result()
		{
			$id = $_SESSION['customer_id'];
			$this->db->from('tbl_flights_booking');

			$this->db->where('customer_id',$id);

			$query=$this->db->get();

			if($query->num_rows() ==''){

				return '';

			}else{

				return $query->result();

			}
			
			}
			
			public function hotel_booking_result($uid)
		{
		
			$this->db->from('tbl_hotel_booking');

			$this->db->where('customer_id',$uid);

			$query=$this->db->get();

			if($query->num_rows() ==''){

				return '';

			}else{

				return $query->result();

			}
			
			}
			
			public function regist($uid)
			{
		$this->db->from('registration');
		$this->db->where('id',$uid);
        $query=$this->db->get();
        if($query->num_rows() ==''){

				return '';

			}else{

				return $query->result();

			}
				} 
		
		
		public function customerupdatepassword($newpassword,$id)
	    
		{
			$this->db->from('registration');
			$this->db->where('id', $id);
            $this->db->update('registration', $newpassword);
         		}
		
			
		public function customerupdateprofile($newprofile,$id)
	    
		{
			$this->db->from('registration');
			$this->db->where('id', $id);
            $this->db->update('registration', $newprofile);
        }
	
			
	public function mailexists_customer($mail_id){
		$this->db->where('email_id', $mail_id);
       	$query = $this->db->get('registration');
		if($query->num_rows == 1){
			return $data='true';
			} else {
				return $data='false';
				}
		}
	
		public function register_email($mail_id)
			{
		$this->db->from('registration');
		$this->db->where('email_id',$mail_id);
        $query=$this->db->get();
        if($query->num_rows() ==''){

				return '';

			}else{

				return $query->result();

			}
				}	
	
		public function sinup_email($sinup)
	    { 
		$this->db->insert('tbl_sinup',$sinup);
		
		
		}
		
		public function print_booking($booking)
		{
		$this->db->where('Fld_RefrenceId', $booking);
       	$query = $this->db->get('tbl_flights_booking');
		
			return $query;
			
		}
		public function sinup_email_exits($email_id){
		$this->db->where('email_id', $email_id);
       	$query = $this->db->get('tbl_sinup');
		if($query->num_rows == 1){
			return $data='true';
			} else {
				return $data='false';
				}
		}
		
		public function Convenience_update($amount)
		{
			$this->db->from('tbl_markup');
			$this->db->where('id', 1);
            $this->db->update('tbl_markup', $amount);
		}
		
		public function common_markup_update($common_markup_amount)
		{
			$this->db->from('tbl_markup');
			$this->db->where('id', 1);
            $this->db->update('tbl_markup', $common_markup_amount);
		}
		
		    public function inter_flight_markup($inter_data)
	    {   
		
		$this->db->insert('flight_wise_markup',$inter_data);
		
		}

         public function flight_markup_data($result_flight_type)
		{
		$this->db->where('dom_inter' ,$result_flight_type);
       	$query = $this->db->get('flight_wise_markup');
		
		$result=$query->result();
		return $result;
			
		}

         public function dom_edit($data,$id)
         {  
    		 $this->db->from('flight_wise_markup');
		     $this->db->where('id',$id);	
             $this->db->update('flight_wise_markup',$data);
		 }
		 
         public function customer_detail_admin()
            {
              $query=$this->db->get('registration');
			  $result=$query->result();
		      return $result;

			}	
          public function customer_delete($thisId)
           {
		   $this->db->where('id',$thisId);	
	       $this->db->delete('registration');
		   return $data="true";
		   
		   }

       	public function adminchange_password($newpassword)
	    
		{
			$this->db->from('tbl_users');
			$this->db->where('fld_id', 1);
            $this->db->update('tbl_users', $newpassword);
        }
		public function admindetails()
	    
		{
	         $query=$this->db->get('tbl_users');
			 $result=$query->result();
		      return $result;
        }
		
		public function packagequery($data)
	    
		{
	     $this->db->insert('tbl_enquiry',$data);
        }		   
		public function quickcontect($data)
	    
		{
	     $this->db->insert('tbl_quick_contect',$data);
        }	

	function get_package_enquiry_id($id,$fld="*"){

    		$this->db->select($fld);

			$this->db->from('tbl_enquiry');

			$this->db->where('id',$id);

			$query=$this->db->get();

			if($query->num_rows() ==''){

				return '';

			}else{

				return $query->result();

			}

		}
		
		
		function get_train_enquiry_id($id,$fld="*"){

    		$this->db->select($fld);

			$this->db->from('tbl_train');

			$this->db->where('id',$id);

			$query=$this->db->get();

			if($query->num_rows() ==''){

				return '';

			}else{

				return $query->result();

			}

		}
		
		function get_car_enquiry_id($id,$fld="*"){

    		$this->db->select($fld);

			$this->db->from('tbl_car');

			$this->db->where('id',$id);

			$query=$this->db->get();

			if($query->num_rows() ==''){

				return '';

			}else{

				return $query->result();

			}

		}

       public function quick_details_delete($thisId)
           {
		   $this->db->where('id',$thisId);	
	       $this->db->delete('tbl_quick_contect');
		   }
		   
	   public function delete_enquiry($thisId)
           {
		   $this->db->where('id',$thisId);	
	       $this->db->delete('tbl_enquiry');
		    return $data="true";
		   }

		   public function delete_enquiry_car($thisId)
           {
		   $this->db->where('id',$thisId);	
	       $this->db->delete('tbl_car');
		    return $data="true";
		   }		
		

		public function agent_create($data)
           {
	       $this->db->insert('tbl_agent_info',$data);
		   }
		   public function agent_delete($thisId)
           {
		   $this->db->where('id',$thisId);	
	       $this->db->delete('tbl_agent_info');
		   return $data="true";
		   }

		   public function agent_password_change($id,$data)
           {
		   $this->db->where('id',$id);	
	       $this->db->update('tbl_agent_info',$data);
		  
		   }

 public function agent_detail() {
        $query = $this->db->get("tbl_agent_info");
 
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }		   
	
  public function search_agent($login)
    {	   
     	    $this->db->from('tbl_agent_info');
 			$this->db->where('login_name',$login);
			$this->db->or_where('email_id',$login);
            $query=$this->db->get();
            if($query->num_rows() ==''){
				return $data="There is no Result Found";
			}else{
				return $query->result();
			}
		
	}
   	public function agent_login_name_exists($username){
		$this->db->where('login_name', $username);
       	$query = $this->db->get('tbl_agent_info');
		if($query->num_rows == 1){
			return $data='true';
			} else {
				return $data='false';
				}
		}
		public function agent_eamil_id_exists($mail_id){
		$this->db->where('email_id', $mail_id);
       	$query = $this->db->get('tbl_agent_info');
		if($query->num_rows == 1){
			return $data='true';
			} else {
				return $data='false';
				}
		}
		
		function get_agent_details_by_id($id,$fld="*"){

			

			$this->db->select($fld);

			$this->db->from('tbl_agent_info');

			$this->db->where('id',$id);

			$query=$this->db->get();

			if($query->num_rows() ==''){

				return '';

			}else{

				return $query->result();

			}

		}
		
			public function train($data)
           {
	       $this->db->insert('tbl_train',$data);
		   }
		   public function car($data)
           {
	       $this->db->insert('tbl_car',$data);
		   }
		   public function bus($data)
           {
	       $this->db->insert('tbl_bus',$data);
		   }
	
	public function train_enquiry_delete_function($thisId1)
      {
	       $this->db->where('id',$thisId1);	
	       $this->db->delete('tbl_train');
		      return $data="true";
	  }	
	  
	    public function delete_enquiry_bus($thisId)
           {
		   $this->db->where('id',$thisId);	
	       $this->db->delete('tbl_bus');
		    return $data="true";
		   }	
		   
		   
	  
	function subscripted_email_delete($thisId)
	{
		   $this->db->where('id',$thisId);	
	       $this->db->delete('tbl_sinup');
		   return $data="true";
	}
	
	function add_staff($data)
	{
	  $this->db->insert('tbl_users',$data);
	}
	
	function list_of_staff()
	 
	 {
	        $query=$this->db->get('tbl_users');
			 $result=$query->result();
		      return $result;
	 }
	 
	 function get_count_admin_dashboard()
	 {
 
       $agent_count=$this->db->count_all('tbl_agent_info');
	   $customer_count=$this->db->count_all('registration');
	   $flight_count=$this->db->count_all('tbl_flights_booking');
	   $hotel_count=$this->db->count_all('tbl_hotel_booking');
	   $train_count=$this->db->count_all('tbl_train');
	   $quick_contact_count=$this->db->count_all('tbl_quick_contect');
	   $package_count=$this->db->count_all('tbl_enquiry');
	   $car_count=$this->db->count_all('tbl_car');
	   $bus_count=$this->db->count_all('tbl_bus');
	   return $count=array(agent=>$agent_count,customer=>$customer_count,flight=>$flight_count,hotel=>$hotel_count,train=>$train_count,quick_contact=>$quick_contact_count,package=>$package_count,car=>$car_count,bus=>$bus_count,);
	 }
	 
	 function do_upload() {
	
		//$this->load->helper(array('form', 'url'));

		$config = array(
			'allowed_types' => 'jpg|jpeg|gif|png',
			'upload_path' => $this->gallery_path,
			'max_size' => 20000
		);
		
		$this->load->library('upload', $config);
		$this->upload->do_upload();
	     $image_data = $this->upload->data();
		
		$config = array(
			'source_image' => $image_data['full_path'],
			'new_image' => $this->gallery_path . '/thumbs',
			'maintain_ration' => true,
			'width' => 200,
			'height' => 150
		);

		$this->load->library('image_lib', $config);
		$this->image_lib->resize();
		
		$config1 = array(
			'source_image' => $image_data['full_path'],
			'new_image' => $this->gallery_path . '/medium',
			'maintain_ration' => true,
			'width' => 350,
			'height' => 250
		);
		$this->load->library('image_lib', $config1);
		$this->image_lib->resize();
		$image_data = $this->upload->data();
		return $image_data;
	}

	
	function get_bus_enquiry_id($id,$fld="*"){

    		$this->db->select($fld);

			$this->db->from('tbl_bus');

			$this->db->where('id',$id);

			$query=$this->db->get();

			if($query->num_rows() ==''){

				return '';

			}else{

				return $query->result();

			}

		}
	 
	
	 
}
