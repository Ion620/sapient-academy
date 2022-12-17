<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $tasks = $request->session()->get('tasks');
        return view('lesson8.to_do_list', compact('tasks'));
    }

    public function store(Request $request)
    {
        $task = $request->get('task');
        $request->session()->push('tasks', [$task, false]);

        return redirect()->route('index');
    }

    public function done(Request $request, $key)
    {
        $task = $request->session()->get('tasks.'.$key);
        if ($task[1] == true) {
            $request->session()->put('tasks.' . $key, [$task[0], false]);
        }
        return redirect()->route('index');
    }

    public function notDone(Request $request, $key){
        $task = $request->session()->get('tasks.'.$key);
        if ($task[1] == false) {
            $request->session()->put('tasks.' . $key, [$task[0], true]);
        }
        return redirect()->route('index');
    }

    public function delete(Request $request, $key)
    {
        $request->session()->forget('tasks.'.$key);
        return redirect()->route('index');
    }

    public function invalidate(Request $request)
    {
        $request->session()->invalidate();
        return redirect()->route('index');
    }
}
