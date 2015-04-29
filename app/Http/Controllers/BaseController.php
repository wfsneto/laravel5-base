<?php

namespace App\Http\Controllers;

use App\Models\Region;

class BaseController extends Controller
{
    public function __construct()
    {
        view()->share('regions', Region::all());
    }
}
