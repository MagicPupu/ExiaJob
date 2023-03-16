<?php

namespace App\Http\Controllers;

use App\Models\Students;
use App\Models\Companies;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    
    public function index() {

        $students = Students::all();
        $companies = Companies::all();
        $users = User::all();

        return view('pages.home', compact('students'), compact('companies'), compact('users'));
    }

}
