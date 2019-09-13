<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UpdateUserProfileRequest;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
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

    /**
     * @param UpdateUserProfileRequest $request
     *
     * @return RedirectResponse
     */
    public function updateProfile(UpdateUserProfileRequest $request)
    {
        return redirect()->route('admin.profile');
    }
}
