<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

	function Post()
	{
		parent::__construct();
		$this->load->helper('xcrud');
	}

	public function index()
	{

	}

	public function detail($id)
	{	
		$data["query"]		= $this->db->get_where('posts', array('postId'=> $id), 1);
		$data['title']		= $this->db->select('postTitle')->from('posts')->where('postId',$id);

		echo $data['title'];

		$this->load->view('Home_landing',$data);
	}

}
