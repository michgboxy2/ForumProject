<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task as TaskModel;

class Task extends Controller
{
   public function showTaskPage(){
   		$tasks = TaskModel::all();

   		return view('task.index', compact('tasks')); 

   }

   public function taskDetail($id) {
   		$task = TaskModel::find($id);

   		return view('task.show', compact('task'));
   }
}
