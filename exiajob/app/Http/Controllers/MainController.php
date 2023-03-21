<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Companies;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    
    public function index() {

        $last_3_users = DB::table('users')->orderBy('id', 'desc')->take(3)->get();
        $companies = Companies::all();
        $offers = DB::table('offers')
                    ->join('companies', 'offers.idCompany', '=', 'companies.id')
                    ->select('offers.*', 'companies.*')
                    ->get();

    return view('pages.home', compact('last_3_users', 'companies', 'offers'));
    }
}