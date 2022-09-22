<?php

namespace App\Repositories\Api;

use App\Models\Todo;

class TodoRepository{
	function getTodos(){
		return Todo::get();
	}

	function getTodo($id){
		return Todo::find($id);
	}

	function createTodo($todoValidated){
		return Todo::create($todoValidated);
	}

	function updateTodo($todoValidated, $id){
		return Todo::where('id', $id)->update($todoValidated);
	}

	function deleteTodo($id){
		return Todo::where('id', $id)->delete();
	}
}