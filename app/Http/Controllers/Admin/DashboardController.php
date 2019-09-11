<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class DashboardController extends BaseAdminController
{
    /**
     * @return Factory|View
     */
    public function index(): View
    {
        return view('admin.dashboard');
    }

    /**
     * @return Factory|View
     */
    public function profile(): View
    {
        return view('admin.profile');
    }
}
