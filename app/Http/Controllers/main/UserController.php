<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{

    public function index()
    {
        return view('components.modules.users.index');
    }

    public function create()
    {
        return view('components.modules.users.add');
    }

    public function edit()
    {
        return view('components.modules.users.edit');
    }

}
