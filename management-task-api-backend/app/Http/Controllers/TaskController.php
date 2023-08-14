<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Task;



class TaskController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index()
    {
        $tasks = Task::all();
        return response()->json($tasks);
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'title' => 'required|unique:tasks|max:255',
            'description' => 'required',

        ]);
        // if (!$validatedData) {
        //     return response()->json(['errors' => $validatedData->errors()], 422);
        // }

        $task = Task::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'completed' => false,
        ]);

        return response()->json($task, 201);
    }

    public function update(Request $request, $taskId)
    {
        $task = Task::find($taskId);

        if (!$task) {
            return response()->json(['error' => 'Task not found'], 404);
        }

        $task->update([
            'completed' => $request->input('completed'),
        ]);

        return response()->json($task, 200);
    }

    public function destroy($taskId)
    {
        $task = Task::find($taskId);

        if (!$task) {
            return response()->json(['error' => 'Task not found'], 404);
        }

        $task->delete();

        return response()->json(['message' => 'Task deleted'], 200);
    }






}
