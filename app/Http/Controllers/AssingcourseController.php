<?php

namespace App\Http\Controllers;

use App\Models\Assingcourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AssingcourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $users = DB::table('users')
            ->join('assingcourses', 'users.id', '=', 'assingcourses.stid')
            ->join('courses', 'assingcourses.coid', '=', 'courses.id')
            ->select('users.*', 'assingcourses.*', 'courses.*')
            ->get();


      return view("pages.viewasscourse",compact('users'));
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
        $student = new Assingcourse;

        $student->stid = $request->stid;
        $student->coid = $request->coid;

        $student->save();

        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Assingcourse  $assingcourse
     * @return \Illuminate\Http\Response
     */
    public function show(Assingcourse $assingcourse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Assingcourse  $assingcourse
     * @return \Illuminate\Http\Response
     */
    public function edit(Assingcourse $assingcourse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Assingcourse  $assingcourse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Assingcourse $assingcourse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Assingcourse  $assingcourse
     * @return \Illuminate\Http\Response
     */
    public function destroy(Assingcourse $assingcourse)
    {
        //
    }
}
