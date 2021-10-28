<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    //
    protected function send_response()
    {
        return response()->json(['name' => 'Abigail', 'state' => 'CA']);
    }
}
