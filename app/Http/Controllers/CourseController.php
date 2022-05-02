<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = DB::select('select * from courses');
        return view('pages.viewcourses',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.addcourse');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $lock = '0';



      $course = new Course;

      $course->cname= $request->cname;
      $course->cimg= $request->cimg;
      $course->ctid=$request->ctid;
      $course->ccat=$request->ccat;
      $course->civ=$request->civ;
      $course->cprice=$request->cprice;
      $course->clevel=$request->clevel;
      $course->clang=$request->clang;
      $course->cdis=$request->cdis;
      $course->clock=$lock;

      $course->save();

      return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $courses = DB::select('select * from courses where id = ?',[$id]);

        $topics = DB::select('select * from topics where course_id = ?',[$id]);
        return view('pages/courseview',compact('courses','topics'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
      $id = $request->id;
      $lock = $request->lock;
      $co = DB::update('update courses set clock = ? where id = ?', [$lock,$id]);
      return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $deleted = Course::where('id',$id)->delete();
        return back();
    }
}
