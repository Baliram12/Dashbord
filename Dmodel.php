<?php
class Dmodel extends CI_Model
{

    public function demo($department,$description)
	  {
	   $query="INSERT INTO `dpttable`( `department`, `description`) 
		VALUES ('$department','$description')";
		$this->db->query($query);
		print_r($query);
	
	
	}
       
  
}
	
?>