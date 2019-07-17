<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    //
    function index(){
        $todos = Todo::all();
        
        return view('todo.index',[
            'todos' => $todos
        ]);
    }

    function update(Request $request){//存入資料庫
        // $todo = new Todo();
        // $todo->title = $request->title;
        // $todo->save();

        $validated = $request->validate([ //對輸入的資料做驗證
            'title' => 'required|min:3'// 必須輸入且最少三個字元
        ]);

        $todo = Todo::create($validated);
        return redirect('/todo');
    }

    function destory(Request $request,Todo $todo){
        $todo->delete();
        return redirect('todo');
    }


}
