<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;
class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::with('user')->get();
        return response()->json($tasks);    
    }

    public function show($id)
    {
        $task = Task::with('user')->findOrFail($id);
        return response()->json($task);
    }

    public function store(Request $request)
    {
        $user = User::updateOrCreate(
            ['name' => $request->name],
            ['updated_at' => now()]
        );
        $task = new Task();
        $task->title = $request->title;
        $task->description = $request->description;
        $task->status = $request->status ?? 'pending';
        $task->priority = $request->priority ?? 'medium';
        $task->due_date = $request->due_date;
        $task->user_id = $user->id;
        $task->save();
            
        return response()->json($task, 201);
    }

    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $task->update($request->all());
        return response()->json($task);
    }

    public function updateStatus(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $task->status = $request->status;
        $task->save();
        return response()->json($task);
    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return response()->json(null, 204);
    }
}
