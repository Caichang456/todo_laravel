<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Todo;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    public function getTodos(){
        $todos = Todo::where('user_id', Auth::user()->id)->paginate(10);

        return response([
            'status' => true,
            'message' => 'Return All Todos',
            'data' => $todos
        ]);
    }

    public function getTodo($id){
        $todo = Todo::where('user_id', Auth::user()->id)->where('id', $id)->first();

        return response([
            'status' => true,
            'message' => 'Return Single Todo',
            'data' => $todo
        ]);
    }


    public function createTodo(Request $request){
        $todoValidated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'status' => 'required'
        ]);

        $todo = Todo::create([
            'title' => $todoValidated['title'],
            'description' => $todoValidated['description'],
            'status' => $todoValidated['status'],
            'user_id' => Auth::user()->id
        ]);

        return response([
            'status' => true,
            'message' => 'Return Create Todo Data',
            'data' => $todo
        ]);
    }


    public function updateTodo(Request $request, $id){
        $todoValidated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'status' => 'required'
        ]);

        Todo::where('id', $id)->update([
            'title' => $todoValidated['title'],
            'description' => $todoValidated['description'],
            'status' => $todoValidated['status'],
            'user_id' => Auth::user()->id
        ]);
        $todo = Todo::find($id);

        return response([
            'status' => true,
            'message' => 'Return Update Todo Data',
            'data' => $todo
        ]);
    }

    public function deleteTodo($id){
        Todo::where('id', $id)->where('user_id', Auth::user()->id)->delete();

        return response([
            'status' => true,
            'message' => 'Your record is successfully deleted.'
        ]);
    }

    public function getStatus($x){
        $todo = Todo::where('user_id', Auth::user()->id)->where('status', $x)->paginate(10);

        return response([
            'status' => true,
            'message' => 'Return Status Todo',
            'data' => $todo
        ]);
    }
}
