<?php
if ( !defined( 'BASEPATH' ) )
	exit( 'No direct script access allowed' );
class Designer_model extends CI_Model
{
	
	public function create($name,$content,$json,$image,$type)
	{
		$data  = array(
			'name' => $name,
			'content' => $content,
			'json' => $json,
            'type' => $type,
			'image' => $image
		);
		$query=$this->db->insert( 'designer', $data );
		$id=$this->db->insert_id();
		
		if(!$query)
			return  0;
		else
			return  1;
	}
    
	public function edit($id,$name,$content,$json,$image,$type)
	{
		$data  = array(
			'name' => $name,
			'content' => $content,
            'type' => $type,
			'json' => $json,
			'image' => $image
		);
		
		$this->db->where( 'id', $id );
		$query=$this->db->update( 'designer', $data );
		return 1;
	}
	function viewdesigner()
	{
		$query="SELECT * FROM `designer` ";
	   
		$query=$this->db->query($query)->result();
		return $query;
	}
    
	public function beforeedit( $id )
	{
		$this->db->where( 'id', $id );
		$query=$this->db->get( 'designer' )->row();
		return $query;
	}
    
	public function getdesignerimagebyid($id)
	{
		$query=$this->db->query("SELECT `image` FROM `designer` WHERE `id`='$id'")->row();
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
    public function getdesignerdropdown()
	{
		$query=$this->db->query("SELECT * FROM `designer`  ORDER BY `id` ASC")->result();
		$return=array(
		);
		foreach($query as $row)
		{
			$return[$row->id]=$row->name;
		}
		
		return $return;
	}
    
	public function getlogobydesignerid($id)
	{
		$query=$this->db->query("SELECT `logo` FROM `designer` WHERE `id`='$id'")->row();
		return $query;
	}
	
	function deletedesigner($id)
	{
		$query=$this->db->query("DELETE FROM `designer` WHERE `id`='$id'");
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