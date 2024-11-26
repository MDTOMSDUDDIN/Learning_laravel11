<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    private $tasks = [
        [
            'id' => 1,
            'name' => 'task no 1',
            'description' => 'this is a task no 1'
        ],
        [
            'id' => 2,
            'name' => 'task no 1',
            'description' => 'this is a task no 1'
        ],
        [
            'id' => 3,
            'name' => 'task no 1',
            'description' => 'this is a task no 1'
        ]
    ];

    function index(Request $request)
    {
        return response()->json($this->tasks);
    }


    function show($taskId){
        if($taskId<=0 || $taskId >count($this->tasks)){
          //  abort(404);
          $result=[
            'error'=>'task not found'
          ];
            return response()->json($result);
        }
        $task=$this->tasks[$taskId-1];
        return response()->json($task);
    }
}
