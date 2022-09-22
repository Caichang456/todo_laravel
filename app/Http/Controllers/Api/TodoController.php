<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Api\TodoRepository;

class TodoController extends Controller
{
    protected $todo;

    function __construct(){
        $this->todo = new TodoRepository();
    }

    public function getTodos(){
        $todos = $this->todo->getTodos();

        return response([
            'status' => true,
            'message' => 'Return All Todos',
            'data' => $todos
        ]);
    }

    public function getTodo($id){
        $todo = $this->todo->getTodo($id);

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
        ]);

        $todo = $this->todo->createTodo($todoValidated);

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
        ]);

        $this->todo->updateTodo($todoValidated, $id);
        $todo = $this->todo->getTodo($id);

        return response([
            'status' => true,
            'message' => 'Return Update Todo Data',
            'data' => $todo
        ]);
    }

    public function deleteTodo($id){
        $this->todo->deleteTodo($id);

        return response([
            'status' => true,
            'message' => 'Your record is successfully deleted.'
        ]);
    }
}
