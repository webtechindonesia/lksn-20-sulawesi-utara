<?php

namespace App\Http\Controllers;

use App\Choices;
use App\Polls;
use Illuminate\Http\Request;

class choiceController extends Controller
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
        return view('admin/choice');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $polls = new Polls;
        $polls->title = $request->title;
        $polls->description = $request->description;
        $polls->deadline = $request->deadline;
        $polls->created_by = $request->created_by;

        $polls->save();

        Polls::create($request->all());
        return redirect('/polls')->with('message', 'Polls Has Been Add !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Choices  $choices
     * @return \Illuminate\Http\Response
     */
    public function show(Choices $choices)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Choices  $choices
     * @return \Illuminate\Http\Response
     */
    public function edit(Choices $choices)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Choices  $choices
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Choices $choices)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Choices  $choices
     * @return \Illuminate\Http\Response
     */
    public function destroy(Choices $choices)
    {
        //
    }
}