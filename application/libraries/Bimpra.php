<?php
class bimpra{
	private $CI;
	
	public function __construct(){
		$this->CI =& get_instance();
    $this->CI->load->database();
		$this->CI->load->model('Users_Model');
		$this->CI->load->model('Common_Model'); 
	}
	
	public function GetDomesticStates(){
		$result = $this->Common_Model->get_data('states','*','type','Domestic');
		return $result;
	}
	
	public function GetInternationalStates(){
		$result = $this->Common_Model->get_data('states','*','type','International');
		return $result;
	}
	
	public function GetDomesticMenu($state_id){
		$where = array('type'=>'Domestic', 'state_id'=>$state_id);
		$result = $this->Common_Model->get_data_multiple_where('tours','*',$where);
		return $result;
	}
	
	public function GetInternationalMenu($state_id){
		$where = array('type'=>'International', 'state_id'=>$state_id);
		$result = $this->Common_Model->get_data_multiple_where('tours','*',$where);
		return $result;
	}
	
	public function GetDomesticPost($state, $title){
		$where = array('type'=>'Domestic', 'title'=>$title);
		$result = $this->Common_Model->get_data_multiple_where('tours','*',$where);
		return $result;
	}
	
	public function GetInternationalPost($state, $title){
		$where = array('type'=>'International', 'title'=>$title);
		$result = $this->Common_Model->get_data_multiple_where('tours','*',$where);
		return $result;
	}
	
	public function GetFeaturedTours(){
		$result = $this->Common_Model->get_data('tours','*','isfeatured',1);
		return $result;
	}
	
	public function GetStateList($region){
		$result = $this->Common_Model->get_data('states','*','type',$region);
		return $result;
	}
	
	public function validateStateCreation($postvars){
		if(!isset($postvars['region']) || !isset($postvars['display_name'])){
			return false;
		}
		return true;
	}
	
	public function saveStateCreation($postvars){
		
		$stringURL = str_replace(' ', '-', $postvars['display_name']); // Converts spaces to dashes
		$stringURL = urlencode($stringURL);
		
		$params = array(NULL,$postvars['region'], $postvars['display_name'], $stringURL);
	//	$query = "INSERT INTO tours(id, region, thumb, title, slug, content, isfeatured) VALUES (NULL, '".$postvars['region']."', '".$postvars['thumb']."', '".$postvars['title']."', '".$postvars['slug']."', '".$postvars['content']."', ".$isfeatured.");";
		$query = "INSERT INTO states(state_id, type, display_name, url_name) VALUES (NULL, '".$postvars['region']."', '".$postvars['display_name']."', '".$stringURL."');";
		echo $query;
		$result = ExecuteQuery($query);
		return $result;
	}
}