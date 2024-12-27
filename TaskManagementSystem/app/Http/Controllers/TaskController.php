<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
   public function index(){
    return view('add_task');
   }

   public function store(Request $req){
    Task::create($req->except(['_token']));
    return redirect()->back();
   }

   public function edit($id){
   $task = Task::where('id',$id)->first();
   return view('edit-task',compact('task'));
   }

   public function update(Request $req){  
    Task::where('id',$req->user_id)->update($req->except(['_token']));
    return redirect()->back();
   }
   public function delete($id){
    Task::where('id',$id)->delete();
    return redirect()->back();
   }
}
