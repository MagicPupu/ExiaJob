<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function students() {

        $students = User::where('status', '=', 'student')->get();

        return view('pages.students', compact('students'));
    }

    public function pilots() {

        $pilots = User::where('status', '=', 'pilot')->get();

        return view('pages.pilots', compact('pilots'));
    }
}
