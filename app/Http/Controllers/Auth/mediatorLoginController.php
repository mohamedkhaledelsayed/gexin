<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class mediatorLoginController extends Controller
{
    public function __construct()
    {
    $this->middleware('guest:mediator', ['except' => ['logout']]);
    }
   
   public function showLoginForm()
    {
    return view('auth.admin_login');
    }
   
   public function login(Request $request)
    {
    // Validate the form data
    $this->validate($request, [
    'email' => 'required|email',
    'password' => 'required|min:6'
    ]);
   
   
   
   // Attempt to log the user in
    if (Auth::guard('mediator')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
    // if successful, then redirect to their intended location
    return redirect()->intended(route('mediator.mediatordashbord'));
    }
    // if unsuccessful, then redirect back to the login with the form data
    return redirect()->back()->withInput($request->only('email', 'remember'));
    }
   
   public function logout()
    {
           Auth::guard('mediator')->logout();
           return redirect('/backend');
    }
}
