<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'address' => '',
            'voter_id' => '',
            'image' => ['image']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        if (request('image')) {

            $imagePath = request('image')->store('uploads/profiles/avatars', 'public');
        }
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'address' => $data['address'],
            'user_role' => 'employee',
            'voter_id' => $data['voter_id'],
            'image' =>  $imagePath
        ]);
    }

    protected function createUser() {
        $data = request()->validate([
            'name' => '',
            'email' => '',
            'password' => '',
            'address' => [''],
            'image' => ['image'],
            'user_role' => [''],
            'voter_id' => [''],

        ]);
        // dd($data);
        if (request('image')) {

            $imagePath = request('image')->store('uploads/profiles/avatars', 'public');
        }
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'address' => $data['address'],
            'user_role' => 'employee',
            'voter_id' => $data['voter_id'],
            'image' =>  $imagePath
        ]);
    }

    protected function getUsers() {
        $users = User::all();

        return view('home', ['users'=> $users]);
    }

    protected function deleteUser(User $user) {
        $user->delete();
        return back();
    }
}
