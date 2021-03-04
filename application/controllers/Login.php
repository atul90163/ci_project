<?php
/**
 * 
 */
class Login extends MY_Controller 
{
	
	public function index()
	{

        if($this->session->userdata('user_id'))
            return redirect('admin/dashboard');
		$this->load->helper('form');
	
		//echo "login index";
		$this->load->view("public/adminlogin");
	    //$this->load->helper('form');
	
		
	}
	public function adminlogin()
	{
		//echo "fgdfjkghdfkjghdfkjghdfjkghdfkg";
		$this->load->library('form_validation');
		$this->form_validation->set_rules('uname','User Name', 'required|alpha|trim');
		$this->form_validation->set_rules('upass','User Password', 'required|min_length[6]|max_length[10]');
		//$this->form_validation->set_error_delimiters("<p class='tt'>"," </p>");// where tt is my custom css . use it when want to set a single sign on all occured  but if we want to every error have difference sign then we will use with form error  follow where 

        if($this->form_validation->run())

        {
        	$username=$this->input->post('uname');
        	$password=$this->input->post('upass');
        	//echo "validation successfully";
        	//Echo "Username is $u";
        	//echo "<br>";
        	//echo "password is $p";
        	$this->load->model('loginmodel');
        	$lgnid=$this->loginmodel->valid_login($username,$password);
           // print_r($lgnid);
        //  $role=$lgnid->role;
           // die();
        	if($lgnid)

        	{   
        		//$this->load->library('session');  //  we loaded of session library in config/autoload.php file bcoz we need to have to load it many time 
                // $id= $lgnid->id;
                // echo $id;
                // die();
           $role=$lgnid->role;
           if($role=='admin'){
            $id=$lgnid->id;
           // echo $id;
           // die();
        		$this->session->set_userdata('user_id' ,$id); // here user_id is key name of session;
             //  echo $lgnid;
                //echo $id;
             //   die();
                // echo lgnid;
                //   echo "authentication successfull";
                 //  $this->load->view('admin/dashboard');
               return redirect('admin/dashboard');
           }
           else{
            //echo $lgnid->role;

             $id=$lgnid->id;
          
                $this->session->set_userdata('user_id' ,$id); // here user_id is key name of session;
             //  echo $lgnid;
                //echo $id;
             //   die();
                // echo lgnid;
                //   echo "authentication successfull";
                 //  $this->load->view('admin/dashboard');
               return redirect('user');
           

           }
        	}
        	else
        	{
        		// echo "authentication failed";
               $this->session->set_flashdata('login_failed','invalid username & password');
               return redirect('login');
               // echo $role;
        	}

        }
        else
        {
        	//echo "validation failed";
        	$this->load->view('public/adminlogin');
        	//echo validation_errors();
        }
	}
    public function logout()
    {
        $this->session->unset_userdata(user_id);
        return redirect('login');
    }
	}