<?php

namespace App\Http\Controllers;

use App\Models\StudentCouncil;
use Illuminate\View\View;

class StudentCouncilController extends Controller
{

    public function studentCouncil(): View
    {
        $studentCouncil = StudentCouncil::all();


        return view('studentCouncil', compact( 'studentCouncil'));
    }

}
{

}
