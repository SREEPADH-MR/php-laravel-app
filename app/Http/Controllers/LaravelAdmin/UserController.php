<?php

namespace App\Http\Controllers\LaravelAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Services\LaravelAdmin\UserService;
use Illuminate\Support\Facades\Hash;

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
     * Display the admin user create view.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\View\View
     */
    public function userCreate(Request $request)
    {
        return view('LaravelAdmin.user.userCreate');
    }

    /**
     * Handle an incoming create request.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function userStore(Request $request)
    {
        // check admin user is valid
        $validator = $this->userService->validateAdminUser($request);
        if ($validator->fails()) return back()->withErrors($validator)->withInput();

        $userData = $request->all();
        $userData['password'] = Hash::make($request->password);

        $userCreateResponse = User::create($userData);

        if ($userCreateResponse) {
            return to_route('adminUsersListTemplate')->with('success', "{$request->name} Successfully Created");
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

        $userData = $request->all();

        if (isset($request->password)) {
            $userData['password'] = Hash::make($request->password);
        }

        if ($user) {
            $userUpdateResponse = tap($user)->update($userData);

            if ($userUpdateResponse) {
                return to_route('adminUsersListTemplate')->with('success', "{$request->name} Successfully Updated");
            }
        }
    }

    /**
     * Handle an incoming delete request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $userId
     * @return \Illuminate\Http\RedirectResponse
     */
    public function userDelete(Request $request, $userId)
    {
        $user = User::findOrFail($userId);

        if ($user) {
            $userDeleteResponse = tap($user)->delete();

            if ($userDeleteResponse) {
                return to_route('adminUsersListTemplate')->with('success', "{$user->name} Successfully Deleted");
            }
        }
    }
}
