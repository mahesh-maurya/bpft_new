<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Website extends CI_Controller 
{
	
	
	function index()
	{
		$data['page']="index";
        $data['posts']=$this->post_model->homepost();
        
		$this->load->view("webtemplate",$data);
	}
	function video()
	{
		$data['page']="video";
		$this->load->view("webtemplate",$data);
	}
    function submitprofile()
    {
        $data['page']="profile";
        $twitter=$this->input->get_post('twitter');
        $instagram=$this->input->get_post('instagram');
        $id=$this->input->get_post('id');
        if($this->post_model->submitprofile($twitter,$instagram,$id)==0)
        {
            $data['alert']="Sorry, Error In Updating profile";
			$data['redirect']="website/profilee";
        }else{
            $data['alert']="Profile is updated successfully";
			$data['redirect']="website/profilee";
        }
        $this->load->view("redirect",$data);
    }
    function profilee()
	{
        if(!$this->session->userdata('logged_in'))
        {
            redirect(site_url("website/login"), 'refresh');
        }
		$user=$this->user_model->authenticate();
        $data['page']="profile";
        $data['posts']=$this->post_model->profilepost($user['id']);
        $data['user']=$this->post_model->profileuser($user['id']);
		$this->load->view("webtemplatenonhome",$data);
	}
    function invitelist()
	{
		$data['page']="invitelist";
        $bothval=$this->post_model->invitelist();
        $data['posts']=$bothval->query;
        
        $this->load->library('pagination');
        $config['base_url'] = site_url("website/invitelist");
        $config['total_rows']=$bothval->totalcount;
        $this->pagination->initialize($config); 
        
        $data['user']=$this->db->query("SELECT count(*) as `total` FROM `user`")->row();
        $data["nobackbackground"]="style-blender";
		$this->load->view("webtemplatenonhome",$data);
	}
    function profilein()
    {
        $user=$this->user_model->authenticate();
        $data['page']="profile";
        $data['posts']=$this->post_model->profilepost($user->id);
		$this->load->view("webtemplate",$data);
    }
    function blenderstyle()
	{
		$data['page']="blenderstyle";
        if($this->session->userdata('logged_in'))
        {
            $data['isloggedin']="true";
        }
        $data['posts']=$this->designer_model->viewdesigner();
        $data["nobackbackground"]="true";
		$this->load->view("webtemplatenonhome",$data);
	}
    function profile()
	{
        
		$data['page']="profilepage";
        $data['before']=$this->designer_model->beforeedit($this->input->get('id'));
		$this->load->view("webtemplatenonhome",$data);
	}
    function textpost()
    {
        $data['page']="profileedit";
        $id=$this->input->post('id');
        $text=$this->input->post('text');
        if($this->post_model->createtext($id,$text)==0)
			redirect(site_url("/website/invitelist"));
			else
			redirect(site_url("/website/invitelist"));
        $this->load->view("webtemplate",$data);
    }
    function imagepost()
    {
        $data['page']="profileedit";
        $id=$this->input->post('id');
        $config['upload_path'] = './uploads';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			$filename="logo";
			$logo="";
			if (  $this->upload->do_upload($filename))
			{
				$uploaddata = $this->upload->data();
				$logo=$uploaddata['file_name'];
                
                //$this->load->library('image_lib'); 
                $config_r['source_image']   = './uploads/' . $uploaddata['file_name'];
                $config_r['maintain_ratio'] = TRUE;
                $config_t['create_thumb'] = FALSE;///add this
                $config_r['width']   = 800;
                $config_r['height'] = 800;
                $config_r['quality']    = 100;
                //end of configs

                $this->load->library('image_lib', $config_r); 
                $this->image_lib->initialize($config_r);
                if(!$this->image_lib->resize())
                {
                    echo "Failed." . $this->image_lib->display_errors();
                    //return false;
                }  
                else
                {
                    //print_r($this->image_lib->dest_image);
                    //dest_image
                    $logo=$this->image_lib->dest_image;
                    //return false;
                }
                
                
			}
        $text=$this->input->get_post("text");
        
        $msg="THANK YOU FOR SUBMITTING YOUR STYLE STATEMENT. WE WILL BE IN TOUCH IN CASE IT GETS CHOSEN AS THE WINNING ENTRY. KEEP PARTICIPATING WITH BLENDERS PRIDE FASHION TOUR USING #BPFT2014, #BPFTMYSTYLE TO EARN MORE POINTS";
        $msg=urlencode($msg);
        
        if($this->post_model->createimage($id,$logo,$text)==0)
			redirect(site_url("/website/thankyourd?msg=$msg&rd=".site_url("website/blenderstyle")));
			else
			redirect(site_url("/website/thankyourd?msg=$msg&rd=".site_url("website/blenderstyle")));
        $this->load->view("webtemplate",$data);
    }
    function profileedit()
	{
        if(!$this->session->userdata('logged_in'))
        {
            redirect(site_url("website/login"), 'refresh');
        }
		$data['page']="profileedit";
        $data['before']=$this->designer_model->beforeedit($this->input->get('id'));
		$this->load->view("webtemplatenonhome",$data);
	}
    function schedule()
	{
        
		$data['page']="schedule";
        //$data['before']=$this->designer_model->beforeedit($this->input->get('id'));
        $data["nobackbackground"]="schedule";
		$this->load->view("webtemplatenonhome",$data);
	}
    
    function register()
    {
        
        $data['page']="register";
		$this->load->view("webtemplatenonhome",$data);
    }
    
    function registeruser()
    {
        
        $this->form_validation->set_rules('name','Name','trim|required|max_length[30]');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('city','City','trim|max_length[30]');
        $this->form_validation->set_rules('password','Password','trim|required|min_length[6]|max_length[30]');
        $this->form_validation->set_rules('confirmpassword','Confirm Password','trim|required|matches[password]');
        
        if($this->form_validation->run() == FALSE)	
		{
            $data['alert']=validation_errors();
			$data['redirect']="website/register";
        }else{
        $name=$this->input->get_post('name');
        $email=$this->input->get_post('email');
        $city=$this->input->get_post('city');
        $day=$this->input->get_post('day');
        $month=$this->input->get_post('month');
        $year=$this->input->get_post('year');
        $sex=$this->input->get_post('sex');
        $password=$this->input->get_post('password');
        $facebookid=$this->input->get_post('facebookid');
        $twitter=$this->input->get_post('twitter');
        $instagram=$this->input->get_post('instagram');
        
        $config['upload_path'] = './uploads';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			$filename="logo";
			$logo="";
			if($this->upload->do_upload($filename))
			{
				$uploaddata = $this->upload->data();
				$logo=$uploaddata['file_name'];
			}
        if($this->user_model->registeruser($name,$email,$city,$day,$month,$year,$sex,$password,$logo,$facebookid,$twitter,$instagram)==0)
        {
            $data['alert']="Email alredy exist";
			$data['redirect']="website/register";
        }
			else
            $msg="Thank you for registering with Blenders Pride Fashion Tour. Continue to share your style statements on www.bpft.in and you might win an invite to a show in your city";
            $msg=urlencode($msg);
        
            
			redirect(site_url("/website/thankyourd?msg=$msg&rd=".site_url("website/blenderstyle")));
                
               
			$data['redirect']="website/blenderstyle";
        }
        
        $this->load->view("redirect",$data);
    }
    
    function profilepage()
	{
        
		$data['page']="profilepage";
//        $data['posts']=$this->designer_model->viewdesigner();
		$this->load->view("webtemplate",$data);
	}
    function login()
	{
        $msg="";
        
        if($this->session->userdata('logged_in'))
        {
            redirect(site_url("website/profilee"), 'refresh');
        }
        
		$data['page']="login";
        $data['posts']=$this->designer_model->viewdesigner();
		$this->load->view("webtemplatenonhome",$data);
        
	}
    
    function resetpswd()
	{
        
        $id=$this->input->get_post('id');
        $password=$this->input->get_post('psd');
		$data['page']="resetpswd";
        if($this->user_model->resetpswd($id,$password)==0)
            redirect(site_url("/website/login"));
		$this->load->view("webtemplatenonhome",$data);
        
	}
    function resetlogin()
	{
		$data['page']="resetlogin";
        $data['posts']=$this->designer_model->viewdesigner();
		$this->load->view("webtemplatenonhome",$data);
        
	}
    function resetemail()
	{
		$data['page']="resetemail";
        $data['msg']="";
        $data['posts']=$this->designer_model->viewdesigner();
		$this->load->view("webtemplatenonhome",$data);
        
	}
    
    function submitresetpswd()
    {
        $this->form_validation->set_rules('password','Password','trim|required|min_length[6]|max_length[30]');
        $this->form_validation->set_rules('confirmpassword','Confirm Password','trim|required|matches[password]');
        if($this->form_validation->run() == FALSE)	
		{
            redirect(site_url("/website/login"));
        }else
        {
            
            $password=$this->input->get_post('password');
            $id=$this->input->get_post('id');
            
            if($this->user_model->submitresetpswd($password,$id)==0)
            {
                $msg="THANK YOU. YOUR PASSWORD HAS BEEN CHANGED.";
                $msg=urlencode($msg);
			    redirect(site_url("/website/thankyourd?msg=$msg&rd=".site_url("website/login")));
            }else{
                redirect(site_url("/website/resethome"));
            }
        $this->load->view("webtemplate",$data);
        
        }
    }
    
    function submitresetemail()
    {
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        
        if($this->form_validation->run() == FALSE)	
		{
            redirect(site_url("/website/resetemail"));
        }else{
            
            $email=$this->input->get_post('email');
            
            if($this->user_model->submitresetemail($email)==0)
            {
			     redirect(site_url("/website/thankyou?email=$email"));
            }else{
			     redirect(site_url("/website/thankyou?email=$email"));
            }
        $this->load->view("webtemplate",$data);
        
        }
    }
    function resethome()
	{
		$data['page']="resethome";
        $data['posts']=$this->designer_model->viewdesigner();
		$this->load->view("webtemplatenonhome",$data);
        
	}
    function thankyou()
	{
		$data['page']="thankyou";
        $data['email']=$this->input->get("email");
        $data['posts']=$this->designer_model->viewdesigner();
		$this->load->view("webtemplatenonhome",$data);
        
    }
    function thankyourd()
	{
		$data['page']="thankyourd";
		$this->load->view("webtemplatenonhome",$data);
	}
    function termscondition()
	{
		$data['page']="termscondition";
        $data['posts']=$this->designer_model->viewdesigner();
		$this->load->view("webtemplatenonhome",$data);
        
	}
    function privacy()
	{
		$data['page']="privacy";
        $data['posts']=$this->designer_model->viewdesigner();
		$this->load->view("webtemplatenonhome",$data);
        
	}
    function facebooklogin()
    {
        $id=$this->input->get_post('id');
        $firstname=$this->input->get_post('firstname');
        $lastname=$this->input->get_post('lastname');
        $email=$this->input->get_post('email');
        $image=$this->input->get_post('image');
        $data['message']=$this->user_model->facebooklogin($id,$firstname,$lastname,$email,$image);
		$this->load->view("json",$data);
    }
   
    function twitterlogin()
    {
        // $id=$this->input->get_post('id');
        // $screenname=$this->input->get_post('screenname');
        $data['message']=$this->user_model->twitterlogin();
		$this->load->view("json",$data);
    }
    function twittershare()
    {
        $points=$this->input->get_post('points');
        $data['message']=$this->user_model->twittershare($points);
		$this->load->view("json",$data);
    }
    function facebookpoints()
    {
        $points=$this->input->get_post('points');
        $data['message']=$this->user_model->facebookpoints($points);
		$this->load->view("json",$data);
    }
    public function authenticate()
    {
        $data['message']=$this->user_model->authenticate();
        $this->load->view('json',$data);
    }
    public function normallogin()
    {
        $msg = "";
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        
        if($this->form_validation->run() == FALSE)	
		{
            $data['alert']=validation_errors();
			$data['redirect']="website/login";
//            $msg = validation_errors();
//            redirect(site_url("/website/login?msg=".$msg));
        }else{
        
            $email=$this->input->get_post('email');
            $password=$this->input->get_post('password');
            if($this->user_model->normallogin($email,$password)==0)
            {
                $data['redirect']="website/login";
            }
            else {
                $data['redirect']="website/blenderstyle";
            }
            
        }
        $this->load->view('redirect',$data);
    }
    
    public function facebookshare()
    {
        $data["url"]=$this->input->get("url");
        $data["title"]=$this->input->get("title");
        $data["des"]=$this->input->get("des");
        $data["img"]=$this->input->get("img");
        $this->load->view("facebookshare",$data);
    }
    
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url("/"));
        $data['json']=true;
    }
    public function instagramimages()
    {
        $data['page']="instagramimages";
        $data['instagrams']=$this->post_model->getinstagram();
		$this->load->view("webtemplate",$data);
    }
    
    public function forgotpassemail()
    {
        
//        $email=$this->input->get('email');
        $this->load->library('email');
        //$email='patiljagruti181@gmail.com,jagruti@wohlig.com';
        $this->email->from('Blenders@blenders.com', 'Blenders');
        $this->email->to('jagruti@wohlig.com');
//        $this->email->cc('another@another-example.com');
//        $this->email->bcc('them@their-example.com');

        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');

        $this->email->send();

        echo $this->email->print_debugger();
    }
    
}