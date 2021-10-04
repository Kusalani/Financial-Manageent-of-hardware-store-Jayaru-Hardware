<?php

namespace App\Http\Controllers;

use App\Models\Task3;
use Illuminate\Http\Request;

class Task3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $task3s = Task3::all();
        return view('task3s.index',compact('task3s'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
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
     * @param  \App\Models\Task3  $task3
     * @return \Illuminate\Http\Response
     */
    public function show(Task3 $task3)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task3  $task3
     * @return \Illuminate\Http\Response
     */
    public function edit(Task3 $task3)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task3  $task3
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task3 $task3)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task3  $task3
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task3 $task3)
    {
        //
    }
}
