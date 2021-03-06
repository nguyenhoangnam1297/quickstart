<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class TaskController extends Controller
{
    public function __construct()
    {
        $this -> middleware('web');
    }
    public function task()
    {
        $count = Task::count();
        $tasks = Task::orderby('created_at', 'desc')->get();

        return view('task', compact('tasks', 'count'));
    }
    public function postTask(Request $rq)
    {
        $rule = [
        'name' => 'required|max:255'];
        $msg = ['name.required' => "Trường này không được trống"];
        $val = Validator::make($rq->all(), $rule, $msg);

        if ($val->fails()) {
            return redirect()->back()->withErrors($val)->withInput();
        }
        $task = new Task();
        $task->name = $rq['name'];
        $task->save();

        return redirect()->route('task');
    }
    public function deleteTask($id)
    {
        $task = Task::where('id', $id)->delete();

        return redirect()->route('task');
    }
    public function postLang(Request $rq)
    {
        //$rq->Session()->set('locale', $rq->locale);
        session(['locale'=> $rq->locale]);
        return redirect()->back();
    }
}
