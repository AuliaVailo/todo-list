<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index() {
        $todos = Todo::all();
        $action = route('add');
        return view('home', compact('todos', 'action'));
    }

    public function edit($id) {
        $todo = Todo::findOrFail($id);
        $todos = Todo::all();
        $action =  route('update', ['id' => $id]);
        return view('home', compact('todo', 'todos', 'action'));
    }

    public function addTodo(Request $request) {
        $todo = new Todo();
        $todo->todo = $request->todo;
        $todo->save();

        return redirect(route('home'));
    }

    public function updateTodo(Request $request, $id) {
        $todo = Todo::findOrFail($id);
        $todo->todo = $request->todo;
        $todo->save();

        return redirect(route('home'));
    }

    public function deleteTodo($id) {
        $todo = Todo::findOrFail($id);
        $todo->delete();

        return redirect(route('home'));
    }


}
