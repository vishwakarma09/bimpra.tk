<?php
class Tours extends Admin_Controller {

    public function __construct(){
        parent::__construct();
		   $this->load->model('Users_Model');	
		   $this->load->model('Common_Model');
	 }

	function index($msg = NULL) {
		$OwResult = $this->Common_Model->get_data('tours');
		$content['Tour_list'] = $OwResult;
		$content['subview']="list_tours";
		$this->load->view('admin/_main_layout', $content); 
	}
	
	public function list_tours($vslId = NULL){
		$OwResult = $this->Common_Model->get_data('tours');
		$content['Tour_list'] = $OwResult;
		$content['subview']="list_tours";
		$this->load->view('admin/_main_layout', $content); 
	}
    
	function add_tour($id = NULL){
	$RequestMethod = $this->input->server('REQUEST_METHOD');
	if($RequestMethod == "POST"){
	//$this->load->library('bimpra');
	$isfeatured = $this->input->post('isfeatured');
	if($isfeatured == 'Yes') $isfeatured =1;
	else $isfeatured = 0;
	
	$ispublished = $this->input->post('ispublished');
	if($ispublished == 'Yes') $ispublished =1;
	else $ispublished = 0;
	
	$hasDelux = $this->input->post('HasDelux');
	if($hasDelux == 'Yes') $hasDelux =1;
	else $hasDelux = 0;
	
	$title = $this->input->post('title');
	$titleUrl = strtolower(url_title($title));
	
	if(isset($_FILES['userfile'])){
		$thumb = $this->Common_Model->do_upload_thumbnail();
		if($thumb['resultcode'] == 'failure'){ 
			$this->session->set_flashdata('er_msg' ,"Failure uploading image ". $thumb['result']);
			redirect('/administrator/tours/list_tours');
		}
	}else{
		$thumb['file_name'] = '';
	}
	 $data1=array(
				'title'=>$this->input->post('title'),
				'titleUrl'=>$titleUrl,
				'slug'=>$this->input->post('slug'),	
				'thumb'=>$thumb['file_name'],
				'isfeatured'=>$isfeatured,
				'ispublished'=>$ispublished,
				'date_unpublish'=>$this->input->post('date_unpublish'),
				'region'=>$this->input->post('region'),
				'state_id'=>$this->input->post('statePlaceholder'),
				'content'=>$this->input->post('content'),
				'has_delux'=>$hasDelux,
				'regular_adult_single'=>$this->input->post('regular_adult_single'),
				'regular_cnb_single'=>$this->input->post('regular_cnb_single'),
				'regular_cwb_single'=>$this->input->post('regular_cwb_single'),
				'regular_inf_single'=>$this->input->post('regular_inf_single'),
				'regular_adult_double'=>$this->input->post('regular_adult_double'),
				'regular_cnb_double'=>$this->input->post('regular_cnb_double'),
				'regular_cwb_double'=>$this->input->post('regular_cwb_double'),
				'regular_inf_double'=>$this->input->post('regular_inf_double'),
				'regular_adult_triple'=>$this->input->post('regular_adult_triple'),
				'regular_cnb_triple'=>$this->input->post('regular_cnb_triple'),
				'regular_cwb_triple'=>$this->input->post('regular_cwb_triple'),
				'regular_inf_triple'=>$this->input->post('regular_inf_triple'),
				'delux_adult_single'=>$this->input->post('delux_adult_single'),
				'delux_cnb_single'=>$this->input->post('delux_cnb_single'),
				'delux_cwb_single'=>$this->input->post('delux_cwb_single'),
				'delux_inf_single'=>$this->input->post('delux_inf_single'),
				'delux_adult_double'=>$this->input->post('delux_adult_double'),
				'delux_cnb_double'=>$this->input->post('delux_cnb_double'),
				'delux_cwb_double'=>$this->input->post('delux_cwb_double'),
				'delux_inf_double'=>$this->input->post('delux_inf_double'),
				'delux_adult_triple'=>$this->input->post('delux_adult_triple'),
				'delux_cnb_triple'=>$this->input->post('delux_cnb_triple'),
				'delux_cwb_triple'=>$this->input->post('delux_cwb_triple'),
				'delux_inf_triple'=>$this->input->post('delux_inf_triple')
			 );
			 
	  $this->Common_Model->insert_data('tours',$data1);
	  $this->session->set_flashdata('tr_msg' ,"Tour Added Successfully");	
	
	  redirect('/administrator/tours/list_tours'); 	
	  	
	} 
	$content['subview']="add_tour";
	$this->load->view('admin/_main_layout', $content);
 }
		 

	public function edit_tour($id = NULL){
	
	$RequestMethod = $this->input->server('REQUEST_METHOD');
	if($RequestMethod == "POST"){
	
	$isfeatured = $this->input->post('isfeatured');
	if($isfeatured == 'on') $isfeatured =1;
	else $isfeatured = 0;
	
	$ispublished = $this->input->post('ispublished');
	if($ispublished == 'on') $ispublished =1;
	else $ispublished = 0;
	
	$hasDelux = $this->input->post('HasDelux');
	if($hasDelux == 'on') $hasDelux =1;
	else $hasDelux = 0;
	
	$title = $this->input->post('title');
	$titleUrl = strtolower(url_title($title));
	
	if(isset($_POST['thumb'])){
		$thumb = $this->Common_Model->do_upload_thumbnail();
		if($thumb['resultcode'] == 'failure'){
			$this->session->set_flashdata('er_msg' ,"Failure uploading image ". $thumb['result']);
			redirect('/administrator/tours/list_tours');
		}
	}else{
		$thumb['file_name'] = '';
	}
	
	 $data1=array(
				'title'=>$this->input->post('title'),
				'titleUrl'=>$titleUrl,
				'slug'=>$this->input->post('slug'),	
				'thumb'=>$thumb['file_name'],
				'isfeatured'=>$isfeatured,
				'ispublished'=>$ispublished,
				'date_unpublish'=>$this->input->post('date_unpublish'),
				'region'=>$this->input->post('region'),
				'state_id'=>$this->input->post('statePlaceholder'),
				'content'=>$this->input->post('content'),
				'has_delux'=>$hasDelux,
				'regular_adult_single'=>$this->input->post('regular_adult_single'),
				'regular_cnb_single'=>$this->input->post('regular_cnb_single'),
				'regular_cwb_single'=>$this->input->post('regular_cwb_single'),
				'regular_inf_single'=>$this->input->post('regular_inf_single'),
				'regular_adult_double'=>$this->input->post('regular_adult_double'),
				'regular_cnb_double'=>$this->input->post('regular_cnb_double'),
				'regular_cwb_double'=>$this->input->post('regular_cwb_double'),
				'regular_inf_double'=>$this->input->post('regular_inf_double'),
				'regular_adult_triple'=>$this->input->post('regular_adult_triple'),
				'regular_cnb_triple'=>$this->input->post('regular_cnb_triple'),
				'regular_cwb_triple'=>$this->input->post('regular_cwb_triple'),
				'regular_inf_triple'=>$this->input->post('regular_inf_triple'),
				'delux_adult_single'=>$this->input->post('delux_adult_single'),
				'delux_cnb_single'=>$this->input->post('delux_cnb_single'),
				'delux_cwb_single'=>$this->input->post('delux_cwb_single'),
				'delux_inf_single'=>$this->input->post('delux_inf_single'),
				'delux_adult_double'=>$this->input->post('delux_adult_double'),
				'delux_cnb_double'=>$this->input->post('delux_cnb_double'),
				'delux_cwb_double'=>$this->input->post('delux_cwb_double'),
				'delux_inf_double'=>$this->input->post('delux_inf_double'),
				'delux_adult_triple'=>$this->input->post('delux_adult_triple'),
				'delux_cnb_triple'=>$this->input->post('delux_cnb_triple'),
				'delux_cwb_triple'=>$this->input->post('delux_cwb_triple'),
				'delux_inf_triple'=>$this->input->post('delux_inf_triple')
			 );
			 
	  $this->Common_Model->update_data('tours',$data1, 'id', $id);
	  $this->session->set_flashdata('tr_msg' ,"Tour Updated Successfully");	
	
	  redirect('/administrator/tours/list_tours'); 	
	  	
	}
	
	$OwResult = $this->Common_Model->get_data('tours', '*', 'id',$id);
	$content['data'] = $OwResult[0];
	
	$OwResult = $this->Common_Model->get_data('states', '*', 'type',$OwResult[0]->region);
	$content['State_list'] = $OwResult;
	
	$content['subview']="edit_tour";
	$this->load->view('admin/_main_layout', $content);	
	}		

	public function delete_tour($id = NULL){
		$this->Common_Model->delete_row('tours','id', $id); 
		$this->session->set_flashdata('tr_msg' ,"Tour Deleted Successfully");
		redirect('/administrator/tours/list_tours/');
	}
}