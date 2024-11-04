<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

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
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    // protected function create(Request $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //     ]);
    // }

    public function registerPost(Request $request)
    {
        $request->validate(
            [
                'firstName' => 'required',
                'lastName' => 'required',
                'birthdayDate' => 'required|date',
                'email' => 'required|email|unique:users',
                'phoneNumber' => 'required',
                'gender' => 'required',
                'selectjob' => 'required',
                'password' => 'required'
            ]);

            $data['first_name'] = $request->firstName;
            $data['last_name'] = $request->lastName;
            $data['gender'] = $request->gender;
            $data['email'] = $request->email;
            $data['birthday'] = $request->birthdayDate;
            $data['phone'] = $request->phoneNumber;
            $data['password'] = Hash::make($request->password);
            $user = User::create($data);
        // $credentials = $request->only('email', 'password');
        if (!$user) {
            return redirect(route('register'))->withErrors("Registration Failed");
        } else {
            return redirect(route('login'))->with("succes", "Registration Success");
        }
    }

    // function logout()
    // {
    //     Session::flush();
    //     Auth::logout()
    //     return redirect(route('login'));
    // }

    public function showRegisterForm(){
        return view('register');
    }
}

