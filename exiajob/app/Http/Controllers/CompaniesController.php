<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Companies;
use Illuminate\Support\Facades\DB;

class CompaniesController extends Controller
{
    public function index() {

        $companies = Companies::all();

        return view('pages.companies', compact('companies'));
    }
}
