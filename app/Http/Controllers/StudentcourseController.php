<?php

namespace App\Http\Controllers;

use App\Models\Studentcourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentcourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::select('select * from users');
        $courses = DB::select('select * from courses');
        return view("pages.addstudenttocourse",compact('users','courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sco = new Studentcourse;

        $sco->stid = $request->stid;
        $sco->coid = $request->coid;
        $sco->month = $request->month;

        $sco->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Studentcourse  $studentcourse
     * @return \Illuminate\Http\Response
     */
    public function show(Studentcourse $studentcourse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Studentcourse  $studentcourse
     * @return \Illuminate\Http\Response
     */
    public function edit(Studentcourse $studentcourse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Studentcourse  $studentcourse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Studentcourse $studentcourse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Studentcourse  $studentcourse
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = Studentcourse::where('id',$id)->delete(); 
        return view('pages.paybill');
    }
}
