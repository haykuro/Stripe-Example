<?php

class Home_Controller extends Base_Controller {

	public $restful = true;

	public function put_index()
	{
		die;
		return View::make('home.put.index');
	}

	public function get_index()
	{
		return View::make('home.get.index');
	}

}