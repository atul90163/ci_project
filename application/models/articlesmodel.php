<?php
class Articlesmodel extends CI_Model
{

	public function articleslist($limit,$offset)
	{
      //return TRUE;
		//$this->load->database();// we loaded it auto
		//$q=$this->db->query('select * from users where username = $username and password = $password');
		//if
    //  echo "ghfghh";

       // $a= array();
       // return $a;
       $user_id=$this->session->userdata('user_id');
       	//passes user id is the name of session key which is created during login
     
      //$this->db
       
                      
            $this->db ->select(['title','id']);
            $this->db ->from('articles');
            $this->db->where('userid',$user_id);
            $this->db->limit($limit,$offset);
            $query= $this->db->get();
      //die;
       // die();
           // echo $this->db->last_query();
      //die();
      
        return $query->result();
     // echo $this->db->last_query();
      //die();
      /*
     echo $offset;
     echo $limit;
      $query= $this->db->query("select * from articles LIMIT $offset , $limit where userid='$user_id'");
      $result=$query->result();
      return $result;
      */
      }
      public function num_rows(){


         $user_id=$this->session->userdata('user_id');
        //passes user id is the name of session key which is created during login
     /*
      $query=$this->db
                       ->select('title')
                       ->from('articles')
                       ->where('userid',$user_id)
                       ->get();
      return $query->result();
      */

      $query= $this->db->query("select * from articles  where userid='$user_id' order by id DESC");
      $result=$query->num_rows();
      return $result;
     
      }

  public function addarticlemodel($t,$b,$u)
  {
    //$this->db->insert()
     return $this->db->query("insert into articles(title,body,userid) values('$t','$b','$u')");
  }
  public function deletearticlesmodel($id){
    return $this->db->query("delete from articles where id ='$id'");
  }

public function editarticlesmodel($id){
  $artidata= $this->db->query("select * from articles where id ='$id' ");
   return $artidata->row(); // row() function return a row data on the base on condition it use when we need to fetch particular one data. if we will select all data from table then we use result() or result_array();
}

public function updatemodel($t,$b,$u){
         return  $this->db->query("update articles set title='$t', body='$b' where id='$u'");
}

}
?>