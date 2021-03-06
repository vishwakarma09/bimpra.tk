<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

class Tours extends CI_Controller {
	 public function __construct(){
        parent::__construct();
				$this->load->model('Common_Model');
				$this->load->model('bimpra_model','bimpra');	
		
	 }
	 
	public function index()
	{
		$content['pageTitle'] = "Tours";
		$content['subview']="tours";
		$this->load->view('front/_main_layout', $content);
	}
	
	public function domestic($state = null, $titleUrl = null){
			if(!isset($titleUrl)){
				$result = $this->bimpra->GetStatePost($state);
				$content['id'] = $result[0]->state_id;
				$content['title'] = $result[0]->display_name;
				$content['pageTitle'] = $result[0]->display_name;
				$content['content'] = $result[0]->content;
				$content['subview'] = "state";
				$this->load->view('front/_main_layout', $content);
			}else{			
				$result = $this->bimpra->GetDomesticPost($state, $titleUrl);
				if(!count($result)){
					$content['pageTitle'] = "Page Not Found";
					$content['subview'] = "404";
				}else{
					$content['id'] = $result[0]->id;
					$content['title'] = $result[0]->title;
					$content['pageTitle'] = $result[0]->title;
					$content['content'] = $result[0]->content;
					$content['slug'] = $result[0]->slug;
					$content['has_delux'] = $result[0]->has_delux;
					$content['subview'] = "tinymce_view";
				}
				$this->load->view('front/_main_layout', $content);
			}
	}
	
	public function international($state = null, $titleUrl = null){
			if(!isset($titleUrl)){
				$result = $this->bimpra->GetStatePost($state);
				$content['id'] = $result[0]->state_id;
				$content['title'] = $result[0]->display_name;
				$content['pageTitle'] = $result[0]->display_name;
				$content['content'] = $result[0]->content;
				$content['subview'] = "state";
				$this->load->view('front/_main_layout', $content);
			}else{
				$result = $this->bimpra->GetInternationalPost($state, $titleUrl);
				if(!count($result)){
					$content['pageTitle'] = "Page Not Found";
					$content['subview'] = "404";
				}else{
					$content['id'] = $result[0]->id;
					$content['title'] = $result[0]->title;
					$content['pageTitle'] = $result[0]->title;
					$content['content'] = $result[0]->content;
					$content['slug'] = $result[0]->slug;
					$content['has_delux'] = $result[0]->has_delux;
					$content['subview'] = "tinymce_view";
				}
				$this->load->view('front/_main_layout', $content);
			}
	}
	
	public function test($state, $title){
		 $result = $this->bimpra->GetDomesticPost($state, $title);
		 print_r($result);
	}
	
	public function controller($id = null){	
		if(isset($_POST['cservice'])) $cservice = $_POST['cservice'];
		else $cservice = '';
		
		switch($cservice){
			case "GetPriceDetail":
				if(isset($_POST['type'])) $type = $_POST['type'];
				else die(json_encode(array("data"=>"ERROR: No type sent with request.")));
				
				if(isset($_POST['id'])) $id = $_POST['id'];
				else die(json_encode(array("data"=>"ERROR: No tour id sent with request.")));
				
				$Oresult = $this->Common_Model->get_data('tours','*','id',$id);
				echo json_encode(array("data"=>$Oresult[0]));
				
				break;
			default:
				echo json_encode(array("data"=>"ERROR: In default case"));
		}
	}
	
	public function checkout($tourid = null){
		$RequestMethod = $this->input->server('REQUEST_METHOD');
		if($RequestMethod == "POST"){
			$tourID = $this->input->post('tourID');
			$from_date = $this->input->post('from_date');
			$tourType = $this->input->post('tourTypeString');			
			$room_count = $this->input->post('room_count');
			$TotalPackageAmount = $this->input->post('TotalPackageAmount');
			$BookingAmount = $this->input->post('BookingAmount');
			$BalanceAmount = $this->input->post('BalanceAmount');
			
			$Oresult = $this->Common_Model->get_data('tours', '*', 'id', $tourID);
			$data = $Oresult[0];
			
			$room_subtotal = 0.00;
			$fake_trans = false;
			
			for($i=1; $i <= $room_count; $i++){
				$room_type	=	$this->input->post('room_'.$i.'_rt');
				$n_ac 			=	$this->input->post('room_'.$i.'_ac');	
				$n_cwb 			=	$this->input->post('room_'.$i.'_cwb');	
				$n_cnb 			=	$this->input->post('room_'.$i.'_cnb');	
				$n_ic 			=	$this->input->post('room_'.$i.'_ic');
				
				if($tourType == 'Regular'){
					if($room_type == 'Single'){
						$r_adult = $data->regular_adult_single;
						$r_cwb = $data->regular_cwb_single;
						$r_cnb = $data->regular_cnb_single;
						$r_inf = $data->regular_inf_single;
					}else if($room_type == 'Double'){
						$r_adult = $data->regular_adult_double;
						$r_cwb = $data->regular_cwb_double;
						$r_cnb = $data->regular_cnb_double;
						$r_inf = $data->regular_inf_double;
					}else if($room_type == 'Triple'){
						$r_adult = $data->regular_adult_triple;
						$r_cwb = $data->regular_cwb_triple;
						$r_cnb = $data->regular_cnb_triple;
						$r_inf = $data->regular_inf_triple;
					}else{
						$fake_trans = true;
					}
				}else if(tourType == 'Delux'){
					if($room_type == 'Single'){
						$r_adult = $data->delux_adult_single;
						$r_cwb = $data->delux_cwb_single;
						$r_cnb = $data->delux_cnb_single;
						$r_inf = $data->delux_inf_single;
					}else if($room_type == 'Double'){
						$r_adult = $data->delux_adult_double;
						$r_cwb = $data->delux_cwb_double;
						$r_cnb = $data->delux_cnb_double;
						$r_inf = $data->delux_inf_double;
					}else if($room_type == 'Triple'){
						$r_adult = $data->delux_adult_triple;
						$r_cwb = $data->delux_cwb_triple;
						$r_cnb = $data->delux_cnb_triple;
						$r_inf = $data->delux_inf_triple;
					}else{
						$fake_trans = true;
					}
				}else{
					$fake_trans = true;
				}
				
				$room_subtotal += $n_ac * $r_adult + $n_cwb * $r_cwb + $n_cnb * $r_cnb + $n_ic * $r_inf;
			}
			
			if($fake_trans || $TotalPackageAmount != $room_subtotal ){
				$content['isLoggedIn'] = 'false';
				$content['data'] = $data;
				$content['error_message'] = "There was a trouble processing your tour. </br> Amount $room_subtotal INR for $n_ac adults, $n_cwb child with bed, $n_cnb child no bed and $n_ic infants";
				$content['subview'] = "bimpra_support_help";
				$this->load->view('front/_main_layout', $content);
			}else{
				$summary = "Amount $room_subtotal for $n_ac adults, $n_cwb child with bed, $n_cnb child no bed and $n_ic infants";
				$this->session->set_flashdata('summary', $summary);
				$cart = array(
					'service'		=>		'Tour',
					'id'				=>		$tourID,
					'data'			=>		$data,
					'from_date'	=>		$from_date,
					'amount'		=>		$room_subtotal,
					'n_ac'			=>		$n_ac,
					'n_cwb'			=>		$n_cwb,
					'n_cnb'			=>		$n_cnb,
					'n_ic'			=>		$n_ic
				);
				$this->session->set_userdata('cart', $cart);
				redirect(site_url('checkout/'), 'refresh');
			}
		}
	}
	
}
