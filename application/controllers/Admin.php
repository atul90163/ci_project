<?php
/**
 * 
 */
class Admin extends MY_Controller 
{
	
	public function dashboard()
	{
		//echo "fgdfkgjdflkg";

    $this->load->library('pagination');
    $config=[

              'base_url'=>base_url('admin/dashboard'),
              'per_page'=>4,
              'total_rows'=>$this->articlesmodel->num_rows(),
               'full_tag_open'=>"<ul class='pagination'>",
               'full_tag_close'=>'</ul>',
               'first_tag_open'=>'<li>',
               'first_tag_close'=>'</li>',
               'first_link'=>'start',
               'last_link'=>'end',
               'last_tag_open'=>'<li>',
               'last_tag_close'=>'</li>',
               
                
               'next_tag_open'=>'<li>',
               'next_tag_close'=>'</li>',
               
               'prev_tag_open'=>'<li>',
               'prev_tag_close'=>'</li>',
               'num_tag_open'=>'<li>',
               'num_tag_close'=>'</li>',
               'cur_tag_open'=>"<li class='active'><a>",
               'cur_tag_close'=>'</li></a>'


             ];


    $this->pagination->initialize($config);
   // echo $this->articlesmodel->articleslist($config['per_page'],$this->uri->segment(3));
    //die();

		$articles=$this->articlesmodel->articleslist($config['per_page'],$this->uri->segment(3,0));
    //echo $articles;
    //echo die;
   // echo $this->db->last_query(); 
      
		$this->load->view('admin/dashboard',['article'=>$articles]); // here article key of $articles bcos its an array	this key always passed on view
          //$this->load->view('admin/dashboard',$articles);
	}
	public function __construct()
	{
		parent::__construct();
		if(! $this->session->userdata('user_id'))
		{
			return redirect('login');
		}
    $this->load->model('articlesmodel'); // here articles is alias of articlesmodel
    
	}
	public function add_article()

	{
		//echo "fghkjgjgflkhjfl";
		$this->load->helper('form');
		$this->load->view('admin/add_articles');
	}
	public function store_article()
	{
		//echo "dgjkdfgkdhgkd";
          $this->load->library('form_validation');
          $this->form_validation->set_rules('title',' Article Title', 'required|alpha_numeric_spaces|trim');
		  $this->form_validation->set_rules('article','Article Body', 'required');
		
          if($this->form_validation->run())
          {
                   //echo "articles submitted";
          	$t= $this->input->post('title');
          	$a = $this->input->post('article');
          	$uid = $this->input->post('userid');
          	echo $uid;
          if(	$this->articlesmodel->addarticlemodel($t,$a,$uid) )
          {
          	//echo "successfully inserted";
          	//redirect('Admin/dashboard');
          	$this->session->set_flashdata('feedback','Articl Added Succesfully');
          	return redirect('admin/dashboard');
          }
          else{
          	//echo "failed";

          	$this->session->set_flashdata('feedback','Articl not Add Succesfully, please try again');
          	return redirect('admin/add_articles');
          }

          }
          else
          {

          	$this->load->view('admin/add_articles');
          }



	}
	public function deletearticles(){

		if($this->input->get('id'))
		  {
			//echo "found articles id"; 
			$id=$this->input->get('id');
			$this->articlesmodel->deletearticlesmodel($id);
			//echo "deletion complete";
			redirect('admin/dashboard');

		  }
	    else{
			  //return redirect('admin/dashboard');
		          echo " not found articles id"; 

		    }

	}

	public function editarticles(){
		$this->load->helper('form');


		$id= $this->input->get('id');

       $user['data']=$this->articlesmodel->editarticlesmodel($id);
       $this->load->view('admin/articles_views' , $user);
    //  echo '<pre>';
     // print_r($user) ;
       //echo $id;
     // 
       /*
      $this->load->library('form_validation');
      $this->form_validation->set_rules('title','Title','required|min[5]');
      $this->form_validation->set_rules('article','Articles_Body','required');
      if($this->form_validation->run()){
      	//echo "fghfkh";
      	$title=$this->input->post('title');
      	echo $title;
      }else{
      	echo"kkkk";
      }

*/
	}


	public function update_article()
	{
		//echo "dgjkdfgkdhgkd";
          $this->load->library('form_validation');
          $this->form_validation->set_rules('title',' Article Title', 'required|alpha_numeric_spaces|trim');
		  $this->form_validation->set_rules('article','Article Body', 'required');
		
          if($this->form_validation->run())
          {
                   //echo "articles submitted";
          	         $i= $this->input->post('id');
          	
          	         $t= $this->input->post('title');
          	         $a = $this->input->post('article');
          	//$uid = $this->input->post('userid');
              if(	$this->articlesmodel->updatemodel($t,$a,$i) )
                   {
                          	//echo "successfully inserted";
                              	//redirect('Admin/dashboard');
                              	$this->session->set_flashdata('feedback','Articl updated Succesfully');
                             	//return redirect('admin/dashboard');
                    }
                else{
          	//echo "failed";

                        	$this->session->set_flashdata('feedback','Articl not update Succesfully, please try again');
          	               // return redirect('admin/editarticles');
                    }
                        return redirect('admin/dashboard'); 
                       // unset('post');       

          }
          else
          {

          	$this->load->view('admin/articles_views');
          }



	}

}