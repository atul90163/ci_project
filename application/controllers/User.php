<?php
/**
 * 
 */
class User extends MY_Controller 
{
	
	public function __construct(){

   parent::__construct();
		$this->load->model("usermodel");
    //echo $this->session->userdata('user_id');
			//parent::__construct();
			if(! $this->session->userdata('user_id')){
				return redirect('login');
			}
		
  

	}
	public function index()
	{
		//echo "list articles index";
		//$this->load->helper("url");
	//	$this->load->helper("html");

      $this->load->library('pagination');
      $config=[
        'base_url'=>site_url('user/index'),
        'per_page'=>4,
        'total_rows'=>$this->usermodel->totalrows()
         ];
   $this->pagination->initialize($config);
  

		$data['article']=$this->usermodel->articlesdata($config['per_page'],$this->uri->segment(3,0));
		$this->load->view("public/articles_list",$data);
		//echo $this->session->userdata('user_id');
		//echo count($data);
		//print_r($data);
	}
	public function ind()
	{
		//echo "list articles index";
		//$this->load->helper("url");
	//	$this->load->helper("html");
		$this->load->view("public/articles_list");
	}
}