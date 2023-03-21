<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class PilotsController extends Controller
{
    public function index() {

        $pilots = User::where('status', '=', 'pilot')->get();

        return view('pages.pilots', compact('pilots'));
    }
}
