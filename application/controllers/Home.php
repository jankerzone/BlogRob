<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function Home()
	{
		parent::__construct();
		$this->load->helper('xcrud');
	}

	public function index()
	{
		$data['title']		= 'Blog \\ Robby Sanjaya \\ Weeb Geek';
		$data['query']		= $this->db->get('posts','5');

		$this->load->view('home_landing',$data);
	}


}
