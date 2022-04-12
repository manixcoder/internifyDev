<?php

namespace App\Http\Controllers;

use App\Notifications\Admin\NotifyAdmin;
use App\Notifications\Host\NotifyHost;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

use Stripe\Error\Card;
use Validator;
use App\User;
use Session;
use Carbon;
use Auth;
use Cart;
use Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    public function __construct()
    {
        $this->admin = User::whereHas('roles', function ($q) {
            $q->where('name', 'admin');
        })->first();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('frontend.landingpage');
        
    }

    /**
     *   Checking User Role & Redirecting to their 
     *   respective dashboards
     */
    public function checkUserRole()
    {
        $this->middleware('auth');

        if (Auth::check()) {
            //Get Login User role here
            $role = Auth::user()->roles->first();
            if (!empty($role)) {
                return redirect('/' . $role->name);
            }
        }
        Auth::logout();
        return redirect('/');
    }

    
}
