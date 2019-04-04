<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;
use App\Models\Test;
use App\Models\Patient;


class PrescriptionController extends Controller
{
    public function index(Patient $patient)
    {
        $tests=Test::all();
        $medicines= Medicine::all();
        return view('prescriptions.index',get_defined_vars());
    }

    public function test(Request $request){
        logger($request->all());
    }

    
}
