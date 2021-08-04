<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;


class TaskController extends Controller
{
    public function fetchTasks(){
        $data = Task::where('state','=',0)->get();
        if(!$data){
        return   response()->json(['data' => null , 'isEmpty' => true]);
        }
        else{
            return   response()->json(['data' => $data , 'isEmpty' => false]);
        }
    }
    public function fetchDoneTasks(){
        $data = Task::where('state','=',1)->get();
        if(!$data){
            return   response()->json(['data' => null , 'isEmpty' => true]);
        }
        else{
            return   response()->json(['data' => $data , 'isEmpty' => false]);
        }
    }
    public function addTask(Request $request){
        $task = new Task;
        $task->name=$request->name;
        $task->desc=$request->desc;
        $task->date=$request->date;
        $task->time=$request->time;
        $result=$task->save();
        return   response()->json(['isAdded' => $result,'id'=>$task->id]);
    }
    public function delete($id){
        $task =Task::find($id);
        if(!$task){
            return   response()->json(['isDeleted' => false]);
        }
        else{
            $result =$task->delete();
            return   response()->json(['isDeleted' => $result]);
        }
    }
    public function update(Request $request,$id){
        $task =Task::find($id);
        if(!$task){
            return   response()->json(['isUpdated' => false]);
        }
        else{
            $task->name=$request->name;
            $task->desc=$request->desc;
            $task->date=$request->date;
            $task->time=$request->time;
            $result=$task->save();
            return   response()->json(['isUpdated' => $result]);
        }
    }
    public function setStat($id){
        $task =Task::find($id);
        if(!$task){
            return   response()->json(['isUpdated' => false]);
        }
        else{
            $task->state=!$task->state;
            $result=$task->save();
            return   response()->json(['isUpdated' => $result]);
        }
    }
}