<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Offer;
use Illuminate\Support\Facades\DB;

class OfferController extends Controller
{
    
    public function index() {

        $offers = DB::table('offers')
                    ->join('companies', 'offers.idCompany', '=', 'companies.id')
                    ->select('offers.*', 'companies.*')
                    ->get();

        return view('pages.offer.offers', compact('offers'));
    }

    public function card() {

        $offers = DB::table('offers')
                    ->join('companies', 'offers.idCompany', '=', 'companies.id')
                    ->select('offers.*', 'companies.*')
                    ->get();

        return view('pages.offer.offer-card', compact('offers'));
    }
}
