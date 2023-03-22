<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index() {

        if (Auth::check() && Auth::user()->status == 'pilot') {
            return view('pages.auth.register');
        } else {
            abort(403);
        }
    }
}
