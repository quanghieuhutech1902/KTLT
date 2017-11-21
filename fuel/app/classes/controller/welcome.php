<?php

class Controller_Welcome extends Controller
{
	
	public function action_index()
	{
		$users = DB::select()->from('category')->execute();
		$view = View::forge('layoutClient');
		$view->head = View::forge('head', array('title' => 'Trang chủ'));
        $view->category = View::forge('category', array('site_title' => 'My Website','users'=>$users));
        $view->content = View::forge('index/content', array('username' => 'Joe14', 'title' => 'Home'));
		$view->footer = View::forge('footer', array('site_title' => 'My Website'));
		return $view;
	}

	
	public function action_about()
	{
		$users = DB::select()->from('category')->execute();
		$view = View::forge('layoutClient');
		$view->head = View::forge('head', array('title' => 'Trang chủ'));
        $view->category = View::forge('category', array('site_title' => 'My Website','users'=>$users));
        $view->content = View::forge('about/content', array('username' => 'Joe14', 'title' => 'Home'));
		$view->footer = View::forge('footer', array('site_title' => 'My Website'));
		return $view;
	}

	public function action_categogy($id)
	{
		$id = $this->param('id');

		$baiviet = DB::select()->from('baiviet')->where('categoryid',$id)->execute();
		$hinhanh = DB::select()->from('category')->where('id',$id)->execute();
		$danhmuc = DB::select()->from('category')->execute();

		$view = View::forge('layoutClient');
		$view->head = View::forge('head', array('title' => 'Trang chủ'));
        $view->category = View::forge('category', array('site_title' => 'My Website','users'=>$danhmuc));
        $view->content = View::forge('Danhmucsanpham/content', array('baiviet' => $baiviet, 'hinhanh'=>$hinhanh));
        // print_r($baiviet->as_array());
		$view->footer = View::forge('footer', array('site_title' => 'My Website'));
		return $view;
	}

	public function action_404()
	{
		return Response::forge(Presenter::forge('welcome/404'), 404);
	}
}
