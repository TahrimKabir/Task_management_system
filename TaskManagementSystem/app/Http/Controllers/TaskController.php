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
    $data = array(
        "name"=>$req->name,
    );
    
    Task::create($req->except(['_token']));
    return redirect()->back();
   }
}
