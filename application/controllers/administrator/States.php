<?php
class States extends Admin_Controller {

    public function __construct(){
        parent::__construct();
		   $this->load->model('Users_Model');	
		   $this->load->model('Common_Model');
	 }

	function index($msg = NULL) {
		$OwResult = $this->Common_Model->get_data('states');
		$content['State_list'] = $OwResult;
		$content['subview']="list_states";
		$this->load->view('admin/_main_layout', $content); 
	}
	
	public function list_states($vslId = NULL){
		$OwResult = $this->Common_Model->get_data('states');
		$content['State_list'] = $OwResult;
		$content['subview']="list_states";
		$this->load->view('admin/_main_layout', $content); 
	}
    
	function add_state($id = NULL){
	$RequestMethod = $this->input->server('REQUEST_METHOD');
	if($RequestMethod == "POST"){
	
	$compareAr = 	array(//making selection
            'display_name' => $this->input->post('display_name')
        );
	$Exist =  $this->Common_Model->exist_data('states',$compareAr);
	
	if($Exist === 0){
	$ispublished = $this->input->post('ispublished');
	if($ispublished == 'on') $ispublished =1;
	else $ispublished = 0;
	
	$display_name = $this->input->post('display_name');
	$url_name = strtolower(url_title($display_name));
	
	 $data1=array(
				'type'=>$this->input->post('type'),
				'display_name'=>$display_name,
				'slug'=>$this->input->post('slug'),
				'url_name'=>$url_name,
				'content'=>$this->input->post('content'),
				'ispublished'=>$ispublished
			 );
			 
	  $this->Common_Model->insert_data('states',$data1);
	  $this->session->set_flashdata('tr_msg' ,"State Added Successfully");	
	}else{
		$this->session->set_flashdata('er_msg' ,"State already Exists");	
	}
	  redirect('/administrator/states/list_states'); 	
	  	
	}
	$content['subview']="add_state";
	$this->load->view('admin/_main_layout', $content);
 }
		 

	public function edit_state($id = NULL){
	$RequestMethod = $this->input->server('REQUEST_METHOD');
	if($RequestMethod == "POST"){
	
	$ispublished = $this->input->post('ispublished');
	if($ispublished == 'on') $ispublished =1;
	else $ispublished = 0;
	
	$display_name = $this->input->post('display_name');
	$url_name = strtolower(url_title($display_name));
	
	 $data1=array(
				'type'=>$this->input->post('type'),
				'display_name'=>$display_name,
				'slug'=>$this->input->post('slug'),
				'url_name'=>$url_name,
				'content'=>$this->input->post('content'),
				'ispublished'=>$ispublished
			 );
			 
	  $this->Common_Model->update_data('states',$data1, 'state_id', $id);
	  $this->session->set_flashdata('tr_msg' ,"State Updated Successfully");	
	
	  redirect('/administrator/states/list_states'); 	
	  	
	}
	
	$OwResult = $this->Common_Model->get_data('states','*','state_id', $id);
	$content['data'] = $OwResult[0];
		
	$content['subview']="edit_state";
	$this->load->view('admin/_main_layout', $content);
	}		

	public function delete_state($id = NULL){
		$this->Common_Model->delete_row('states','state_id', $id); 
		$this->session->set_flashdata('tr_msg' ,"State Deleted Successfully");
		redirect('/administrator/states/list_states/');
	}
	
}