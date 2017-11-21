<?php

class Controller_Post extends Controller
{
    public $template = 'template_admin';
	
	public function action_index()
	{
		return Response::forge(View::forge('welcome/hello'));
	}

	
	public function action_add()
	{
		$data = array(); //stores variables going to views
		$data['username'] = 'Joe14';
		$data['title'] = 'Thêm mới bài viết';
		return View::forge('posts/add', $data);
	}
	
}
