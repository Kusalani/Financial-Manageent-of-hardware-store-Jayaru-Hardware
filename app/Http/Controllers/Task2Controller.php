<?php

namespace App\Http\Controllers;

use App\Models\Task2;
use Illuminate\Http\Request;

class Task2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $task2s = Task2::all();
        return view('task2s.index',compact('task2s'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('task2s.create');
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
            'name' => 'required',
            'amount' => 'required',
            'due_date'=>'required ',
        ]);


        Task2::create($request->all());


        return redirect()->route('task2s.index')
            ->with('success','New data added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task2  $task2
     * @return \Illuminate\Http\Response
     */
    public function show(Task2 $task2)
    {
        return view('task2s.show',compact('task2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task2  $task2
     * @return \Illuminate\Http\Response
     */
    public function edit(Task2 $task2)
    {
        return view('task2s.edit',compact('task2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task2  $task2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task2 $task2)
    {
        request()->validate([
            'name' => 'required',
            'amount' => 'required',

        ]);


        $task2->update($request->all());


        return redirect()->route('task2s.index')
            ->with('success',' updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task2  $task2
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task2 $task2)
    {
        $task2->delete();
        return redirect()->route('task2s.index')
            ->with('success',' deleted successfully');
    }
}
