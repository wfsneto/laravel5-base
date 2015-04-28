<?php

namespace App\Http\Controllers;

class BaseController extends Controller
{
    public function __construct()
    {
        view()->share('regions', Region::all());
    }
}
