<?php

namespace App\Http\Controllers;

use App\Task;
use App\TaskCategory;
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

        $tasks_completed = Task::where('status', 1)->get();
        $tasks_incompleted = Task::where('status', 0)->get();

        return view('tasks.index', compact('task_categories', 'tasks_completed', 'tasks_incompleted'));
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
                'start_date' => 'required|date',
                'finish_date' => 'required|date',

            ]
        );
        Task::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'category_id' => $data['task_category'],
            'start_date' => $data['start_date'],
            'finish_date' => $data['finish_date'],
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

        return view('tasks.edit', compact('task', 'task_categories'));

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
                'start_date' => 'required|date',
                'finish_date' => 'required|date',
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

    public function updateStatus(Request $request, $id)
    {
        $task = Task::find($id);
        $data = request()->validate([
            'status' => 'required|integer|between:0,1',
        ]);

        $task->update($data);

        return redirect()->route('task.index');
    }
}
