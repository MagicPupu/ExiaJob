<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Offer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\CandidateMail;
use Illuminate\Support\Facades\Auth;

class OfferController extends Controller
{
    
    public function index() {

        $offers = Offer::join('companies', 'offers.idCompany', '=', 'companies.id')
                    ->select('offers.*', 'companies.*')
                    ->get();

        return view('pages.offer.offers', compact('offers'));
    }

    public function card($id) {

        $offers = Offer::findOrFail($id)
                    ->where('companies.id', '=', $id)
                    ->join('companies', 'offers.idCompany', '=', 'companies.id')
                    ->select('offers.*', 'companies.*')
                    ->get();

        return view('pages.offer.offer-card', compact('offers'));
    }

    public function candidate($id) {

        $offer = Offer::findOrFail($id)
                    ->where('companies.id', '=', $id)
                    ->join('companies', 'offers.idCompany', '=', 'companies.id')
                    ->select('offers.*', 'companies.*')
                    ->get();
        $user = Auth::user();

        Mail::to($offer[0]->email)->send(new CandidateMail($user, $offer[0]));

        return redirect('/offers')->with('candidature envoyée');
    }
}
