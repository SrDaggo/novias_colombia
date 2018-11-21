<?php

namespace App\Http\Controllers;

use App\Task;
use App\TaskCategory;
use App\TaskDate;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $task_categories = TaskCategory::all();
        $task_dates = TaskDate::all();
        $tasks = Task::where('user_id', auth()->user()->id)->get();
        return view('tasks.index', compact('tasks', 'task_categories', 'task_dates'));
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
        $data = request()->validate(
            [
                'title' => 'required|string|min:3|max:120',
                'description' => 'nullable|string',
                'task_category' => 'required|exists:task_categories,id',
                'task_date' => 'required|exists:task_dates,id',
            ]
        );
        Task::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'category_id' => $data['task_category'],
            'date_id' => $data['task_date'],
            'user_id' => auth()->user()->id,
        ]);
        return redirect()->route('task.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::find($id);
        $task_categories = TaskCategory::all();
        $task_dates = TaskDate::all();
        return view('tasks.edit', compact('task', 'task_categories', 'task_dates'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = request()->validate(
            [
                'title' => 'required|string|min:3|max:120',
                'description' => 'nullable|string',
                'category_id' => 'required|exists:task_categories,id',
                'date_id' => 'required|exists:task_dates,id',
                'note' => 'nullable|string',
            ]);

        $task = Task::find($id);

        $task->update($data);
        return redirect()->route('task.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();
        return redirect()->route('task.index');
    }
}
