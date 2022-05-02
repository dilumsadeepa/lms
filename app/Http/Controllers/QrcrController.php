<?php

namespace App\Http\Controllers;

use App\Models\Qrcr;
use Illuminate\Http\Request;

class QrcrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.stcard');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Qrcr  $qrcr
     * @return \Illuminate\Http\Response
     */
    public function show(Qrcr $qrcr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Qrcr  $qrcr
     * @return \Illuminate\Http\Response
     */
    public function edit(Qrcr $qrcr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Qrcr  $qrcr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Qrcr $qrcr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Qrcr  $qrcr
     * @return \Illuminate\Http\Response
     */
    public function destroy(Qrcr $qrcr)
    {
        //
    }
}
