<?php

namespace App\Http\Controllers\lessonFive;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ValidatorController extends Controller
{
    public function store(Request $request)
    {
        Validator::validate($request->only(['avatar']),[
            'avatar' => 'image|mimes:jpg',
        ]);
        return response()->json($request->all());
    }
}
