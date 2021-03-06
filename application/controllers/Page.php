<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	function Page()
	{
		parent::__construct();
		$this->load->helper('xcrud');
	}

	public function index()
	{
		header('Location:'.site_url());
		exit;
	}

	public function detail($id)
	{	
		$query1				= $this->db->get_where('pages', array('pageId'=> $id), 1)->row();
		$data["query"]		= $this->db->get_where('pages', array('pageId'=> $id), 1);
		$data['query2']		= $this->db->get('menus','10');
		$data['title']		= 'Robsan - '.$query1->pageTitle;
		$this->load->view('home_landing',$data);
	}

}
