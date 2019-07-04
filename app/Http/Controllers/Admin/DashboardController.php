<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * @return Factory|View
     */
    public function index(): View
    {
        return view('admin.dashboard');
    }
}
