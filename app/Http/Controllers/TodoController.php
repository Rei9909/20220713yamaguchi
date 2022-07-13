<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function index() {
        $items = DB::select('select * from contacts');
        return view('index', ['items' => $items]);
    }
    public function add()
    {
        return view('/todo/create');
    }
    public function create(Request $request)
    {
        $param = [
            'created_at' => $request->created_at,
            'content' => $request->content,
        ];
        DB::insert('insert into contacts (created_at, content, ) values (:created_at, :content)', $param);
        return redirect('/');
    }
    public function edit(Request $request)
    {
        $param = ['content' => $request->content];
        $item = DB::select('select * from contacts where  = :content', $param);
        return view('/todo/update', ['form' => $item[0]]);
    }
    public function update(Request $request)
    {
        $param = [
            'created_at' => $request->created_at,
            'content' => $request->content,
        ];
        DB::update('update contacts set created_at =:created_at, content =:content', $param);
        return redirect('/todo/update');
    }
    public function delete(Request $request)
    {
        $param = ['content' => $request->content];
        $item = DB::select('select * from contacts where content = :content', $param);
        return view('/todo/delete', ['form' => $item[0]]);
    }
    public function remove(Request $request)
    {
        $param = ['content' => $request->content];
        DB::delete('delete from contacts where content =:content', $param);
        return redirect('/');
    }
}
