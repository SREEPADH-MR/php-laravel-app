<?php

namespace App\Http\Controllers\LaravelAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\LaravelAdmin\AdminAuthenticateService;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminAuthenticateController extends Controller
{
    /**
     * AdminAuthenticateService object.
     *
     * @var AdminAuthenticateService
     */
    public $adminAuthenticateService;

    /**
     * Create a new controller instance.
     *
     * @param  AdminAuthenticateService  $adminAuthenticateService
     * @return void
     */
    public function __construct(AdminAuthenticateService $adminAuthenticateService)
    {
        $this->adminAuthenticateService = $adminAuthenticateService;
    }

    /**
     * Display the admin registration view.
     *
     * @return \Illuminate\View\View
     */
    public function registerTemplate()
    {
        return view('LaravelAdmin.adminRegister');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function register(Request $request)
    {
        // check admin register is valid
        $validator = $this->adminAuthenticateService->validateAdminRegister($request);
        if ($validator->fails()) return back()->withErrors($validator)->withInput();

        $userData = $request->all();
        $userData['password'] = Hash::make($request->password);

        $userData = User::create($userData);

        if ($userData) {
            return to_route('adminDashboardTemplate')->with('success', "{$request->name} Successfully Registered");
        }
    }

    /**
     * Display the admin login view.
     *
     * @return \Illuminate\View\View
     */
    public function loginTemplate()
    {
        return view('LaravelAdmin.adminLogin');
    }

    /**
     * Handle an incoming login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        // check admin login is valid
        $validator = $this->adminAuthenticateService->validateAdminLogin($request);
        if ($validator->fails()) return back()->withErrors($validator)->withInput();

        if (!Auth::attempt($request->only(['email', 'password']))) {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
                'password' => 'The provided credentials do not match our records.',
            ])->withInput();
        }

        $request->session()->regenerate();

        return to_route('adminDashboardTemplate');
    }

    /**
     * Display the dashboard view.
     *
     * @return \Illuminate\View\View
     */
    public function dashboardTemplate()
    {
        return view('LaravelAdmin.adminDashboard');
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return to_route('adminLoginTemplate');
    }
}
