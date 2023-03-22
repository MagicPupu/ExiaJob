<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __invoke() {

        $user = Auth::user();

        return view('pages.user.dashboard', compact('user'));
    }
}
