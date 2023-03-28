<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Offer;

class SearchController extends Controller
{
    public function index(Request $request) {
        $query = $request->input('query');

        $results = Offer::join('companies', 'offers.idCompany', '=', 'companies.id')
                        ->select('offers.*', 'companies.*')
                        ->where('offer_name', 'like', '%'.$query.'%')
                        ->orWhere('name', 'like', '%'.$query.'%')
                        ->orWhere('city', 'like', '%'.$query.'%')
                        ->get();

        return view('pages.search', compact('results'));
    }
}
