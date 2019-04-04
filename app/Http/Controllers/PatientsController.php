<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Doctor;
use App\User;
use App\Http\Requests\PatientRequest;

class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('doctor_id')) {
            $patient = Patient::with('doctor')->where('doctor_id',$request->doctor_id)->where('date', date('Y-m-d'))->get();
        }
        else{
            $patient= Patient::with('doctor')->get();
        }
        return view('patients.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patient= Patient::all();
        $doctors= Doctor::pluck('name', 'id')->toArray();
        
        return view('patients.create',get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PatientRequest $request)
    {


        Patient::create($request->all());
        $validated = $request->validated();
        return redirect()->route('patients.index')->with('success','Save successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        return view('patients.show',compact('patient'));        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        $doctors= Doctor::pluck('name', 'id')->toArray();
        return view('patients.edit',get_defined_vars());
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Patient $patient , PatientRequest $request)
    {
        $patient->update($request->all());
        return redirect()->route('patients.index')->with('success','Update successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        $patient->delete();
        return redirect()->route('patients.index')->with('success','Deleted successfully');
    }
}
