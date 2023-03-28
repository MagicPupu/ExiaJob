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

        $last_3_users = User::where('status', '=', 'student')->orderBy('id', 'desc')->take(3)->get();
        $best_rated_companies = Companies::orderBy('rate', 'desc')
                                        ->take(3)
                                        ->get();
        $last_4_offers = Offer::join('companies', 'offers.idCompany', '=', 'companies.id')
                                ->select('offers.*', 'companies.*')
                                ->orderBy('companies.id', 'desc')
                                ->take(4)
                                ->get();

    return view('pages.home', compact('last_3_users', 'best_rated_companies', 'last_4_offers'));
    }
}