<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

use function GuzzleHttp\Promise\all;
use function GuzzleHttp\Promise\task;

class TaskController extends Controller
{
    public function fetchTasks(){
        $data = Task::where('stat','=',0)->get();
        return  $data;
    }

    public function fetchDoneTasks(){
        $data = Task::where('stat','=',1)->get();
        return  $data;
    }

    public function addTask(Request $request){
        $task = new Task;
        $task->name=$request->name;
        return $task->save();         
    }
    public function delete($id){
        $task =Task::find($id);
        return $task->delete();
    }
    public function update(Request $request,$id){
        $task =Task::find($id);
        $task->name=$request->name;
        return  $task->save();
    }
    public function setStat($id){
        $task =Task::find($id);
        $task->stat=!$task->stat;
        return $task->save();
    }
}