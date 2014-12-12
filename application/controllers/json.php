<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Json extends CI_Controller 
{
	
	function savequantity()
	{
		$product=$this->input->get_post('product');
		$quantity=$this->input->get_post('quantity');
		$data["message"]=$this->product_model->savequantity($product,$quantity);
		$this->load->view("json",$data);
	}
    
    public function getallparentcategories()
    {
        $data['message']=$this->category_model->getallparentcategories();
		$this->load->view('json',$data);
    }
    
    public function getsubcategory()
    {
        $id=$this->input->get_post('id');
        $data['message']=$this->category_model->getsubcategory($id);
		$this->load->view('json',$data);
    }
    public function getlistingbycategory()
    {
        $categoryid=$this->input->get_post('id');
        $data['message']=$this->listing_model->getlistingbycategory($categoryid);
		$this->load->view('json',$data);
    }
    public function getonelistingbyid()
    {
        $listingid=$this->input->get_post('id');
        $data['message']=$this->listing_model->getonelistingbyid($listingid);
		$this->load->view('json',$data);
    }
    public function getlistingbycity()
    {
        $cityid=$this->input->get_post('id');
        $data['message']=$this->listing_model->getlistingbycity($cityid);
		$this->load->view('json',$data);
    }
    //search
    
    public function searchcategory()
    {
        $category=$this->input->get_post('categoryname');
        $data['message']=$this->category_model->searchcategory($category);
		$this->load->view('json',$data);
    }
    
}
?>