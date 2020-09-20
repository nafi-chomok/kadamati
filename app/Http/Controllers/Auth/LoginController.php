<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
    // protected $redirectTo = RouteServiceProvider::HOME;
    public function redirectTo(){

        // User role
        $role = Auth::user()->user_role;
        // dd($role);


        // Check user role
        switch ($role) {
            case 'employee':
                    return '/employee/home';
                break;
            case 'admin':
                    return '/home';
                break;
            default:
                    return '/login';
                break;
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    // public function login(Request $request)
    // {
    //     $input = $request->all();
    //     $this->validate($request, [
    //         'email' => 'required',
    //         'password' => 'required',
    //     ]);

    //     if(auth()->attempt(array( 'email'=>$input['email'], 'password' => $input['password'])))
    //     {

    //         if(Auth::user()->user_role = 'admin'){
    //             return redirect()->route('home');
    //         }
    //         if(Auth::user()->user_role = 'employee'){
    //             return redirect()->route('user.home');
    //         }



    //     }else{
    //         return redirect()->route('login')
    //             ->with('error','Email-Address And Password Are Wrong.');
    //     }
    // }

}
