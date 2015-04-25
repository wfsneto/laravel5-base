<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
	public function __construct(\App\Models\Repository\Region $eloquent)
	{
		$this->middleware('auth');
	}

	public function index()
	{
		return view('admin/home/index');
	}
}
