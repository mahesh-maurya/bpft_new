<?php
if ( !defined( 'BASEPATH' ) )
	exit( 'No direct script access allowed' );
class Pointlogs_model extends CI_Model
{
	
	public function create($user,$pointtype)
	{
		$data  = array(
			'user' => $user,
			'pointtype' => $pointtype
		);
		$query=$this->db->insert( 'pointlogs', $data );
		$id=$this->db->insert_id();
		
		if(!$query)
			return  0;
		else
			return  1;
	}
    
	public function edit($id,$user,$pointtype)
	{
		$data  = array(
			'user' => $user,
			'pointtype' => $pointtype
		);
		
		$this->db->where( 'id', $id );
		$query=$this->db->update( 'pointlogs', $data );
		return 1;
	}
	function viewpointlogs()
	{
		$query="SELECT `pointlogs`.`id`, `pointlogs`.`user`, `pointlogs`.`pointtype`, `pointlogs`.`timestamp` ,`user`.`firstname`,`user`.`lastname`,`pointstype`.`name` AS `pointtypename`
FROM `pointlogs`
LEFT OUTER JOIN `user` ON `user`.`id`=`pointlogs`.`user`
LEFT OUTER JOIN `pointstype` ON `pointstype`.`id`=`pointlogs`.`pointtype`
 ";
	   
		$query=$this->db->query($query)->result();
		return $query;
	}
    
	public function beforeedit( $id )
	{
		$this->db->where( 'id', $id );
		$query=$this->db->get( 'pointlogs' )->row();
		return $query;
	}
   
    public function getpointlogsdropdown()
	{
		$query=$this->db->query("SELECT * FROM `pointlogs`  ORDER BY `id` ASC")->result();
		$return=array(
		);
		foreach($query as $row)
		{
			$return[$row->id]=$row->name;
		}
		
		return $return;
	}
    public function getpointtypedropdown()
	{
		$query=$this->db->query("SELECT * FROM `pointstype`  ORDER BY `id` ASC")->result();
		$return=array(
		);
		foreach($query as $row)
		{
			$return[$row->id]=$row->name;
		}
		
		return $return;
	}
    
	
	function deletepointlogs($id)
	{
		$query=$this->db->query("DELETE FROM `pointlogs` WHERE `id`='$id'");
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