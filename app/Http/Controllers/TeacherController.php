<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\View\View;

class TeacherController extends Controller
{

    public function teachers(): View
    {
        $teachers = Teacher::all();


        return view('teachers', compact( 'teachers'));
    }

}
