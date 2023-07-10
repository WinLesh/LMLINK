<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::id())
        {
            $role = Auth()->user()->role_as;
            if($role == '0')
            {
                return view('dashboard');
            }
            else if($role == '1')
            {
                return view('admin.dashboard');
            }
            else
            {
                return redirect()->back();
            }
        }
    }
}