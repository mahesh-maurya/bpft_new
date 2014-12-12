<?php
if ( !defined( 'BASEPATH' ) )
	exit( 'No direct script access allowed' );
class User_model extends CI_Model
{
	protected $id,$username ,$password;
	public function validate($username,$password )
	{
		
		$password=md5($password);
		$query ="SELECT `user`.`id`,CONCAT(`firstname`,'',`lastname`) as `name`,`email`,`user`.`accesslevel`,`accesslevel`.`name` as `access` FROM `user`
		INNER JOIN `accesslevel` ON `user`.`accesslevel` = `accesslevel`.`id` 
		WHERE `email` LIKE '$username' AND `password` LIKE '$password' AND `status`=1 AND `accesslevel` IN (1,2) ";
		$row =$this->db->query($query);
		if ( $row->num_rows() > 0 ) {
			$row=$row->row();
			$this->id = $row->id;
			$this->name = $row->name;
			$this->email = $row->email;
			$newdata        = array(
				'id' => $this->id,
				'email' => $this->email,
				'name' => $this->name ,
				'accesslevel' => $row->accesslevel ,
				'logged_in' => 'true',
			);
			$this->session->set_userdata( $newdata );
			return true;
		} //count( $row_array ) == 1
		else
			return false;
	}
	
	
	public function create($firstname,$lastname,$email,$password,$contact,$facebookuserid,$twitter,$instagram,$accesskey,$uniquekey,$points,$status,$loginby,$accesslevel,$dob,$gender,$city,$logo)
	{
		$data  = array(
			'firstname' => $firstname,
			'lastname' => $lastname,
			'password' =>md5($password),
			'accesslevel' => $accesslevel,
			'email' => $email,
            'twitter'=> $twitter,
			'contact' => $contact,
            'instagram'=>$instagram,
            'accesskey'=>$accesskey,
            'uniquekey'=>$uniquekey,
            'points'=>$points,
			'status' => $status,
			'loginby' => $loginby,
			'facebookuserid' => $facebookuserid,
            'dob' => $dob,
            'gender' => $gender,
            'city' => $city,
            'logo' => $logo
		);
		$query=$this->db->insert( 'user', $data );
		$id=$this->db->insert_id();
//		if($query)
//		{
//			$this->saveuserlog($id,'User Created');
//		}
		if(!$query)
			return  0;
		else
			return  1;
	}
	function viewusers()
	{
		//$user = $this->session->userdata('accesslevel');
		$query="SELECT  `user`.`id` as `id`,`user`.`firstname` as `firstname`,`user`.`lastname` as `lastname`,`accesslevel`.`name` as `accesslevel`	,`user`.`email` as `email`,`user`.`contact` as `contact`,`user`.`loginby` as `loginby`,`user`.`status` as `status`,`user`.`accesslevel` as `access`,`user`.`points` as `points`,`user`.`city`
		FROM `user`
	   LEFT OUTER JOIN `accesslevel` ON `user`.`accesslevel`=`accesslevel`.`id`  ";
	   //$accesslevel=$this->session->userdata('accesslevel');
	   
	   $query.=" ORDER BY `user`.`id` ASC";
		$query=$this->db->query($query)->result();
		return $query;
	}
	public function beforeedit( $id )
	{
		$this->db->where( 'id', $id );
		$query=$this->db->get( 'user' )->row();
		return $query;
	}
	
	public function getuserlogobyid($id)
	{
		$query=$this->db->query("SELECT `logo` FROM `user` WHERE `id`='$id'")->row();
		return $query;
	}
	public function edit($id,$firstname,$lastname,$email,$password,$contact,$facebookuserid,$twitter,$instagram,$accesskey,$uniquekey,$points,$status,$loginby,$accesslevel,$dob,$gender,$city,$logo)
	{
		$data  = array(
			'firstname' => $firstname,
			'lastname' => $lastname,
			'accesslevel' => $accesslevel,
			'email' => $email,
            'twitter'=> $twitter,
			'contact' => $contact,
            'instagram'=>$instagram,
            'accesskey'=>$accesskey,
            'uniquekey'=>$uniquekey,
            'points'=>$points,
			'status' => $status,
			'loginby' => $loginby,
			'facebookuserid' => $facebookuserid,
            'dob' => $dob,
            'gender' => $gender,
            'city' => $city,
            'logo' => $logo
		);
		if($password != "")
			$data['password'] =md5($password);
		$this->db->where( 'id', $id );
		$query=$this->db->update( 'user', $data );
//		if($query)
//		{
//			$this->saveuserlog($id,'User Details Edited');
//		}
		return 1;
	}
	function deleteuser($id)
	{
		$query=$this->db->query("DELETE FROM `user` WHERE `id`='$id'");
	}
    
    public function resetpswd($id,$password)
    {
        $user = $this->db->query("SELECT * FROM `user` WHERE `id`='$id' AND `password`='$password'");
        if($user->num_rows() == 0)
        {
            return 0;
        }else{
            return 1;
        }
    }
    public function submitresetpswd($password,$id)
    {
        $password=md5($password);
        $data = array(
            'password' => $password
        );
        $this->db->where('id',$id);
        $query=$this->db->update( 'user', $data );
		if($query)
		{
			return 1;
		}else{
            return 0;
        }
    }
    public function submitresetemail($email)
    {
        $user = $this->db->query("SELECT * FROM `user` WHERE `email`='$email'");
        if($user->num_rows() > 0)
        {
            $user=$user->row();
            $this->load->library('email');
            $this->email->from('noreply@bpft.in', 'Blenders Pride');
            $this->email->to($user->email);

            $this->email->subject('Blenders Pride: Reset Password');
            $this->email->message("Click on Below Link To Reset Password<br><a href='http://bpft.in/index.php/website/resetpswd?id=".$user->id."&psd=".$user->password."'>Reset Password</a>");

            $this->email->send();
            return 1;
            
        }else{
            
            return 0;
            
        }
    }
    
    public function normallogin($email,$password)
    {
        
		$password=md5($password);
		$query ="SELECT * FROM `user` WHERE `email`='$email' AND `password`='$password'";
		$row =$this->db->query($query);
		if ( $row->num_rows() > 0 ) {
			$row=$row->row();
//			$this->id = $row->id;
//			$this->name = $row->name;
//			$this->email = $row->email;
			$newdata        = array(
				'id' => $row->id,
				'email' => $row->email,
				'accesslevel' => $row->accesslevel ,
				'logged_in' => 'true',
			);
			$this->session->set_userdata( $newdata );
			return 1;
		} //count( $row_array ) == 1
		else
			return 0;
    }
    
    public function facebooklogin($id,$firstname,$lastname,$email,$image)
    {
        $query=$this->db->query("SELECT `id` FROM `user` WHERE `uniquekey`='$id' ");
        if($query->num_rows == 0)
        {
            $this->db->query("INSERT INTO `user`(`firstname`, `lastname`, `password`, `email`, `uniquekey`, `contact`, `accesskey`, `accesslevel`, `timestamp`, `facebookuserid`, `status`, `twitter`, `instagram`, `lastlogin`, `loginby`, `points`,`logo`) VALUES ('$firstname','$lastname',0,'$email','$id',NULL,NULL,NULL,CURRENT_TIMESTAMP,NULL,NULL,NULL,NULL,NULL,1,1,'$image')");
            $user=$this->db->insert_id();
            $newdata = array(
                'email'     => $email,
                'password' => "",
                'logged_in' => true,
                'id'=> $user,
                'facebookid'=> $id
            );

            $this->session->set_userdata($newdata);
            
           return $newdata;
        }
        else
        {
            $user=$query->row();
            $newdata = array(
                'email'     => "",
                'password' => "",
                'logged_in' => true,
                'id'=> $user->id,
                'facebookid'=> $id
            );

            $this->session->set_userdata($newdata);
            return $newdata;
        }
         
    }
    
    public function twittershare($points)
    {
        $twtdata=$this->session->all_userdata();
		$query=$this->db->query("UPDATE `user` SET `points`=`points`+'$points' WHERE `id`='".$twtdata['id']."'");
		if(!$query)
			return  0;
		else
			return  1;
    }
    
    public function facebookpoints($points)
    {
        $twtdata=$this->session->all_userdata();
		$query=$this->db->query("UPDATE `user` SET `points`=`points`+'$points' WHERE `id`='".$twtdata['id']."'");
		if(!$query)
			return  0;
		else
			return  1;
    }
    
    public function registeruser($name,$email,$city,$day,$month,$year,$sex,$password,$logo,$facebookid,$twitter,$instagram)
    {
        $points=5;
        if($facebookid!="")
        {
            $points=$points+2;
        }
        if($twitter!="")
        {
            $points=$points+2;
        }
        if($instagram!="")
        {
            $points=$points+2;
        }
        $password=md5($password);
        $dob=$year.'-'.$month.'-'.$day;
        $query=$this->db->query("SELECT `id` FROM `user` WHERE `email`='$email'");
        if($query->num_rows == 0)
        {
            
            $this->db->query("INSERT INTO `user`(`firstname`, `lastname`, `password`, `email`, `uniquekey`, `contact`, `accesskey`, `accesslevel`, `timestamp`, `facebookuserid`, `status`, `twitter`, `instagram`, `lastlogin`, `loginby`, `points`,`logo`,`dob`,`city`,`gender`) VALUES ('$name',NULL,'$password','$email',NULL,NULL,NULL,NULL,CURRENT_TIMESTAMP,'$facebookid',NULL,'$twitter','$instagram',NULL,0,'$points','$logo','$dob','$city','$sex')");
            $user=$this->db->insert_id();
            $newdata = array(
                'id'     => $user,
                'name' => $name,
                'email' => $email,
                'logged_in' => true
            );

            $this->session->set_userdata($newdata);
            
            $this->load->library('email');
            $this->email->from('noreply@bpft.in','Blenders Pride');
            $this->email->to($email);

            $this->email->subject('Blenders Pride: Thank You For Registering To Blenders Pride');
            $this->email->message("Thank You For Registering To Blenders Pride");

            $this->email->send();
           return 1;
            
        }
        else
        {
            return 0;
        }
    }
    
    public function twitterlogin($image,$name)
    {
        $twtdata=$this->session->all_userdata();
       // print_r($twtdata);
        $query=$this->db->query("SELECT `id` FROM `user` WHERE `uniquekey`='".$twtdata['twitter_user_id']."'");
        if($query->num_rows == 0)
        {
            $this->db->query("INSERT INTO `user`(`firstname`, `lastname`, `password`, `email`, `uniquekey`, `contact`, `accesskey`, `accesslevel`, `timestamp`, `facebookuserid`, `status`, `twitter`, `instagram`, `lastlogin`, `loginby`, `points`,`logo`) VALUES ('$name',NULL,0,0,'".$twtdata['twitter_user_id']."',NULL,NULL,NULL,CURRENT_TIMESTAMP,NULL,NULL,'".$twtdata['twitter_screen_name']."',NULL,NULL,2,2,'$image')");
            $user=$this->db->insert_id();
            $newdata = array(
                'id'     => $user
            );

            $this->session->set_userdata($newdata);
           return $twtdata;
        }
        else
        {
            $user=$query->row();
            $newdata = array(
                'id'     => $user->id
            );

            $this->session->set_userdata($newdata);
            return $twtdata;
        }
    
    }
    
     public function getuserdropdown()
	{
		$query=$this->db->query("SELECT * FROM `user`  ORDER BY `id` ASC")->result();
		$return=array();
		foreach($query as $row)
		{
			$return[$row->id]=$row->firstname." ".$row->lastname;
		}
		
		return $return;
	}
	function changepassword($id,$password)
	{
		$data  = array(
			'password' =>md5($password),
		);
		$this->db->where('id',$id);
		$query=$this->db->update( 'user', $data );
		if(!$query)
			return  0;
		else
			return  1;
	}
	public function getaccesslevels()
	{
		$return=array();
		$query=$this->db->query("SELECT * FROM `accesslevel` ORDER BY `id` ASC")->result();
		$accesslevel=$this->session->userdata('accesslevel');
			foreach($query as $row)
			{
				if($accesslevel==1)
				{
					$return[$row->id]=$row->name;
				}
				else if($accesslevel==2)
				{
					if($row->id > $accesslevel)
					{
						$return[$row->id]=$row->name;
					}
				}
				else if($accesslevel==3)
				{
					if($row->id > $accesslevel)
					{
						$return[$row->id]=$row->name;
					}
				}
				else if($accesslevel==4)
				{
					if($row->id == $accesslevel)
					{
						$return[$row->id]=$row->name;
					}
				}
			}
	
		return $return;
	}
	function changestatus($id)
	{
		$query=$this->db->query("SELECT `status` FROM `user` WHERE `id`='$id'")->row();
		$status=$query->status;
		if($status==1)
		{
			$status=0;
		}
		else if($status==0)
		{
			$status=1;
		}
		$data  = array(
			'status' =>$status,
		);
		$this->db->where('id',$id);
		$query=$this->db->update( 'user', $data );
		if(!$query)
			return  0;
		else
			return  1;
	}
	public function getstatusdropdown()
	{
		$status= array(
			 "1" => "Enabled",
			 "0" => "Disabled",
			);
		return $status;
	}
	public function gettypedropdown()
	{
		$type= array(
			 "1" => "Text",
			 "0" => "Image",
			);
		return $type;
	}
	public function getloginbydropdown()
	{
		$status= array(
			 "1" => "Facebook",
			 "2" => "Twitter",
			);
		return $status;
	}
	
	function editaddress($id,$address,$city,$pincode)
	{
		$data  = array(
			'address' => $address,
			'city' => $city,
			'pincode' => $pincode,
		);
		
		$this->db->where( 'id', $id );
		$query=$this->db->update( 'user', $data );
		if($query)
		{
			$this->saveuserlog($id,'User Address Edited');
		}
		return 1;
	}
	
	function saveuserlog($id,$action)
	{
		$fromuser = $this->session->userdata('id');
		$data2  = array(
			'onuser' => $id,
			'fromuser' => $fromuser,
			'description' => $action,
		);
		$query2=$this->db->insert( 'userlog', $data2 );
	}
	function getorganizeruser()
	{
		$return=array();
		$query=$this->db->query("SELECT `id`,`firstname`,`lastname` FROM `user` WHERE `accesslevel`=2 ORDER BY `firstname` ASC")->result();
		
		foreach($query as $row)
		{
			$return[$row->id]=$row->firstname.' '.$row->lastname;
		}
		return $return;
	}
	function userinterestevents($user)
	{
		$query = $this->db->query("SELECT `event`.`title` as `event`,`userinterestevents`.`status`,`userinterestevents`.`timestamp` FROM `userinterestevents`
		INNER JOIN `event` ON `event`.`id`=`userinterestevents`.`event`
		WHERE `user`='$user'")->result();
		return $query;
	}
    
    //----------------------------Functions added by avinash--------------------
    
    
    function viewall()
      {
         $query= $this->db->query("SELECT `user`.`id` ,  `user`.`firstname` ,  `user`.`lastname` ,  `user`.`password` ,  `user`.`email` ,  `user`.`website` ,  `user`.`description` ,  `user`.`eventinfo` ,  `user`.`contact` , `user`.`address` ,  `user`.`city` ,  `user`.`pincode` ,  `user`.`dob` ,  `accesslevel`.`id` ,  `accesslevel`.`name` AS `Accesslevel` ,  `user`.`timestamp` ,  `user`.`facebookuserid` ,  `user`.`newsletterstatus` ,  `user`.`status`,`user`.`logo`,`user`.`showwebsite`,`user`.`eventsheld`,`user`.`topeventlocation`
FROM  `user` 
INNER JOIN  `accesslevel` ON  `user`.`accesslevel` =  `accesslevel`.`id`");
        if($query->num_rows > 0)
        {
            return $query->result();
        }
        else 
        {
            return false;
        }
        return $data;
        
      }
    
     function viewone($id)
      {
         //$this->db->where('id', $id);
         $query= $this->db->query("SELECT `user`.`id` ,  `user`.`firstname` ,  `user`.`lastname` ,  `user`.`password` ,  `user`.`email` ,  `user`.`website` ,  `user`.`description` ,  `user`.`eventinfo` ,  `user`.`contact` , `user`.`address` ,  `user`.`city` ,  `user`.`pincode` ,  `user`.`dob` ,  `accesslevel`.`id` ,  `accesslevel`.`name` AS `Accesslevel` ,  `user`.`timestamp` ,  `user`.`facebookuserid` ,  `user`.`newsletterstatus` ,  `user`.`status`,`user`.`logo`,`user`.`showwebsite`,`user`.`eventsheld`,`user`.`topeventlocation`
FROM  `user` 
INNER JOIN  `accesslevel` ON  `user`.`accesslevel` =  `accesslevel`.`id` WHERE `user`.`id`='$id'");
        if($query->num_rows > 0)
        {
            return $query->result();
        }
        else 
        {
            return false;
        }
        return $data;
         
      }
    
    function deleteone($id)
    {
        $this->db->where('id', $id);
        $query= $this->db->delete('user');
        //$this->db->where('user', $id);
        //$queryorganizer=$this->db->delete('organizer');
        return $query;
    }
    
    function update($id,$firstname,$lastname,$password,$email,$website,$description,$eventinfo,$contact,$address,$city,$pincode,$dob,$accesslevel,$timestamp,$facebookuserid,$newsletterstatus,$status,$logo,$showwebsite,$eventsheld,$topeventlocation)
    {
        $query=$this->db->query("UPDATE `user` SET `firstname`='$firstname',`lastname`='$lastname',`website`='$website',`description`='$description',`eventinfo`='$eventinfo',`contact`='$contact',`address`='$address',`city`='$city',`pincode`='$pincode',`dob`='$dob',`accesslevel`='$accesslevel',`timestamp`=null,`facebookuserid`='$facebookuserid',`newsletterstatus`='$newsletterstatus',`status`='$status',`logo`='$logo',`showwebsite`='$showwebsite',`eventsheld`='$eventsheld',`topeventlocation`='$topeventlocation' WHERE `id`=$id");
        
        return $query;
    }
    function signup($email,$password) 
    {
         $password=md5($password);   
        $query=$this->db->query("SELECT `id` FROM `user` WHERE `email`='$email' ");
        if($query->num_rows == 0)
        {
            $this->db->query("INSERT INTO `user` (`id`, `firstname`, `lastname`, `password`, `email`, `website`, `description`, `eventinfo`, `contact`, `address`, `city`, `pincode`, `dob`, `accesslevel`, `timestamp`, `facebookuserid`, `newsletterstatus`, `status`,`logo`,`showwebsite`,`eventsheld`,`topeventlocation`) VALUES (NULL, NULL, NULL, '$password', '$email', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, CURRENT_TIMESTAMP, NULL, NULL, NULL,NULL, NULL, NULL,NULL);");
            $user=$this->db->insert_id();
            $newdata = array(
                'email'     => $email,
                'password' => $password,
                'logged_in' => true,
                'id'=> $user
            );

            $this->session->set_userdata($newdata);
            
          //  $queryorganizer=$this->db->query("INSERT INTO `organizer`(`name`, `description`, `email`, `info`, `website`, `contact`, `user`) VALUES(NULL,NULL,NULL,NULL,NULL,NULL,'$user')");
            
            
           return $user;
        }
        else
         return false;
        
        
    }
    function login($email,$password) 
    {
        $password=md5($password);
        $query=$this->db->query("SELECT `id` FROM `user` WHERE `email`='$email' AND `password`= '$password'");
        if($query->num_rows > 0)
        {
            $user=$query->row();
            $user=$user->id;
            

            $newdata = array(
                'email'     => $email,
                'password' => $password,
                'logged_in' => true,
                'id'=> $user
            );

            $this->session->set_userdata($newdata);
            //print_r($newdata);
            return $user;
        }
        else
        return false;


    }
    function authenticate() {   
        
       return $this->session->all_userdata();
        
        $is_logged_in = $this->session->userdata('logged_in');
        $is_logged_int = $this->session->all_userdata('logged_in');
        //print_r($is_logged_in);
        if ( $is_logged_in !== 'true' || !isset($is_logged_in) ) {
            return false;
        } //$is_logged_in !== 'true' || !isset( $is_logged_in )
        else {
            return $this->session->all_userdata();
        }
    }
    
	function getallinfoofuser($id)
	{
		$user = $this->session->userdata('accesslevel');
		$query="SELECT DISTINCT `user`.`id` as `id`,`user`.`firstname` as `firstname`,`user`.`lastname` as `lastname`,`accesslevel`.`name` as `accesslevel`	,`user`.`email` as `email`,`user`.`contact` as `contact`,`user`.`status` as `status`,`user`.`accesslevel` as `access`
		FROM `user`
	   INNER JOIN `accesslevel` ON `user`.`accesslevel`=`accesslevel`.`id` 
       WHERE `user`.`id`='$id'";
		$query=$this->db->query($query)->row();
		return $query;
	}
}
?>