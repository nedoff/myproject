<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreTodolistRequest;

class TodolistController extends Controller
{

    protected $redirect_url;

    function __construct()
    {

        $this->redirect_url =  route('index');

    }


    public function index()
    {

        $list = Todolist::all();
        return view('index', ['list' => $list]);

    }

    public function create(StoreTodolistRequest $request)
    {

        $task = Todolist::create([
            'text' => $request->text,
            'status' => 0,
        ]);

        if(!$task->id){
            return redirect($this->redirect_url)->withErrors('Error!');
        }

        return redirect($this->redirect_url)->with('success', 'Task added "'.$task->text.'" Sucessful!');

    }


    public function delete($id)
    {

        $task = Todolist::find($id);
        $deleted = Todolist::where('id', $id)->delete();

        if($deleted == 1){
            return redirect($this->redirect_url)->with('success', 'Task "'.$task->text.'" removed Sucessful!');
        }

        return redirect($this->redirect_url)->withErrors('Error!');

    }


    public function done($id)
    {

        $done = Todolist::where('id', $id)->update(['status' => 1]);
        $task = Todolist::find($id);
        if($done == 1){
            return redirect($this->redirect_url)->with('success', 'Task "'.$task->text.'" done Successful!');
        }

        return redirect($this->redirect_url)->withErrors('Done Error!');

    }


    public function undone($id)
    {

        $undone = Todolist::where('id', $id)->update(['status' => 0]);
        $task = Todolist::find($id);
        if($undone == 1){
            return redirect(route('index'))->with('success', 'Task "'.$task->text.'" undone Successful!');
        }

        return redirect(route('index'))->withErrors('Undone Error!');

    }

}
