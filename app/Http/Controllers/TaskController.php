<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
class TaskController extends Controller
{
    public function index()
{
    $tasks = Task::all();
    return view('tasks.index', compact('tasks'));
}

public function create()
{
    return view('tasks.create');
}

public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
    ]);

    Task::create($request->all());
    return redirect()->route('tasks.index')->with('success', 'Task created successfully');
}

public function edit(Task $task)
{
    return view('tasks.edit', compact('task'));
}

public function update(Request $request, Task $task)
{
    $request->validate([
        'name' => 'required',
    ]);

    $task->update($request->all());
    return redirect()->route('tasks.index')->with('success', 'Task updated successfully');
}

public function destroy(Task $task)
{
    $task->delete();
    return redirect()->route('tasks.index')->with('success', 'Task deleted successfully');
}
}
