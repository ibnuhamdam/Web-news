<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Home | Web-news'
		];
		return view('home/index', $data);
	}

	//--------------------------------------------------------------------

}
