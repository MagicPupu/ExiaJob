<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Offer;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

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

    public function register() {

        if (Auth::check() && Auth::user()->status == 'pilot') {
            return view('pages.auth.register');
        } else {
            abort(403);
        }
    }

    public function store(Request $request) {
        
        $user = new User();
        $user->email = $request->email;
        $user->name = $request->name;
        $user->promo = $request->promo;
        $user->centre = $request->centre;
        $user->password = Hash::make($request->password);
        $user->status = 'student';

        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('images/profile_pictures'), $imageName);

        $user->image = $imageName;
        $user->save();

        return back()->with('Étuiant créé avec succès...');

    }
}
