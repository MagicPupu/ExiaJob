<?php

namespace App\Http\Controllers;

use App\Models\Students;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    
    public function index() {

        $students = Students::all();

        return view('pages.home', compact('students'));
    }

}
