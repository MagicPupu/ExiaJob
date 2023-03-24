<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Companies;
use Illuminate\Support\Facades\DB;
use App\Models\Offer;

class CompaniesController extends Controller
{
    public function index() {

        $companies = Companies::all();

        return view('pages.company.companies', compact('companies'));
    }

    public function card_company($id) {

        $company_array = Companies::findOrFail($id)
                            ->where('id', $id)
                            ->get();

        $offers = DB::table('offers')
                    ->join('companies', 'offers.idCompany', '=', 'companies.id')
                    ->where('offers.idCompany', '=', $id)
                    ->get();

        $company = $company_array[0];

        return view('pages.company.company-card', compact('company', 'offers'));
    }
}
