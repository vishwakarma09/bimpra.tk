<?php 
class Bimpra_Model extends MY_Model {
	
    function __construct()
    {
			parent::__construct();
			$this->load->model('Common_Model');
    }
    
		public function login($email, $password){
		$compareAr = 	array(
		'email'=>$email,
		'password' => md5($password)
		);	
		$Exist =  $this->Common_Model->exist_data('users',$compareAr);
		if($Exist) return true;
		return false;
	}
	
	public function sessionCheck(){
		if(isset($_SESSION['authUser'])) return true;
		else return false;
	}
	
	public function validatePostCreation($postvars){
		if(!isset($postvars['title']) || !isset($postvars['slug']) || !isset($postvars['thumb']) || !isset($postvars['isfeatured']) || !isset($postvars['region']) || !isset($postvars['content'])){
			return false;
		}
		return true;
	}
	
	public function savePostCreation($postvars){
		if($postvars['isfeatured']=='on') $isfeatured	=1;
		else $isfeatured = 0;
		
		$stringURL = str_replace(' ', '-', $postvars['title']); // Converts spaces to dashes
		$stringURL = urlencode($stringURL);
		
		$params = array(NULL, $postvars['region'], $postvars['thumb'], $postvars['title'], $stringURL, $postvars['slug'], $postvars['content'], $isfeatured);
	//	$query = "INSERT INTO tours(id, region, thumb, title, slug, content, isfeatured) VALUES (NULL, '".$postvars['region']."', '".$postvars['thumb']."', '".$postvars['title']."', '".$postvars['slug']."', '".$postvars['content']."', ".$isfeatured.");";
		$query = "INSERT INTO tours(id, region, thumb, title, titleUrl, slug, content, isfeatured) VALUES (?, ?, ?, ?, ?, ?, ?, ?);";
		$result = ExecuteQuery($query, $params);
		return $result[0];
	}
	
	public function GetDomesticStates(){
		$result = $this->Common_Model->get_data('states','*','type',"Domestic");
		return $result;
	}
	
	public function GetInternationalStates(){
		$result = $this->Common_Model->get_data('states','*','type','International');
		return $result;
	}
	
	public function GetDomesticMenu($state_id){
		$where = array('region'=>'Domestic', 'state_id'=>$state_id);
		$result = $this->Common_Model->get_data_multiple_where('tours','*',$where);
		return $result;
	}
	
	public function GetInternationalMenu($state_id){
		$where = array('region'=>'International', 'state_id'=>$state_id);
		$result = $this->Common_Model->get_data_multiple_where('tours','*',$where);
		return $result;
	}
	
	public function GetDomesticPost($state, $titleUrl){
		
		//get state ID
		$result = $this->Common_Model->get_data('states','*','url_name',$state);
		$state_id = $result[0]->state_id;
		
		$where = array('region'=>'Domestic', 'state_id'=> $state_id, 'titleUrl'=>$titleUrl,'ispublished'=>1);
		$result = $this->Common_Model->get_data_multiple_where('tours','*',$where);
		return $result;
	}
	
	public function GetInternationalPost($state, $titleUrl){
	
		//get state ID
		$result = $this->Common_Model->get_data('states','*','url_name',$state);
		$state_id = $result[0]->state_id;
		
		$where = array('region'=>'International', 'state_id'=> $state_id, 'titleUrl'=>$titleUrl, 'ispublished'=>1);
		$result = $this->Common_Model->get_data_multiple_where('tours','*',$where);
		return $result;
	}
	
	public function GetFeaturedTours(){
		$resultArray = array();
		$where = array('isfeatured'=>1, 'ispublished'=>1);
		$Oresult = $this->Common_Model->get_data_multiple_where('tours','*',$where);
		foreach($Oresult as $row){
			$Presult = $this->Common_Model->get_data('states','*','state_id', $row->state_id);
			$row->state = $Presult[0]->url_name;
			$resultArray[] = $row;
		}
		return $resultArray;
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
	
	public function GetStatePost($state){
		//get state ID
		$result = $this->Common_Model->get_data('states','*','url_name',$state);
		return $result;
	}	 
}
