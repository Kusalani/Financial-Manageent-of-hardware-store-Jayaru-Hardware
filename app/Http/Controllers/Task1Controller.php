<?php

namespace App\Http\Controllers;

use App\Models\Task1;
use Illuminate\Http\Request;


class Task1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $task1s = Task1::all();
        return view('task1s.index',compact('task1s'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('task1s.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'detail' => 'required',
            'amount' => 'required',
        ]);


       Task1::create($request->all());


        return redirect()->route('task1s.index')
            ->with('success','New data added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task1  $task1
     * @return \Illuminate\Http\Response
     */
    public function show(Task1 $task1)
    {
        return view('task1s.show',compact('task1'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task1  $task1
     * @return \Illuminate\Http\Response
     */
    public function edit(Task1 $task1)
    {
        return view('task1s.edit',compact('task1'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task1  $task1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task1 $task1)
    {
        request()->validate([
            'detail' => 'required',
            'amount' => 'required',
        ]);


        $task1->update($request->all());


        return redirect()->route('task1s.index')
            ->with('success',' updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task1  $task1
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task1 $task1)
    {
        $task1->delete();
        return redirect()->route('task1s.index')
            ->with('success',' deleted successfully');
    }

}
