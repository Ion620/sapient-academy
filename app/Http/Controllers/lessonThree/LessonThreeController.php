<?php

namespace App\Http\Controllers\lessonThree;
use App\Http\Controllers\Controller;
use App\Models\User as Users;
use Illuminate\Http\Request;

class LessonThreeController extends Controller
{

    public function index($id)
    {
        return view('lesson3.lesson_three', ['id' => $id]);
    }

    public function store(Request $request)
    {
        $name = $request->get('name');
        $email = $request->get('email');
        return response()->json(['name' => $name, 'email' => $email]);
    }
}
