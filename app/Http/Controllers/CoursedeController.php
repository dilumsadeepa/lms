<?php

namespace App\Http\Controllers;

use App\Models\Coursede;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CoursedeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coursede  $coursede
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $courses = DB::select('select * from courses where id = ?',[$id]);
        return view('pages.coursede',compact('courses'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coursede  $coursede
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        echo $id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coursede  $coursede
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coursede $coursede)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coursede  $coursede
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coursede $coursede)
    {
        //
    }
}
