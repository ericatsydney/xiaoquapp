<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

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
   * @param  array $data
   * @return \Illuminate\Contracts\Validation\Validator
   */
  protected function registerValidator(array $data)
  {
    return Validator::make($data, [
      'name' => 'required|min:3|max:32',
      'email' => 'required|email|max:255|unique:users',
      'password' => 'required|confirmed|min:6',
      'password_confirmation' => 'required|min:6'
    ]);
  }

  /**
   * Create a new user instance after a valid registration.
   *
   * @param  array $data
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

  public function postRegister()
  {
    $validator = $this->registerValidator(Input::all());
    if ($validator->fails()) {
      dd('请按输入规则输入');
    }
    User::create([
      'name' => Input::get('name'),
      'email' => Input::get('email'),
      'password' => bcrypt(Input::get('password')),
    ]);
    return redirect('/auth/login');
  }

  public function postLogin(Request $request)
  {
    // validate the info, create rules for the inputs
    $rules = array(
      'email' => 'required|email', // make sure the email is an actual email
      'password' => 'required|alphaNum|min:6' // password can only be alphanumeric and has to be greater than 3 characters
    );

    // run the validation rules on the inputs from the form
    $validator = Validator::make(Input::all(), $rules);

    // if the validator fails, redirect back to the form
    if ($validator->fails()) {
//      return redirect('/auth/login');
      dd('请按输入规则输入');
    } else {

      // create our user data for the authentication
      $userdata = array(
        'email' => Input::get('email'),
        'password' => Input::get('password')
      );

      // attempt to do the login
      if (Auth::attempt($userdata)) {

        // validation successful!
        // redirect them to the secure section or whatever
        // return Redirect::to('secure');
        // for now we'll just echo success (even though echoing in a controller is bad)
        return redirect('/resident/create');

      } else {

        // validation not successful, send back to form
        return redirect('/auth/login');

      }

    }
  }
}
