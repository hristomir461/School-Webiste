<?php

namespace App\Http\Controllers;

use App\Models\Specialty;
use Illuminate\View\View;

class SpecialtyController extends Controller
{

    public function specialties(): View
    {
        $specialties = Specialty::all();


        return view('specialties', compact( 'specialties'));
    }

}
