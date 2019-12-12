<?php

namespace App\Http\Controllers\Admin;

use App\Events\AdminUserCreated;
use App\InputHandler\UsersInputHandler;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class UsersController extends BaseAdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index(): View
    {
        $users = User::orderBy('id', 'desc')
            ->paginate(10);

        return view('admin.users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create(): View
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param UsersInputHandler $inputHandler
     *
     * @return RedirectResponse
     */
    public function store(UsersInputHandler $inputHandler): RedirectResponse
    {
        $user = User::create($inputHandler->format());

        $user->email_verified_at = Carbon::now();

        if ($user->is_admin) {
            event(new AdminUserCreated($user));
        }

        flash(__('users.created'))->success();

        return redirect()->route('admin.users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param User $user
     *
     * @return User
     */
    public function show(User $user): User
    {
        return $user;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $user
     *
     * @return Factory|View
     */
    public function edit(User $user): View
    {
        return view('admin.users.edit', [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UsersInputHandler $inputHandler
     * @param User              $user
     *
     * @return RedirectResponse
     */
    public function update(UsersInputHandler $inputHandler, User $user): RedirectResponse
    {
        $user->update($inputHandler->format());

        flash(__('users.updated'));

        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     *
     * @return RedirectResponse
     *
     * @throws Exception
     *
     * @todo Add FK validation checks
     */
    public function destroy(User $user): RedirectResponse
    {
        $user->delete();

        flash(__('users.removed'));

        return redirect()->route('admin.users.index');
    }
}
