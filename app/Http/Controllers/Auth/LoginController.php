<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\account;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\error;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function redirectTo()
    {
        session()->flash('success', 'You are logged in!');
        return $this->redirectTo;
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        try {
            //code...
            $request->validate([
                'username' => 'required|string',
                'password' => 'required|string',
            ]);

            $account = account::where('username', $request->username)->first();

            if ($account && Hash::check($request->password, $account->password) && $account->role == 1) {
                Auth::login($account);
                session()->put('username', $account->username);
                session()->put('role', $account->role);
                session()->put('nik', $account->nik);
                return redirect()->route('dashboard');

                # code...
            }

            if ($account && Hash::check($request->password, $account->password) && $account->role == 2) {
                Auth::login($account);
                session()->put('username', $account->username);
                session()->put('role', $account->role);
                session()->put('nik', $account->nik);
                return redirect()->route('dashboard_penyewa');
                # code...
            }

            return redirect()->back()->with('error', 'Username or password is wrong');
        } catch (\Throwable $th) {
            //throw $th;
            // return error($th->getMessage());
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function logout(Request $request)
    {
        try {
            //code...
            Auth::logout();
            $request->session()->flush();
            return redirect()->route('landingpage');
        } catch (\Throwable $th) {
            //throw $th;
            // return error($th->getMessage());
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
