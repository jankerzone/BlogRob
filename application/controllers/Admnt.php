<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admnt extends CI_Controller {

	function Admnt()
	{
		parent::__construct();
		$this->load->helper('xcrud');
	}

	function index()
	{
		$data['content'] 	= '';
		$data['title']		= '.:BlogRob Admin:.';
		$this->load->view('home_admin',$data);
	}

	function user()
	{
		$xcrud = Xcrud::get_instance();
		$xcrud->table('users');	 
		$xcrud->change_type('userPass', 'password', 'md5', array('maxlength'=>10,'placeholder'=>'Enter Password'));		

		$data['title']		= 'Blog \\ Robby Sanjaya \\ Weeb Geek';
		$data['content']	= $xcrud->render();

		$this->load->view('home_admin',$data);
	}

	function post()
	{
		$xcrud = Xcrud::get_instance();
		$xcrud->table('posts');	 
		$xcrud->change_type('postImg','image','',array('width'=>500, 'path'=>'assets/images'));
		$xcrud->change_type('postDate', 'date');
		$xcrud->change_type('postContent', 'texteditor');
		$xcrud->relation('postCategory','categories', 'categoriesId', 'categoriesName');
		$xcrud->label('postCategory','Kategori');
		$xcrud->order_by('postID','desc');

		$data['title']		= 'Manajemen Posting';
		$data['content']	= $xcrud->render();
		$this->load->view('home_admin',$data);
	}

	function categories()
	{
		$xcrud = Xcrud::get_instance();
		$xcrud->table('categories');	

		$data['title']		= 'Categories - WebMin';
		$data['content']	= $xcrud->render();

		$this->load->view('home_admin',$data);
	}

	function menus()
	{
		$xcrud = Xcrud::get_instance();
		$xcrud->table('menus');	 

		$data['title']		= 'Manajemen Menu';
		$data['content']	= $xcrud->render();
		$this->load->view('home_admin',$data);		
	}
}
