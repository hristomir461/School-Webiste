<?php

namespace App\Http\Controllers;

use App\Models\PublicCouncil;
use Illuminate\View\View;

class PublicCouncilController extends Controller
{

    public function publicCouncil(): View
    {
        $publicCouncil = PublicCouncil::all();


        return view('publicCouncil', compact( 'publicCouncil'));
    }

}
