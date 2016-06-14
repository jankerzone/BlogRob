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
		$xcrud->relation('postCategory','categories', 'categoriesId', 'categoriesName');
		$xcrud->label('postCategory','Kategori');

		$data['title']		= 'Manajemen Posting';
		$data['content']	= $xcrud->render();
		$this->load->view('home_admin',$data);
	}

	function categories()
	{
		$xcrud = Xcrud::get_instance();
		$xcrud->table('categories');	 

		$xcrud->create_action('publish', 'publish_action'); // action callback, function publish_action() in functions.php
	    $xcrud->create_action('unpublish', 'unpublish_action');
	    $xcrud->button('#', 'unpublished', 'icon-close glyphicon glyphicon-remove', 'xcrud-action', 
        array(  // set action vars to the button
            'data-task' => 'action',
            'data-action' => 'publish',
            'data-primary' => '{categoriesid}'), 
        array(  // set condition ( when button must be shown)
            'categoriesstatus',
            '!=',
            '1')
	    );
	    $xcrud->button('#', 'published', 'icon-checkmark glyphicon glyphicon-ok', 'xcrud-action', 
	    array(
	        'data-task' => 'action',
	        'data-action' => 'unpublish',
	        'data-primary' => '{categoriesid}'), array(
	        'categoriesstatus',
	        '=',
	        '1'));

		$data['title']		= 'Categories - WebMin';
		$data['content']	= $xcrud->render();

		$this->load->view('home_admin',$data);
	}
}
