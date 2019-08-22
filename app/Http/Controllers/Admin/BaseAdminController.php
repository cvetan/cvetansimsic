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
            'tr_are_you_sure' => __('general.are_you_sure'),
            'tr_cancel'       => __('general.cancel'),
            'tr_yes_remove'   => __('general.yes_remove')
        ]);
    }
}
