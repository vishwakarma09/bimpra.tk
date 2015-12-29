<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller{
	 public function __construct(){
        parent::__construct();
				$this->load->helper('cookie');
				$this->load->model('Common_Model');
				$this->load->model('Users_Model');
				$this->load->model('bimpra_model','bimpra');
	 }
	 
	public function index(){
		$content['cart'] = $this->session->userdata('cart');
		$content['pageTitle'] = "Checkout";
		
		if(!empty($content['cart'])){
			$content['subview']="checkout";
		}else{
			$content['subview']="bimpra_support_help";
			$content['error_message'] = 'There is no tour selected for checkout.';
		}
		$this->load->view('front/_main_layout', $content);
		
	}

	function controller($id = null){
		if(isset($_POST['cservice'])) $cservice = $this->input->post('cservice');
		else $cservice = '';
		switch($cservice){
			case "submitLogin":
				if($uid = $this->Users_Model->login()){
					echo $this->BuildPaymentForm($uid);	
				}else{
					echo 'ERROR: Invalid login';
				}
				break;
			case "SocialLogin":
				if($uid = $this->Users_Model->SocialLoginOrRegister()){
					echo $this->BuildPaymentForm($uid);
				}else{
					echo 'ERROR: Invalid login';
				}
				break;
			default:
				echo "inside default case";
		}
	}
	
	public function BuildPaymentForm($uid){
		$cart = $this->session->userdata('cart');
		// $this->session->sess_destroy('cart');
		
		$orderAmount =	$cart['amount'];
		
		/*$cart = array(
					'service'		=>		'Tour',
					'id'				=>		$tourID,
					'data'			=>		$data,
					'amount'		=>		$room_subtotal,
					'n_ac'			=>		$n_ac,
					'n_cwb'			=>		$n_cwb,
					'n_cnb'			=>		$n_cnb,
					'n_ic'			=>		$n_ic
				);*/
		$insertData = array(
			'cid'				=>	$uid,
			'tid'				=>	$cart['id'],
			'amount'		=>	$cart['amount'],
			'from_date'	=>	$cart['from_date'],
			'n_ac'			=>	$cart['n_ac'],
			'n_cwb'			=>	$cart['n_cwb'],
			'n_cnb'			=>	$cart['n_cnb'],
			'n_ic'			=>	$cart['n_ic'],
			'is_paid'		=>	false
		);
		
		$this->Common_Model->insert_data('booking_tours',$insertData);
		 
		//get booking ID
		$this->db->select_max('bid');
		$query = $this->db->get('booking_tours');
		$row  = $query->result();
		$bid = $row[0]->bid;
	/*	
		$tmp = $this->Common_Model->get_data('booking_tours','*','bid',$bid);
		print_r($tmp[0]);
		die();
*/
		//extract data
		$Oresult = $this->Common_Model->get_data('users','*','uid', $uid);
		$firstName = $Oresult[0]->first_name;
		$lastName = $Oresult[0]->last_name;
		$email = $Oresult[0]->email;
		
	//	 set_include_path('../lib'.PATH_SEPARATOR.get_include_path());
		 //Need to replace the last part of URL("your-vanityUrlPart") with your Testing/Live URL
		 $formPostUrl = "https://www.citruspay.com/wf7qn5hutq";
		 
		 //Need to change with your Secret Key
		 $secret_key = "11d61d89addcbf4e9c6bece5625813a61d974af1";	
		 
		 //Need to change with your Vanity URL Key from the citrus panel
		 $vanityUrl = "wf7qn5hutq";

		 //Should be unique for every transaction
		 $merchantTxnId = uniqid(); 

		 //Need to change with your Order Amount
		// $orderAmount = "1.00";
		 $currency = "INR";
		 $data = $vanityUrl.$orderAmount.$merchantTxnId.$currency;
		 $securitySignature = hash_hmac('sha1', $data, $secret_key);
		 
		 //return URL
		 $returnUrl =	'http://bimpra.tk/checkout/success';
	
		$form	 =	'<form align="center" id="paymentForm" method="post" action="'.$formPostUrl.'">';
    $form .=	'<input type="hidden" id="merchantTxnId" name="merchantTxnId" value="'.$merchantTxnId.'" />';
    $form .=	'<input type="hidden" id="orderAmount" name="orderAmount" value="'.$orderAmount.'" />';
    $form .=	'<input type="hidden" id="currency" name="currency" value="'.$currency.'" />';
    $form .=	'<input type="hidden" name="returnUrl" value="'.$returnUrl.'" />';
    $form .=	'<input type="hidden" id="secSignature" name="secSignature" value="'.$securitySignature.'" />';
		$form .=	'<input type="hidden" id="firstName" name="firstName" value="'.$firstName.'" />';
    $form .=	'<input type="hidden" id="lastName" name="lastName" value="'.$lastName.'" />';
    $form .=	'<input type="hidden" id="email" name="email" value="'.$email.'" />';
    $form .=	'<input type="hidden" id="service" name="service" value="Tour" />';
    $form .=	'<input type="hidden" id="id" name="id" value="'.$bid.'" />';
		$form .=	'<input type="Submit" value="Pay Now"/>';
		$form .= 	'</form>';
		
		$this->input->set_cookie('id', $bid, 3600);
		$this->input->set_cookie('service', 'Tour', 3600);
		
		return $form;
	}
	
	public function success(){
		//Need to change with your Secret Key
		// $secret_key = "11d61d89addcbf4e9c6bece5625813a61d974af1";	
	
		$RequestMethod = $this->input->server('REQUEST_METHOD');
	//	print_r($_POST);
		if($RequestMethod == "POST"){
			$TxId = $this->input->post('TxId');	
			$TxStatus = $this->input->post('TxStatus');	
			$amount = $this->input->post('amount');	
			$pgTxnNo = $this->input->post('pgTxnNo');	
			$issuerRefNo = $this->input->post('issuerRefNo');	
			$authIdCode = $this->input->post('authIdCode');	
			$firstName = $this->input->post('firstName');	
			$lastName = $this->input->post('lastName');	
			$pgRespCode = $this->input->post('pgRespCode');	
			$addressZip = $this->input->post('addressZip');	
			$signature = $this->input->post('signature');
			$service = $this->input->post('service');
			$id = $this->input->post('id');
			
			/*
			$data = $TxId.$TxStatus.$amount.$pgTxnNo.$issuerRefNo.$authIdCode.$firstName.$lastName.$pgRespCode.$addressZip.$signature.$service.$id;
			
			$respSignature = hash_hmac('sha1', $data, $secret_key);
			if($signature != "" && strcmp($signature, $respSignature) != 0) {
				$flag = "false";
				echo $flag. 'is false';
			}
			*/
			
			$service = $this->input->cookie('service', TRUE);
			$id = $this->input->cookie('id', TRUE);
			
			$insertData = array(
				'TxId'		=>	$TxId,
				'TxStatus'	=>	$TxStatus,
				'amount'	=>	$amount,
				'pgTxnNo'	=>	$pgTxnNo,
				'issuerRefNo'	=>	$issuerRefNo,
				'authIdCode'	=>	$authIdCode,
				'firstName'		=>	$firstName,
				'lastName'		=>	$lastName,
				'pgRespCode'	=>	$pgRespCode,
				'addressZip'	=>	$addressZip,
				'service'			=>	$service,
				'id'					=>	$id
			);
			
			$this->Common_Model->insert_data('citrus_tx', $insertData);
			
			if($TxStatus == 'SUCCESS')	$is_paid = 1;
			else $is_paid = 0;
			
			//update booking_tours table of status
			$updateData = array(
				'is_paid'		=>	$is_paid,
				'txnid'			=>	$TxId
			);
			
			$this->Common_Model->update_data('booking_tours',$updateData, 'bid', $id);
			$Oresult = $this->Common_Model->get_data('booking_tours','*', 'bid', $id);
			$Presult = $this->Common_Model->get_data('tours','*', 'id', $Oresult[0]->tid);
			
			$content['subview'] = 'tour_receipt';
			$content['booking_tour'] = $Oresult[0];
			$content['tours'] = $Presult[0];
			
			$this->load->view('front/_main_layout', $content);
		}
	}
}
