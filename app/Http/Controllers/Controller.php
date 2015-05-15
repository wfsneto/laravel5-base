<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;

    public function redirect_action($action, $parameters = [], $absolute = [])
    {
        return redirect( action('\\' . get_class($this) . '@' . $action, $parameters, $absolute) );
    }

}
