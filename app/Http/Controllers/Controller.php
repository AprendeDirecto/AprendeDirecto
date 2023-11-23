<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Route;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public static function isNavItemActive($route) {
        if ($route=='') {
            return 'Ruta no instanciada';
        }elseif (route($route) == url()->current()){
            echo "active";
        } else {
            return 'Ruta no existe';
        }
    }
}
