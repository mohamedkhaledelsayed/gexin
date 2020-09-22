<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Mediator;
class mediatorRegisterController extends Controller
{
    public function showMediatorRegisterForm()
    {
        return view('auth.register', ['url' => 'mediator']);
    }

    protected function createMediator(Request $request)
    {
        $this->validator($request->all())->validate();
        Mediator::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->intended('login/Mediator');
    }
}
