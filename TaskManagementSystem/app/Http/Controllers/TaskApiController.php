<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;
class TaskApiController extends Controller
{


public function store(Request $req)
{
    $data=array("name"=>$req->name,"deadline"=>$req->deadline);
    $task=Task::create($data);
    $data['task_id']=$task->id;
    return response()->json($data);
}
public function check_status($id){
    $task = Task::where('id',$id)->first();
    return response()->json($task);
    }

public function update_status(Request $req){
        $data=array("status"=>$req->status);
        $task = Task::where('id',$req->id)->update($data);
        return response()->json(["success"=>"successfully updated"]);
        }
}
