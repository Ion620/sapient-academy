<?php

namespace App\Http\Controllers\lessonThree;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResourceController extends Controller
{

    public function index()
    {
        return view('lesson3.book');
    }


    public function store(Request $request)
    {
        return response()->json($request->all());
    }


    public function show($id)
    {
        //
    }

}
