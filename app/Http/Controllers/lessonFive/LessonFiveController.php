<?php

namespace App\Http\Controllers\LessonFive;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserCreateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LessonFiveController extends Controller
{
    public function index()
    {
        return view('lesson5.form_custom_request');
    }

    public function store(UserCreateRequest $request)
    {
        return $request->perform();
    }


}
