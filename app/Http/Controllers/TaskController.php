<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;


class TaskController extends Controller
{
    public function fetchTasks(){
        $data = Task::where('state','=',0)->get();
        if(!$data){
        return   response()->json(null);
        }
        else{
            return   response()->json($data);
        }
    }
    public function fetchDoneTasks(){
        $data = Task::where('state','=',1)->get();
        if(!$data){
            return   response()->json(null);
        }
        else{
            return   response()->json($data);
        }
    }
    public function addTask(Request $request){
        $task = new Task;
        $task->name=$request->name;
        $task->desc=$request->desc;
        $task->date=$request->date;
        $task->time=$request->time;
        $result=$task->save();
        return   response()->json(['id'=>$task->id]);
    }
    public function delete($id){
        $task =Task::find($id);
        if(!$task){
            return   response()->json(false);
        }
        else{
            $result =$task->delete();
            return   response()->json($result);
        }
    }
    public function update(Request $request,$id){
        $task =Task::find($id);
        if(!$task){
            return   response()->json(false);
        }
        else{
            $task->name=$request->name;
            $task->desc=$request->desc;
            $task->date=$request->date;
            $task->time=$request->time;
            $result=$task->save();
            return   response()->json($result);
        }
    }
    public function setStat($id){
        $task =Task::find($id);
        if(!$task){
            return   response()->json(false);
        }
        else{
            $task->state=!$task->state;
            $result=$task->save();
            return   response()->json($result);
        }
    }
}