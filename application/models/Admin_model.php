<?php 
class Admin_model extends MY_Model {
	
    function __construct()
    {
        parent::__construct();
		$this->gallery_path = realpath(APPPATH . '../uploadsimage');
		$this->gallery_path_url = base_url().'uploadsimage/';
    }
    
	public function coupons_full_details() 
	{
	    $this->db->order_by("id","desc");
        $query = $this->db->get("tbl_coupons");
        if ($query->num_rows() > 0)
		   {
              foreach ($query->result() as $row) 
				 {
                    $data[] = $row;
                 }
              return $data;
           }
		else
		   {  
             return false;
		   }
   }
   
   public function update_coupons($id,$data)
   {
	    $this->db->where("id",$id);
		return $this->db->update("tbl_coupons",$data);
   }
   
   public function delete_coupon($id)
   {
	     $this->db->where("id",$id);
		 return $this->db->delete("tbl_coupons");
   }
   
   public function coupons_generate($data)
   {
	     return  $this->db->insert('tbl_coupons',$data);	 
   }
	
	
	 
}
