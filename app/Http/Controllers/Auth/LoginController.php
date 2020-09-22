<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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
    protected $redirectTo = 'frontend\home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected function validateLogin(Request $request)
    {
        dd(1);
        $valid=Validator::make($request->all(),[
            $this->username()=> 'required|string',
            'password' => 'required|string',
        ]);
            return redirect()->route('login')->withErrors($valid->errors());
    }
    protected function sendFailedLoginResponse(Request $request)
    {
        return redirect()->route('login')->withErrors([
            $this->username()=>['البريد الإلكتروني غير صحيح '],
            'password'=>['كلمه السر غير صحيحه ']
        ]);
    }

}
