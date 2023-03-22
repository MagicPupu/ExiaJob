<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Offer;

class DashboardController extends Controller
{
    public function __invoke() {

        $user = Auth::user();
        $offers = Offer::join('companies', 'offers.idCompany', '=', 'companies.id')
                    ->select('offers.*', 'companies.*')
                    ->get();

        return view('pages.user.dashboard', compact('user', 'offers'));
    }
}
