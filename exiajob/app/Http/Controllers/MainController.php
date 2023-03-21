<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Companies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    
    public function index() {

        $last_3_users = DB::table('users')->orderBy('id', 'desc')->take(3)->get();
        $companies = Companies::all();

    return view('pages.home', compact('last_3_users'), compact('companies'));
    }
}