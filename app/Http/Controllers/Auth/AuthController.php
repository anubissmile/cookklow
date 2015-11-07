<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
//NECESSARRY//
use Auth;
use Illuminate\Http\Request;
use App\Library\WesarutToolKits;
//NECESSARRY//

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;


    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function getLogin(){
        return view('metro-dashboard.login');
    }

    public function postLogin(Request $request){


        $email = $request->input('email');
        $pwd = $request->input('password');
        $sucPath = 'http://' . $request->server('SERVER_NAME') . '/cookklow/admin/dashboard';

        if(Auth::attempt(['email' => $email, 'password' => $pwd])){
            //success
            return redirect()->intended($sucPath);
        }else{
            //failure
            return 'Login Failure';
        }


    }

    public function getLogout(){

        if(Auth::check()){ //If you're logged in.

            if(Auth::logout()){ //Do logout.
                //FAILURE//
                return 'Logout failure';
            }else{
                //SUCCESS//
                return redirect()->intended(WesarutToolKits::genPath('admin/auth/login'));
            }

        }else{
            return redirect()->back();
        }

    }

}
