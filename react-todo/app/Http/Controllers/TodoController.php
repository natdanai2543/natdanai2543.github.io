<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//import model to file
use App\Models\Todo as todo;

class TodoController extends Controller
{
    public function index() {
        //do something
        //get data from database
        $todo_data = todo::get();
        //dd($todo_data, $todo_data->toarray());
        //return view with data
        return view('todo', ['data' => $todo_data->toarray() ]);
    }
    public function create(){
        return view('todocreate');
    }
    public function store(Request $req){
        //store data from $req to database
        $todo = new Todo;
        $todo->name = $req->todoname;
        $todo->status = 0;
        //....
        $todo->save();
        
        return redirect('/');
    }
    public function edit($id){
        //dd($id);
        $todo = Todo::find($id);        
        return view('todoedit', ['data' => $todo->toarray()]);
    }
    public function update(Request $req){
        $id = $req->id;
        $todo_db = Todo::find($id);
        $status_value = $req->status ? 1 : 0;        
        //dd($status_value);
        $todo_db->update(['name' => $req->todoname, 'status' => $status_value]);
        
        return redirect('/');
    }
    public function delete(Request $req){
        $todo = Todo::find($req->id);
        $todo->delete();

        return redirect('/');
    }
}