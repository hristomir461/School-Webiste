<?php

namespace App\Http\Controllers;

use App\Models\MonDocument;
use Illuminate\View\View;

class MonDocumentController extends Controller
{

    public function monDocuments(): View
    {
        $monDocuments = MonDocument::all();


        return view('monDocuments', compact( 'monDocuments'));
    }

}
