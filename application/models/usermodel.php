<?php
class Usermodel extends CI_Model{


    public function articlesdata($limit,$offset){


      $query= $this->db->query("select * from articles limit $offset , $limit");
      return $query->result();
      
  // echo  $this->db->last_query();
   //  die();
/*
    $data=[12,12,13,234];
    return $data;
}*/

}
public function totalrows(){


  // $data=array();
	// $data=[12,12,13,234,12,12,13,234,12,12,13,234,12,12,13,234];
   
  // $ttlrow = sizeof($data);
  // return $ttlrow;
	$query=$this->db->query("select * from articles");
	return $query->num_rows();
}
}