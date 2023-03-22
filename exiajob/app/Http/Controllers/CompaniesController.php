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

        return view('pages.company.companies', compact('companies'));
    }

    public function cards() {

        return view('pages.company.cards');
    }
}
