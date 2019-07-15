<?php

namespace App\Http\Controllers\BackEnd\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function getIndex()
    {
        $users = User::where('role', 2)->paginate(5);
        return view('backend.pages.users.index', compact('users'));
    }
}
