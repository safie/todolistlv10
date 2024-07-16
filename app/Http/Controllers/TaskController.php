<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    function index() {
        $tasks =Task::all();
        // select * from tasks

        $tasks = Task::limit(10)->get();
        // select * from tasks limit 10

        $tasks = Task::latest()->limit(10)->get();
        // select * from tasks order by created_at desc limit 10

        $tasks = Task::where('id','<',30)->get();

        dd($tasks);
    }
    //
}
