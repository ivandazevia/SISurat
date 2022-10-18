<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(session()->get('userSession')['authority'] == "admin")
        {
            return redirect('admin/home');
        }

        if( (session()->get('userSession')['authority'] == "user") or (session()->get('userSession')['authority'] == "sekretaris"))
        {
            return redirect('user/home');
        }
        
    }
}
