<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Offer;

class ProfileController extends Controller
{
    public function pilot() {

        $user = Auth::user();
        $offers = Offer::join('companies', 'offers.idCompany', '=', 'companies.id')
                    ->select('offers.*', 'companies.*')
                    ->get();

        return view('pages.user.profile-pilot', compact('user', 'offers'));
    }

    public function student() {

        $user = Auth::user();
        $offers = Offer::join('companies', 'offers.idCompany', '=', 'companies.id')
                    ->select('offers.*', 'companies.*')
                    ->get();

        return view('pages.user.profile-student', compact('user', 'offers'));
    }
}
