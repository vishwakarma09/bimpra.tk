<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {
	 public function __construct(){
        parent::__construct();
				$this->load->model('Users_Model');
				$this->load->model('Common_Model');
				$this->load->model('bimpra_model','bimpra');	
		
	 }
	 
	public function index()
	{
		$RequestMethod = $this->input->server('REQUEST_METHOD');
		if($RequestMethod == "POST"){
			$insertArray = array(
				'id'									=>	'',
				'destination_country'	=>	$this->input->post('destination_country'),
				'duration'						=>	$this->input->post('duration'),
				'travel_date'					=>	$this->input->post('travel_date'),
				'where_in_india'			=>	$this->input->post('where_in_india'),
				'num_persons'					=>	$this->input->post('num_persons'),
				'num_kids'						=>	$this->input->post('num_kids'),
				'budget_range'				=>	$this->input->post('budget_range'),
				'tour_description'		=>	$this->input->post('tour_description'),
				'departure_city'			=>	$this->input->post('departure_city'),
				'departure_country'		=>	$this->input->post('departure_country'),
				'name'								=>	$this->input->post('name'),
				'email'								=>	$this->input->post('email'),
				'phone_code'					=>	$this->input->post('phone_code'),
				'phone_number'				=>	$this->input->post('phone_number')
			);
			$this->Common_Model->insert_data('quotes', $insertArray);
			$this->session->set_flashdata('tr_msg' ,"Quote saved Successfully");
		}
		$content['pageTitle'] = "Home";
		$content['subview']="home_template";
		$this->load->view('front/_main_layout', $content);
	}
	
	public function pages($title = null, $state = null, $titleUrl = null){
		switch(strtolower($title)){
			case "contact-us":
				$content['pageTitle'] = "Contact Us";
				$content['subview']="contact_us";
				break;
			case "contact-us":
			$pageTitle = "Contat Us";
			require_once('includes/contact_us.php');
			break;
		case "customer-support":
				$content['pageTitle'] = "Contact Us";
				$content['subview'] = "customer_support";
			break;
		case "enquiry":
			$content['pageTitle'] = "enquiry";
			$content['subview'] = "enquiry";
			break;
		case "feedback":
			$content['pageTitle'] = "feedback";
			$content['subview'] = "feedback";
			break;
		case "privacy-policy":
			$content['pageTitle'] = "privacy-policy";
			$content['subview'] = ['privacy_policy'];
			break;
		case "terms-and-conditions":
			$content['pageTitle'] = "terms-and-conditions";
			$content['subview'] = "terms_conditions";
			break;
			//Bimpra section
		case "about":
			$content['pageTitle'] = "About Us";
			$content['subview'] = "about";
			break;
		case "awards-gallery":
			$content['pageTitle'] = "Awards Gallery";
			$content['subview'] = "awards_gallery";
			break;
		case "become-agent":
			$content['pageTitle'] = "Under Construction";
			$content['subview'] = "404";
			break;
		case "register-hotel":
			$content['pageTitle'] = "Under Construction";
			$content['subview'] = "404";
			break;
		case "careers":
			$content['pageTitle'] = "Under Construction";
			$content['subview'] = "404";
			break;
		case "corporate-travel":
			$content['pageTitle'] = "corporate-travel";
			$content['subview'] = "corporate_travel";
			break;
		//Misc section
		case "visa-forms":
			$content['pageTitle'] = "Under Construction";
			$content['subview'] = "404";
			break;
		case "visa-documents":
			$content['pageTitle'] = "Under Construction";
			$content['subview'] = "404";
			break;
		case "forex":
			$content['pageTitle'] = "Under Construction";
			$content['subview'] = "404";
			break;
		case "emi-calculator":
			$content['pageTitle'] = "Under Construction";
			$content['subview'] = "404";
			break;
		case "press-release":
			$content['pageTitle'] = "Under Construction";
			$content['subview'] = "404";
			break;
		case "picture-credits":
			$content['pageTitle'] = "Under Construction";
			$content['subview'] = "404";
			break;
			default:
				$content['pageTitle'] = "Page Not Found";
				$content['subview']="404";
		}
		$this->load->view('front/_main_layout', $content);
	}
	
	public function controller($id = null){
	if(isset($_POST['cservice'])) $cservice = $this->input->post('cservice');
	else $cservice = '';
		
		switch($cservice){
			case "LoadState":
				$type = $this->input->post('type');
				$Oresult = $this->Common_Model->get_data('states','*', 'type', $type);
				$res = "<option value=''> Select State </option>";
				foreach($Oresult as $data){
					$state_id = $data->state_id;
					$display_name = $data->display_name;
					$res .= "<option value='".$state_id."'>".$display_name."</option>";
				}
				echo $res;
				break;
			case "signupUser":
				$this->signupUser();
				break;
			case "submitLogin":
				if($uid = $this->Users_Model->login()){
					echo 'SUCCESS: Bimpra Account login successful';
				}else{
					echo 'ERROR: Invalid login';
				}
				break;
			case "SocialLogin":
				if($uid = $this->Users_Model->SocialLoginOrRegister()){
					echo 'SUCCESS: Social login successful';
				}else{
					echo 'ERROR: Invalid login';
				}
				break;
			case "logout":
				$this->session->unset_userdata('loginData');
				echo 'SUCCESS';
				break;
			default:
				echo "inside default case";
		}
}

	public function signupUser(){
		if(empty($this->input->post('request'))){
				echo json_encode(array('status'=>'ERROR', 'data'=>'request packet missing from request'));
				die();
			}
			
			$request = $this->input->post('request');
		//	print_r($request);
			$comparer = array(
				'email'				=>	$request['email']
			);
			if($this->Common_Model->exist_data('users',$comparer)){
				echo json_encode(array('status'=>'ERROR', 'data'=>'There is already a user registered with this email ID'));
				die();
			}
			
			$insertData = array(
				'first_name'	=>	$request['first_name'],
				'last_name'		=>	$request['last_name'],
				'email'				=>	$request['email'],
				'password'		=>	md5($request['password']),
				'type'				=>	3,
				'dcreated'		=>	date('Y-m-d'),
				'lactive'			=>	false,
				'via_social'	=>	false
			);
			
			$this->Common_Model->insert_data('users', $insertData);
			echo json_encode(array('status'=>'SUCCESS', 'data'=>'Successfully registered user'));	
	}

}
