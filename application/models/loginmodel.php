<?php
class Loginmodel extends CI_Model
{

	public function valid_login($username,$password)
	{
      //return TRUE;
		//$this->load->database();// we loaded it auto
		//$q=$this->db->query('select * from users where username = $username and password = $password');
		//if
		$q = $this->db->where(['uname'=> $username , 'upassword'=>$password])
		              ->get('users');

          if($q->num_rows()==1)
          {
          	//return TRUE;
          //	$q->result
          	//return $q->row()->id; //id is colomn name;

               $data=$q->row();
              // if($data->role=='role'){
               return $data;
                                   
          }
          else
          {
          	return false;
          }

	}
}
?>