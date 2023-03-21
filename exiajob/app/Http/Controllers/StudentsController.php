<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class StudentsController extends Controller
{
    public function index() {

        $students = User::all();

        return view('pages.students', compact('students'));
    }
}
