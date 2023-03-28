<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Offer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\CandidateMail;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Companies;

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
                    ->where('companies.id', $id)
                    ->join('companies', 'offers.idCompany', '=', 'companies.id')
                    ->select('offers.*', 'companies.*')
                    ->get();

        $offer = $offers[0];

        return view('pages.offer.offer-card', compact('offer'));
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

    public function add_offer() {

        if (Auth::check() && Auth::user()->status == 'pilot' or 'admin') {
            return view('pages.offer.add-offer');
        } else {
            abort(403);
        }
    }

    public function store(Request $request) {

        $offer = new Offer;
        $offer->offer_name = $request->name;
        $offer->offer_description = $request->description;
        $offer->add_date = Carbon::now();
        $offer->skill1 = $request->skills1;
        $offer->skill2 = $request->skills2;
        $offer->skill3 = $request->skills3;
        $offer->city = $request->city;
        $offer->duration = $request->duration;
        $offer->price = $request->price;
        
        $idCompany = Companies::select('id')
                                ->where('name', 'like', '%'.$request->company_name.'%')
                                ->get();

        $offer->idCompany = $idCompany[0]->id;
        $offer->save();
        
        return redirect('/offers');
    }

    public function destroy_offer($id) {
        Offer::findOrFail($id)->delete();

        return redirect('/offers');
    }
}
