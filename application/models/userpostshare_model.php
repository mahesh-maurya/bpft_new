<?php
if ( !defined( 'BASEPATH' ) )
	exit( 'No direct script access allowed' );
class Userpostshare_model extends CI_Model
{
	
	public function create($user,$post,$shareon)
	{
		$data  = array(
			'user' => $user,
			'post' => $post,
			'shareon' => $shareon
		);
		$query=$this->db->insert( 'userpostshare', $data );
		$id=$this->db->insert_id();
		
		if(!$query)
			return  0;
		else
			return  1;
	}
    
	public function edit($id,$user,$post,$shareon)
	{
		$data  = array(
			'user' => $user,
			'post' => $post,
			'shareon' => $shareon
		);
		
		$this->db->where( 'id', $id );
		$query=$this->db->update( 'userpostshare', $data );
		return 1;
	}
	function viewuserpostshare()
	{
		$query="SELECT `userpostshare`.`id`, `userpostshare`.`post`, `userpostshare`.`user`, `userpostshare`.`shareon`, `userpostshare`.`timestamp`,`user`.`firstname`,`user`.`lastname`,`post`. `type`, `post`.`text`, `post`.`image`, `post`.`totalshare`, `post`.`designer`,`designer`.`name`as `designername`
FROM `userpostshare`
LEFT OUTER JOIN `user` ON `user`.`id`=`userpostshare`.`user`
LEFT OUTER JOIN `post` ON `post`.`id`=`userpostshare`.`post`
LEFT OUTER JOIN `designer` ON `designer`.`id`=`post`.`designer` ";
	   
		$query=$this->db->query($query)->result();
		return $query;
	}
    
	public function beforeedit( $id )
	{
		$this->db->where( 'id', $id );
		$query=$this->db->get( 'userpostshare' )->row();
		return $query;
	}
    
	public function getuserpostshareimagebyid($id)
	{
		$query=$this->db->query("SELECT `image` FROM `userpostshare` WHERE `id`='$id'")->row();
		return $query;
	}
	public function getisverifieddropdown()
	{
		$isverified= array(
			 "1" => "Yes",
			 "0" => "No",
			);
		return $isverified;
	}
	public function gettypedropdown()
	{
		$type= array(
			 "1" => "Free",
			 "0" => "Paid",
			);
		return $type;
	}
    
	public function getstatusdropdown()
	{
		$status= array(
			 "1" => "Enabled",
			 "0" => "Disabled",
			);
		return $status;
	}
    
    public function getuserdropdown()
	{
		$query=$this->db->query("SELECT * FROM `user`  ORDER BY `id` ASC")->result();
		$return=array(
		"" => ""
		);
		foreach($query as $row)
		{
			$return[$row->id]=$row->firstname." ".$row->lastname;
		}
		
		return $return;
	}
    public function getuserpostsharedropdown()
	{
		$query=$this->db->query("SELECT * FROM `userpostshare`  ORDER BY `id` ASC")->result();
		$return=array(
		);
		foreach($query as $row)
		{
			$return[$row->id]=$row->name;
		}
		
		return $return;
	}
    
	public function getlogobyuserpostshareid($id)
	{
		$query=$this->db->query("SELECT `logo` FROM `userpostshare` WHERE `id`='$id'")->row();
		return $query;
	}
	
	function deleteuserpostshare($id)
	{
		$query=$this->db->query("DELETE FROM `userpostshare` WHERE `id`='$id'");
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
    
}
?>