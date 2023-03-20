<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Companies;
use Illuminate\Http\Request;

class MainController extends Controller
{
    
    public function index() {

        $users = User::all();
        $companies = Companies::all();

    return view('pages.home', compact('users'), compact('companies'));
    }
}