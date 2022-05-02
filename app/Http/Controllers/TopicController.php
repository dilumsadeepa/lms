<?php

namespace App\Http\Controllers;

use App\Models\topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TopicController extends Controller
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
    public function create(Request $request)
    {
        $cid = $request->cid;
        return view('pages.addtopic',compact('cid'));
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
      $id = $request->cid;

      $course = new Topic;

      $course->topicname= $request->topicname;
      $course->course_id= $request->cid;
      $course->tlock=$lock;

      $course->save();

      return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $tid = $id;
      $lesson = DB::select('select * from lessons where topic_id = ?',[$id]);

      return view('pages/topicview',compact('lesson','tid'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
      $id = $request->id;
      $lock = $request->lock;
      $co = DB::update('update topics set tlock = ? where id = ?', [$lock,$id]);
      return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, topic $topic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $deleted = Topic::where('id',$id)->delete();;
      return back();
    }
}
