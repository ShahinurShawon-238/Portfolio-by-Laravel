<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index(){
        $icon = DB::table('icons')->first();
        $portfolios = DB::table('about_portfolios')->first();
        return view('admin.index', compact('icon', 'portfolios'));
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('success', 'You are logged out successfully');
    }
}
