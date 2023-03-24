<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Offer;

class UsersController extends Controller
{
    public function students() {

        $students = User::where('status', '=', 'student')->get();

        return view('pages.user.students', compact('students'));
    }

    public function pilots() {

        $pilots = User::where('status', '=', 'pilot')->get();

        return view('pages.user.pilots', compact('pilots'));
    }

    public function card_pilot($id) {

        $pilot_array = User::findOrFail($id)
                        ->where('id', $id)
                        ->where('status', 'pilot')
                        ->get();
        
        $offers = Offer::join('companies', 'offers.idCompany', '=', 'companies.id')
                    ->select('offers.*', 'companies.*')
                    ->get();

        $pilot = $pilot_array[0];

        return view('pages.user.card-pilot', compact('pilot', 'offers'));
    }

    public function card_student($id) {

        $student_array = User::findOrFail($id)
                            ->where('id', $id)
                            ->where('status', 'student')
                            ->get();

        $student = $student_array[0];

        return view('pages.user.card-student', compact('student'));
    }
}
