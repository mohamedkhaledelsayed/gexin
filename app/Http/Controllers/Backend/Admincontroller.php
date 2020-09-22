<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller

{

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function __construct()

    {

        $this->middleware('auth:admin');

    }

    /**

     * show dashboard.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {
        return view('backend.dashbord');
    }

}
