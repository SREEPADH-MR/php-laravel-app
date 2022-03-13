<?php

namespace App\Http\Controllers\LaravelAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Services\LaravelAdmin\UserService;

class UserController extends Controller
{
    /**
     * UserService object.
     *
     * @var UserService
     */
    public $userService;

    /**
     * Create a new controller instance.
     *
     * @param  UserService  $userService
     * @return void
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * Display the admin user list view.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\View\View
     */
    public function usersList(Request $request)
    {
        $users = User::latest()->get();

        if ($users) {
            return view('LaravelAdmin.user.usersList')->with('usersList', $users);
        }
    }

    /**
     * Display the admin user edit view.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $userId
     * @return \Illuminate\View\View
     */
    public function userEdit(Request $request, $userId)
    {
        $user = User::findOrFail($userId);

        if ($user) {
            return view('LaravelAdmin.user.userEdit')->with('userEdit', $user);
        }
    }

    /**
     * Handle an incoming update request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $userId
     * @return \Illuminate\Http\RedirectResponse
     */
    public function userUpdate(Request $request, $userId)
    {
        $user = User::findOrFail($userId);

        // check admin user is valid
        $validator = $this->userService->validateAdminUser($request, $userId);
        if ($validator->fails()) return back()->withErrors($validator)->withInput();

        if ($user) {
            $userUpdateResponse = tap($user)->update($request->all());

            if ($userUpdateResponse) {
                return to_route('adminUsersListTemplate')->with('success', "{$request->name} Successfully Updated");
            }
        }
    }
}
