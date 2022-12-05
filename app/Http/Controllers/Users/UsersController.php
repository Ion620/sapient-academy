<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\User as Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = Users::query()->get();
        return view('lesson4.users_info', compact('users'));
    }

    public function show($id)
    {
        $user = Users::query()->findOrFail($id);
        return view('lesson4.user', compact('user'));
    }
}
