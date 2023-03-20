<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Offer;

class OfferController extends Controller
{
    
    public function index() {

        $offers = Offer::all();

        return view('pages.offers', compact('offers'));
    }
}
