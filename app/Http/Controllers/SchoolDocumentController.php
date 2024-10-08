<?php

namespace App\Http\Controllers;

use App\Models\SchoolDocument;
use Illuminate\View\View;

class SchoolDocumentController extends Controller
{

    public function schoolDocuments(): View
    {
        $schoolDocuments = SchoolDocument::all();


        return view('schoolDocuments', compact( 'schoolDocuments'));
    }

}
