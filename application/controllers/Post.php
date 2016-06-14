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
		$query1				= $this->db->get_where('posts', array('postId'=> $id), 1)->row();
		$data["query"]		= $this->db->get_where('posts', array('postId'=> $id), 1);

		$data['title']		= 'Robsan - '.$query1->postTitle;

		$this->load->view('Home_landing',$data);
	}

}
