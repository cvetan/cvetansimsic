<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use JavaScript;

class BaseAdminController extends Controller
{
    /**
     * BaseAdminController constructor
     */
    public function __construct()
    {
        JavaScript::put([
        ]);
    }
}
