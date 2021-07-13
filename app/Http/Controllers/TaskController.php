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
        if(!$data){
        return   response()->json(['data' => null , 'isEmpty' => true]);
        }
        else{
            return   response()->json(['data' => $data , 'isEmpty' => false]);
        }
    }
    public function fetchDoneTasks(){
        $data = Task::where('stat','=',1)->get();
        if(!$data){
            return   response()->json(['data' => null , 'isEmpty' => false]);
            }
            else{
                return   response()->json(['data' => $data , 'isEmpty' => true]);
            }
    }
    public function addTask(Request $request){
        $task = new Task;
        $task->name=$request->name;
        $result=$task->save();
        return   response()->json(['isAdded' => $result]);
    }
    public function delete($id){
        $task =Task::find($id);
        $result =$task->delete();
        return   response()->json(['isDeleted' => $result]);
    }
    public function update(Request $request,$id){
        $task =Task::find($id);
        $task->name=$request->name;
        $result=$task->save();
        return   response()->json(['isUpdated' => $result]);
    }
    public function setStat($id){
        $task =Task::find($id);
        $task->stat=true;
        $result=$task->save();
        return   response()->json(['isUpdated' => $result]);
    }
}