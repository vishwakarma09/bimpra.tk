<?php
class Users extends Admin_Controller {

    public function __construct(){
        parent::__construct();
		   $this->load->model('Users_Model');	
		   $this->load->model('Common_Model');	
		
	 }

    function index($msg = NULL) {

	$Oresult = $this->Common_Model->get_data('owners');	
	$content['Owner_list'] = $Oresult;
	$content['subview']="owner_lists";
    $this->load->view('admin/_main_layout', $content);
    
	}
    
	function add_user(){
		 
	$RequestMethod = $this->input->server('REQUEST_METHOD');
	if($RequestMethod == "POST"){
	$oName = $this->input->post('name');	
	$compareAr = 	array(//making selection
            'o_Name' => $oName
        );
	$Exist =  $this->Common_Model->exist_data('owners',$compareAr);
	
	if($Exist === 0){
			$data1=array(
			'o_Name'=>$this->input->post('name'),				 
			);
			
			$this->Common_Model->insert_data('owners',$data1);
			$this->session->set_flashdata('tr_msg' ,"Owner Added Successfully");

		} else {
			
			$this->session->set_flashdata('er_msg' ,"Owner already Exists");
		
		}
	
	redirect('/administrator/owner/'); 
	}
	$content['subview']="add_owner";
    $this->load->view('admin/_main_layout', $content);
	 
	
	}
	
	
	function edit_owner($oid =  NULL){
		 
	$RequestMethod = $this->input->server('REQUEST_METHOD');
	if($RequestMethod == "POST"){
	
	
	$compareAr = 	array(//making selection
          'o_Name'=>$this->input->post('name')
        );
	$Exist =  $this->Common_Model->exist_data('owners',$compareAr);
	
	if($Exist === 0){
	
	 $data1=array(
			 'o_Name'=>$this->input->post('name'),				 
			 );
			 
	  $this->Common_Model->update_data('owners',$data1, 'o_Id', $oid);
	  $this->session->set_flashdata('tr_msg' ,"Owner Updated Successfully");
	} else {
			
			$this->session->set_flashdata('er_msg' ,"Owner already Exists");
		
		}
	redirect('/administrator/owner/'); 
	}
	
	$Oresult = $this->Common_Model->get_data('owners','o_Name','o_Id',$oid);	
	$content['o_Name'] = $Oresult[0]->o_Name;
	$content['subview']="edit_owner";
    $this->load->view('admin/_main_layout', $content);
	
	}
	
	
	function delete_owner($oid =  NULL){

	 $this->Common_Model->delete_row('owners','o_Id', $oid); 
	 $this->session->set_flashdata('tr_msg' ,"Data Deleted Successfully");
	 redirect('/administrator/owner/'); 
	
	}
	

}